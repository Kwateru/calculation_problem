<?php
session_start();

$currentNumber = (isset($_SESSION['currentNumber'])) ? $_SESSION['currentNumber'] : 1;

// 計算問題と選択肢を自動生成
// include('function/question.php');

include('function/problem_generation.php');

?>
<html>

<head>
    <title>Sample Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="site-width">
        <!-- 現在の問題番目 -->
        <h1>脳トレ計算ゲーム（<?php echo $currentNumber; ?>問目）</h1>

        <!-- 問題文 -->
        <h2>問題</h2>
        <p class="question"><?php echo $a . " " . $symbol . " " . $b; ?> = ?</p>
        <h2>選択</h2>
        <form action="function/judgment.php" method="post">
            <!-- 選択1 -->
            <label><input type="radio" name="selectResult" value="<?php echo $chooseList[0]; ?>" /> <?php echo $chooseList[0]; ?></label>
            <!-- 選択2 -->
            <label><input type="radio" name="selectResult" value="<?php echo $chooseList[1]; ?>" /> <?php echo $chooseList[1]; ?></label>
            <!-- 選択3 -->
            <label><input type="radio" name="selectResult" value="<?php echo $chooseList[2]; ?>" /> <?php echo $chooseList[2]; ?></label>

            <!-- 正解（次のページ内で比較して正誤判定をする） -->
            <input type="hidden" name="calcResult" value="<?php echo $c; ?>">

            <!-- 現在の問題番目 -->
            <input type="hidden" name="currentNumber" value="<?php echo $currentNumber; ?>">

            <input type="submit" value="回答">
        </form>
        <p><a href="function/reset.php" class="return_link">最初に戻る</a></p>
    </div>
</body>

</html>