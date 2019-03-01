<?php

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

class DescendingSortStrategy implements SortStrategyInterface
{
    public function sort(array $dataset): array
    {
        $usort = \asort($dataset);

        if(!$usort) {
            throw new InvalidSortArrayException($dataset);
        }

        return $dataset;
    }
}