<?php

namespace Pivot;

use \ValueObjects\Number;

class Pivot
{
    /**
     * row in pivot table
     * @var Integer
     */
    private $_rowsGroupBy = null;

    /**
     * column in pivot table
     * @var Integer
     */
    private $_columnsGroupBy = null;

    /**
     * fields where values are stored
     * @var Integer
     */
    private $_valueField = null;

    /**
     * Type of returning values in pivot table
     * @var Integer
     */
    private $_valueType = null;

    /**
     * Array of PivotRows objects
     * @var array
     */
    private $_rows = array();

    /**
     * Number of added rows to pivot table
     * @var Integer
     */
    private $_count = 0;

    /**
     * Columns dictionary of value
     * @var array
     */
    private $_columnDictionary = array();

    /**
     * Default empty value
     * @var array
     */
    private $_emptyValue = '';

    /**
    * Types of returned values
    */
    const SUM   = 1;
    const VALUE = 2;

    /**
     *
     * @param  Integer $number
     * @throws \ValueObjects\Exception\InvalidNativeArgumentException
     * @return $this;
     */
    public function rowsGroupBy($number)
    {
        $this->_rowsGroupBy = new Number\Integer($number);
        return $this;
    }

    /**
     *
     * @param  Integer $number
     * @throws \ValueObjects\Exception\InvalidNativeArgumentException
     * @return $this
     */
    public function columnsGroupBy($number)
    {
        $this->_columnsGroupBy = new Number\Integer($number);
        return $this;
    }

    /**
     *
     * @param  Integer $number
     * @throws \ValueObjects\Exception\InvalidNativeArgumentException
     * @return $this
     */
    public function setValueField($number)
    {
        $this->_valueField = new Number\Integer($number);
        return $this;
    }

    /**
     * Set default value if value is not present in pivot
     * @param  String $value
     * @throws \ValueObjects\Exception\InvalidNativeArgumentException
     * @return $this
     */
    public function setEmptyValue($value)
    {
        $this->_emptyValue = $value;
        return $this;
    }

    /**
     * Set valuetype to return in pivot table
     * @param Integer $type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValueType($type)
    {
        if (false == in_array($type, array(self::VALUE, self::SUM))) {
            throw new \InvalidArgumentException('Invalid valueType');
        }

        $this->_valueType = $type;
        return $this;
    }

    /**
     * add rows to Pivot objects
     * @param PivotRow $row
     * @throws \InvalidArgumentException
     */
    public function addRow(Row $pivotRow)
    {
        if ($this->_rowsGroupBy == false || $this->_columnsGroupBy == false || $this->_valueType == false) {
            throw new \InvalidArgumentException('Set rowsGroupBy, columnsGroupBy and valueType first');
        }

        try {
            $this->_add($pivotRow);
        } catch (Exceptions\InvalidRowException $e) {
            return false;
        }
    }

    /**
     * Add pivotRow to all rows and process dictionary
     * @param Row $pivotRow
     */
    private function _add(Row $pivotRow)
    {
        $rowValue = $pivotRow->get($this->_rowsGroupBy);
        $columnValue = $pivotRow->get($this->_columnsGroupBy);
        $value = $pivotRow->get($this->_valueField);

        $this->_columnDictionary[$columnValue] = $columnValue;
        $this->_count++;

        $this->_rows[$rowValue][$columnValue] = $this->_processValue($rowValue, $columnValue, $value);
    }

    /**
     * [_processValue description]
     * @param  String $rowValue    Position of column to find in already calculated collection
     * @param  String $columnValue Position of column to find in already calculated collection
     * @param  Mixed $value        Value to process
     * @return Mixed               Processed value
     */
    private function _processValue($rowValue, $columnValue, $value)
    {
        if ($this->_valueType == self::SUM) {
            if (isset($this->_rows[$rowValue][$columnValue])) {
                $value = $value + $this->_rows[$rowValue][$columnValue];
            }

            return $value;
        } elseif ($this->_valueType == self::VALUE) {
            return $value;
        } else {
            throw new Exceptions\InvalidValueTypeException('Invalid valueType, first set valueType using setValueType  ');
        }
    }

    /**
     * Sort dictionary ascending
     * @return null
     */
    public function prepareToDraw()
    {
        asort($this->_columnDictionary);
    }
}
