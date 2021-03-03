const config        = require('../config');
const del           = require('del');
const gulp          = require('gulp');
const path          = require('path');
const runSequence   = require('run-sequence');

const taskExists = function(taskName) {
  return config.tasks[taskName];
};

const devTask = function(cb) {
  let actions = config.actions.build.filter(taskExists);
  runSequence(
    'clean',
    actions,
    cb);
};

gulp.task('dev', ['watch'], devTask);
module.exports = devTask;
