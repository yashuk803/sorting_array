<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

/**
 * Class AscendingSortStrategy
 */
class AscendingSortStrategy implements SortStrategyInterface
{
    public function sort(array $dataset): array
    {
        $arsort = \arsort($dataset);

        if (!$arsort) {
            throw new InvalidSortArrayException($dataset);
        }

        return $dataset;
    }
}
