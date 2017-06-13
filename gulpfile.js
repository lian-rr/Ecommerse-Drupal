/**
 * Created by lian on 12/06/17.
 */

var gulp = require('gulp'),
    sass = require('gulp-sass');

// source and distribution folder
var source = 'themes/custom/ecommerse/scss/',
    dest = 'themes/custom/ecommerse/css/';

// Our scss source folder: .scss files
var scss = {
    in: source + 'style.scss',
    out: dest,
    watch: source,
    sassOpts: {
        outputStyle: 'nested',
        precison: 3,
        errLogToConsole: true

    }
};

// compile scss
gulp.task('sass', function () {
    return gulp.src(scss.in)
        .pipe(sass(scss.sassOpts))
        .pipe(gulp.dest(scss.out));
});

// default task
gulp.task('default', ['sass'], function () {
    gulp.watch(scss.watch, ['sass']);
});