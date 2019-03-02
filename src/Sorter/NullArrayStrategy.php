<?php

namespace Yashuk803\Sorting\Sorter;

class NullArrayStrategy implements SortStrategyInterface
{
    public function sort(array $dataset): string
    {
        return \sprintf('Array is empty' . \PHP_EOL);
    }
}
