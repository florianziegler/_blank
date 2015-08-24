module.exports = function( grunt ) {

    grunt.initConfig({

        pkg: grunt.file.readJSON( 'package.json' ),

        uglify: {
            build: {
                src: 'js/main.js',
                dest: 'js/main.min.js',
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/blank.css': 'scss/blank.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'],
                map: true
            },
            style: {
                files: {
                    'css/blank.css': 'css/blank.css'
                }
            }
        },

        svgstore: {
            options: {
                //prefix: '',
                cleanup: false,
                svg: {
                    class: 'hidden',
                    style: 'display: none;'
                }
            },
            default: {
                files: {
                    'images/shapes.svg': ['src/svg/*.svg']
                }
            }
        },

        respimg: {
            options: {
                widths: [
                    320,
                    640,
                    1280
                ]
            },
            default: {
                files: [{
                    expand: true,
                    cwd: 'src/images/',
                    src: ['**.{gif,jpg,png,svg}'],
                    dest: 'images/'
                }]
                // Target-specific file lists go here. 
            }
        },

        rsync: {
            options: {
                args: ["--verbose"],
                exclude: [".git*","main.js","node_modules","scss","src","Gruntfile.js","package.json"],
                recursive: true
            },
            dist: {
                options: {
                    src: './',
                    dest: '../_blank-deploy',
                    delete: true
                }
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            php: {
                files: ['*.php'],
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['scss/**/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false,
                }
            },
            svg: {
                files: ['svg/*.svg'],
                tasks: ['svgstore']
            }
        }

    });

    grunt.loadNpmTasks( 'grunt-contrib-uglify' );
    grunt.loadNpmTasks( 'grunt-contrib-sass' );
    grunt.loadNpmTasks( 'grunt-autoprefixer' );
    grunt.loadNpmTasks( 'grunt-svgstore' );
    grunt.loadNpmTasks( 'grunt-respimg' );
    grunt.loadNpmTasks( 'grunt-rsync' );
    grunt.loadNpmTasks( 'grunt-contrib-watch' );

    grunt.registerTask(
        'default',
        [
            'watch'
        ]
    );

    grunt.registerTask(
        'build',
        [
            'uglify',
            'sass',
            'autoprefixer',
            'svgstore',
            'respimg',
            'rsync'
        ]
    );

};