var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('concat-scripts', function() {
   return gulp.src(['lib/jquery/jquery.min.js',
                    'lib/jquery/jquery-migrate.min.js',
                   'lib/bootstrap/js/bootstrap.bundle.min.js',
                   'lib/easing/easing.min.js',
                   'lib/wow/wow.min.js',
                   'lib/waypoints/waypoints.min.js',
                   'lib/counterup/counterup.min.js',
                   'lib/superfish/hoverIntent.min.js',
                   'lib/superfish/superfish.min.js',
                   'js/main.min.js'])
              .pipe(concat('all.js'))
              .pipe(gulp.dest('./dist/'));
});


gulp.task('concat-styles', function() {
   return gulp.src(['lib/bootstrap/css/bootstrap.min.css',
                    'lib/animate/animate.min.css',
                    'css/style.css'])
              .pipe(concat('all.css'))
              .pipe(gulp.dest('./dist/'));
});