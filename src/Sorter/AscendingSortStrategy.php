<?php

namespace Yashuk803\Sorting\Sorter;

use Yashuk803\Sorting\Exception\InvalidSortArrayException;

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
