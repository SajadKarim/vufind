const config          = require('../config');
if(!config.tasks.css) {
  return;
};

const autoprefixer    = require('gulp-autoprefixer');
const cached          = require('gulp-cached');
const debug           = require('gulp-debug');
const filter          = require('gulp-filter');
const gulp            = require('gulp');
const gulpif          = require('gulp-if');
const handleErrors    = require('../lib/handleErrors');
const path            = require('path');
const sass            = require('gulp-sass');
const sassInheritance = require('gulp-sass-inheritance');

const paths = {
  src: path.join(config.root.src, config.tasks.css.src, (config.tasks.css.extensions.length > 1 ? '**/*.{' + config.tasks.css.extensions.join(',') + '}' : '**/*.' + config.tasks.css.extensions[0])),
  top: path.join(config.root.src, config.tasks.css.src),
  dest: path.join(config.root.build, config.tasks.css.dest)
};

const cssTask = function() {
  return gulp.src(paths.src)
  .pipe(gulpif(global.isWatching, cached('sass')))
  .pipe(sassInheritance({
    dir: paths.top
  }))
  .pipe(filter(function (file) {
    return !/\/_/.test(file.path) || !/^_/.test(file.relative);
  }))
  .pipe(debug({
    title: 'CSS:'
  }))
  .pipe(sass(config.tasks.css.sass))
  .on('error', handleErrors)
  .pipe(autoprefixer(config.tasks.css.autoprefixer))
  .pipe(gulp.dest(paths.dest));
};

gulp.task('css', cssTask);
module.exports = cssTask;
