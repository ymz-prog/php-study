<?php


$test1 = 1;
$test2 = 3;


// foreach
/*
 $members = [
     'hond' => [
         'height' => 177,
         'hobbyt' => 'soccer'
     ],
     'kag' => [
         'height' => 170,
         'hobbyt' => 'soccer'
     ]
 ];


 foreach($members as $memKey => $member) {
     foreach($member as $key => $value){
         echo $memKey . 'の' . $key . 'は' . $value . 'です。';
         echo '<br>';
     }
 }
 */



// function tes() {

//     echo 'テスト関数だよ';

// }

// $str_2 = 'これは、関数の、テスト用、文字列、です。';

// var_dump( explode('、', $str_2));

// implode();

// $str_3 = 'この中に文字列、はありますかねえ';

// echo( preg_match('/文字列/', $str_3));


// echo mb_substr('あかさたあ', 3);

// $strArray = ['これは', 55, 'テストの', '文字列の', '配列だよね'];

// var_dump(implode( $strArray));


$globalVariable = 'グローバル変数だよ';

include __DIR__.'/phpinfo.php';

// echo $requireTestStr;

// commonTest();

echo __DIR__;