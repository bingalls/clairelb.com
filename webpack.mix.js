let mix = require('laravel-mix');
let build = require('./tasks/build.js');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch([
      'source/**/*.md',
      'source/**/*.php',
      'source/**/*.scss',
      '!source/**/_tmp/*',
    ]),
  ],
});

mix
  .js('source/_assets/js/main.js', 'js')
  .postCss('source/_assets/css/main.css', 'css')
  .tailwind()
  .purgeCss({
    folders: ['source'],
  })
  .version();
