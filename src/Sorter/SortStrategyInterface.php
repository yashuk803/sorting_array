<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Sorter;

interface SortStrategyInterface
{
    public function sort(array $dataset): ?array;
}
