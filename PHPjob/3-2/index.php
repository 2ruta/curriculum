<?php

    //step1
    //フルーツとその単価を対応させた連想配列を定義してください
    $fruits = ["りんご"=>100,"みかん"=>150,"桃"=>500];
    //それぞれ配列の0:リンゴ、1:みかん、2:桃　の順に個数を入力した配列を作成してください
    $quantity = ["りんご"=>3,"みかん"=>1,"桃"=>6];

    //step2
    //それぞれのフルーツの合計金額を計算する関数を定義してください。
    //引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
    
    function calculatePrice(int $fruits, int $quantity) {
        return $fruits*$quantity;
    }
    
    echo "<br>";
   foreach($fruits as $key => $value) {
   echo $key."の合計価格は".calculatePrice($fruits[$key],$quantity[$key])."円です";
   echo "<br>";
}

    //step3
    //繰り返しを使ってそれぞれのフルーツを書き出してください。

   foreach($fruits as $key => $value){
    echo $key;
   echo "<br>";
   }
?>