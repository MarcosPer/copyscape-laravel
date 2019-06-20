# CopyScape for Laravel 5

[![Latest Version on Packagist][ico-packagist]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

[ico-packagist]: https://img.shields.io/packagist/v/marcosper/copyscape-laravel.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/marcosper/copyscape-laravel

[ico-license]: https://img.shields.io/badge/license-GNU_GPLv3-brightgreen.svg?style=flat-square


## Introduction
copyscape-laravel is a laravel 5 service provider to easily Copyscape premium API using [php-libCopyScape](https://github.com/MarcosPer/php-libCopyScape)

---
 
- [Installation](#installation)
- [Registering the Package](#registering-the-package)
- [Configuration](#configuration)
- [Usage](#usage)

## Installation

Add copyscape-laravel to your composer.json file:

```
"require": {
  "marcosper/copyscape-laravel": "dev-master"
}
```

Use composer to install this package.

```
$ composer update
```

### Registering the Package

Register the service provider within the ```providers``` array found in ```config/app.php```:

```php
'providers' => [
	// ...
	
	Marcosper\CopyscapeLaravel\CopyscapeServiceProvider::class,
]
```

Add an alias within the ```aliases``` array found in ```config/app.php```:


```php
'aliases' => [
	// ...
	
	'Copyscape'     => Marcosper\CopyscapeLaravel\Facades\Copyscape::class,
]
```

## Configuration

Publish configuration file using artisan command

```
$ php artisan vendor:publish --provider="Marcosper\CopyscapeLaravel\CopyscapeServiceProvider"
```

Then in ``.env`` file add
```
COPYSCAPE_USER=copyscape_user
COPYSCAPE_KEY=copyscape_key
COPYSCAPE_SSL=false || true(for use systems cacert.pem) or route to use custom cacert.pem 
COPYSCAPE_DEBUG=true
```
## Usage


### Search for text on internet:

```php
//Search text with 10 full comparisons
$text = "Search if this text is plaigarism";
Copyscape::searchInternetText($text,10);
```

###  Get credits of account:

```php
Copyscape::getCredits();
```
