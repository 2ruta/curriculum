<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="stylesheet.css">
 
  <title>3章チェックテスト</title>
</head>
<body>
<main>
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え<
    <?php
        if($q1 == '80'){
	    echo '正解';
        }else{
	    echo '不正解';
        }
    ?>
</p>
<!--作成した関数を呼び出して結果を表示-->

    <p><!--作成した関数を呼び出して結果を表示-->③の答え
        <?php
            if($q2 == 'HTML'){
	        echo '正解';
            }else{
	        echo '不正解';
            }
        ?>
    </p>
<!--作成した関数を呼び出して結果を表示-->

    <p><!--作成した関数を呼び出して結果を表示-->③の答え
        <?php
            if($q3 == 'select'){
	        echo '正解';
            }else{
	        echo '不正解';
            }
        ?>
    </p>
</main>>
</body>
</html>