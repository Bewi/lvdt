'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sassify', function() {
    return gulp.src('./src/sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./src/css'))
});

gulp.task('babelify', function() {
    return browserify(['./src/app/app.jsx'])
        .transform(babelify)
        .bundle()
        .pipe(source('app.js'))
        .pipe(gulp.dest('./src/applied'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./src/sass/**/*.scss', ['sassify']);
});

gulp.task('babel:watch', function() {
    gulp.watch(['./src/**/*.jsx', './src/**/*.js', '!./src/applied/**/*.*'], ['babelify']);
});

gulp.task('watch', ['sassify', 'babelify', 'sass:watch', 'babel:watch']);

