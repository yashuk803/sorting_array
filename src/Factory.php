<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting;

use Yashuk803\Sorting\Sorter\AscendingSortStrategy;
use Yashuk803\Sorting\Sorter\DescendingSortStrategy;
use Yashuk803\Sorting\Sorter\NullArrayStrategy;

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
    public function createNullArraySort(): NullArrayStrategy
    {
        return new NullArrayStrategy();
    }
}
