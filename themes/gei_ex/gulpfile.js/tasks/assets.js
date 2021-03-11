const config          = require('../config');
if(!config.tasks.assets) {
  return;
};

const gulp            = require('gulp');
const rename          = require('gulp-rename');
const handleErrors    = require('../lib/handleErrors');
const path            = require('path');

const assetTask = function() {
  for (let folder in config.tasks.assets) {
    let paths = {
      src: path.join(config.root.src, config.tasks.assets[folder].src.join(',')),
      dest: path.join(config.root.build, config.tasks.assets[folder].dest)
    };
    gulp.src(paths.src)
    .pipe(rename({dirname: ''}))
    .pipe(gulp.dest(path.join(paths.dest)));
  }

};

gulp.task('assets', assetTask);
module.exports = assetTask;
