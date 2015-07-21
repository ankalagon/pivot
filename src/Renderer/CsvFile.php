<?php

namespace Pivot\Renderer;
use Pivot\Exceptions\RendererException;
use Pivot\Pivot;

class CsvFile implements RendererInterface
{
    private $_file = '';

    public function __construct($file)
    {
        if (false == is_writable($file)) {
            throw new Exceptions\RendererException('File "'.$file.'" not writable');
        }

        $this->_file = $file;
    }

    public function setDelimiter($delimiter)
    {

    }

    public function render(Pivot $pivotObject)
    {
        $pivotObject->prepareToDraw();
        if (false === file_put_contents($this->_file, "\t".implode("\t", $this->_columnDictionaryPHP_EOL)) {

        }

        foreach ($this->_rows as $rowValue => $values) {

            $str = $rowValue;
            foreach ($this->_columnDictionary as $dictionary) {
                if (isset($values[$dictionary])) {
                    $str .= "\t".trim($values[$dictionary]);
                } else {
                    $str .= "\t".$this->_emptyValue;
                }
            }

            file_put_contents($file, $str.PHP_EOL, FILE_APPEND);
        }

    }
}
