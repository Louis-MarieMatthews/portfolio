module.exports = function(grunt) {
  
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      sass: {
        dist: {
          options: {
            style: 'compressed'
          },
          files: {
            'style.min.css':['sass/style.scss'],
            'amp-style.min.css':['sass/amp-style.scss'],
          }
        }
      },
      uglify: {
        dist: {
          files: {
            'script.min.js': ['src-js/script.js']
          }
        }
      },
      watch: {
        sass: {
          files: ['sass/*.scss'],
          tasks: ['sass']
        },
        uglify: {
          files: ['src-js/*.js'],
          tasks: ['uglify']
        }
      }
    });
  
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
  
    grunt.registerTask('default', ['sass', 'uglify', 'watch']);
  };