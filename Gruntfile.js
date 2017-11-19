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
          }
        }
      },
      watch: {
        sass: {
          files: ['sass/*.scss'],
          tasks: ['sass']
        }
      }
    });
  
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');    
  
    grunt.registerTask('default', ['sass']);
  };