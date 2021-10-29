"use strict";

const gulp = require("gulp");

// SCSS & CSS
const sass = require("gulp-sass");
sass.compiler = require("node-sass");
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const rename = require("gulp-rename");

// TOOLS
const gulpif = require("gulp-if");
const argv = require("yargs").argv;
const del = require("del");

// PATHS
const paths = {
	src: {
		scss: "application/styles/**/*.scss",
	},
	dist: {
		css: "assets/css/",
	},
};

// CONSTANTS
const isProd = argv.prod; // ? true : false;
const isDev = !isProd;

// ------------------------ COMPILE -----------------------
const clean = () => {
	return del(paths.dist.css);
};

const compileScss = () => {
	const postcssPlugins = isDev ? [autoprefixer()] : [autoprefixer(), cssnano()];

	return gulp
		.src(paths.src.scss)
		.pipe(gulpif(isDev, sourcemaps.init()))
		.pipe(
			sass({
				errorLogToConsole: true,
				outputStyle: isProd ? "compressed" : "",
			}).on("error", sass.logError)
		)
		.pipe(postcss(postcssPlugins))
		.pipe(gulpif(isDev, sourcemaps.write("./")))
		.pipe(gulp.dest(paths.dist.css));
};

const build = gulp.series(clean, compileScss); // compileTs

// ------------------------ WATCH ------------------------
const watchScss = () => {
	gulp.watch(paths.src.scss, compileScss);
};

const watch = gulp.parallel(watchScss); //watchTs

// ----------------------- PUBLIC -----------------------
exports.default = watch;
exports.build = build;
exports.watch = watch;
