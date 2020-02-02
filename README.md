# Active Menu Laravel Package

[![Latest Version on Packagist][ico-version]][link-packagist] [![Software License][ico-license]](LICENSE.txt)

> Helper class for Laravel applications to get an "active CSS class", base on current route name *(It only detects route name)*.

----------

### Supported/Tested Laravel versions

- Laravel **5.1** | **5.2** | **5.3** | **5.4**

### Requirements

- Laravel >= 5.1 : Laravel 5.1 or above.
- PHP >= 5.5.9 : PHP 5.5.9 or above on your machine.


## Installation

### Step:1 Install through composer

#### Install

```
➜ composer require juy/active-menu
```

> #### Manual install (alternative)

> Simply add the following to the "require" section of your composer.json file, and run `composer update` command.

> ```json
>"juy/active-menu": "^1.1"
>```

#### Remove

```
➜ composer remove juy/active-menu
```

### Step 2: Add the service provider

Append this line to your **service providers** array in `config/app.php`.

```php
Juy\ActiveMenu\ServiceProvider::class,
```

### Step 3: Publish config

Publish the config file.

```
➜ php artisan vendor:publish --provider="Juy\ActiveMenu\ServiceProvider" --tag="config"
```

### Config overview

You can modify css active class with custom one *(default is 'active')* in `config/activemenu.php` *(after publish)*.


```php
return [

    // The default css class value if the request match given route name
    'class' => 'active',

];
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

Wildcard samples

```php
Active::route('route.name.*');
active_route('route.name.*');
```

Multi route with wildcard

```php
Active::route(['route.name1.*', 'route.name2.*']);
active_route(['route.name1.*', 'route.name2.*']);

```

Custom blade directive

```
@ifActiveRoute('route.name')
    <p>Foo</p>
@else
    <p>Bar</p>
@endif
```

----------

Real-life usage

```php
<li class="item {{ active_route('admin.index') }}">
    <a href="admin/index">Dashboard</a>
</li>
```

----------

### License

This project is open-sourced software licensed under the [MIT License](LICENSE.txt).


[ico-version]: https://img.shields.io/packagist/v/juy/active-menu.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/juy/active-menu

[ico-license]: https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square