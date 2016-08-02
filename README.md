# Active Menu laravel package

[![Laravel](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com) [![Laravel](https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square)](http://laravel.com) [![Laravel](https://img.shields.io/badge/Laravel-5.3-orange.svg?style=flat-square)](http://laravel.com)

> Helper class for Laravel applications to get active class base on current route name *(only detect "route name" not URL)*.

----------

## Installation

### Composer package

#### Install

```
composer require juy/active-menu:1.*
```

#### Remove

```
composer remove juy/active-menu
```

> #### Manual install (Alternative)

> Add this package to your `composer.json` file and run `composer update` once.

> ```json
>"juy/active-menu": "1.*"
>```

### Service provider

Append this line to your **service providers** array in `config/app.php`.

```php
Juy\ActiveMenu\ServiceProvider::class,
```

### Alias

Append this line to your **aliases** array in `config/app.php`.

```php
'Active' => Juy\ActiveMenu\Facades\Active::class,
```

### Publish config

Publish config file.

```
php artisan vendor:publish --provider="Juy\ActiveMenu\ServiceProvider" --tag="config"
```

## Usage, samples

Alias/Facade

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

You can modify css active class with custom one (default is 'active')

```php
active_route('admin.dropdown', 'open')
```

Wildcard samples

```php
Active::route('route.name.*');
active_route('route.name.*');
```

Multi route with wilcard

```php
Active::route(['route.name1.*', 'route.name2.*']);
active_route(['route.name1.*', 'route.name2.*']);

```

Real life usage

```php
<li class="{{ active_route('admin.index') }}">
    <a href="admin/index">Dashboard</a>
</li>
```

Real life usage with custom css class

```php
<li class="{{ active_route('admin.index', 'open') }}">
    <a href="admin/index">Dashboard</a>
</li>
```

----------

### License

This project is open-sourced software licensed under the [MIT License](LICENSE.txt).