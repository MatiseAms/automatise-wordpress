const superb = require('superb')
const axios = require('axios')
const chalk = require('chalk')

const getSalts = async () => {
	let response = await axios.get('https://api.wordpress.org/secret-key/1.1/salt')
	return response.data
}

const packages = [
	'enhanced-resolve@5.8.3',
	'glob@7.2.0',
	'postcss-preset-env@6.7.0',
	'sass-resources-loader@2.2.4',
	'url-loader@4.1.1',
	'copy-webpack-plugin@8.1.1',
	'browser-sync@2.27.10',
	'browser-sync-webpack-plugin@2.3.0',
	'eslint@7.32.0',
	'eslint-loader@4.0.2',
	'matise-gryd',
	'@babel/core@7.15.5',
	'@babel/preset-env@7.16.4',
	'autoprefixer@10.3.6',
	'babel-loader@8.2.2',
	'@babel/plugin-transform-runtime@7.15.0',
	'@babel/runtime@7.15.4',
	'babel-eslint@10.1.0',
	'eslint-plugin-only-warn@1.0.3',
	'simple-crypto-js@3.0.0',
	'babelify@10.0.0',
	'clean-webpack-plugin@4.0.0',
	'css-byebye@3.0.0',
	'css-loader@6.3.0',
	'cssnano@5.0.8',
	'eslint-plugin-prettier@4.0.0',
	'file-loader@6.2.0',
	'mini-css-extract-plugin@2.3.0',
	'sass',
	'postcss-alias@2.0.0',
	'postcss-assets@6.0.0',
	'postcss-center@1.1.0',
	'postcss-loader@6.1.1',
	'postcss-sass-loader@1.1.0',
	'postcss-size@4.0.1',
	'postcss-sprites@4.2.1',
	'postcss-svg@2.2.0',
	'postcss-vmin@3.0.0',
	'sass-loader@12.1.0',
	'style-loader@3.3.0',
	'style-resources-loader@1.4.1',
	'stylelint@13.13.1',
	'stylelint-webpack-plugin@3.0.1',
	'webpack@5.56.0',
	'webpack-cli@4.8.0',
	'core-js',
	'gsap',
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
				name: 'author',
				message: 'Author name',
				type: 'string',
				default: this.gitUser.name,
				store: true
			},
			{
				name: 'extension',
				message: 'Will you use Local (.local) or valet(.test)?',
				type: 'list',
				choices: ['local', 'test'],
				default: 'local'
			},
			{
				name: 'wordpressType',
				message: 'Do you want an API website or WordPress a website?',
				type: 'list',
				choices: ['normal', 'headless'],
				default: 'normal'
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
			packages.push(...['@studio-freight/lenis',
				'@swup/body-class-plugin',
				'@swup/js-plugin',
				'@swup/preload-plugin',
				'@swup/progress-plugin',
				'@swup/scripts-plugin',
				'swup'])
		}
		if (this._answers.three == 'true') {
			packages.push(...['glslify', 'glslify-import', 'glslify-loader', 'raw-loader', 'three'])
		}
		await this.npmInstall({
			packages,
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
