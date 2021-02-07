# A small package for showcasing services of a company.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binomedev/showcase-services.svg?style=flat-square)](https://packagist.org/packages/binomedev/showcase-services)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/binomedev/showcase-services/run-tests?label=tests)](https://github.com/binomedev/showcase-services/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/binomedev/showcase-services.svg?style=flat-square)](https://packagist.org/packages/binomedev/showcase-services)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-showcase-services-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-showcase-services-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require binomedev/showcase-services
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Binomedev\ShowcaseServices\ShowcaseServicesServiceProvider" --tag="showcase-services-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Binomedev\ShowcaseServices\ShowcaseServicesServiceProvider" --tag="showcase-services-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$showcase-services = new Binomedev\ShowcaseServices();
echo $showcase-services->echoPhrase('Hello, Binomedev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Codrin Axinte](https://github.com/codrin-axinte)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
