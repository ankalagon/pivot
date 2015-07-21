<?php

namespace Pivot;

use ValueObjects\Number\Integer;

/**
 * Row object
 */
class Row
{
    private $_data = array();

    /**
     * Create Pivot/Row Object base on given array
     * @param Array $elements Array of elements to create Pivot/ROw Object
     */
    function __construct(Array $elements)
    {
        $this->_data = $elements;
    }


    /**
     * Get certain value of one of the object field
     * @param  Integer $field Number of field to retrieve
     * @return Mixed          Data retrieve from the object
     */
    public function get(Integer $field)
    {
        if (false == isset($this->_data[$field->toNative()])) {
            throw new Exceptions\InvalidRowException();
        }

        return $this->_data[$field->toNative()];
    }
}
