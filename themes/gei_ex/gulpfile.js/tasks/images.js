const config      = require('../config');
if(!config.tasks.images) {
  return;
};

const changed     = require('gulp-changed');
const gulp        = require('gulp');
const imagemin    = require('gulp-imagemin');
const path        = require('path');

const paths = {
  src: path.join(config.root.src, config.tasks.images.src, (config.tasks.images.extensions.length > 1 ? '**/*.{' + config.tasks.images.extensions.join(',') + '}' : '**/*.' + config.tasks.images.extensions[0])),
  dest: path.join(config.root.build, config.tasks.images.dest)
};

const imagesTask = function() {
  return gulp.src(paths.src)
    .pipe(changed(paths.dest))
    .pipe(imagemin())
    .pipe(gulp.dest(paths.dest))
};

gulp.task('images', imagesTask);
module.exports = imagesTask;
