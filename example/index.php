<?php
use krixikraxi\sortingAlgorithms\Sorter;

require_once __DIR__.'/../vendor/autoload.php';

echo "<h2>Sorting Algorithms Usage:</h2>";


echo "<h3>---Insertion Sort---</h3>";
$sorter = new Sorter("InsertionSort");

echo '<pre>';
print_r($sorter->sort(array(4,1,7,6,9,15,21,3,6,100,90,99)));
echo '</pre>';

echo "<h3>---Selection Sort---</h3>";
$sorter = new Sorter("SelectionSort");

echo '<pre>';
print_r($sorter->sort(array(4,2,1,6,3,5)));
echo '</pre>';