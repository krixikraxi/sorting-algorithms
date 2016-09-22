<?php
namespace krixikraxi\sortingAlgorithms;

/**
 * This is the interface for the concrete sorting algorithms
 * (strategy interface)
 */
interface SortingAlgorithmInterface {

    /**
     * @param array $array_in
     * @return array
     */
    public function sort(array $array_in): array;
}