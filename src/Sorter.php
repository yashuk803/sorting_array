<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting;

use Yashuk803\Sorting\Sorter\SortStrategyInterface;

/**
 * Class Sorter
 */
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
    /**
     * @param $sorter SortStrategyInterface;
     *
     */
    public function setSorterStrategy(SortStrategyInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): ?array
    {
        return $this->sorter->sort($dataset);
    }
}
