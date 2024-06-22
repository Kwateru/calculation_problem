<?php
//****************************************
//     パラメーター設定
//****************************************

//現在の問題番目を初期化する。
// $currentNumber = 1;


if (isset($_SESSION['currentNumber'])) {

}else {
    $_SESSION['currentNumber'] = 1;
}

//****************************************
//     問題と選択を生成する処理
//****************************************

//A + B = C
//AとBに乱数を設定する。
$a = rand(1, 10);
$b = rand(1, 10);

//回答の選択を格納するための配列を宣言する。
$chooseList = array();

//AとBを加算した結果をCに設定する。
$c = $a + $b;

//正解（A + Bの結果）を計算して配列に1つ追加する。
$chooseList[] = $c;

/** var_dump($chooseList);
 *  array(1) {
 *    [0]=>
 *    int(14)
 *  }
 */

//配列にランダムな数値を2つ追加する。
$chooseList[] = rand(1, 20);
$chooseList[] = rand(1, 20);

/** var_dump($chooseList);
 *  array(3) {
 *    [0]=>
 *    int(14)
 *    [1]=>
 *    int(3)
 *    [2]=>
 *    int(13)
 *  }
 */

//配列をシャッフルする。
shuffle($chooseList);

/** var_dump($chooseList);
 *  array(3) {
 *    [0]=>
 *    int(13)
 *    [1]=>
 *    int(14)
 *    [2]=>
 *    int(3)
 *  }
 */