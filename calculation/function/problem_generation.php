<?php
session_start();

$mode = $_SESSION['mode'];

$a = rand(1, 10);
$b = rand(1, 10);
$chooseList = array();

// 足し算の場合
if ($mode == "addition") {
    $symbol = "+";
    $c = $a + $b;
    $chooseList = array($c, rand(1, 20), rand(1, 20));

    // 引き算の場合
} elseif ($mode == "subtraction") {
    $a = rand(10, 20);
    $b = rand(1, 9);
    $symbol = "-";
    $c = $a - $b;
    $chooseList = array($c, rand(1, 20), rand(1, 20));

    // 掛け算の場合
} else {
    $a = rand(10, 20);
    $b = rand(10, 20);
    $symbol = "×";
    $c = $a * $b;
    $chooseList = array($c, (rand(10, 20) * rand(10, 20)), (rand(10, 20) * rand(10, 20)));
}

shuffle($chooseList);
