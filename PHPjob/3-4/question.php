<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="stylesheet.css">
 
  <title>3章チェックテスト</title>
</head>

<?php
$my_name = $_POST['my_name'];

//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<br>
<form action="question.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>


<input type="radio" name="q1" value="80"> 80
<input type="radio" name="q1" value="22"> 22
<input type="radio" name="q1" value="20"> 20
<input type="radio" name="q1" value="21"> 21
<br>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<br>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<input type="radio" name="q2" value="PHP"> PHP
<input type="radio" name="q2" value="Python"> Python
<input type="radio" name="q2" value="JAVA"> JAVA
<input type="radio" name="q2" value="HTML"> HTML
<br>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<input type="radio" name="q3" value="join">join
<input type="radio" name="q3" value="select">select
<input type="radio" name="q3" value="insert">insert
<input type="radio" name="q3" value="update">update
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="submit" value="回答する" />

</form>

</html>
