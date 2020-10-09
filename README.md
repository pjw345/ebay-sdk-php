# Ebay SDK for PHP generated using WSDL2PHP

## Requirements
- Magento 2
- PHP 7.2 or higher (7.3+ recommended)

## Installation

### Using Composer

Install the module with the following command:
```
composer require pjw345/ebay-sdk-php
```

Run the Magento upgrade command:
```
php ./bin/magento setup:upgrade
```

Then flush the Magento cache:
```
php ./bin/magento cache:flush;
php ./bin/magento cache:clean;
```

If you are running Magento 2 in production mode, you will also be required to run compilation and static content deployment steps:
```
php ./bin/magento setup:di:compile;
php ./bin/magento setup:static-content:deploy;
```

#### How to update

Run the Composer update command:
```
composer update pjw345/ebay-sdk-php
```

Then flush the Magento cache as above.

Recompile as above if running in production mode.

## License
[MPL 2.0](https://www.mozilla.org/en-US/MPL/2.0/)
