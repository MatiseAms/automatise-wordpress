const superb = require('superb')
const axios = require('axios')
const chalk = require('chalk')

const getSalts = async () => {
	let response = await axios.get('https://api.wordpress.org/secret-key/1.1/salt')
	return response.data
}


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
				name: 'mailgun',
				message: 'Mailgun api key',
				default: 'key-undefined'
			},
			{
				name: 'author',
				message: 'Author name',
				type: 'string',
				default: this.gitUser.name,
				store: true
			},
			{
				name: 'wordpressType',
				message: 'Do you want an API website or WordPress a website?',
				type: 'list',
				choices: ['normal', 'headless'],
				default: 'normal'
			},
			{
				name: 'locomotive',
				message: 'Add locomotive scroll?',
				type: 'list',
				choices: ['yes', 'nope'],
				default: 'yes'
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

		await this.npmInstall({
			packages: [
				'enhanced-resolve',
				'glob',
				'postcss-preset-env',
				'sass-resources-loader',
				'url-loader',
				'copy-webpack-plugin',
				'browser-sync',
				'browser-sync-webpack-plugin',
				'eslint',
				'eslint-loader',
				'matise-gryd',
				'@babel/core',
				'@babel/preset-env',
				'autoprefixer',
				'babel-loader',
				'@babel/plugin-transform-runtime',
				'@babel/runtime',
				'babel-preset-env',
				'babel-eslint',
				'eslint-plugin-only-warn',
				'eslint-plugin-vue',
				'simple-crypto-js',
				'vue',
				'vue-loader',
				'@matise/ui-fields',
				'babelify',
				'clean-webpack-plugin',
				'css-byebye',
				'css-loader',
				'cssnano',
				'eslint-plugin-prettier',
				'extract-text-webpack-plugin',
				'file-loader',
				'mini-css-extract-plugin',
				'node-sass',
				'postcss-alias',
				'postcss-assets',
				'postcss-center',
				'postcss-loader',
				'postcss-sass-loader',
				'postcss-size',
				'postcss-sprites',
				'postcss-svg',
				'postcss-vmin',
				'sass-loader',
				'style-loader',
				'style-resources-loader',
				'stylelint',
				'stylelint-webpack-plugin',
				'webpack',
				'webpack-cli',
				'core-js',
				'locomotive-scroll',
				'gsap',
				'@dogstudio/highway'
			],
			saveDev: true
		})

		this.showProjectTips()

		console.log()
		console.log(chalk.bold('  To get started:\n'))
		console.log('	- Go to project dir (if not already present)')
		console.log(`		${chalk.magenta(`cd ${this._answers.packageName}`)}`)
		console.log('	- Setup valet')
		console.log(`		${chalk.magenta('npm run valet')}`)
		console.log('	- Start dev')
		console.log(`		${chalk.magenta('npm run dev')}`)
		console.log('	- Install wordpress')
		console.log('	- Activate your theme')
		console.log('	- If you have wp cli installed you can use:')
		console.log(`		${chalk.magenta(`wp theme activate ${this._answers.packageName}`)}`)
		console.log('	- Start developing!')
		console.log()
	}
}
