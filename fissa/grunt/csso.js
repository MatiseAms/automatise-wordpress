module.exports = {
	dist: {
		options: {
			report: 'gzip',
			banner: '/* Created by Matise | https://www.matise.nl | <%= grunt.template.today("yyyy-mm-dd") %> */'
		},
		files: [{
			expand: true,
			cwd: '<%= config.themedist.root %>css',
			src: ['*.css', '!*.min.css'],
			dest: '<%= config.themedist.root %>css',
		}]
	}
};
