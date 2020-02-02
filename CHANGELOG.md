# Changelog

All notable changes to this project will be documented in this file. This project is versioned under the [Semantic Versioning](http://semver.org/) guidelines.

## v1.1.3

- Add CLI control to ServiceProvider
- Auto register Facade on ServiceProvider

## v1.1.2

- Add extra control to "Convert to array"
- Remove blade facade, use "blade.compiler" service container
- Add *.gitattributes*, *.editorconfig* files
- Small improvements

## v1.1.1

- Move config folder outside src directory
- Change config name to *config.php*
- Service provider optimizations

## v1.1.0

- Change `$this->currentRoute` to `$this->currentRouteName`
- Remove `compareDotArrays()` completely and use laravel `str_is()`
- Change function param `$route` to `$routePattern`
- Move active class CSS name to a config file
- Add custom blade directive `@ifActiveRoute`

## v1.0.7

- Update *README*, change installation directives
- Add laravel 5.3 support to composer.json

## v1.0.6

- Update *README*, remove the comma from *composer.json* part
- Fix wrong ServiceProvider name on *README*

## v1.0.5

- Update *README*
- Fix description on *composer.json*
- Change "require" section on *composer.json*
- Change method sequence on ServiceProvider file

## v1.0.4

- Add custom class name to the helper function

## v1.0.3

- Update *README*, add real-life usage
- Test on laravel 5.2 and add laravel 5.2 badge

## v1.0.2

- Change helper function `active_class()` to `active_route()` ***(Breaking change)***

## v1.0.1

- Update README

## v1.0.0

- Initial release