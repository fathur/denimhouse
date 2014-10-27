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
				src: 'wp-content/themes/enigma/sass/*.scss',
				dest: 'wp-content/themes/enigma/css/denimhouse.css'
			}
		},


		/**
		 * Autorunt task dan mendeteksi perubahan tanpa harus
		 * mengulangi menjalankan perintah grunt
		 */
		watch: {
			
			sass: {
				files: ['wp-content/themes/enigma/sass/*.scss'],
				tasks: ['sass']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', [
		'sass',
		'watch',
	]);
	
}