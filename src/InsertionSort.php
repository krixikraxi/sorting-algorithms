<?php
namespace krixikraxi\sortingAlgorithms;

/**
 * Implementation of the insertion sort
 * (concrete strategy)
 */
class InsertionSort implements SortingAlgorithmInterface {

    public function sort(array $array_in): array {
        $length = count($array_in);

        for ($i=1; $i<$length; $i++) {
            $currentValue = $array_in[$i];
            $j = $i;
            while($j>0 AND $array_in[$j-1] > $currentValue) {
                $array_in[$j] = $array_in[$j-1];
                $j = $j - 1;
            }
            $array_in[$j] = $currentValue;
        }

        return $array_in;
    }
}