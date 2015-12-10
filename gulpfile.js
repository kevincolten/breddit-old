'use strict';

var browserify = require('browserify');
var gulp = require('gulp');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');

gulp.task('bundle', function () {
  return browserify({
    entries: ['./static/js/app.js'],
    debug: true
  }).bundle()
    .pipe(source('bundle.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./public/static/js/'));
});

gulp.task('sass', function () {
  return gulp.src('./static/scss/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['> 5%', 'last 2 versions'],
    }))
    .pipe(minifyCss())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./public/static/css/'));
});

gulp.task('watch', function () {
  gulp.watch('./static/js/**/*.js', ['bundle']);
  gulp.watch('./static/scss/**/*.scss', ['sass']);
});

gulp.task('build', ['bundle', 'sass']);
gulp.task('default', ['build', 'watch']);