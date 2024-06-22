<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['mode'])) {
    $mode = $_POST['mode'];

    if ($mode == "addition") {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $symbol = "+";
        $chooseList = array();
        $c = $a + $b;
        $chooseList[] = $c;
        $chooseList[] = rand(1, 20);
        $chooseList[] = rand(1, 20);
        shuffle($chooseList);
        $_SESSION['a'] = $a;
        $_SESSION['b'] = $b;
        $_SESSION['chooseList'] = $chooseList;
        $_SESSION['symbol'] = $symbol;
        header('Location:../index.php');
        exit(1);
    } elseif ($mode == "subtraction") {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $symbol = "-";
        $chooseList = array();
        $c = $a - $b;
        $chooseList[] = $c;
        $chooseList[] = rand(1, 20);
        $chooseList[] = rand(1, 20);
        shuffle($chooseList);
        $_SESSION['a'] = $a;
        $_SESSION['b'] = $b;
        $_SESSION['chooseList'] = $chooseList;
        $_SESSION['symbol'] = $symbol;
        header('Location:../index.php');
        exit(1);
    } else {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $symbol = "×";
        $chooseList = array();
        $c = $a * $b;
        $chooseList[] = $c;
        $chooseList[] = rand(1, 20);
        $chooseList[] = rand(1, 20);
        shuffle($chooseList);
        $_SESSION['a'] = $a;
        $_SESSION['b'] = $b;
        $_SESSION['chooseList'] = $chooseList;
        $_SESSION['symbol'] = $symbol;
        header('Location:../index.php');
        exit(1);
    }
}
