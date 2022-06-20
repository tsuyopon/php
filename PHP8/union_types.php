<?php
/*
 * 型宣言で使用する型を|で複数指定できます。
 * cf: https://blog.shin1x1.com/entry/php8-on-docker
 */
declare(strict_types=1);  // PHP7から導入された厳格な型検査指定

// int と string を型指定。これ以外ではエラーになります。
$f = function (int|string $v) {
    var_dump($v);
};

$f(100);   // OK
$f("abc"); // OK


// 以下のエラーメッセージが表示されます。
// Fatal error: Uncaught TypeError: {closure}(): Argument #1 ($v) must be of type string|int, bool given, called in /var/www/html/PHP8/union_types.php on line 11 and defined in /var/www/html/PHP8/union_types.php:5 Stack trace: #0 /var/www/html/PHP8/union_types.php(11): {closure}(true) #1 {main} thrown in /var/www/html/PHP8/union_types.php on line 5
$f(true); // NG
