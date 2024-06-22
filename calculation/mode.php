<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>脳トレ計算問題　モード選択</title>
</head>

<body>
    <div class="site-width">
        <h1>脳トレ計算問題　モード選択画面</h1>
        <h2>問題の種類を選んでね！</h2>

        <form action="function/mode_jugment.php" method="post">
            <label><input type="radio" name="mode" value="addition">足し算</label>
            <label><input type="radio" name="mode" value="subtraction">引き算</label>
            <label><input type="radio" name="mode" value="multiplication">掛け算</label>

            <input type="submit" value="選択">
        </form>
    </div>
</body>

</html>