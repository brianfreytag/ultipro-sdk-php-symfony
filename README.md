# Ultipro SDK for PHP (Unofficial) Symfony Bundle

[![Latest Stable Version](https://poser.pugx.org/brianfreytag/ultipro-sdk-php-bundle/v/stable)](https://packagist.org/packages/brianfreytag/ultipro-sdk-php-bundle)
[![Total Downloads](https://poser.pugx.org/brianfreytag/ultipro-sdk-php-bundle/downloads)](https://packagist.org/packages/brianfreytag/ultipro-sdk-php-bundle)


Provides integration for [Ultipro SDK for PHP (Unofficial)](https://github.com/brianfreytag/ultipro-sdk-php) for your Symfony 3.x|4.x project

## Installation

### Installation Using Symfony Flex

```bash
$ composer require brianfreytag/ultipro-sdk-php-bundle
```

This will handle all of the things.

### Installation without Symfony Flex

#### Step 1: Download the Bundle

```bash
$ composer require brianfreytag/ultipro-sdk-php-bundle
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer Documentation.

### Step 2: Enable the Bundle

To enable the bundle by adding the following line in the ``app/AppKernel.php`` file of your project:

```php
// app/AppKernel.php

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            
            new Ultipro\UltiproBundle\UltiproBundle(),
        ];
        
        // ...
    }
    
    // ...
}
```

## Usage

### Configuration

```yaml
ultipro_sdk:
    username: 'WebServicesUser' 
    password: 'web@services*password'
    customer_api_key: 'XY0XX'
    base_uri: 'https://service5.ultipro.com/'
```

### Services

Coming soon

## Todo
- [ ] Update the documentation to include further usage details
