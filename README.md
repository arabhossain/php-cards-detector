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

echo \CardDetector\Detector::detect("5555555555554444")->get_name();
echo \CardDetector\Detector::detect("5555555555554444")->get_logo();
echo \CardDetector\Detector::detect("5555555555554444")->get_logo_base64();

```
>Or you can simply use 
```
use  \CardDetector\Detector as CardDetector;
echo CardDetector::detect(23232313131313)->get_name();
```