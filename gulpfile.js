var gulp = require('gulp'),
    sass = require('gulp-sass'),
    notify = require("gulp-notify"),
    //livereload = require('gulp-livereload'),
    bower = require('gulp-bower');

var config = {
    sassPath: './assets/styles',
    bowerDir: './bower_components',
    bootstrapDir: './bower_components/bootstrap-sass',
    npmDir: './node_modules',
    materialDir: './bower_components/material-kit/assets/',
    fontDir: './bower_components/font-awesome/fonts/'
};

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest(config.bowerDir))
});

gulp.task('js', function() {
    return gulp.src([
        config.materialDir + '/js/*.js'
    ])
        .pipe(gulp.dest('./dist/js'));
});

gulp.task('css', function() {
    return gulp.src(config.sassPath + '/**/*.scss')
        .pipe(sass({
            style: 'compressed',
            loadPath: [
                './assets/styles',
                config.bootstrapDir + '/assets/stylesheets'
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            })))
        .pipe(gulp.dest('./dist/css'));
        //.pipe(livereload());
});

gulp.task('fonts', function() {
    return gulp.src([
        config.fontDir + '*'
    ])
        .pipe(gulp.dest('./dist/fonts'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {

    //livereload.listen();
    gulp.watch(config.sassPath + '/**/*.scss', ['css']);
});

gulp.task('default', ['bower', 'css', 'js', 'fonts']);