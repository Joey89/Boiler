/*jshint esversion: 6 */
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	cleanCSS = require('gulp-clean-css'),
	uglify = require('gulp-uglify'),
	livereload = require('gulp-livereload'),
	imagemin = require('gulp-imagemin');

//Sass + live reload use: gulp watch
gulp.task('sass', function() {
  gulp.src('assets/sass/main.scss')
  	.pipe(sass({style: 'expanded'}))
 	.pipe(gulp.dest('assets/css'))
 	.pipe(livereload());
});
//Min Css Files - Might want to relook maybe.
gulp.task('min.css', () => {
	gulp.src('assets/css/**/*.css')
	.pipe(cleanCSS())
	.pipe(gulp.dest('assets/css/min'));
});
// Min Js Files
gulp.task('min.js', () => {
	gulp.src('assets/js/*.js')
	.pipe(uglify())
	.pipe(gulp.dest('assets/js/min'));
});
//Min images
gulp.task('min.image', () => {
	  gulp.src('assets/images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images/min'));
});
//Min ewverything
gulp.task('min.all', ['min.js', 'min.css', 'min.image'],() => {

});

gulp.task('watch', () =>{
	livereload.listen();
	gulp.watch('assets/sass/**/*.scss', ['sass']); 
});


