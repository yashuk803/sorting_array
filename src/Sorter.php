<?php

namespace Yashuk803\Sorting;

use Yashuk803\Sorting\Sorter\NullArrayStrategy;
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

    /**
     * @return mixed
     */
    public function sort(array $dataset)
    {
        if(empty($dataset)) {
            $this->sorter = new NullArrayStrategy();
        }
        return $this->sorter->sort($dataset);
    }
}