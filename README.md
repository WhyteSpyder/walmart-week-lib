# walmart-week-lib #

A simple PHP library use to convert the calendar date to a Walmart Week, as well as convert a Walmart Week to the equivalent calendar date. This is useful when working with Retail Link reports or other supplier sales data.

For example, if you see the calendar date of `2018-06-21` you can convert it to Walmart Week `201821`, or if you have the Walmart Week of `201836`, you can convert it to `2018-10-04`.

Requirements:
* PHP >= 5.4

Installation:
`require vendor/autoload.php`

## Usage ##

```php
$ww = new WalmartWeek();
$date = $ww->fromWalmartWeek('201821'); // Returns 2018-06-21
$week = $ww->toWalmartWeek('2018-10-04'); // Returns 201836
```
