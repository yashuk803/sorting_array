<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting;

use Yashuk803\Sorting\Sorter\SortStrategyInterface;

class Sorter
{
    /**
     * @var SortStrategyInterface;
     *
     */
    private $sorter;

    public function __construct(SortStrategyInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function setSorterStrategy(SortStrategyInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * Return sorted array or null
     *
     * @param array $dataset
     * @return array|null Null is returned
     * if the attribute is invalid or does not need to be sorted.
     */
    public function sort(array $dataset): ?array
    {
        return $this->sorter->sort($dataset);
    }
}
