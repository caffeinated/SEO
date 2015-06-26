Caffeinated SEO
===============
[![Laravel 5.0](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com)
[![Source](http://img.shields.io/badge/source-caffeinated/SEO-blue.svg?style=flat-square)](https://github.com/caffeinated/SEO)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

Caffeinated SEO aids in the management and generation of SEO metadata for your Laravel 5 application.

Documentation
-------------
You will find user friendly and up to date documentation in the wiki here: [Caffeinated SEO Wiki](https://github.com/caffeinated/SEO/wiki)

Quick Installation
------------------
Begin by installing the package through Composer. Depending on what version of Laravel you are using (5.0 or 5.1), you'll want to pull in the `~1.0` or `~2.0` release, respectively:

#### Laravel 5.0.x
```
composer require caffeinated/seo=~1.0
```

#### Laravel 5.1.x
```
composer require caffeinated/seo=~2.0
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Laravel 5.0.x
##### Service Provider
```php
'Caffeinated\SEO\SEOServiceProvider',
```

##### Facade
```php
'Meta' => 'Caffeinated\SEO\Facades\Metadata',
```

#### Laravel 5.1.x
##### Service Provider
```php
Caffeinated\SEO\SEOServiceProvider::class,
```

##### Facade
```php
'Meta' => Caffeinated\SEO\Facades\Metadata::class,
```

And that's it! With your coffee in reach, start building up your SEO!
