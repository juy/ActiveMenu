# Active Menu laravel package

[![Laravel](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com) [![Laravel](https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square)](http://laravel.com)

> Helper class for Laravel applications to get active class base on current route name *(only detect route name not URI, URL, etc.)*.

----------

## Installation

You'll need to install the [Composer package](https://packagist.org/packages/juy/active-menu) from Packagist.

Add this package to your `composer.json` file and run `composer update` once.

```json
"juy/active-menu": "1.*",
```

Append this line to your service providers array in `config/app.php`.

```php
Juy\ActiveMenu\ServiceProvider::class,
```

Append this line to your aliases array in `config/app.php`.

```php
'Active' => Juy\ActiveMenu\Facades\Active::class,
```

## Usage

Alias

```php
Active::route('route.name');
```

Application container

```php
app('active')->route('route.name');
```

Helper function

```php
active_route('route.name');
```

Wildcard

```php
Active::route('route.name.*');
app('active')->route('route.name.*');
active_route('route.name.*');
```

Multi route with wilcard

```php
Active::route(['route.name1.*', 'route.name2.*']);
app('active')->route(['route.name1.*', 'route.name2.*']);
active_route(['route.name1.*', 'route.name2.*']);

```

Real life usage

```php
<li class="{{ active_route('admin.index') }}">
    <a href="admin/index">Dashboard</a>
</li>
```

----------

### License
This project is open-sourced software licensed under the [MIT License](LICENSE.txt).