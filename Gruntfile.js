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
			style: {
				options: {
					style: 'compressed'
				},
				files: {
					'css/style.unprefixed.css': 'scss/style.scss'
				}
			}
		},

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4']
            },
            style: {
                src: 'css/style.unprefixed.css',
                dest: 'css/style.css'
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
                    'images/shapes.svg': ['svg/*.svg']
                }
            }
        },

        rsync: {
            options: {
                args: ["--verbose"],
                exclude: [".git*","style.unprefixed.css","main.js","node_modules","scss","svg","Gruntfile.js","package.json"],
                recursive: true
            },
            dist: {
                options: {
                    src: "./",
                    dest: "../blank-deploy",
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
	grunt.loadNpmTasks( 'grunt-rsync' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );

	grunt.registerTask( 'default', ['watch'] );

};