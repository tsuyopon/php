<?php
/*
 * PHPの実行時設定です
 *    https://www.php.net/manual/ja/errorfunc.configuration.php
 *
 * SeeAlso: https://stackoverflow.com/questions/845021/how-can-i-get-useful-error-messages-in-php
 */

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);             // デバッグ以外は0にすると画面上に表示されない
/*
 * これが1の場合には
 * 「Fatal error: Uncaught DivisionByZeroError: Division by zero in /var/www/html/Debug/Basic/debug1.php:17 Stack trace: #0 {main} thrown in /var/www/html/Debug/Basic/debug1.php on line 17」
 * のようなエラーが画面上に表示されます。
 */

error_reporting(E_ALL);

$x = 1/0;
echo $x;
