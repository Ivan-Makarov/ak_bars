const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCss = require('gulp-clean-css');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const htmlmin = require('gulp-htmlmin');
const browsersync = require('browser-sync');
const imagemin = require('gulp-imagemin');
const gutil = require( 'gulp-util' );
const ftp = require( 'vinyl-ftp' );
const replace = require('gulp-replace');
const gulpSequence = require('gulp-sequence');
// PostCSS with plugins
const postCss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const mqpacker = require('css-mqpacker');
// FTP config
const ftpconfig = require('./config.js');


gulp.task('js', () => {
    return gulp.src('./src/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(gulp.dest('./dist/js'))
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./dist/js'))
        .pipe(browsersync.stream())
});

gulp.task('css', () => {
    return gulp.src('./src/sass/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(postCss([
            autoprefixer(),
            mqpacker()
        ]))
        .pipe(gulp.dest('./dist/css'))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(cleanCss())
        .pipe(gulp.dest('./dist/css'))
        .pipe(browsersync.stream())
});

gulp.task('html', () => {
    return gulp.src('./src/**/*.html')
        .pipe(htmlmin({
            collapseWhitespace: true
        }))
        .pipe(gulp.dest('./dist'))
        .pipe(browsersync.stream())
});

gulp.task('php', () => {
    return gulp.src('./src/**/*.php')
    .pipe(gulp.dest('./dist'))
    .pipe(browsersync.stream())
});

gulp.task('img', () => {
    return gulp.src('./src/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img'))
});

gulp.task('sync', () => {
    browsersync.init({
        proxy: 'akbars',
        open: false,
        // browser: ['chrome', 'firefox'],
        notify: false
    })
});

gulp.task('build', ['html', 'css', 'js', 'php', 'img']);

gulp.task('watch', () => {
    gulp.watch(['./src/**/*.scss'], ['css']);
    gulp.watch(['./src/**/*.js'], ['js']);
    gulp.watch(['./src/**/*.html'], ['html']);
    gulp.watch(['./src/**/*.php'], ['php']);
    gulp.watch(['./dist/**/*.php',
                './dist/**/*.html',
                './dist/**/*.css',
                './dist/**/*.js'
                ]).on('change', browsersync.reload);
});

gulp.task('default', ['build', 'sync', 'watch']);

gulp.task('deploy', function() {
    const conn = ftp.create({
        host: ftpconfig.config.host,
        user: ftpconfig.config.user,
        password: ftpconfig.config.password,
        parallel: 3,
        log: gutil.log
    } );

    const globs = [
        './dist/**'
    ];

    return gulp.src(globs, {
            base: './dist',
            buffer: false
        })
        .pipe(conn.newer('/www/akbars.zolotarev-studio.ru/'))
        .pipe(conn.dest('/www/akbars.zolotarev-studio.ru/'));
});
