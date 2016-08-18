/////////////////////////////////////////////////////
// Gulp Dependencies
/////////////////////////////////////////////////////

var gulp = require("gulp"),
		sass = require("gulp-sass");

/////////////////////////////////////////////////////
// SASS
/////////////////////////////////////////////////////

gulp.task('sass', function () {
	gulp.src('assets/css/style.scss')
		.pipe(sass({
			outputStyle: "compact",
		}).on('error', sass.logError))
		.pipe(gulp.dest(''));
	});


// gulp.task("json", function() {
// 	gulp.src('public/json/*.json')
// 		.pipe(merge('combined.json'))
// 		.pipe(gulp.dest('./'));
// });

/////////////////////////////////////////////////////
// JavaScript
/////////////////////////////////////////////////////

gulp.task("uglify", function() {
	gulp.src(["public/js/vendor/*.js", "public/js/components/*.js"])
		.pipe(concat("application.js"))
		.pipe(gulp.dest("public/js"))
});

/////////////////////////////////////////////////////
// Watch
/////////////////////////////////////////////////////

gulp.task("watch", function() {
	gulp.watch(['assets/css/**/*.sass'], ['sass']);
	gulp.watch(['assets/js/**/*.js'], ['uglify']);
	// gulp.watch(['views/**/*.jade'], ['jade']);
});

gulp.task("default", ["watch"], function() {

});
