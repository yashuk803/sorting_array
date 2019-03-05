<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

/**
 * Class DescendingSortStrategy
 */
class DescendingSortStrategy implements SortStrategyInterface
{
    public function sort(array $dataset): array
    {
        $usort = \asort($dataset);

        if (!$usort) {
            throw new InvalidSortArrayException($dataset);
        }

        return $dataset;
    }
}
