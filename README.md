# Madpilot78 PHP CS Fixer Config

Madpilot78 coding standards for [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

Based on [Nexcloud Coding Standard](https://github.com/nextcloud/coding-standard).

## Installation

Add the package to your dev dependencies

```bash
composer require --dev madpilot78/php-cs-fixer-config
```

and create a `.php-cs-fixer.dist.php` like

```php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use madpilot78\PhpCsFixerConfig\Config;

$config = new Config();
$config
	->getFinder()
	->ignoreVCSIgnored(true)
	->notPath('build')
	->notPath('l10n')
	->notPath('src')
	->notPath('vendor')
	->in(__DIR__);

return $config;
```

To run the fixer you first have to [install it](https://github.com/FriendsOfPhp/PHP-CS-Fixer#installation). Then you can run `php-cs-fixer fix` to apply all automated fixes.

For convenience you may add it to the `scripts` section of your `composer.json`:

```json
{
    "scripts": {
        "cs:check": "php-cs-fixer fix --dry-run --diff",
        "cs:fix": "php-cs-fixer fix"
    }
}
```

*Note: Don't forget to exclude `.php-cs-fixer.dist.php` and `.php-cs-fixer.cache` in your build scripts.*
