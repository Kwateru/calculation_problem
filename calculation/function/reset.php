<?php
session_start();
$_SESSION['currentNumber'] = 1;
header('Location:../index.php');
exit(1);