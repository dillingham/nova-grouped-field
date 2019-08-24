# Nova Grouped Field

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-grouped-field.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-grouped-field)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-grouped-field.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-grouped-field) [![Twitter Follow](https://img.shields.io/twitter/follow/dillinghammm?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/dillinghammm)


This Nova field provides a clean way to combine multiple fields into one output.

![nova-grouped-field-1](https://user-images.githubusercontent.com/29180903/48378053-9c387600-e69d-11e8-9faa-dece657fa1ba.png)

# Installation

Installing with composer:

```bash
composer require dillingham/nova-grouped-field
```

# Usage

```php
use Dillingham\NovaGroupedField\Grouped;
```
```php
public function fields(Request $request)
{
    return [
        Grouped::make('User')->fields([
            BelongsTo::make('Account'),
            BelongsTo::make('User'),
        ])
    ]
}
```

---

# Options

There are a few chainable options available

### separator($value)

If you would like to override the default slash separator

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->separator('-')
```

### showLabels()

If you want to output the original labels inline with the values

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->showLabels()
```
### removeLinks()

If you just want plain text output for relationships

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->removeLinks()
```
### Screenshots

| separator('-') | showLabels() | removeLinks() |
| - | - | -
![nova-grouped-field-separator](https://user-images.githubusercontent.com/29180903/48378215-2a146100-e69e-11e8-90c8-269cf42b1b65.png) | ![nova-grouped-field-labels](https://user-images.githubusercontent.com/29180903/48378354-5cbe5980-e69e-11e8-8e10-28187f473c5b.png) | ![nova-grouped-field-no-links](https://user-images.githubusercontent.com/29180903/48378417-7fe90900-e69e-11e8-8b8a-5e0a5ac2a431.png) 

### Native options

`Grouped` is a nova field like any other.

You can use authorization like `->canSee()`

You can decide when to show like `->hideFromIndex()`
