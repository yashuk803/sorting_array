<?php

namespace Yashuk803\Sorting\Exception;

class InvalidSortArrayException extends \DomainException
{
    public function __construct($dataset)
    {
        parent::__construct('Array can not sort ' . $dataset, 0, null);
    }
}
