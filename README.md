# CopyScape for Laravel 5

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

### Basic usage

Just follow the steps below and you will be able to get a [service class object](https://github.com/Lusitanian/PHPoAuthLib/tree/master/src/OAuth/OAuth2/Service) with this one rule:

```php
$fb = \OAuth::consumer('Facebook');
```

Optionally, add a second parameter with the URL which the service needs to redirect to, otherwise it will redirect to the current URL.

```php
$fb = \OAuth::consumer('Facebook', 'http://url.to.redirect.to');
```

## Usage examples


### Get credits of account:

```php
use Marcosper\CopyscapeLaravel\Facades\Copyscape;

//Search text with 10 full comparisons
$text = "Search if this text is plaigarism";
Copyscape::getAcc($text,10);
```

### Search for text on internet

```php
use Marcosper\CopyscapeLaravel\Facades\Copyscape;

Copyscape::getCredits();
```