<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

class NullArrayStrategy implements SortStrategyInterface
{
    /**
     * @return null
     */
    public function sort(array $dataset)
    {
        return $dataset = null;
    }
}
