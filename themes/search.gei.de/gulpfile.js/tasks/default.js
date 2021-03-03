const gulp            = require('gulp');
const runSequence     = require('run-sequence');

const defaultTask = function(cb) {
  runSequence(
    'dev',
    'serve',
    cb);
};

gulp.task('default', defaultTask);
module.exports = defaultTask;
