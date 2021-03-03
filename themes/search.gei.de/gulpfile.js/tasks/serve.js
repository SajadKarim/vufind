const config       = require('../config');
if(!config.tasks.serve) {
  return;
};

const browserSync  = require('browser-sync');
const gulp         = require('gulp');
const path         = require('path');

const serveTask = function() {
  browserSync({
    proxy: config.tasks.serve.proxy,
    notify: false,
    reloadDelay: 50,
    ghostMode: false
  });
};

gulp.task('serve', serveTask);
module.exports = serveTask;
