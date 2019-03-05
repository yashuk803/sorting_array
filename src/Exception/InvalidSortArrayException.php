<?php

/*
 * This file is part of sorting-array package.
 * (c) Tarantsova Mariia <yashuk803@gmail.com>
 */

namespace Yashuk803\Sorting\Exception;

/**
 * Class InvalidSortArrayException
 */
class InvalidSortArrayException extends \RuntimeException
{
    public function __construct($dataset)
    {
        parent::__construct('Array can not sort ' . $dataset, 0, null);
    }
}
