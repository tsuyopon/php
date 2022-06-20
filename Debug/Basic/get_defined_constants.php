<?php
/*
 * 定義済みの定数一覧を連想配列として返します
 * https://www.php.net/manual/ja/function.get-defined-constants.php
 */

echo "<pre>";
print_r( get_defined_constants() );


// 出力サンプル(非常に多いので、多くは割愛)
/*

Array
(
    [E_ERROR] => 1
    [E_RECOVERABLE_ERROR] => 4096
    [E_WARNING] => 2
    [E_PARSE] => 4
    [E_NOTICE] => 8
    [E_STRICT] => 2048
    [E_DEPRECATED] => 8192
    [E_CORE_ERROR] => 16


*/
