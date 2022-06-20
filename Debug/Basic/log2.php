<?php
/*
 * バッファリングして一気に最後に出力させる
 */

$debugtxt = "./debug.txt";
$array = array(
    'key1' => 'hoge_1',
    'key2' => 'hoge_2',
    'key3' => 'hoge_3'
);

//バッファへの出力開始
ob_start();

//配列をダンプ
var_dump($array);

//バッファの内容を変数に代入
$content = ob_get_contents();

// バッファの終了
ob_end_clean();

error_log($content,3,$debugtxt);
