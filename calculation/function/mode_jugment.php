<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['mode'])) {
    $_SESSION['mode'] = $_POST['mode'];
    header('Location:../index.php');
    exit(1);
}