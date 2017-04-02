const { mix } = require('laravel-mix');

mix.disableNotifications();

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css', {
     outputStyle: 'compressed'
   })
   .sourceMaps()
   .browserSync('places.localhost');

if (mix.config.inProduction) {
    mix.version();
}
