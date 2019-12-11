module.exports = {
	dev: {
		options: {
			map: true,
			verbose: true,
			processors: [
				require('postcss-assets')({
					loadPaths: ['./dist/img/']
				}),
				require('autoprefixer')({
				}),
				// require('postcss-svg')({ paths: ['dist/img/svg/'] }), ERROR!!! (WHEN NO SVG'S ARE IN THE FOLDER)
				require('postcss-size')({})
			]
		},
		src: '<%= config.themedist.root %>assets/css/app.css'
	},
	dist: {
		options: {
			map: false,
			verbose: false,
			processors: [
				require('postcss-assets')({
					loadPaths: ['./dist/img/']
				}),
				require('autoprefixer')({
				}),
				// require('postcss-svg')({ paths: ['dist/img/svg/'] }), ERROR!!! (WHEN NO SVG'S ARE IN THE FOLDER)
				require('postcss-size')({}),
				require('css-byebye')({
					rulesToRemove: [''],
					map: false
				}),
				require('cssnano')() // minify the result
			]
		},
		src: '<%= config.themedist.root %>assets/css/app.css'
	}
};
