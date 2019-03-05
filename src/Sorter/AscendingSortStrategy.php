<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

class AscendingSortStrategy implements SortStrategyInterface
{
    /**
     * Method for sorting array ascending
     *
     * This method sort array maintaining index association and
     * use standard function php arsort
     *
     * @see http://php.net/manual/en/function.arsort.php
     *
     * @throws InvalidSortArrayException if function arsort return false
     */
    public function sort(array $dataset): array
    {
        $arsort = \arsort($dataset);

        if (!$arsort) {
            throw new InvalidSortArrayException($dataset);
        }

        return $dataset;
    }
}
