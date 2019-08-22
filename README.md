# Detect Debit Credit Card Types

<p>Utility to determine credit card type</p>

### Installation

```
composer require arabhossain/php-cards-detector
```

### Usage

```
require "vendor/autoload.php";

$type = \src\Detector::detect("5555555555554444");

echo $type->get_name();
echo $type->get_logo();
echo $type->get_logo_base64();

```