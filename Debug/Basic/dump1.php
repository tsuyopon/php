<?php
/*
 * print_r, var_dump, var_exportのサンプルです。
 */


$data = array(
    "A" => "Apple",
    "B" => "Banana",
    "C" => "Cherry"
);

// print_r() は、 変数の値に関する情報を解り易い形式で表示します。
echo "---print_r---\n";
print_r($data);

// var_dumpは、指定した式に関してその型や値を含む構造化された情報を返します。出力する際に<pre></pre>で囲むと見やすくなります。
echo "---var_dump---\n";
var_dump($data);

// var_exportは、var_dumpに似ているのですが返される表現が有効なPHPコードとなります
echo "---var_export---\n";
var_export($data);

/* 出力サンプル */
/*

---print_r---
Array
(
    [A] => Apple
    [B] => Banana
    [C] => Cherry
)
---var_dump---
array(3) {
  ["A"]=>
  string(5) "Apple"
  ["B"]=>
  string(6) "Banana"
  ["C"]=>
  string(6) "Cherry"
}
---var_export---
array (
  'A' => 'Apple',
  'B' => 'Banana',
  'C' => 'Cherry',
)

*/
