var gulp        = require('gulp'),
	runSequence = require('run-sequence').use(gulp),
	browserSync = require('browser-sync'),
	spawn       = require('child_process').spawn,
	config      = require('../gulpConfig.json').server;

gulp.task('serve', function(callback) {
	runSequence(
		['sass'],
		'server.start',
		callback
	);
});

gulp.task('server.start', function() {

	var phpServer = spawn('php', ['-S', config.php, '-t', 'public']);

	var killPhpServer = function() {
		console.log('Server Killed');
		phpServer.kill();
		browserSync.exit();
		process.exit();
	};

    browserSync({
        proxy: config.php,
		files: config.watch
    });
});
