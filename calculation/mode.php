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
            <div class="mode">
                <label><input type="radio" name="mode" value="addition"><img src="image/addition.png" alt="足し算を擬人化したイラストです。" height="100" width="100"></label>
                <label><input type="radio" name="mode" value="subtraction"><img src="image/subtraction.png" alt="引き算を擬人化したイラストです。" height="100" width="100"></label>
                <label><input type="radio" name="mode" value="multiplication"><img src="image/multiplication.png" alt="掛け算を擬人化したイラストです。" height="100" width="100"></label>
                <input type="submit" value="選択">
            </div>
        </form>
    </div>
</body>

</html>