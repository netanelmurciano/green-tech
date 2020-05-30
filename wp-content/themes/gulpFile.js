"use strict";

// Load plugins
const themeLocation = './boomba-theme/';
const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cssnano = require("cssnano");
const sourcemaps = require('gulp-sourcemaps');
const gulp = require("gulp");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const sass = require("gulp-sass");


// BrowserSync
function browserSync(done) {
    browsersync.init({
        notify: false,
        proxy: 'http://green-tech-ac.boombagames.co.il/',
        //proxy: 'http://localhost/gs-local',
        ghostMode: false,
        reloadDelay: 1000
    });
    done();
}

// CSS task
/*function css() {
    return gulp
        .src(themeLocation + 'src/scss/!**!/!*.scss')
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        //.pipe(gulp.dest(themeLocation + 'dist'))
        .pipe(rename({ suffix: ".min" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest(themeLocation + 'dist/style'))
        .pipe(browsersync.stream());
}*/

function css() {
    return gulp
        .src(themeLocation + 'src/scss/style.scss')
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(rename({ suffix: ".min" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(themeLocation))
        .pipe(browsersync.stream());
}


// Watch files
function watchFiles() {
    css();
    gulp.watch(themeLocation + 'src/scss/**/*.scss', css);
    gulp.watch(themeLocation + "*.php").on('change', browsersync.reload);
    // gulp.watch("./assets/js/**/*", gulp.series(scriptsLint, scripts));
    gulp.watch(
        [
            "./_includes/**/*",
            "./_layouts/**/*",
            "./_pages/**/*",
            "./_posts/**/*",
            "./_projects/**/*"
        ],
    );
}

// define complex tasks
const watch = gulp.parallel(watchFiles, browserSync);

exports.watch = watch;
