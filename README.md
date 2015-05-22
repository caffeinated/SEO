Caffeinated Skeleton
====================
[![Laravel](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![Source](http://img.shields.io/badge/source-caffeinated/skeleton-blue.svg?style=flat-square)](https://github.com/caffeinated/skeleton)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

This is where a short description should be displayed. Be sure to make it at least two to three sentences, but a paragraph or two would be ideal. Be sure to give information on any coding standards (PSR) and unit testing coverage as well (as shown in the next paragraph block).

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

Documentation
-------------
You will find user friendly and up to date documentation in the wiki here: [Caffeinated Skeleton Wiki](https://github.com/caffeinated/skeleton)

Quick Installation
------------------
Begin by installing the package through Composer. Add `caffeinated/skeleton` to your composer.json file:

```
"caffeinated/skeleton": "~1.0@dev"
```

Then run `composer update` to pull the package in.

Once this operation is complete, simply add the service provider class and facade alias to your project's `config/app.php` file:

#### Service Provider

```php
'Caffeinated\Skeleton\SkeletonServiceProvider',
```

#### Facade

```php
'Skeleton' => 'Caffeinated\Skeleton\Facades\Skeleton',
```

And that's it! With your coffee in reach, start building out some creepy skeletons!
