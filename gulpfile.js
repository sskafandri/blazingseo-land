'use strict';



var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create();

var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var cssnano = require('gulp-cssnano');

gulp.task('useref', function(){
    return gulp.src('app/*.html')
        .pipe(useref())
        .pipe(gulpIf('*.js', uglify()))
        // Minifies only if it's a CSS file
        .pipe(gulpIf('*.css', cssnano()))
        .pipe(gulp.dest('dist'))
});

gulp.task('imagemin', function() {
    var imgSrc = 'app/img/*.+(png|jpg|gif)',
        imgDst = 'build/img';

    gulp.src(imgSrc)
        .pipe(changed(imgDst))
        .pipe(imagemin({progressive: true}))
        .pipe(gulp.dest(imgDst));
});



gulp.task('sass', function () {
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});


gulp.task('browserSync', function () {
    browserSync.init({
        server:{
            baseDir: 'app'
        },
        notify: false
    })
});


gulp.task('watch',['browserSync', 'sass'], function () {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
    gulp.watch('app/lib/**/*.css', browserSync.reload);
});

gulp.task('default', ['watch']);