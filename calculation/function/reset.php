<?php
session_start();
$_SESSION['currentNumber'] = 1;
header('Location:../mode.php');
exit(1);