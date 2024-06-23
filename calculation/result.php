<?php
session_start();
$result = $_SESSION['result'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>結果画面</title>
</head>

<body>
    <div class="site-width question">
        <p><?php echo $result ?>問正解だったよ！</p>
        <p><a href="function/reset.php" class="return_link">再度チャレンジする</a></p>
        <p><a href="mode.php" class="return_link">メニューに戻る</a></p>
    </div>
</body>

</html>