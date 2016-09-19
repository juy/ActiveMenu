# Change log

All notable changes to this project will be documented in this file. This project is versioned under the [Semantic Versioning](http://semver.org/) guidelines.

## Development

- Move config folder outside src directory

## v1.1.0

- Change $this->currentRoute to $this->currentRouteName
- Remove compareDotArrays() completely and use laravel str_is()
- Change function param $route to $routePattern
- Move active class css name to a config file
- Add custom blade directive @ifActiveRoute

## v1.0.7

- Modify README, change installation directives
- Add laravel 5.3 support to composer.json

## v1.0.6

- Modify README, remove comma from composer.json part
- Fix wrong ServiceProvider name on README

## v1.0.5

- Modify README
- Fix description on composer.json
- Change require section on composer.json
- Change method sequence on ServiceProvider file

## v1.0.4

- Add custom class name to helper function

## v1.0.3

- Modify README, add real life usage
- Test on laravel 5.2 and add laravel 5.2 badge

## v1.0.2

- Change helper function active_class() to active_route()

## v1.0.1

- Modify README

## v1.0.0

- Initial release
