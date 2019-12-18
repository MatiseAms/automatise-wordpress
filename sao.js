const superb = require('superb');
const axios = require('axios');

const rootDir = __dirname;

const getSalts = async () => {
	let response = await axios.get('https://api.wordpress.org/secret-key/1.1/salt');
	return response.data;
};

module.exports = {
	prompts: {
		packageName: {
			message: 'Package name (lowercase without whitespace) used for package name, valet and git',
			default: ':folderName:',
			validate: function(value) {
				const invalid = value.match(
					/[A-Z]|\s|\W/
				);
				if (invalid) {
					return 'Please enter a valid name without uppercase, whitespaces, or symbols';
				}

				return true;
			}
		},
		name: {
			message: 'Project name (Nice name without spaces), used for namespacing classes and files',
			default: ':folderName:',
			validate: function(value) {
				var invalid = value.toLowerCase().match(
					/[A-Z]|\s|\W/
				);
				if (invalid) {
					return 'Please enter a name without whitespaces';
				}
				return true;
			}
		},
		description: {
			message: 'Project description',
			default: `My ${superb.random()} Matise Wordpress project`
		},
		mailgun: {
			message: 'Mailgun api key',
			default: 'key-undefined'
		},
		author: {
			message: 'Author name',
			type: 'string',
			default: ':gitUser:',
			store: true
		}
	},
	async data() {
		return {
			salts: await getSalts()
		};
	},
	skipInterpolation: [
		'grunt/browserify.js',
		'grunt/clean.js',
		'grunt/copy.js',
		'grunt/csso.js',
		'grunt/eslint.js',
		'grunt/notify.js',
		'grunt/postcss.js',
		'grunt/sass.js',
		'grunt/uglify.js',
		'grunt/watch.js'
	],
	move() {
		const moveable = {
			gitignore: '.gitignore',
			'_package.json': 'package.json',
			'_composer.json': 'composer.json',
			'_eslintrc.json': '.eslintrc.json'
		};

		return { ...moveable };
	},
	npmInstall: true,
	gitInit: true,
	post({ chalk, isNewFolder, folderName }) {
		const cd = () => {
			if (isNewFolder) {
				console.log(`    ${chalk.cyan('cd')} ${folderName}`);
			}
		};

		console.log();
		console.log(chalk.bold(`  To get started:\n`));
		cd();
		console.log(`    npm run valet`);
		console.log(`    - Setup valet`);
		console.log(`    npm run dev`);
		console.log(`    - Install wordpress`);
		console.log(`    - Activate your theme`);
		console.log(`    - If you have wp cli installed you can use:`);
		console.log(`    wp theme activate ${folderName}`);
		console.log(`    - Start developing!`);
		console.log();
	}
};
