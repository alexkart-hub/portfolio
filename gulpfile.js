var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var cleanCss = require('gulp-clean-css');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var browerSync = require('browser-sync').create();

var config = {
    paths: {
        scss: './public/scss/style.scss',
        scss_all: './public/scss/scss/*.scss',
        a_scss: './public/scss/adaptive_style.scss',
        a_scss_all: './public/scss/adaptive_scss/*.scss',
        html: './public/index.php',
        html_all: './public/template/*.php',
        img: './img/**/*.*'
    },
    output: {
        cssName: 'style.css',
        a_cssName: 'adaptive.css',
        path: './public/css',
        img: './public/img/'
    }
};

gulp.task('sass', function() {
    return gulp.src(config.paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat(config.output.cssName))
        .pipe(autoprefixer())
        .pipe(cleanCss())
        .pipe(gulp.dest(config.output.path))
        .pipe(browerSync.stream());
});

gulp.task('a_sass', function() {
    return gulp.src(config.paths.a_scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat(config.output.a_cssName))
        .pipe(autoprefixer())
        .pipe(cleanCss())
        .pipe(gulp.dest(config.output.path))
        .pipe(browerSync.stream());
});


gulp.task('code', function() {
    return gulp.src(config.paths.html)
        .pipe(browerSync.stream());
});

gulp.task('image', function() {
    return gulp.src(config.paths.img) //Выберем наши картинки
        .pipe(imagemin({ //Сожмем их
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(config.output.img)) //И бросим куда следует
        .pipe(browerSync.stream());
});

gulp.task('serve', function() {
    browerSync.init({
        server: {
            baseDir: config.output.path
        }
    });

    gulp.watch(config.paths.scss_all, gulp.parallel('sass'));
    gulp.watch(config.paths.a_scss_all, gulp.parallel('a_sass'));
    gulp.watch(config.paths.html_all, gulp.parallel('code'));
    gulp.watch(config.paths.img, gulp.parallel('image'));
});

gulp.task('default', gulp.parallel('sass', 'serve'));