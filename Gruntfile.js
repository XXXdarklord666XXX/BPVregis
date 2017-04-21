module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: 2
        },
        files: {
          "css/basic.css": "less/basic.less",// destination file and source file
          "css/loops.css": "less/loops.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        files: ['*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};