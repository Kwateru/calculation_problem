<?php
session_start();

//（1つ前の）問題番目
if ($_POST["currentNumber"]) {
    // 正解時の問題番目
    $currentNumber = $_POST["currentNumber"] + 1;
    // 不正解時の問題番目＝正解数
    $resultNumber = $_POST["currentNumber"] - 1;
}
//（1つ前の）問題の正解
if ($_POST["calcResult"]) {
    $calcResult = $_POST["calcResult"];
}
//（1つ前の）選択結果
if ($_POST["selectResult"]) {
    $selectResult = $_POST["selectResult"];
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['selectResult'])) {

    // 正誤判定
    if ($selectResult == $calcResult) {
        // 正解数が20問以上
        if ($resultNumber + 1 >= 20) {
            $_SESSION['result'] = $resultNumber + 1;
            header('Location:../result.php');
            exit(1);
        }
        if (isset($_SESSION['currentNumber'])) {
            $_SESSION['currentNumber']  = $currentNumber;
        }
        header('Location:../index.php');
        exit(1);
    } else {
        // 不正解時
        $_SESSION['result'] = $resultNumber;
        header('Location:../result.php');
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content=" 5; url=../index.php">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <title>入力エラーのページ</title>
</head>

<body>
    <div class="site-width">
        <p>選択肢を選んで下さい！</p>
        <p>これより先は http://localhost/class-b-01-02/calculation/index.php のサイトに遷移します。</p>
        <p>5秒後に自動転送します。</p>
        <p>自動に画面を読み込まない場合は、以下のリンクをクリックして下さい。</p>
        <p><a href="http://localhost/class-b-01-02/calculation/index.php">計算問題のページに戻る</a></p>
    </div>
</body>

</html>