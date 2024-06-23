<?php
session_start();
$result = $_SESSION['result'];

function gif_display($result){
    if ($result == 20) {
        return '<p><img src="image/dancing-hiyoko.gif" alt="ヒヨコが全問正解したあなたに陽気なダンスを見せている図です。" height="200" width="200"></p>';
    }elseif ($result >= 15) {
        return '<p><img src="image/otagei-hiyoko.gif" alt="ヒヨコがオタ芸であと少しのあなたを励ましている図です。" height="200" width="200"></p>';
    }elseif ($result >= 10) {
        return '<p><img src="image/nyoronyoro-hiyoko.gif" alt="ヒヨコがあたなの正解数が微妙で何も考えてなかった図です。" height="200" width="200"></p>';
    }else {
        return '<p><img src="image/pien-hiyoko.gif" alt="ヒヨコがあなたの正解数に悲しんでいる図です。" height="200" width="200"></p>';
    }
}