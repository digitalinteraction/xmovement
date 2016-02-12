var elixir = require('laravel-elixir');

require('laravel-elixir-stylus');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.sass('imports.scss');
	mix.stylus('app.styl');
    mix.copy('node_modules/masonry-layout/dist/masonry.pkgd.min.js', 'public/js/masonry.js');
    mix.browserSync({
        proxy: 'xm.local',
        notify: false
    });
});