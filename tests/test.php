<?php

require __DIR__.'/../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

$pivot = new \Pivot\Pivot();

$pivot->rowsGroupBy(0)
->columnsGroupBy(1)
->setValueField(2)
->setValueType(\Pivot\Pivot::VALUE);


$file = fopen('/tmp/shuffle', 'r');
while($rawRow = fgets($file, 1024)) {
    $row = explode("\t", $rawRow);
    $pivot->addRow(new \Pivot\Row($row));
}

echo $pivot->draw();
