<?php
/*
 * PHPのマジック定数について
 * https://www.php.net/manual/ja/language.constants.magic.php
 * cf. https://pisuke-code.com/php-magic-constants/
 */

namespace hello;

class Hoge {
	function __construct() {

		echo "<pre>";

		# 関数名、メソッド名を取得
		echo __FUNCTION__."\n";

		# 行番号を取得
		echo __LINE__."\n";

		# ディレクトリを取得
		echo __DIR__."\n";

		# ファイル名を取得
		echo __FILE__."\n";

		# クラス名を取得
		echo __CLASS__."\n";

		# クラス名+メソッド
		echo __METHOD__."\n";

		// 名前空間を取得
		echo __NAMESPACE__."\n";

		echo "</pre>";
	}
}

new Hoge();

// 出力サンプル
/*

__construct
19
/var/www/html/Debug/Basic
/var/www/html/Debug/Basic/macro1.php
hello\Hoge
hello\Hoge::__construct
hello

*/
