<?php
/*
 * バックトレースを表示します。
 * https://www.php.net/manual/ja/function.debug-print-backtrace.php
 */

function a() {
    b();
}

function b() {
    c();
}

function c(){
    echo "<pre>";
    debug_print_backtrace();
    echo "</pre>";
}

a();


// 以下のバックトレースが画面上に表示されます。
/*
#0  c() called at [/var/www/html/Debug/Basic/debug_print_backtrace.php:12]
#1  b() called at [/var/www/html/Debug/Basic/debug_print_backtrace.php:8]
#2  a() called at [/var/www/html/Debug/Basic/debug_print_backtrace.php:21]
*/
