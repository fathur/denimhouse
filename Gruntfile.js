module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/**
		 * Sass styling.
		 * 
		 * @author Fathur Rohman
		 * @source https://www.npmjs.org/package/grunt-contrib-sass
		 */
		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				src: 'mockup/sass/*.scss',
				dest: 'mockup/css/denimhouse.css'
			}
		},


		/**
		 * Autorunt task dan mendeteksi perubahan tanpa harus
		 * mengulangi menjalankan perintah grunt
		 */
		watch: {
			
			sass: {
				files: ['mockup/sass/*.scss'],
				tasks: ['sass']
			},
			all: {
				files: 'mockup/*.html',
				options: {
					livereload: true
				}
			}
		},

		express: {
			all: {
				options: {
					port: 9000,
					hostname: "0.0.0.0",
					bases: ['/media/akung/DataUbuntu/Web/denimhouse/mockup'], 	// Replace with the directory you want the files served from
												// Make sure you don't use `.` or `..` in the path as Express
												// is likely to return 403 Forbidden responses if you do
												// http://stackoverflow.com/questions/14594121/express-res-sendfile-throwing-forbidden-error
					livereload: true
				}
			}
		},

		// grunt-open will open your browser at the project's URL
		open: {
			all: {
				// Gets the port from the connect configuration
				path: 'http://localhost:<%= express.all.options.port%>'
			}
		}
		
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');


	// Load Grunt tasks declared in the package.json file
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	grunt.registerTask('default', [
		'sass',
		'express',
		'open',
		'watch',
	]);
	
}