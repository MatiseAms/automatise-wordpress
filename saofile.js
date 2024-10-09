const superb = require('superb')
const axios = require('axios')
const chalk = require('chalk')

const getSalts = async () => {
	let response = await axios.get('https://api.wordpress.org/secret-key/1.1/salt')
	return response.data
}

const packages = [
	'@babel/core',
	'@babel/plugin-transform-runtime',
	'@babel/preset-env',
	'@babel/runtime',
	'autoprefixer',
	'babel-eslint',
	'babel-loader',
	'babelify',
	'browser-sync',
	'browser-sync-webpack-plugin',
	'clean-webpack-plugin',
	'copy-webpack-plugin',
	'core-js',
	'css-byebye',
	'css-loader',
	'cssnano',
	'enhanced-resolve',
	'eslint',
	'eslint-loader',
	'eslint-plugin-only-warn',
	'eslint-plugin-prettier@^4.0.0',
	'file-loader',
	'glob',
	'gsap',
	'matise-gryd',
	'mini-css-extract-plugin',
	'postcss-alias',
	'postcss-assets',
	'postcss-center',
	'postcss-loader',
	'postcss-preset-env',
	'postcss-sass-loader',
	'postcss-size',
	'postcss-sprites',
	'postcss-svg',
	'postcss-vmin',
	'sass',
	'sass-loader',
	'sass-resources-loader',
	'simple-crypto-js',
	'style-loader',
	'style-resources-loader',
	'stylelint',
	'stylelint-webpack-plugin',
	'url-loader',
	'webpack',
	'webpack-cli',
]


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
				message: 'Package name (lowercase without whitespace) used for package name, local and git',
				default: this.outFolder,
				filter: val => val.toLowerCase(),
				validate: function (value) {
					const invalid = value.match(
						/[A-Z]|\s|[^a-zA-Z0-9_-]/
					)
					if (invalid) {
						return 'Please enter a valid name without uppercase, whitespaces, or symbols'
					}

					return true
				}
			},
			{
				name: 'name',
				message: 'Project name (Nice name without spaces), used for namespacing classes and files',
				default: this.outFolder,
				validate: function (value) {
					var invalid = value.toLowerCase().match(
						/[A-Z]|\s|\W/
					)
					if (invalid) {
						return 'Please enter a name without whitespaces'
					}
					return true
				}
			},
			{
				name: 'description',
				message: 'Project description',
				default: `My ${superb.random()} Automatise Wordpress project`
			},
			{
				name: 'author',
				message: 'Author name',
				type: 'string',
				default: this.gitUser.name,
				store: true
			},
			{
				name: 'smoothscroll',
				message: 'Add smooth scroll with Lenis?',
				type: 'list',
				choices: ['true', 'false'],
				default: 'true'
			},
			{
				name: 'three',
				message: 'Add three js packages and webpack configuration?',
				type: 'list',
				choices: ['true', 'false'],
				default: 'true'
			}
		]
	},
	actions: [
		{
			type: 'add',
			files: '**'
		},
		{
			type: 'move',
			patterns: {
				'gitignore': '.gitignore',
				'_package.json': 'package.json',
				'_composer.json': 'composer.json',
				'_eslintrc.json': '.eslintrc.json',
				'_stylelintrc.config.js': '.stylelintrc.config.js'
			}
		}
	],
	async completed() {
		this.gitInit()
		if (this._answers.smoothscroll == 'true') {
			packages.push(...[
				'lenis',
				'@swup/body-class-plugin',
				'@swup/js-plugin',
				'@swup/preload-plugin',
				'@swup/progress-plugin',
				'@swup/scripts-plugin',
				'swup'
			])
		}
		if (this._answers.three == 'true') {
			packages.push(...[
				'glslify',
				'glslify-import',
				'glslify-loader',
				'raw-loader',
				'three'
			])
		}
		await this.npmInstall({
			packages,
			saveDev: true
		})

		this.showProjectTips()

		console.log()
		console.log(chalk.bold('  To get started:\n'))
		console.log('	- Go to project dir (if not already present)')
		console.log(`		${chalk.hex('#ff69b4')(`cd ${this._answers.packageName}`)}`)

		console.log('	- Setup for Local or create a dist folder in the root by hand')
		console.log(`		${chalk.hex('#ff69b4')('npm run setup')}`)
		console.log('	- Install ' + chalk.bold('Local') + ' by Flywheel -> https://localwp.com/')
		console.log('	- Create a new site with the name you entered ("' + chalk.hex('#ff69b4').bold(this._answers.packageName) + '")')
		console.log('	- Open advanced options and link to the dist folder')
		console.log('	- Start dev')
		console.log(`		${chalk.hex('#ff69b4')('npm run dev')}`)
		console.log('	- Install wordpress')
		console.log('	- Activate your theme')
		console.log('	- If you have wp cli installed you can use:')
		console.log(`		${chalk.hex('#ff69b4')(`wp theme activate ${this._answers.packageName}`)}`)
		console.log('	- Start developing!')
		console.log()
	}
}
