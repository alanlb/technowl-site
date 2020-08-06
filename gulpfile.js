const gulp = require('gulp')
const sass = require('gulp-sass')
const watch = require('gulp-watch')

sass.compiler = require('node-sass')

gulp.task('sass', function () {
    return gulp.src('sass/**/*.sass')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('css'))
})

gulp.task('watch', function () {
    gulp.watch('sass/**/*.sass', gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'watch'));
