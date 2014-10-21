module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
		 	compass: {
	    	files: ['**/*.{scss,sass}'],
	    	tasks: ['compass']
	    },
	    js: {
				files: ['js/**/*.js'],
				tasks: ['uglify']
			},
		},
   	compass: {
      options: {
        sassDir: ['scss'],
        cssDir: ['css']
		  }
    },
    uglify: {
		  all: {
//			  files: {
//	        	'JS/min/main.min.js': [
//	        	'JS/libs/jquery.js',
//	        	'JS/main.js'
//	        ]
//	    	}
		  },
	  },
  });

  // Load the plugin
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['compass' , 'uglify' , 'watch']);

};