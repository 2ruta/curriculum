
<html>
    <?php
    $pass="pass";
    $name="taro";
    if($pass="pass"&&$name="taro"){
        echo "ログイン成功です";
    } else if($pass="pass"&&$name!=="taro"){
        echo "名前が違っています";
    } else if($pass!=="pass"&&$name==="taro"){
        echo "パスワードが違っています";
    } else{
        echo "入力情報が間違っています ";
    }

    ?>

    
</html>
