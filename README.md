# Active Menu laravel package

[![Laravel](https://img.shields.io/badge/Laravel-5.3.*-orange.svg?style=flat-square)](http://laravel.com) [![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.txt) [![Latest Version](https://img.shields.io/github/release/juy/ActiveMenu.svg?style=flat-square&label=latest version)](https://github.com/juy/ActiveMenu/tags)

> Helper class for Laravel applications to get active class base on current route name *(It's only detect "route name, this is enough for us.")*.

----------

### Supported Laravel Versions

- Laravel **5.1** | **5.2** | **5.3**

## Installation

### Step:1 Install Through Composer

#### Install

```
➜ composer require juy/active-menu:1.1.*
```

> #### Manual install (Alternative)

> Simply add the following to the "require" section of your composer.json file, and run `composer update` command.

> ```json
>"juy/active-menu": "1.1.*"
>```

#### Remove

```
➜ composer remove juy/active-menu
```

### Step 2: Add the Service Provider

Append this line to your **service providers** array in `config/app.php`.

```php
Juy\ActiveMenu\ServiceProvider::class,
```

### Step 3: Add Facade

Append this line to your **aliases** array in `config/app.php`.

```php
'Active' => Juy\ActiveMenu\Facades\Active::class,
```

### Step 4: Publish Config

Publish config file.

```
➜ php artisan vendor:publish --provider="Juy\ActiveMenu\ServiceProvider" --tag="config"
```

### Config Overview

You can modify css active class with custom one *(default is 'active')* in `config/activemenu.php` *(After publish)*.


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

Multi route with wilcard

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

Real life usage

```php
<li class="item {{ active_route('admin.index') }}">
    <a href="admin/index">Dashboard</a>
</li>
```

----------

### License

This project is open-sourced software licensed under the [MIT License](LICENSE.txt).