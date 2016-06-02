var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglifyjs');

gulp.task('default', function() {
    gulp.src('src/**/*.js')
        .pipe(sourcemaps.init())
        .on('error', errHandle)
        .pipe(uglify({
            preserveComments: true
        }).on('error', errHandle))
        .pipe(sourcemaps.write())
        .pipe(sourcemaps.write('maps', {
            addComment: true,
            sourceRoot: '/src'
        }))
        .pipe(gulp.dest('dist'))
});

gulp.task('watch', function() {
    gulp.watch('src/**', ['default']);
});

function errHandle(err) {
    console.log(err.toString());
    this.emit('end');
}