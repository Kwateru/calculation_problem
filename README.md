<img src="https://img.shields.io/badge/PHP-ccc.svg?logo=php&style=flat"> <img src="https://img.shields.io/badge/-CSS3-1572B6.svg?logo=css3&style=flat"> <img src="https://img.shields.io/badge/-HTML5-333.svg?logo=html5&style=flat">
<img src="https://img.shields.io/badge/-Windows-0078D6.svg?logo=windows&style=flat">
<img src="https://img.shields.io/badge/-Visual%20Studio%20Code-007ACC.svg?logo=visual-studio-code&style=flat">
<img src="https://img.shields.io/badge/-GitHub-181717.svg?logo=github&style=flat">
<img src="https://img.shields.io/badge/-Docker-EEE.svg?logo=docker&style=flat">

![image](https://github.com/Kwateru/calculation_problem/assets/33171676/89593b8e-9a49-4948-93a8-5485d1660ad5)



## 1.概要
計算式を表示して、択一問題形式で正解を1つ選ぶゲーム。（モード機能あり）
<br><br>

## 2.機能要件
- レベル1：問題画面（足し算モード）
  - 自動生成した「計算式」と「選択肢」を表示する。
  - 選択肢の中には正解が1つ存在する。
  - 正解の位置は毎回不規則である。

- レベル2：失敗時リザルト画面遷移
  - 正解したときは次の問題に進むが不正解のときはリザルト画面に遷移する。
  - リザルト画面には正解した数を表示する。

- レベル3：連続回答数制限（最大20問）
  - 20問連続で正解したときはリザルト画面に遷移する。
  - リザルト画面は不正解のときのリザルト画面と共通化する。

- レベル4：モード選択画面
  - 3つのモードから選ぶことが出来る。
  - 種類は「足し算」と「引き算」と「掛け算」。
  - リザルト画面にはモード選択画面のリンクを張る。

- レベル5：引き算モード
  - 「選択と正解」は常に正の数であること。

- レベル6：掛け算モード
  - 難易度調整をするためのロジックを1つ以上用意する。
  - 例）「選択肢の値」がそれぞれなるべく遠い値にならない工夫をする。
<br><br>

## 3.制作期間
10日間
<br><br>

## 4.こだわったポイント
 - モード選択画面のデザインにゲーム要素を取り入れてみたこと
 - 正解数に応じてgifを結果画面に表示させてみたこと
<br><br>

## 5.仕様動作のイメージ
![2024-06-23_23h53_04](https://github.com/Kwateru/calculation_problem/assets/33171676/6a31da66-7e5d-4f35-a255-fb9e4677221d)


## 6.機能一覧
| モード選択画面 |　計算問題の画面 |
| ---- | ---- |
| ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/89593b8e-9a49-4948-93a8-5485d1660ad5) | ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/309d85e3-b6e1-410f-abe0-90c20c00c59e) |
| 足し算、引き算、掛け算を選択出来る機能を実装しました。 | 選択したモードの問題が生成される機能を実装しました。 |

| 無回答の画面 |　正解時の画面 |
| ---- | ---- |
| ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/3a35ded5-275f-4b4c-8277-ba39b5a5a742) | ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/4b195413-0c00-4223-8114-d022cd84cd57) |
| 無回答時は元のページに自動リダイレクトする機能を実装しました。 | 問題番目がインクリメントされ新しい問題が生成される機能を実装しました。 |

| 結果画面１ |　結果画面２ |
| ---- | ---- |
| ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/ef1b4ad1-ee61-4580-ba07-35aa55d449ab) | ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/4f79f065-b624-4e15-a9d3-0fc65f8d3873) |
| 正解数が9問以下の時はヒヨコが泣いている画面を実装しました。 | 正解数が10～14問の時は、ヒヨコがニョロニョロしている画面を実装しました。 |

| 結果画面３ |　結果画面４ |
| ---- | ---- |
| ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/f6b2ff27-fd29-4f26-a3d6-ec3731b897c1) | ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/305efdf3-b392-4e59-b6e6-ef768846ecd1) |
| 正解数が15～19問の時は、ヒヨコがオタ芸で応援している画面を実装しました。 | 全問正解した時は、ヒヨコが陽気なダンスで喜んでいる画面を実装しました。 |

| 再挑戦の処理 |　モード選択をやり直す処理 |
| ---- | ---- |
| ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/56af11bc-444a-43b5-9ca0-609e61bf4f18) | ![image](https://github.com/Kwateru/calculation_problem/assets/33171676/d4e2e972-74fe-41d4-9d8b-656666545958) |
| 問題番目を初期化して同じモードで1問目から再開する機能を実装しました。 | モード選択の画面に遷移して問題番目も初期化する機能を実装しました。 |

<br><br>

## 7.使用技術
| Category          | Technology Stack    | 
| ----------------- | ------------------- | 
| Frontend          | HTML, CSS           | 
| Backend           | PHP                 | 
| Environment setup | Docker              | 
| etc.              | Git, GitHub, vscode | 

<br><br>

## 8.今後の展望
 - 結果画面にランキング機能を実装したい
 - よりゲーム性のあるデザインに変更したい
 - 割り算のモードを追加したい

<br><br>
