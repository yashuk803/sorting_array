Library Sorting Array
===============

This is a library for sorting array 

Installation
------------

```
https://packagist.org/packages/yashuk803/sorting-array
```

Usage
-----

1. Create Array which you want sort
2. In folder test you can see exemple how to use this library
3. You can use two type sorting array Ascending or Descending
4. When you can use empty array, method sorter return message 'Array is empty'

Example
----------------
./tests/sorter/sorter.php

```php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Yashuk803\Sorting\Sorter;
use Yashuk803\Sorting\Factory;

$factory = new Factory();

$dataset = ['orange', 'charry', 'banana'];

$sorter = new Sorter($factory->createAscendingSort());
print_r($sorter->sort($dataset));
/* 
Array
(
    [0] => orange
    [1] => charry
    [2] => banana
)
*/

$sorter = new Sorter($factory->createDescendingSort());
print_r($sorter->sort($dataset));
/*
Array
(
    [2] => banana
    [1] => charry
    [0] => orange
)
*/

$dataset = [4, 6, 10, 5, 8, 16];

$sorter = new Sorter($factory->createAscendingSort());
print_r($sorter->sort($dataset));
/* 
Array
(
    [5] => 16
    [2] => 10
    [4] => 8
    [1] => 6
    [3] => 5
    [0] => 4
)
*/

$sorter = new Sorter($factory->createDescendingSort());
print_r($sorter->sort($dataset));
/*
 Array
(
    [0] => 4
    [3] => 5
    [1] => 6
    [4] => 8
    [2] => 10
    [5] => 16
)
*/

$sorter = new Sorter($factory->createNullArraySort());
$sorter->setSorterStrategy($factory->createDescendingSort());
print_r($sorter->sort($dataset));
/*
 Array
(
    [0] => 4
    [3] => 5
    [1] => 6
    [4] => 8
    [2] => 10
    [5] => 16
)
*/

$sorter = new Sorter($factory->createDescendingSort());
$sorter->sort($dataset); //null
```

