<?php

namespace Yashuk803\Sorting;
use Yashuk803\Sorting\Sorter\AscendingSortStrategy;
use Yashuk803\Sorting\Sorter\DescendingSortStrategy;

class Factory
{
    public function createAscendingSort(): AscendingSortStrategy
    {
        return new AscendingSortStrategy();
    }
    public function createDescendingSort(): DescendingSortStrategy
    {
        return new DescendingSortStrategy();
    }
}