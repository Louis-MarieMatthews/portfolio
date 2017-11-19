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
      }
    });
  
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
  
    grunt.registerTask('default', ['sass']);
  };