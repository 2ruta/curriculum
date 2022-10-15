<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>３章練習問題２</title>
</head>
<body>
<form action="result.php" method="get">
名前：<input type="text" name="my_name" />
  <br>
 数字を選んでね！: <select name="number">
    <?php 
        for ($i=1;$i<=6;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>

  <br>
  <input type="submit" value="送信" />
</form>

  <!-- ①フォームを作成しましょう -->
  <!-- ここにフォームを記述してください -->
  </form>
</body>
</html>
 