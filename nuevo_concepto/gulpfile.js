 var gulp = require('gulp'),
  sass = require('gulp-ruby-sass'),
  spritesmith = require('gulp.spritesmith'),
  compass = require('gulp-compass'),
  path = require('path'),
  minifyCss = require('gulp-minify-css'),
  browserSync = require('browser-sync'),
  tinypng = require('gulp-tinypng'),
  autoprefixer = require('gulp-autoprefixer'),
  plumber = require('gulp-plumber'),
  critical = require('critical').stream;

/* npm install gulp.spritesmith */
gulp.task('sprite', function () {
  var spriteData = gulp.src('img/icons-retina/*.png').pipe(spritesmith(
  {
    retinaSrcFilter: ['img/icons-retina/*-2x.png'],
    imgName: 'sprite.png',
    retinaImgName: 'sprite-2x.png',
    cssName: '../sass/_sprite.scss',
    imgPath : '../img/sprite.png',
    retinaImgPath : '../img/sprite-2x.png'
  }))
  spriteData.pipe(gulp.dest('img/'));
});

gulp.task('tinypng', function () {
    gulp.src('img/**/*.png')
        .pipe(tinypng('csIrxlzNbdpnGt8y0enqT0eZvlbv3Aj_'))
        .pipe(gulp.dest('img/'));
});

gulp.task('critical', function () {
    return gulp.src('header.php')
        .pipe(critical({
          base: './', 
          inline: true, 
          minify: true,
          width: 1900,
          height: 1080,
          css: ['./stylesheets/style.css']
        }))
        .pipe(gulp.dest('./index-critical'));
});

/**************************************************************/


gulp.task('browser-sync', function() {
    browserSync.init(["stylesheets/*.css", "js/*.js"], {
        browser: ["google chrome"],
        //browser: ["firefox"],
        // browser: ["firefox","google chrome","safari"],
        proxy: "http://idi.g4adev.net/www/",
        reloadDelay: 3000,
        open: "external",
        ghostMode: {
          clicks: true,
          forms: true,
          scroll: false
        }
    });
});

gulp.task('compass', function() {
   gulp.src('sass/*.scss')
  .pipe(plumber())
  .pipe(compass({
    project: path.join(__dirname, '/'),
    css: 'stylesheets',
    sass: 'sass'
  }))
  //Comentar para no minificar
  .pipe(minifyCss({compatibility: 'ie8'}))
  .pipe(autoprefixer())
  .pipe(gulp.dest('stylesheets'));
});


gulp.task('default', ['browser-sync'], function () {
    gulp.watch("sass/*.scss", ['compass']);
    gulp.watch("*.css").on("change", browserSync.reload);
    gulp.watch("*.php").on("change", browserSync.reload);
    gulp.watch("*.js").on("change", browserSync.reload);
});