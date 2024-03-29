<?php
/*
 * debug_backtrace()を利用してファイル名・行数・関数名を取得する。また引き渡された値を表示する
 * cf. http://raining.bear-life.com/php/php%E3%81%A7%E9%96%8B%E7%99%BA%E6%99%82%E3%81%AB%E4%BD%BF%E7%94%A8%E3%81%97%E3%81%A6%E3%81%84%E3%82%8B%E3%83%87%E3%83%90%E3%83%83%E3%82%AFdebug%E6%96%B9%E6%B3%95
 * 
 * 公式リファレンス: https://www.php.net/manual/ja/function.debug-backtrace.php
 */

$arr = array('aaa', 'bbb', 'ccc');

dp($arr);

function dp() {
    $arr = debug_backtrace();
    echo '<div> file: ' . $arr[0]['file'] . '</div>';
    echo '<div> line: ' . $arr[0]['line'] . '</div>';
    echo '<div> function: ' . $arr[0]['function'] . '</div>';
 
    // 関数に指定された引数を取得する
    $args = func_get_args();
    echo '<pre style="border:1px solid #CCC; padding: 5px; font-family: monospace; font-size: 12px;">';
    foreach ($args as $val) {
        print_r($val);
    }
    echo '</pre>';
}
