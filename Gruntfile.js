module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
		 	compass: {
	    	files: ['scss/**/*.{scss,sass}'],
	    	tasks: ['compass']
	    },
		},
   	compass: {
      options: {
        sassDir: ['scss'],
        cssDir: ['css']
		  }
    },
    styleguide: {
      options: {
        framework: {
          name: 'kss',
          options: {
            'css': 'css/styles.css'
          }
        },
        name: 'VIH Style Guide',
      },
      your_target: {
        options: {
          // task options
        },
        files: {
          // files to process
          'styleguide': 'scss/**/*.{scss,sass}'
        }
      }
    },
  });

  // Load the plugin
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-styleguide');

  // Default task(s).
  grunt.registerTask('default', ['compass', 'watch']);

};