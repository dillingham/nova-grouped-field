# Nova Grouped Field

[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-grouped-field.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-grouped-field)

This Nova field provides a clean way to combine multiple fields into one output.

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
fields()
{
    return [
        Grouped::make('User')->fields([
            BelongsTo::make('Account'),
            BelongsTo::make('User'),
        ])
    ]
}
```

# Options

There are a few chainable options available

### ->seperator($value)

If you would like to override the default slash seperator

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->seperator('-')
```
User | Acount Name - User Name

### ->showLabels()

If you want to output the original labels inline with the values

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->withLabels()
```

User | Account: Acount Name - User: User Name

### ->removeLinks()

If you just want plain text output for relationships

```php
Grouped::make('User')->fields([
    BelongsTo::make('Account'),
    BelongsTo::make('User'),
])->removeLinks()
```

### Native options

`Grouped` is a nova field like any other.
You can use authorization like `->canSee()`
You can decide when to show like `->hideFromIndex()`
You can even override using `displayUsing()`
