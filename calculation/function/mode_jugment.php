<?php
session_start();
// フォームからmodeという名前のデータがPOSTメソッドで送信されたことを確認
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['mode'])) {

    // 送信されたmodeの値をセッション変数に保存
    $_SESSION['mode'] = $_POST['mode'];
    header('Location:../index.php');
    exit(1);
} else {
    header('Location:../mode.php');
}
