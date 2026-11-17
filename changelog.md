# Changelog

## 1.0.1 - November 17, 2026
Changed
* Requires PHP 7.4 or later, like Backdrop 2.0.

## 1.0.0 - November 17, 2026
The first official release of Backdrop Template Helpers. It provides `path()`, `locate()`, `locations()` and `filter_templates()` in the `Backdrop\Template\Helpers` namespace, and is used by `backdrop-dev/view` and `backdrop-dev/template-hierarchy`.

Fixed:
* `filter_templates()` added a double slash between the view path and the template (`resources/views//single.php`), because `path()` returns the path with a trailing slash.
