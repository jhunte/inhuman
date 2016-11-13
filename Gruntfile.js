module.exports = function(grunt) {
    grunt.initConfig({
        watch: {
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['compass:dist', 'postcss:dist'],
                options: {
                    livereload: true,
                    atBegin: true
                }
            }
        },

        compass: {
            dist: {
                options: {
                    sassDir: 'sass',
                    cssDir: 'css',
                    imagesPath: 'images',
                }
            }
        },

        postcss: {
            options: {
                map: true,

                processors: [
                    require('autoprefixer')({
                        browsers: 'last 2 versions'
                    }),
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        },
    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');

    grunt.task.registerTask('default', ['compass:dist', 'postcss:dist']);

};