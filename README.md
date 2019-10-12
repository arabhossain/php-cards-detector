# Detect Debit Credit Card Types with logo

<p>Utility to determine credit card type</p>

### Installation

```
composer require arabhossain/php-cards-detector
```

### Supported Cards
<li>Amex</li>
<li>DinersClub</li>
<li>Discover</li>
<li>JCB</li>
<li>Maestro</li>
<li>MasterCard</li>
<li>Visa</li>

### Usage

```
require "vendor/autoload.php";

$type = \src\Detector::detect("5555555555554444");

echo $type->get_name();
echo $type->get_logo();
echo $type->get_logo_base64();

```