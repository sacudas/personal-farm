require('require-dir')('./gulp');
//var gulp        = require('gulp');
//var bower       = require('gulp-bower');
//var watch       = require('gulp-watch');
//var notify      = require('gulp-notify');
//var sass        = require('gulp-sass');
//var browserSync = require('browser-sync');
//var reload      = browserSync.reload;
//var sourcemaps = require('gulp-sourcemaps');
//
//var config = {
//	sassPath: './resources/assets/sass',
//	cssPath: './public/css',
//	bowerDir: './bower_components'
//}
//
//// Reload all Browsers
//gulp.task('bs-reload', function () {
//    browserSync.reload();
//});
//
///**
// *	Sass
// **/
//gulp.task('sass', function() {
//	gulp.src(config.sassPath + '/*.scss')
//	.pipe(sass({
//		style: 'compressed',
//		loadPath: [
//			config.sassPath,
//			config.bowerDir + '/bootstrap-sass-official/assets/stylesheets'
//		]
//	}))
//	.pipe(gulp.dest(config.cssPath))
//	.pipe(reload({stream:true}))
//	.on("error", notify.onError(function (error) {
//		return "Error: " + error.message;
//		}));
//});
//
//
///**
// * browser-sync
// **/
//gulp.task('browser-sync', function() {
//	browserSync({
//		proxy: "localhost:8000"
//	});
//});
//
///**
// * bower
// **/
//gulp.task('bower', function() {
//	return bower()
//	.pipe(gulp.dest(config.bowerDir));
//});
//
//gulp.task('default', ['bower', 'sass', 'browser-sync'], function() {
//	gulp.watch(config.sassPath, ['sass'])
//	gulp.watch('resource/views/**/*.php', ['bs-reload'])
//});
