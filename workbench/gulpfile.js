var gulp = require('gulp');
var watch = require('gulp-watch');
var concat = require('gulp-concat');

var scripts = [
    'collejo-js/dist/*'
];

gulp.task('default', function() {
    return gulp.src(scripts)
        .pipe(concat('collejo.js'))
        .pipe(gulp.dest('./Collejo/resources/assets/js'));
});

gulp.task('watch', function() {
    gulp.watch(scripts, ['default']);
});