# Backdrop\Template\Helpers
Backdrop Template Helpers is set a helper functions for setting the path, locations, and filtering templates.

## Requirements
* [ClassicPress](https://www.classicpress.net)
* [WordPress](https://wordpress.org)
* [PHP 7.4](https://www.php.net/releases/7_4_0.php)
* [Composer](https://getcomposer.org) 

## Functions
All functions are in the `Backdrop\Template\Helpers` namespace.

* `path( $file = '' )`: the relative path to the views folder (`resources/views/` by default, filterable with `backdrop/template/path`).
* `locations()`: the folders searched for templates, the active theme first and then the parent theme (filterable with `backdrop/template/locations`).
* `locate( $templates )`: the full path to the first template found in `locations()`, or an empty string.
* `filter_templates( $templates )`: prefixes a list of templates with the views path.

## Copyright and License
This project is license under GNU GPL, version 2 or higher

2019-2026. Benjamin Lu