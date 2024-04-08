//npm install browser-sync gulp gulp-postcss autoprefixer gulp-sass postcss-pxtorem compass-importer postcss-sprites gulp.spritesmith gulp-concat gulp-minify cssnano postcss-merge-rules postcss-merge-longhand postcss-discard-duplicates postcss-merge-idents postcss-discard-comments gulp-concat-css gulp-combine-mq postcss-uncss uncss postcss-em-media-query gulp-notify gulp-plumber gulp-load-plugins --save-dev
var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();
var requireDir = require('require-dir');
requireDir('./gulp-tasks');

// plugins.sass = require('gulp-sass');
// plugins.postcss = require('gulp-postcss');
// plugins.compass = require('compass-importer');
//
// plugins.autoprefixer = require('autoprefixer');
// plugins.pxtorem = require('postcss-pxtorem');
// plugins.combineMq = require('gulp-combine-mq');
//
// plugins.uncss = require('postcss-uncss');
// plugins.cssnano = require('cssnano');
// plugins.merge_rules = require('postcss-merge-rules');
// plugins.merge_longhand = require('postcss-merge-longhand');
// plugins.merge_idents = require('postcss-merge-idents');
// plugins.discard_duplicates = require('postcss-discard-duplicates');
// plugins.discard_comments = require('postcss-discard-comments');
// plugins.emMediaQuery = require('postcss-em-media-query');
// plugins.concatCss = require('gulp-concat-css');
//
// plugins.spritesmith = require('gulp.spritesmith');
//
// plugins.concat = require('gulp-concat');
// plugins.minify = require('gulp-minify');
// plugins.strip = require('gulp-strip-comments');
// plugins.removeEmptyLines = require('gulp-remove-empty-lines');
//
// plugins.notify = require("gulp-notify");//npm install --save-dev gulp-notify
// plugins.plumber = require('gulp-plumber');//npm install --save-dev gulp-plumber
// plugins.path = require('path');
// plugins.browserSync = require('browser-sync').create();//npm install browser-sync gulp --save-dev
// var reload = plugins.browserSync.reload;
//
// //the title and icon that will be used for the Grunt notifications
// var notifyInfo = {
//     title: 'Moa - Doki',
//     icon: plugins.path.join(__dirname, 'notify.jpg')
// };
// //error notification settings for plumber
// var plumberErrorHandler = { errorHandler: plugins.notify.onError({
//     title: notifyInfo.title,
//     icon: notifyInfo.icon,
//     message: "Error: <%= error.message %>"
// })};
//
// var processors = [
//     plugins.autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'),
//     plugins.pxtorem({
//         replace: false
//     })
// ];



