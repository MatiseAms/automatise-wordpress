const sass = require('node-sass');

module.exports = {
	dev: {
		options: {
			implementation: sass,
			includePaths: ['node_modules/henris'],

			sourceMap: true
		},
		files: {
			'<%= config.themedist.root %>css/app.css': '<%= config.themesrc.root %>scss/app.scss',
			'<%= config.themedist.root %>css/admin.css': '<%= config.themesrc.root %>scss/admin.scss'
		},
	},
	dist: {
		options: {
			implementation: sass,
			includePaths: ['node_modules/henris'],

			sourceMap: false,
			omitSourceMapUrl: true
		},
		files: {
			'<%= config.themedist.root %>css/app.css': '<%= config.themesrc.root %>scss/app.scss',
			'<%= config.themedist.root %>css/admin.css': '<%= config.themesrc.root %>scss/admin.scss'
		},
	}
};
