'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var babel = require('gulp-babel');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sassify', function() {
    return gulp.src('./src/sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./src/css'))
});

gulp.task('babelify', function() {
    return gulp.src('./src/app/app.js')
        .pipe(sourcemaps.init())
        .pipe(babel({presets: ['latest']}))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./src/applied'));
})

gulp.task('sass:watch', function () {
  gulp.watch('./src/sass/**/*.scss', ['sassify']);
});
