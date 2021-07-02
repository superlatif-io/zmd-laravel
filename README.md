# Laravel helper for zmd.io

[![Latest Version on Packagist](https://img.shields.io/packagist/v/superlatif-io/zmd-laravel.svg?style=flat-square)](https://packagist.org/packages/superlatif-io/zmd-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/superlatif-io/zmd-laravel.svg?style=flat-square)](https://packagist.org/packages/superlatif-io/zmd-laravel)
![GitHub Actions](https://github.com/superlatif-io/zmd-laravel/actions/workflows/main.yml/badge.svg)

This package was made to facilitate the integration of the image manipulation service zmd.io on your Laravel application.

## Installation

You can install the package via composer:

```bash
composer require superlatif-io/zmd-laravel
```

## Usage

```php
Set your domain key in your .env file, using:

ZMD_DOMAIN_KEY=your_domain_key
```

```php
Initialize the ZMD script in your blade template, just before the </body> end tag.

@zmdInit
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
