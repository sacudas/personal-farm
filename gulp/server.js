var gulp        = require('gulp'),
	runSequence = require('run-sequence').use(gulp);

gulp.task('serve', function(callback) {
	runSequence(
		['sass'],
		callback
	);
});
