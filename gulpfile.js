var gulp            = require("gulp"),
    del             = require("del"),
    include         = require("gulp-include"),
    rename          = require("gulp-rename"),
    uglify          = require("gulp-uglify"),
    sass            = require("gulp-sass"),
    watch           = require("gulp-watch"),
    sourcemaps      = require('gulp-sourcemaps'),
    plumber         = require('gulp-plumber'),
    cssnano         = require('gulp-cssnano'),
    replace         = require('gulp-replace'),
    log             = require('fancy-log'),
    es              = require('event-stream'),
    through2        = require('through2'),
    runner          = require('child_process'),
    fs              = require('fs')
    ;

// Variables de chemins
var source = './src'; // dossier de travail
var doc = './doc/assets'; // dossier de travail
var destination = './dist'; // dossier à livrer
var build = './build'; // dossier de ocmpilation


gulp.task('make-sass', ['clean'], function () {
    var scssList = [];

    fs.readdirSync(doc+ '/scss/', { withFileTypes: true })
        .filter(dirent => !dirent.name.startsWith('_'))
        .filter(dirent => dirent.name.endsWith('.scss'))
        .map(dirent => scssList.push(doc+ '/scss/' +dirent.name));

    fs.readdirSync(source+ '/core/scss/', { withFileTypes: true })
        .filter(dirent => !dirent.name.startsWith('_'))
        .filter(dirent => dirent.name.endsWith('.scss'))
        .map(dirent => scssList.push(source+ '/core/scss/' +dirent.name));

    return es.merge(scssList.map(function(a) {
        return gulp.src(a)
            .pipe(plumber(function(e){log.error('Erreur lors de la compilation SASS !', e);}))
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(build + '/css/dev'))
            .pipe(cssnano({zindex: false}))
            .pipe(gulp.dest(build + '/css/min'));
    }));
});

gulp.task("make-css-dev", ["make-sass"], function() {
    return gulp.src([build + '/css/dev/**/*'])
        .pipe(gulp.dest(destination + '/css'));
});
gulp.task("make-css-prod", ["make-sass"], function() {
    return gulp.src([build + '/css/min/**/*'])
        .pipe(gulp.dest(destination + '/css'));
});

gulp.task("make-assets", ["clean"], function() {
    return gulp.src([source + '/fonts/**/*'])
        .pipe(gulp.dest(destination + '/fonts'));
});

gulp.task("copy-storybook", ["clean"], function() {
    return gulp.src(['./doc/storybook/**/*'])
        .pipe(gulp.dest(build + '/storybook'));
});

gulp.task("loader-storybook", ["clean", "copy-storybook"], function() {
    var components = fs.readdirSync('src/components/', {withFileTypes: true})
        .filter(dirent => dirent.isDirectory())
        .map(dirent => dirent.name)

    var imports = components.map(component =>
        ['design', 'html', 'vuejs']
            .map(type => 'import doc_' + type + '_' + component.replace('-', '_') + ' from \'../../../src/components/' + component + '/doc-' + type + '.md\';')
            .join(`
`)
        )
        .join(`
`)
    ;

    var stories = components.map(component => {
        return `storiesOf(\'`+component+`\', module)
    .addDecorator(withKnobs)
    ` + ['design', 'html', 'vuejs']
            .map(type => '.add(\'' + type + '\', doc(doc_' + type + '_' + component.replace('-', '_') + '))')
            .join(`
    `) + `
;
`
    })
    .join(`
`)
    ;

    return gulp.src(build + '/storybook/stories/load-stories.js')
        .pipe(replace('##imports##', imports))
        .pipe(replace('##stories##', stories))
        .pipe(gulp.dest(build + '/storybook/stories/'));
    ;
});

gulp.task("clean-css", function() {
    return del([
        destination + '/**/*.css'
    ]);
});
gulp.task("clean-js", function() {
    return del([
        destination + '/**/*.js'
    ]);
});
gulp.task("clean-html", function() {
    return del([
        destination + '/**/*.html'
    ]);
});
gulp.task("clean-assets", function() {
    return del([
        destination + '/fonts/**/*'
    ]);
});
gulp.task("clean", ["clean-html", "clean-js", "clean-css", "clean-assets"], function(){
    return del([
        build + '/**/*'
    ]);
});

function myPhp2Html(file, enc, cb) {
    runner.exec('php ' + file.path, function(err, phpResponse, stderr) {
        if(err) console.log(err); /* log error */

        file.contents = new Buffer(phpResponse
            .replace(/\/dist\//g, '\/')
            .replace(/\/doc\//g, '\/')
            .replace(/\.php/g, '.html')
        );

        return cb(null, file);
    });
}
function php2html(glob, dest){
    return gulp.src(glob)
        .pipe(through2.obj(myPhp2Html))
        .pipe(rename(function (path) {
            path.extname = ".html"
        }))
        .pipe(gulp.dest(dest));
}

gulp.task("generate-doc", ["make-prod-assets"], function() {
    // Generate doc
    return php2html(["./doc/*.php"], build + "/");
});

gulp.task("generate-html", ["generate-doc", "clean-html", "make-prod-assets"], function() {
    // replace html
    return gulp.src([build + '/**/*.html'])
        .pipe(gulp.dest(destination + '/'));
});


//
// Commandes utiles ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
gulp.task("watch", function() {
    gulp.start('make-dev-assets');
    watch( [
            source+ '/core/scss/**/*.scss',
            source+ '/components/**/*.scss',
            doc+ '/scss/**/*.scss',
        ], function(){
        gulp.start('make-dev-assets');
    });
});

gulp.task("make-dev-assets", ["clean", "make-assets", "make-sass", "make-css-dev", "loader-storybook"]);
gulp.task("make-prod-assets", ["clean", "make-assets", "make-sass", "make-css-prod", "loader-storybook"]);
gulp.task("default", ["clean", "make-dev-assets"]);
gulp.task("html", ["clean", "generate-doc",  "generate-html"]);
