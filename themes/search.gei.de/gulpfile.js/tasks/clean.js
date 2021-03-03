const config        = require('../config');
const del           = require('del');
const gulp          = require('gulp');
const path          = require('path');

const cleanTask = function(cb) {
  let actions = config.actions.clean;
  let promises = [];

  actions.forEach(function(taskName) {
    let task = config.tasks[taskName];
    if(task) {
      let glob = path.join(config.root.build, task.dest);
      let promise = del(glob).then(function (glob) {
          console.log('[' + new Date().toLocaleTimeString() + ']', 'Cleaned ' + taskName + ' directory');
        });
      promises.push(promise);
    }
  });

  Promise.all(promises).then(function() {
    cb();
  });
};

gulp.task('clean', cleanTask);
module.exports = cleanTask;
