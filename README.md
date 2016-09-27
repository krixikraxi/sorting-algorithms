# Sorting Algorithm Library

This project was created for improving my PHP skills.
Learning PHP debugging unit testing, data structures and the composer.

I created a simple collection with sorting algorithms 
wrapped in an strategy software design pattern.
https://sourcemaking.com/design_patterns/strategy

For generating the autoload files:
`composer dump-autoload -o`
or a complete update
`composer update`

Running the Tests: 
`./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/SortingAlgorithmTest`

## Install via Composer:

Create the `composer.json` file with this content:
```
{
  "require": {
    "krixikraxi/sortingalgorithms": "dev-master"
  },
  "minimum-stability": "dev"
}
```
Run `composer install`

## Usage

```
use krixikraxi\sortingAlgorithms\Sorter;
require_once __DIR__.'/vendor/autoload.php';

$sorter = new Sorter("InsertionSort");
$sortedArray = $sorter->sort(array(4,1,7));
```