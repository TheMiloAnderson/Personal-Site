var
    gulp    = require('gulp'),
    less    = require('gulp-less'),
    watch   = require('./semantic/tasks/watch'),
    build   = require('./semantic/tasks/build'),
    cleanCSS = require('gulp-clean-css')
;

gulp.task('less', function() {
    return gulp.src('./less/**/*.less')
        .pipe(less())
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css'));
});
gulp.task('watch', function() {
    watch();
    gulp.watch('./less/**/*.less', ['less']);
});
gulp.task('build', build);
gulp.task('build-all', ['less', 'build']);