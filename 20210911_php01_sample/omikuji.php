<?php

// 1から5の乱数を作成
$random_number = rand(1, 5);

// 乱数の値で条件分岐
if ($random_number == 1) {
  $result =  '大吉';
} else if ($random_number == 2) {
  $result =   '中吉';
} else if ($random_number == 3) {
    $result =   '小吉';
} else if ($random_number == 4) {
    $result =   '凶';
} else if ($random_number == 5) {
    $result =   '大凶';
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
        </style>

</head>



  <body>
    <h1>今日の運勢は<?=$result?>です！</h1>
  </body>
</html>
