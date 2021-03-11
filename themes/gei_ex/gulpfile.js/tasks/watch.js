const config        = require('../config');
const gulp          = require('gulp');
const path          = require('path');
const watch         = require('gulp-watch');
const browserSync   = require('browser-sync');

const watchTask = function() {
  let actions = config.actions.watch;
  actions.forEach(function(taskName) {
    let task = config.tasks[taskName];
    if(task) {
      let glob = path.join(config.root.src, task.src, '**/*.{' + task.extensions.join(',') + '}')
      watch(glob, function() {
        require('./' + taskName)();
        console.log('[' + new Date().toLocaleTimeString() + ']', 'Change detected, running task ' + taskName);
        browserSync.reload();
      });
    }
  });
  global.isWatching = true;
};

gulp.task('watch', watchTask);
module.exports = watchTask;
