var gulp    = require('gulp'),
    sass    = require('gulp-sass'),
    concat  = require('gulp-concat');

var minifyCss       = require('gulp-minify-css'),
    uglify          = require('gulp-uglify');

var paths = {
    bower: './bower_components',
    assets: './assets'
};

gulp.task('styles', function() {
    return gulp.src([
        paths.assets + '/styles/app.scss'
    ])
        .pipe(sass({
            includePaths: [
                paths.assets + '/styles/app.scss'
            ]
        }))
        .pipe(concat('app.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('./public/css'));
});
gulp.task('scripts', function() {
    return gulp.src([
        paths.bower  + '/jquery/dist/jquery.js',
        paths.bower  + '/bootstrap/dist/js/bootstrap.js',

        paths.assets + '/scripts/app.js'
    ])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./public/js'));
});
gulp.task('watch', function() {
    gulp.watch(paths.assets + '/styles/**/*.scss', ['styles']);
    gulp.watch(paths.assets + '/scripts/**/*.js', ['scripts']);
});
gulp.task('default', ['styles', 'scripts']);