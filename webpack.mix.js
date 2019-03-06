let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
let glob = require('glob-all');
let PurgecssPlugin = require("purgecss-webpack-plugin");

/**
 * Custom PurgeCSS Extractor
 * https://github.com/FullHuman/purgecss
 * https://github.com/FullHuman/purgecss-webpack-plugin
 */
class TailwindExtractor {
    static extract(content) {
      return content.match(/[A-z0-9-:\/]+/g);
    }
}

mix.setPublicPath('./');
mix.js('resources/assets/js/app.js', 'assets/js');

mix.sass('resources/assets/css/app.scss', 'assets/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind-config.js') ],
    });

mix.webpackConfig({
    plugins: [
        new PurgecssPlugin({
            paths: glob.sync([
                path.join(__dirname, "*.html"),
            ]),
            extractors: [
                {
                extractor: TailwindExtractor,
                extensions: ["html", "js"]
                }
            ]
        })
    ],
    node: {
        fs: 'empty',
        net: 'empty',
        tls: 'empty',
        dns: 'empty'
    }
});
