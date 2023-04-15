import gulp from 'gulp';
import concat from 'gulp-concat';
import sass from 'gulp-sass';
import dartSass from 'sass';
import cleanCSS from 'gulp-clean-css';
import imagemin from 'gulp-imagemin';
import gifsicle from 'imagemin-gifsicle';
import mozjpeg from 'imagemin-mozjpeg';
import optipng from 'imagemin-optipng';
import svgo from 'imagemin-svgo';

const sassFunc = sass(dartSass);

// Concaténer les fichiers JavaScript
gulp.task('scripts', () => {
    return gulp.src('source/js/**/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/js'));
});

// Compiler le SCSS en CSS
gulp.task('styles', () => {
    return gulp.src('source/sass/master.scss')
        .pipe(sassFunc().on('error', sassFunc.logError))
        .pipe(gulp.dest('dist/css'));
});

// Minify CSS
gulp.task('minify-css', () => {
    return gulp.src('dist/css/master.css')
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(gulp.dest('dist/css'));
});

// Optimiser et copier les images
gulp.task('images', () => {
    return gulp.src('source/assets/img/**/*')
        .pipe(imagemin([
            gifsicle({ interlaced: true }),
            mozjpeg({ quality: 75, progressive: true }),
            optipng({ optimizationLevel: 5 }),
            svgo({
                plugins: [
                    { removeViewBox: true },
                    { cleanupIDs: false }
                ]
            })
        ]))
        .pipe(gulp.dest('dist/img'));
});

// Tâche pour surveiller les modifications des fichiers
gulp.task('watch', () => {
    gulp.watch('source/js/**/*.js', gulp.series('scripts'));
    gulp.watch('source/sass/**/*.scss', gulp.series('styles'));
    gulp.watch('source/assets/img/**/*', gulp.series('images'));
    // gulp.watch('dist/css/master.css', gulp.series('minify-css'));
});

// Tâche par défaut pour exécuter les tâches 'scripts', 'images', 'styles', 'minify-css' et 'watch' en une seule commande
gulp.task('default', gulp.series('scripts', 'images', 'styles', 'minify-css', 'watch'));
