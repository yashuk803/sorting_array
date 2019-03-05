<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

class DescendingSortStrategy implements SortStrategyInterface
{
    /**
     * Method for sorting array descending
     *
     * This method sort array maintaining index association and
     * use standard function php asort
     *
     * @see http://php.net/manual/en/function.asort.php
     *
     * @throws InvalidSortArrayException if function asort return false
     */
    public function sort(array $dataset): array
    {
        $usort = \asort($dataset);

        if (!$usort) {
            throw new InvalidSortArrayException($dataset);
        }

        return $dataset;
    }
}
