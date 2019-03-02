<?php

namespace Yashuk803\Sorting\Sorter;

interface SortStrategyInterface
{

    /**
     * @return mixed
     */
    public function sort(array $dataset);
}
