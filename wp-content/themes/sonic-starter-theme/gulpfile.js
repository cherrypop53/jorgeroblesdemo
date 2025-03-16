const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const paths = {
    scss: {
        src: 'scss/styles.scss',
        watch: 'scss/**/*.scss',
        dest: 'scss/'
    },
    js: {
        src: 'blocks/js/**/*.js',
        dest: 'dist/'
    }
};

function compileSass() {
    return gulp.src(paths.scss.src)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([tailwindcss(), autoprefixer()]))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scss.dest))
        .pipe(browserSync.stream());
}

function compileJs() {
    return gulp.src(paths.js.src, { sourcemaps: true })
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js.dest))
        .pipe(browserSync.stream());
}

function watchFiles() {
    browserSync.init({
        proxy: "https://jorgedev.test:8890",
        https: true,
        notify: false,
        open: true
    });

    gulp.watch(paths.scss.watch, compileSass);
    gulp.watch(paths.js.src, compileJs);
    gulp.watch("**/*.php").on('change', browserSync.reload);
}

exports.default = gulp.series(
    gulp.parallel(compileSass, compileJs),
    watchFiles
);