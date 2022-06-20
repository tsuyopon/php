<?php
/* 
 * var_exportやprint_rの内容をdebug.txtとして出力するサンプルです
 */

$debugtxt = "./debug.txt";
$array = array(
    'key1' => 'hoge_1',
    'key2' => 'hoge_2',
    'key3' => 'hoge_3'
);

echo "output to $debugtxt at log1.php";

//var_exportの場合
error_log(var_export($array, true), 3, $debugtxt);  // 第２引数の3は任意のファイルに出力という意味

//print_rの場合
error_log(print_r($array, true), 3, $debugtxt);
