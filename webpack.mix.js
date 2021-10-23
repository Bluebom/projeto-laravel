const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass(
    "resources/views/clientes/css/cliente.style.scss",
    "public/site/css/cliente.style.css"
).js(
    "resources/views/clientes/js/cliente.script.js",
    "public/site/js/cliente.script.js"
);
