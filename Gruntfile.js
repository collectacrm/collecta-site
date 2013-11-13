module.exports = function(grunt) {

  grunt.initConfig({
    concat: {
      wildfire_js: {
        src: ['vendor/phpwax/wildfire.interface/resources/public/javascripts/wildfire/**/*.js'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/javascripts/wildfire.js',
      },
      wildfire_media_js: {
        src: ['vendor/phpwax/wildfire.media/assets/javascripts/wildfire.media/**/*.js'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/javascripts/wildfire.media.js',
      },
      wildfire_content_js: {
        src: ['vendor/phpwax/wildfire.content/resources/public/javascripts/wildfire-content/**/*.js'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/javascripts/wildfire-content.js',
      },
      wildfire_plugins_js: {
        src: ['vendor/phpwax/wildfire.interface/resources/public/javascripts/wildfire-plugins/**/*.js'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/javascripts/wildfire-plugins.js',
      },
      wildfire_overwrites_js: {
        src: ['public/javascripts/wildfire-overwrites/**/*.js'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/javascripts/wildfire-overwrites.js',
      },
      wildfire_css: {
        src: ['vendor/phpwax/wildfire.interface/resources/public/stylesheets/wildfire/**/*.css'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/stylesheets/wildfire.css',
      },
      wildfiremedia_css: {
        src: ['vendor/phpwax/wildfire.media/assets/stylesheets/wildfire.media/**/*.css'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/stylesheets/wildfire.media.css',
      },
      wildfire_overwrites_css: {
        src: ['public/stylesheets/wildfire-overwrites/**/*.css'],
        dest: 'public/build/<%= gitinfo.local.branch.current.shortSHA %>/stylesheets/wildfire-overwrites.css',
      }
    },
    gitinfo: {},
    clean: ["public/build"]
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-gitinfo');
  grunt.loadNpmTasks('grunt-contrib-clean');


  grunt.registerTask('default', ['clean','gitinfo','concat']);
}
