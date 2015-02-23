var gulp    = require('gulp'),
	config  = require('../gulpConfig.json'),
	notify  = require('gulp-notify'),
	inject  = require('gulp-inject');

var scssTasks = function() {

	var task = 'sass';

	var destination = [
		config.global.directory.temporary,
		'css'
	].join('/');

	var source = [
		config.global.directory.base,
		'assets',
		'sass',
		'*.scss'
	].join('/');

	gulp.task(task, function() {
		gulp.src(source)
		.pipe(gulp.dest(destination))
		.on("error", notify.onError(function (error) {
			return "Error: " + error.message;
		}));
	});

	return task;
}

/**
 *	Sass
 **/
gulp.task('sass', scssTasks);
