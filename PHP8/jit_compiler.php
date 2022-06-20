<?php
/*
 * PHP 8 注目機能の1つでもある JIT コンパイラです。
 * フィボナッチ数を再帰実行して求める例です。(初回は少し時間がかかります)
 *
 * cf. https://blog.shin1x1.com/entry/php8-on-docker
 */
declare(strict_types=1);

$fib = function (int $i) use (&$fib) {
    return $i < 2 ? $i : $fib($i - 1) + $fib($i - 2);
};
var_dump($fib(40));
