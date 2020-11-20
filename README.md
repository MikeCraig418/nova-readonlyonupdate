# Nova Readonly on Update

This package provides a `readonlyOnUpdate()` method to your Fields.

## Example

![Example](https://github.com/bytelaunch/nova-readonly-on-update/blob/master/preview.gif)

## Requirements

This package requires:

- PHP ^7.3.
- Laravel Nova ^2.0 or ^3.0.

##  Installation

You can install this package in a Laravel app that uses Nova via composer:

```
composer require bytelaunch/nova-readonly-on-update
```

## Usage

Add the following code in your own resource implementation:

```php
<?php

...

class YourResource extends Resource {

    ...

    public function fields(Request $request)
    {
        return [
            ...

            // Are you ready?
            // --------------
            // 1. Use readonlyOnUpdate() method
            // 2. See the results
            Field::make(__('Column'), 'column') // Use whatever Field
                ->readonlyOnUpdate()
        ];
    }
```

## Disclaimer

This package isn't tested, but it works well for me. Feel free to make PR with improvements.

