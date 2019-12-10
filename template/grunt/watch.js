module.exports = {
	options: {
		spawn: false
	},
	theme: {
		files: [
			'<%= config.themesrc.root %>**/*',
			'!<%= config.themesrc.root %>**/*.js',
			'!<%= config.themesrc.root %>**/*.php',
			'!<%= config.themesrc.root %>assets/scss/**/*',
			'!<%= config.themesrc.root %>assets/fonts/*',
			'!<%= config.themesrc.root %>assets/img/*'
		],
		tasks: ['copy:theme']
	},
	scss: {
		files: '<%= config.themesrc.root %>assets/scss/**/*',
		tasks: ['sass:dev', 'postcss:dev']
	},
	images: {
		files: '<%= config.themesrc.root %>assets/img/**/*',
		tasks: ['copy:images']
	},
	fonts: {
		files: '<%= config.themesrc.root %>assets/fonts/*',
		tasks: ['copy:fonts']
	},
	php: {
		files: [
			'<%= config.themesrc.root %>**/*.php'
		],
		tasks: ['copy:php']
	},
	js: {
		files: [
			'<%= config.themedist.browserify %>assets/js/app.js'
		],
		tasks: ['copy:js']
	}
};
