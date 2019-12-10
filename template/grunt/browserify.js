module.exports = {
	options: {
		watch: true,
		transform: [['babelify', { 'presets': ['@babel/preset-env'] }]]
	},
	default: {
		src: [
			'<%= config.themesrc.root %>assets/js/app.js'
		],
		dest: '<%= config.themedist.browserify %>assets/js/app.js'
	}
};
