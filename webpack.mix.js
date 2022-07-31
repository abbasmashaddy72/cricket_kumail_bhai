const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

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

mix.js('resources/js/frontend/app.js', 'public/js/frontend')
    .postCss('resources/css/frontend/app.css', 'public/css/frontend', {}, [
        tailwindcss('./tailwind-frontend.config.js')
    ])
    .options({
        processCssUrls: false
    })

mix.js('resources/js/backend/app.js', 'public/js/backend')
    .js('resources/js/backend/hope-ui.js', 'public/js/backend')
    .postCss('resources/css/backend/app.css', 'public/css/backend', {}, [
        tailwindcss('./tailwind-backend.config.js')
    ])
    .options({
        processCssUrls: false
    })

mix.browserSync('127.0.0.1:8000')
mix.webpackConfig({
    stats: {
        children: true
    }
})
