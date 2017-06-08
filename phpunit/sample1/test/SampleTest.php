<?php

// NOTE: テスト用の巻数は必ずtestというprefixで始めること
class SampleTest extends PHPUnit_Framework_TestCase {

    private $value;

    // テストごとに毎回実行される
    public function setUp() {
        printf("######################### setUp start #######################\n");
        $this->value = "hoge";
    }

    public function testHelloWorld()
    {
        $message = 'Hello, World!';

        $this->assertTrue($message === 'Hello, World!');  // 成功する
    }

    public function testHelloWorldErrorMessage()
    {
        $message = 'Hello, World!';

        $this->assertTrue($message !== 'Hello, World!', "Hello, World!のチェックに失敗しました");  // エラーだとこの文字が表示される
    }

    public function testSample1()
    {
      $this->assertEquals(2, 1 + 1);   // 成功する
    }

    public function testSample2()
    {
      $this->assertEquals(2, 1 - 1);   // 失敗する
    }

    public function testException()
    {
      try {
          $this -> fail("例外発生なし");
      } catch(Exception $e) {
          $this -> assertTrue(true);  // 成功する
      }
    }

    // データプロバイダを使ったテスト
    /**
     * @dataProvider additionProvider
     */
    public function testAddDataProvider($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }

}
