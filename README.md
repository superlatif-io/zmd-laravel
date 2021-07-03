# Laravel helper for zmd.io

[![Latest Stable Version](http://poser.pugx.org/superlatif/zmd-laravel/v)](https://packagist.org/packages/superlatif/zmd-laravel)
[![Total Downloads](http://poser.pugx.org/superlatif/zmd-laravel/downloads)](https://packagist.org/packages/superlatif/zmd-laravel)
[![Latest Unstable Version](http://poser.pugx.org/superlatif/zmd-laravel/v/unstable)](https://packagist.org/packages/superlatif/zmd-laravel)
[![License](http://poser.pugx.org/superlatif/zmd-laravel/license)](https://packagist.org/packages/superlatif/zmd-laravel)

This package was made to facilitate the integration of the image manipulation service zmd.io on your Laravel application.

## Installation

You can install the package via composer:

```bash
composer require superlatif-io/zmd-laravel
```

## Usage

Set your domain key in your .env file, using:
```php
ZMD_DOMAIN_KEY=your_domain_key
```
Note: Your domain key can be found in your zmd.io account [create a zmd domain key](https://app.zmd.io/domains)


Initialize the ZMD script in your blade template, just before the </body> end tag.
```html
<html>
    <body>
    
        ...
    
        @zmdInit
    </body>
</html>
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@superlatif.io instead of using the issue tracker.

## Credits

-   [Superlatif](https://github.com/superlatif-io)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
