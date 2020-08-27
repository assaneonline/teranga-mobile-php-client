Installation options :

1. Require the [composer](https://getcomposer.org/) package :

```sh
composer require assaneonline/teranga-mobile-php-client
````

2. Clone this repository from GitHub :

```sh
git clone https://github.com/assaneonline/teranga-mobile-php-client.git
```

then include the autoload in your PHP project :

```php
require_once(path_to_this/vendor/autoload.php)
```

Here is an example of to receive handle a search request from a deployed Teranga Mobile form (directly from the tablet).

```php
use TerangaMobile\Client;

$terangaMobileClient = new Client([
    'application_id' => '<REPLACE_WITH_YOUR_APPLICATION_ID>',
    'application_secret' => '<REPLACE_WITH_YOUR_APPLICATION_SECRET>'
]);

$searchQuery = $terangaMobileClient->getSearchQuery();
```