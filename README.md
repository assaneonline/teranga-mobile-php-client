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

$question_uid = $terangaMobileClient->getSearchFieldUid();
$input_query = $terangaMobileClient->getSearchFieldQuery();

$results = [
    // List of results
    [
        "key" => "opt1", // Uniquely identifies this result (not shown to user)
        "value" => "" // Label to display back to user in the dropdown list
    ]
];

$responseData = [
    'status' => "ok",       // Set to "ok" or "ko" depending on the outcome of the search
    'message' => "",        // Custom message, ie. use it to notify user if something goes wrong
    'data' => $results      // Array containing the list of results
];

// Return the result back to the requesting device
die(json_encode($responseData));
```