const config      = require('../config');
if(!config.tasks.templates) {
  return;
};

const gulp        = require('gulp');
const path        = require('path');

const paths = {
  src: path.join(config.root.src, config.tasks.templates.src, '**/*.{' + config.tasks.templates.extensions.join(',') + '}')
};

const templatesTask = function() {
  return true;
};

gulp.task('templates', templatesTask);
module.exports = templatesTask;
