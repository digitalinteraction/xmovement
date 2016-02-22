## XMovement
A core open source framework on which crowd commissioning platforms can be developed.

## Bundled Software
Laravel (MIT) by Laravel : https://github.com/laravel/laravel
Masonry (MIT) by David DeSandro : https://github.com/desandro/masonry
jQuery File Upload (MIT) by @blueimp : https://github.com/blueimp/jQuery-File-Upload

### Environment Setup

Navigate to homestead folder

cd ~/Homestead && vagrant up && vagrant ssh
cd Code && artisan migrate:refresh --seed

### Migrate and seed the database
artisan migrate:refresh --seed

vagrant destroy --force

### Gulp for preprocessing

Remember 'gulp watch' for monitoring changes to styling

npm install --global gulp

npm install

### Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)