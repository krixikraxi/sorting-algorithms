<?php
namespace krixikraxi\sortingAlgorithms;

/**
 * This is the sorter itself.
 * (strategy context)
 */
class Sorter {
    private $algorithm = NULL;

    public function __construct($algorithm_name) {
        switch ($algorithm_name) {
            case "InsertionSort":
                $this->algorithm = new InsertionSort();
                break;
            case "SelectionSort":
                $this->algorithm = new SelectionSort();
                break;
        }
    }

    public function sort(array $array_in) : array {
        return $this->algorithm->sort($array_in);
    }

    // TODO: insert a check if sorted function!
}