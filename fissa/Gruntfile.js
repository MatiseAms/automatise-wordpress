var path = require('path');

module.exports = function(
	grunt
) {
	'use strict';

	var projectCfg = grunt.file.readJSON(
			'./grunt/config/project.json'
		),
		mapping = grunt.file.readJSON(
			'./grunt/config/jit-mapping.json'
		);

	var gruntConfig = {
		configPath: path.join(
			process.cwd(),
			'grunt'
		),
		jitGrunt: {
			staticMappings: mapping
		},
		data: {
			config: projectCfg
		}
	};

	require('time-grunt')(
		grunt
	); // Keep track of time
	require('load-grunt-config')(
		grunt,
		gruntConfig
	);
};
