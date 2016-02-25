Caffeinated SEO
===============
[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.2](https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square)](http://laravel.com)
[![Source](http://img.shields.io/badge/source-caffeinated/SEO-blue.svg?style=flat-square)](https://github.com/caffeinated/SEO)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

Caffeinated SEO aids in the management and generation of SEO metadata for your Laravel 5 application.

Documentation
-------------
You will find user friendly and up to date documentation in the wiki here: [Caffeinated SEO Wiki](https://github.com/caffeinated/SEO/wiki)

Quick Installation
------------------
Begin by installing the package through Composer.

```
composer require caffeinated/seo=~2.0
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider
```php
Caffeinated\SEO\SEOServiceProvider::class,
```

#### Facade
```php
'Meta' => Caffeinated\SEO\Facades\Metadata::class,
```

And that's it! With your coffee in reach, start building up your SEO!
