<?php
use phpdevotee\calc\lib\Calculator;

require_once 'config.php';

$newobj =  new Calculator();

echo $newobj->divideMe(2, 0);
