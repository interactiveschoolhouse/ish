var gulp = require('gulp'),
    less = require('gulp-less'),
    cssmin = require('gulp-cssmin'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');

gulp.task('watch', function () {
    gulp.watch('./css/*.less', ['less']);
});

gulp.task('less', function () {
    gulp.src('./css/site.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(gulp.dest('./css/'))
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./css'))

});

gulp.task('default', ['less', 'watch']);