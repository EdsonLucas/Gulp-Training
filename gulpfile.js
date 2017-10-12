var gulp = require('gulp'),
	imagemin = require('gulp-imagemin'),
	clean = require('gulp-clean'),
	concat = require('gulp-concat'),
	htmlReplace = require('gulp-html-replace'),
	compress = require('gulp-uglify'),
	usemin = require('gulp-usemin'),
	cssmin = require('gulp-cssmin'),
	browserSync = require('browser-sync');


gulp.task('default', ['copy'], function() {

	gulp.start('build-img', 'usemin');

	// gulp.start('build-img', 'concat-js', 'replace-html-js');

});


gulp.task('copy', ['clean'], function() {
	
	return gulp.src('app/**/*')
				.pipe(gulp.dest('build-app'));

});	

gulp.task('clean', function() {
	
	return gulp.src('build-app')
				.pipe(clean());

});

gulp.task('build-img', function() {

	gulp.src('build-app/assets/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('build-app/assets/images'));

});	

gulp.task('usemin', function() {

	gulp.src('build-app/view/index.php')
		.pipe(usemin( {
			'js': [compress, clean({force: true})],
			'css': [cssmin, clean({force: true})]
		}))
		.pipe(gulp.dest('build-app'));

});

gulp.task('server', function() {

	browserSync.init({

		server: {
			baseDir: 'app'
		}
			
	});

	gulp.watch('app/**/*').on('change', browserSync.reload);

});

// gulp.task('concat-js', function() {

// 	gulp.src('build-app/assets/js/**/*.js')
// 		.pipe(concat('all.js'))
// 		.pipe(compress())
// 		.pipe(gulp.dest('build-app/assets/js'));

// });

// gulp.task('replace-html-js', function() {

// 	gulp.src('build-app/view/index.php')
// 		.pipe(htmlReplace({
// 			js: 'assets/js/all.js'
// 		}))
// 		.pipe(gulp.dest('build-app/view'));

// });