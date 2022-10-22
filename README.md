# Basepath

Returns the base path of the project.

Specifies the main direction of the project based on the `composer.json` file. However, it is recommended to install and use it via composer.

## Requirements

* PHP >= 7.4

## Installation

You can install the package via composer:

```bash
composer require saboohy/basepath
```

## Usage

```php
echo basepath(); // ...project_name/

echo basepath("composer.json"); // ...project_name/composer.json 
```

## License

The MIT License. Please, look at [License File](LICENSE.md) for more information.