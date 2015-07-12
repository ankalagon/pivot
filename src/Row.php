<?php

namespace Pivot;

use \ValueObjects\Number;
/**
 *
 */
class Row
{
    private $_data = array();

    function __construct(Array $elements)
    {
        $this->_data = $elements;
    }

    public function get(Number\Integer $field)
    {
        if (false == isset($this->_data[$field->toNative()])) {
            throw new Exceptions\InvalidRowException();
        }

        return $this->_data[$field->toNative()];
    }
}
