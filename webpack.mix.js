let mix = require('laravel-mix');

let dist = 'public/themes/sembol';
let node_modules = `${__dirname}/node_modules`;
let vendor = `${dist}/vendor`;
let resources = `${__dirname}/resources`;
let resourceAssets = `${resources}/assets`;

if(!isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix
    .sass(`${__dirname}/resources/assets/scss/main.scss`, `${dist}/css`);

mix.copy(`${__dirname}/resources/assets`, `${__dirname}/assets`);

mix.combine([`${resourceAssets}/js/custom.js`], `${dist}/js/custom.min.js`);

if(!isProduction) {
    mix
        .browserSync({
        proxy: 'ugm.local',
        files: [__dirname + '/**/*.*']
    });
} else {
    mix.version();
}