var gulp = require('gulp'),
  watch = require('gulp-watch'),
  sass = require('gulp-ruby-sass');

var paths = {
  styles: {
    src: 'assets/scss/style.scss',
    dest: './'
  }
};

gulp.task('styles', function() {
  return sass(paths.styles.src)
  .on('error', function(e) {
    console.error('Error! ', e.message);
  })
  .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('watch', function() {
  gulp.watch(paths.styles.src, ['styles']);
});

gulp.task('default', ['watch', 'styles']);
