'use strict';

function _interopDefault(ex) {
	return ex && typeof ex === 'object' && 'default' in ex ? ex['default'] : ex;
}

var path = _interopDefault(require('path'));
var majo = _interopDefault(require('majo'));
var match = _interopDefault(require('micromatch'));
var inquirer = _interopDefault(require('inquirer'));
var isBinaryPath = _interopDefault(require('is-binary-path'));
var exists = _interopDefault(require('path-exists'));

// forked from https://github.com/vuejs/vue-cli/blob/master/lib/eval.js

function evalualte(exp, data) {
	/* eslint-disable no-new-func */
	const fn = new Function('data', `with (data) { return ${exp} }`);
	try {
		return fn(data);
	} catch (err) {
		console.error(`Error when evaluating filter condition: ${exp}`);
	}
}

function filterFiles(filters) {
	return ctx => {
		if (!filters) {
			return;
		}

		if (typeof filters === 'function') {
			filters = filters(ctx.meta.merged);
		}

		const fileList = ctx.fileList;
		const data = ctx.meta.merged;

		const excludePatterns = Object.keys(filters).filter(glob => {
			const condition = filters[glob];
			return !evalualte(condition, data);
		});
		const excluded = match(fileList, excludePatterns, { dot: true });
		for (var i = 0, list = excluded; i < list.length; i += 1) {
			const relativePath = list[i];

			ctx.deleteFile(relativePath);
		}
	};
}

function __async(g) {
	return new Promise(function(s, j) {
		function c(a, x) {
			try {
				var r = g[x ? 'throw' : 'next'](a);
			} catch (e) {
				j(e);
				return;
			}
			r.done ? s(r.value) : Promise.resolve(r.value).then(c, d);
		}
		function d(e) {
			c(e, 1);
		}
		c();
	});
}

function getMockedAnswers(mockPrompts, prompts) {
	return __async(
		(function*() {
			const answers = {};

			for (var i = 0, list = prompts; i < list.length; i += 1) {
				const prompt = list[i];

				const { name } = prompt;

				if (Object.hasOwnProperty.call(mockPrompts, prompt.name)) {
					answers[name] = mockPrompts[prompt.name];
				} else if (typeof prompt.default === 'function') {
					const res = prompt.default(answers);
					// eslint-disable-next-line no-await-in-loop
					answers[name] = res.then ? yield res : res;
				} else {
					answers[name] = prompt.default;
				}

				if (prompt.type === 'confirm' && typeof answers[name] === 'undefined') {
					// Since it defaults to true in inquirer.js
					answers[name] = true;
				}

				// Filter
				if (typeof prompt.filter === 'function') {
					const res = prompt.filter(answers[name], answers);
					// eslint-disable-next-line no-await-in-loop
					answers[name] = res.then ? yield res : res;
				}
				// Validation
				if (typeof prompt.validate === 'function') {
					let res = prompt.validate(answers[name], answers);
					// eslint-disable-next-line no-await-in-loop
					res = res.then ? yield res : res;
					if (typeof res === 'string') {
						// eslint-disable-next-line unicorn/prefer-type-error
						throw new Error(`Validation failed at prompt "${name}":\n${res}`);
					} else if (!res) {
						throw new Error(`Validation failed at prompt "${name}"`);
					}
				}
			}

			return answers;
		})()
	);
}

function ask(prompts, mockPrompts) {
	return ctx => {
		if (mockPrompts && prompts) {
			return getMockedAnswers(mockPrompts, prompts).then(answers => {
				ctx.meta = { answers };
			});
		}

		if (prompts) {
			return inquirer.prompt(prompts).then(answers => {
				// prevent from ReferenceErrors
				for (var i = 0, list = prompts; i < list.length; i += 1) {
					const prompt = list[i];

					if (!Object.prototype.hasOwnProperty.call(answers, prompt.name)) {
						answers[prompt.name] = undefined;
					}
				}

				ctx.meta = { answers };
			});
		}
	};
}

const arrify = v => (v ? (Array.isArray(v) ? v : [v]) : []);

