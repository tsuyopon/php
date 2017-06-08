# 概要
phpunitを使った最も単純なサンプルです。  

PHPUnitの単純なサンプルによりphpUnitの構成や実行方法、setUp()、dataProviderや簡単なassertなどについてです。


# 概要
次のコマンドでセットアップできる。
```
$ make setup
$ make install
```

インストールされたらバージョンを確認する。
```
$ vendor/bin/phpunit --version
PHPUnit 4.3.5 by Sebastian Bergmann.
```

テストはtest/配下に配置しています。
では、テストを実行してみます。引数にはテスト対象のディレクトリを指定します。
```
$  vendor/bin/phpunit test/
PHPUnit 4.3.5 by Sebastian Bergmann.

.######################### setUp start #######################
F######################### setUp start #######################
.######################### setUp start #######################
F######################### setUp start #######################
.######################### setUp start #######################
.######################### setUp start #######################
.######################### setUp start #######################
.######################### setUp start #######################
F######################### setUp start #######################


Time: 34 ms, Memory: 3.00MB

There were 3 failures:

1) SampleTest::testHelloWorldErrorMessage
Hello, World!のチェックに失敗しました
Failed asserting that false is true.

/home/tsuyoshi/git/phpext/phpunit/sample1/test/SampleTest.php:25

2) SampleTest::testSample2
Failed asserting that 0 matches expected 2.

/home/tsuyoshi/git/phpext/phpunit/sample1/test/SampleTest.php:35

3) SampleTest::testAddDataProvider with data set #3 (1, 1, 3)
Failed asserting that 2 matches expected 3.

/home/tsuyoshi/git/phpext/phpunit/sample1/test/SampleTest.php:53

FAILURES!
Tests: 9, Assertions: 9, Failures: 3.
```

# メモ
### テストの味方
```
[記号]  [テスト結果]
.       テスト成功
F       テスト失敗
E       テストが危険としてマーク
S       テストがスキップされた
I       テストが不完全または未実装としてマーク
```

### assert
```
Assertファンクション 	チェック内容
assertNull($var) 	$var = NULL
assertEquals($val1, $val2) 	$val1 = $val2
assertGreaterThan($expect, $var) 	$expect < $var
assertGreaterThanOrEqual($expect, $var) 	$expect <= $var
assertLessThan($expect, $var) 	$expect > $var
assertLessThanOrEqual($expect, $var) 	$expect >= $var
assertRegExp($ptn, $str) 	$strが正規表現$ptnにマッチ
assertTrue($var) 	$var = TRUE
assertFalse($var) 	$var = FALSE
assertArrayHasKey($key, $array) 	配列$arrayにキー$keyが存在
assertContains($val, $array) 	配列$arrayに値$valが存在
assertContainsOnly($type, $array) 	配列$arrayの値の型がすべて$type
assertCount($count, $array) 	配列$arrayの値の数が$count
assertEmpty($array) 	配列$arrayが空
assertFileExists($file) 	$fileが存在
assertFileEquals($file1, $file2) 	$file1と$file2の内容が等しい
```
