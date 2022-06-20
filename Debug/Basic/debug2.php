<?php
// error_reportingの挙動について
// cf. https://1-notes.com/php-error-reporting/

echo "START";

//PHPエラーを表示
error_reporting(E_ALL);

// このエラーは画面に出力される
$x1 = 10/0;

//PHPエラーを非表示
error_reporting(0);

// このエラーは画面に出力されない
$x2 = 10/0;

echo "END";
