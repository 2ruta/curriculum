<?php

    //step1
    //フルーツとその単価を対応させた連想配列を定義してください
    $fruits = ["りんご"=>100,"みかん"=>150,"桃"=>500];
    //それぞれ配列の0:リンゴ、1:みかん、2:桃　の順に個数を入力した配列を作成してください
    $quantity = [3,1,6];

    //step2
    //それぞれのフルーツの合計金額を計算する関数を定義してください。
    //引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
    function TotalPrice($fruitsas $key=>$value,$quantity){
        $price=$value*$quantity;
        print $fruits."の値段は".$price."だよ";
    }

    //step3
    //繰り返しを使ってそれぞれのフルーツを書き出してください。

    foreach($fruits as $value){

        echo 
    }
?>