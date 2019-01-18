let mix = require('laravel-mix');
//especifica onde está o diretório publico
mix.setPublicPath('public');
//mixa os arquivos css e js
mix.sass('resources/assets/sass/app.scss', 'public/css/all.css');
mix.js('resources/assets/js/app.js', 'public/js/all.js');