module.exports = {
	dist: {
		options: {
			compress: {
				drop_console: true
			},
			sourceMap: false,
			report: 'gzip',
			banner:
				'/*! Created by Matise | https://www.matise.nl | <%= grunt.template.today("yyyy-mm-dd") %> */'
		},
		files: [
			{
				expand: true,
				cwd: '<%= config.themedist.root %>js',
				src: ['*.js', '!*.min.js'],
				dest: '<%= config.themedist.root %>js'
			}
		]
	}
};
