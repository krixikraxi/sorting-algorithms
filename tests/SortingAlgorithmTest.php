<?php
use krixikraxi\sortingAlgorithms\InsertionSort;
use krixikraxi\sortingAlgorithms\SelectionSort;
use PHPUnit\Framework\TestCase;

class SortingAlgorithmTest extends TestCase {

    // TODO: This needs more tests

    public function testInsertionSort() {
        $insertionSort = new InsertionSort();
        $return_value = $insertionSort->sort(array(2,1,3,5));

        $this->assertTrue($this->checkIfArrayIsSorted($return_value));
    }

    public function testInsertionSortEmptyArray() {
        $insertionSort = new InsertionSort();
        $return_value = $insertionSort->sort(array());

        $this->assertTrue($this->checkIfArrayIsSorted($return_value));
    }

    public function testSelectionSort() {
        $insertionSort = new SelectionSort();
        $return_value = $insertionSort->sort(array(2,1,3,5));

        $this->assertTrue($this->checkIfArrayIsSorted($return_value));
    }

    public function testSelectionSortEmptyArray() {
        $insertionSort = new SelectionSort();
        $return_value = $insertionSort->sort(array());

        $this->assertTrue($this->checkIfArrayIsSorted($return_value));
    }

    /**
     * This function checks if a given array is sorted or not.
     *
     * @param array $checkArray
     * @return bool: returns true if the given array is sorted
     */
    private function checkIfArrayIsSorted(array $checkArray) : bool {
        $isSorted = true;
        $length = count($checkArray);

        for ($i=0; $i<$length-1; $i++) {
            if ($checkArray[$i] > $checkArray[$i+1]) {
                $isSorted = false;
                break;
            }
        }

        return $isSorted;
    }

}