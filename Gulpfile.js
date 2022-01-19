'use strict';

/*
 * Set dependencies
 */
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const babel = require('gulp-babel');

/*
 * Init
 */

const { series, parallel } = require('gulp');

/*
 * Set paths
 */
// Src
const scssSrc = ['assets/src/scss/**/*.scss', '!assets/src/scss/**/_*.scss'];
const jsSrc = ['assets/src/js/**/*.js', '!assets/src/js/**/_*.js'];

// All
const allScss = 'assets/src/scss/**/*.scss';
const allJs = 'assets/src/js/**/*.js';

// Dist
const dist = 'assets/public';
const cssDist = 'assets/public/css';
const jsDist = 'assets/public/js'

/*
 * SCSS
 */
function scss() {
    return gulp
        .src(scssSrc)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({ outputStyle: 'compressed' })
            .on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(cssDist));
}

/*
 * JS
 */
function js() {
    return gulp
        .src(jsSrc)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(babel({ 
            presets: ['@babel/env']
        }))
        .pipe(rename({ extname: '.min.js' }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(jsDist));
}

/*
 * All
 */
function watch() {

    gulp.watch(allScss, scss);

    gulp.watch(allJs, js);
}
/*
 * Define tasks
 */
gulp.task('scss', scss);

gulp.task('js', js);

gulp.task('watch', gulp.series(scss, js, watch));

gulp.task('default', gulp.series(scss));