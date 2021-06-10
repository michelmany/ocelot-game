let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix    
    .js('src/scripts/main.js', 'dist')
    .sass('src/styles/main.scss', 'dist');

// Add source map and versioning to assets in production environment.
if ( mix.inProduction() ) {
	mix.sourceMaps().version('images/');
}