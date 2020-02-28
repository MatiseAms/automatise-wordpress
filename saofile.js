const superb = require('superb');
const axios = require('axios');
const chalk = require('chalk');

const getSalts = async () => {
	let response = await axios.get('https://api.wordpress.org/secret-key/1.1/salt');
	return response.data;
};


module.exports = {
	async prepare() {
		this.salts = await getSalts()
	},
	templateData() {
		return {
			salts: this.salts
		}
	},
	prompts() {
		return [
			{
				name: 'packageName',
				message: 'Package name (lowercase without whitespace) used for package name, valet and git',
				default: this.outFolder,
				filter: val => val.toLowerCase(),
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
			{
				name: 'name',
				message: 'Project name (Nice name without spaces), used for namespacing classes and files',
				default: this.outFolder,
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
			{
				name: 'description',
				message: 'Project description',
				default: `My ${superb.random()} Matise Wordpress project`
			},
			{
				name: 'mailgun',
				message: 'Mailgun api key',
				default: 'key-undefined'
			},
			{
				name: 'author',
				message: 'Author name',
				type: 'string',
				filter: val => val.toLowerCase(),
				default: this.gitUser.name,
				store: true
			}
		]
	},
	actions: [
		{
			type: 'add',
			files: '**',
			transformExclude:[
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
			]
		},
		{
			type: 'move',
			patterns: {
				'gitignore': '.gitignore',
				'_package.json': 'package.json',
				'_composer.json': 'composer.json',
				'_eslintrc.json': '.eslintrc.json'
			}
		}
	],
	async completed() {
		this.gitInit()

		await this.npmInstall({
			packages: [
				'matise-gryd'
			]
		})
		await this.npmInstall({
			packages: [
				'@babel/preset-env',
				'@babel/core',
				'autoprefixer',
				'babelify',
				'eslint-plugin-prettier',
				'css-byebye',
				'cssnano',
				'grunt',
				'grunt-browserify',
				'grunt-cli',
				'grunt-contrib-clean',
				'grunt-contrib-copy',
				'grunt-contrib-imagemin',
				'grunt-contrib-uglify',
				'grunt-contrib-watch',
				'grunt-csscomb',
				'grunt-csso',
				'grunt-eslint',
				'grunt-jsbeautifier',
				'grunt-newer',
				'grunt-notify',
				'grunt-postcss',
				'grunt-sass',
				'grunt-shell',
				'jit-grunt',
				'load-grunt-config',
				'node-sass',
				'postcss-alias',
				'postcss-assets',
				'postcss-center',
				'postcss-size',
				'postcss-sprites',
				'postcss-svg',
				'postcss-vmin',
				'stylelint',
				'time-grunt'
			],
			saveDev: true
		})

		this.showProjectTips()

		console.log();
		console.log(chalk.bold(`  To get started:\n`));
		console.log(`	- Go to project dir (if not already present)`);
		console.log(`		${chalk.magenta(`cd ${this._answers.packageName}`)}`);
		console.log(`	- Setup valet`);
		console.log(`		${chalk.magenta(`npm run valet`)}`);
		console.log(`	- Start dev`);
		console.log(`		${chalk.magenta(`npm run dev`)}`);
		console.log(`	- Install wordpress`);
		console.log(`	- Activate your theme`);
		console.log(`	- If you have wp cli installed you can use:`);
		console.log(`		${chalk.magenta(`wp theme activate ${this._answers.packageName}`)}`);
		console.log(`	- Start developing!`);
		console.log();
	}
}
