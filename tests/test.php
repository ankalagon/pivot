<?php

require __DIR__.'/../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

$pivot = new \Pivot\Pivot();

$pivot->rowsGroupBy(0)
->columnsGroupBy(3)
->setValueField(4)
->setEmptyValue(0)
->setValueType(\Pivot\Pivot::VALUE);


$file = fopen(__DIR__.'/presto_to_pivot', 'r');
while($rawRow = fgets($file, 1024)) {
    $row = explode("\t", $rawRow);
    $pivot->addRow(new \Pivot\Row($row));
}

$pivot->draw('/tmp/pivot_result');