var useTemplate = ({
	skipInterpolation,
	template = require('jstransformer-ejs'),
	templateOptions = {}
} = {}) => {
	return ctx => {
		templateOptions =
			typeof templateOptions === 'function' ? templateOptions(ctx.meta) : templateOptions;

		const render = (absolutePath, content, data) => {
			return require('jstransformer')(template).render(
				content,
				Object.assign(
					{
						filename: absolutePath
					},
					templateOptions
				),
				data
			).body;
		};

		let shouldSkip;
		if (skipInterpolation) {
			skipInterpolation = arrify(skipInterpolation);
			shouldSkip = filepath =>
				skipInterpolation.some(condition => {
					if (typeof condition === 'string' || Array.isArray(condition)) {
						const matches = match(ctx.fileList, condition);
						return matches.indexOf(filepath) >= 0;
					}
					if (typeof condition === 'function') {
						return condition(filepath, ctx);
					}
					return false;
				});
		}

		for (var i = 0, list = ctx.fileList; i < list.length; i += 1) {
			const filepath = list[i];

			const content = ctx.fileContents(filepath);

			if (shouldSkip && shouldSkip(filepath, content)) {
				continue;
			}

			// Skip binary files
			if (isBinaryPath(filepath)) {
				continue;
			}

			const absolutePath = ctx.files[filepath].path;
			ctx.writeContents(filepath, render(absolutePath, content, ctx.meta.merged));
		}
	};
};

var skip = function(skipExisting, destPath) {
	return ctx => {
		return Promise.all(
			ctx.fileList.map(name => {
				const location = path.join(destPath, name);
				return exists(location).then(yes => {
					if (yes) {
						ctx.deleteFile(name);
						if (typeof skipExisting === 'function') {
							skipExisting(location, name);
						}
					}
				});
			})
		);
	};
};

var moveFiles = function(move) {
	return ctx => {
		if (typeof move === 'function') {
			move = move(ctx.meta.merged);
		}

		if (!move) {
			return;
		}

		for (const pattern in move) {
			const matches = match.match(ctx.fileList, pattern);
			if (matches.length > 0) {
				const newName = move[pattern];
				if (typeof newName === 'function') {
					for (var i = 0, list = matches; i < list.length; i += 1) {
						const match$$1 = list[i];

						const file = ctx.file(match$$1);
						const fileName = newName(match$$1);
						// eslint-disable-next-line max-depth
						if (fileName) {
							ctx.deleteFile(match$$1);
							ctx.createFile(fileName, file);
						}
					}
				} else if (typeof newName === 'string') {
					const file = ctx.file(matches[0]);
					ctx.deleteFile(matches[0]);
					ctx.createFile(newName, file);
				}
			}
		}
	};
};

var transform = transforms => stream => {
	const globs = Object.keys(transforms);
	return Promise.all(
		globs.map(glob => {
			const handler = transforms[glob];
			const filepaths = match(stream.fileList, glob);
			return Promise.all(
				filepaths.map(filepath => {
					return handler(filepath, stream);
				})
			);
		})
	);
};

function kopy(
	src,
	dest,
	{
		glob = ['**', '!**/node_modules/**'],
		cwd = process.cwd(),
		clean = false,
		// ask options
		data,
		prompts,
		mockPrompts,
		// template options
		disableInterpolation = false,
		skipInterpolation,
		template,
		templateOptions,
		transforms,
		// filter options
		filters,
		// skip existing file
		skipExisting,
		move,
		write = true
	} = {}
) {
	const destPath = path.resolve(cwd, dest);
	const base = path.resolve(cwd, src);

	const stream = majo();

	stream
		.source(glob, { baseDir: base })
		.filter(file => {
			return !/\.DS_Store$/.test(file);
		})
		.use(ask(prompts, mockPrompts))
		.use(async ctx => {
			data = typeof data === 'function' ? await data(ctx.meta && ctx.meta.answers) : data;
			ctx.meta = Object.assign({}, ctx.meta, {
				data,
				merged: Object.assign({}, ctx.meta.answers, data)
			});
		})
		.use(filterFiles(filters))
		.use(moveFiles(move));

	if (!disableInterpolation) {
		stream.use(
			useTemplate({
				skipInterpolation: [
					...arrify(skipInterpolation),
					...(transforms ? Object.keys(transforms) : [])
				],
				template,
				templateOptions
			})
		);
	}

	if (transforms && Object.keys(transforms).length > 0) {
		stream.use(transform(transforms));
	}

	if (skipExisting) {
		stream.use(skip(skipExisting, destPath));
	}

	if (write === false) {
		return stream.process().then(() => stream);
	}

	return stream.dest(destPath, { clean }).then(() => stream);
}

module.exports = kopy;
