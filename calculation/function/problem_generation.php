<?php
session_start();

$mode = $_SESSION['mode'];

$a = rand(1, 10);
$b = rand(1, 10);
$chooseList = array();

if ($mode == "addition") {
    $symbol = "+";
    $c = $a + $b;
}elseif ($mode == "subtraction") {
    $symbol = "-";
    $c = $a - $b;
}else {
    $symbol = "×";
    $c = $a * $b;
}

$chooseList[] = $c;
$chooseList[] = rand(1, 20);
$chooseList[] = rand(1, 20);

shuffle($chooseList);