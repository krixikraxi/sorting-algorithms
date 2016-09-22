<?php
namespace krixikraxi\sortingAlgorithms;

/**
 * Implementation of the selection sort
 * (concrete strategy)
 */
class SelectionSort implements SortingAlgorithmInterface {

    public function sort(array $array_in): array {
        $length = count($array_in);

        for ($j=0; $j < $length-1; $j++) {
            $iMin = $j;
            for ($i = $j+1; $i<$length; $i++) {
                if ($array_in[$i] < $array_in[$iMin]) {
                    $iMin = $i;
                }
            }
            if($iMin != $j) {
                $temp = $array_in[$j];
                $array_in[$j] = $array_in[$iMin];
                $array_in[$iMin] = $temp;
            }
        }

        return $array_in;
    }
}