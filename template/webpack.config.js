const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const StylelintPlugin = require('stylelint-webpack-plugin')
const glob = require('glob')
const config = require('./config/latest.js')

const {
	PORT
} = process.env
const entry = glob.sync('**/*.js', {
	cwd: './src/includes/components/acf-blocks'
}).reduce(function(obj, el) {
	obj[path.parse(el).dir] = './includes/components/acf-blocks/' + el
	return obj
}, {})
entry.main = './assets/index.js'
entry.admin = './assets/admin.js'

module.exports = {
	mode: config.mode,
	entry,
	context: path.resolve(__dirname, 'src'),
	output: {
		path: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}/assets`),
		filename: '[name].js',
		publicPath: config.publicPath,
	},
	watchOptions: {
		ignored: [
			'wpconfig/**',
			'node_modules/**',
			'vendor/**',
			'config/**',
			'scripts/**'
		]
	},
	module: {
		rules: [{
				test: /\.js$/,
				exclude: /(node_modules)/,
				use: [{
						loader: 'babel-loader',
						options: {
							presets: [
								[
									'@babel/preset-env',
									{
										targets: {
											esmodules: true,
										},
									}
								]
							],
							comments: false,
							plugins: [
								'@babel/plugin-transform-runtime'
							]
						},
					},
					'eslint-loader'
				]
			},
			<% if (three) { %> 
			{
				test: /\.(glsl|vs|fs|vert|frag)$/,
				exclude: /node_modules/,
				use: [
					'raw-loader',
					'glslify-loader',
				],
			},
			<% } %>
			{
				test: /\.scss$/,
				exclude: /dist/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					{
						loader: 'postcss-loader',
						options: {
							postcssOptions: {
								ident: 'postcss',
								plugins: (loader) => [
									require('postcss-import')({
										root: loader.resourcePath
									}),
									require('postcss-preset-env')(),
									require('cssnano')()
								]
							}
						}
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
							webpackImporter: true
						}
					},
					{
						loader: 'sass-resources-loader',
						options: {
							resources: [
								path.resolve(__dirname, 'src/assets/scss/tools/_index.scss')
							]
						}
					}
				]
			},
			{
				test: /\.(jpe?g|svg|png|gif|ico|eot|ttf|woff2?)(\?v=\d+\.\d+\.\d+)?$/i,
				type: 'asset/resource',
			},
		]
	},
	resolve: {
		modules: [
			'node_modules'
		],
		alias: {
			'Assets': path.resolve(__dirname, 'src/assets'),
			'Tools': path.resolve(__dirname, 'src/assets/scss/tools'),
			'Images': path.resolve(__dirname, 'src/assets/img'),
			'Fonts': path.resolve(__dirname, 'src/assets/fonts')
		},
		extensions: [
			'.sass',
			'.scss',
			'.css',
			'.js',
			'.json'
		]
	},
	plugins: [
		new MiniCssExtractPlugin(),
		new StylelintPlugin({
			configFile: './.stylelintrc.config.js',
			fix: true,
			emitWarning: true,
			emitError: true
		}),
		new CopyWebpackPlugin({
			patterns: [{
					from: '**/*.php',
					to: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}`),
					globOptions: {
						ignore: ['includes/components/acf-blocks/*.js', 'includes/components/acf-blocks/*.css'],
					}
				},
				{
					from: '**/*',
					to: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}/assets/img`),
					context: './assets/img'
				},
				{
					from: '**/*.svg',
					to: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}/includes/svgs`),
					context: './includes/svgs',
					globOptions: {
						ignore: ['generate.php']
					}
				},
				{
					from: '**/*.json',
					to: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}/includes/field-groups`),
					context: './includes/field-groups'
				},
				{
					from: 'style.css',
					to: path.resolve(__dirname, `dist/wp-content/themes/${config.themeName}`),
				}
			]
		}),
		new BrowserSyncPlugin({
			proxy: config.url,
			port: PORT,
			https: true,
			open: false
		})

	]
}
