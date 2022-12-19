# Weight conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lodeb/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/lodeb/weight-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lodeb/weight-conversions/run-tests?label=tests)](https://github.com/lodeb/weight-conversions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lodeb/weight-conversions/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lodeb/weight-conversions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lodeb/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/lodeb/weight-conversions)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lodeb/weight-conversions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="weight-conversions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="weight-conversions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="weight-conversions-views"
```

## Usage

```php
$weightConversions = new Lodeb\WeightConversions();

echo $weightConversions->kilograms(100)->toPounds();

echo $weightConversions->kilograms(100)->toBananas();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lode Bossuyt](https://github.com/Lodeb)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
