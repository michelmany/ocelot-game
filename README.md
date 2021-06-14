# OCELOT GAME
WordPress theme created from scratch for Ocelot Game

## Staging
https://ocelot.nitdesign.com.br

## Installation
* Open a Terminal window on the location of the theme folder
* Execute `yarn`

## Webpack

This theme uses [Laravel Mix](https://laravel-mix.com/docs/6.0/api) for assets management. Check the official documentation for advanced options.

* Edit the `webpack.mix.js` in the root directory of your theme to set your localhost URL and customize your assets
* `yarn mix watch` to start browserSync with LiveReload and proxy to your custom URL
* `yarn mix` to quickly compile and bundle all the assets without watching
* `yarn mix` production` to compile the assets for production
