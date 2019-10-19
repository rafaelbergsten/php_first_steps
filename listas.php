<?php

$idadeList = array(21,23,19,25,30,41,18);
$idadeNewList = [1,3,5];

echo gettype($idadeNewList).PHP_EOL;

echo $idadeList[0].PHP_EOL;

for($i = 0; $i < count($idadeList); $i ++){
    echo $idadeList[$i].PHP_EOL;
}