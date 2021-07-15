const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.sass('resources/sass/remote_control.scss', 'public/css');

const WebpackShellPlugin = require('webpack-shell-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const fs = require('fs');
const gracefulFs = require('graceful-fs');
gracefulFs.gracefulify(fs);

mix.webpackConfig({
    plugins:
        [
            new CopyWebpackPlugin(
                {
                    patterns: [
                        { from: 'node_modules/materialize-css/', to: 'assets/bower/materialize/'  },
                        { from: 'node_modules/jquery', to: 'assets/bower/jquery/'  },
                    ]
                })
        ]
});
