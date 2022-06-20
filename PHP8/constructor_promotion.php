<?php
/*
 * Constuctor Promotion
 * コンストラクタ仮引数に可視性を指定することで、プロパティ宣言と引数の省略できる記法です。
 * see: https://wiki.php.net/rfc/constructor_promotion
 */
declare(strict_types=1);

final class User
{
    public function __construct(
        public int $id,
        private string $name, // PHP8ではここにカンマを付与することもできるようです
    ){}
}

// 上記宣言は以下と同じです。
//final class User
//{
//    public int $id;
//    private string $name;
//
//    public function __construct(
//        int $id,
//        string $name
//    ){
//        $this->id = $id;
//        $this->name = $name;
//    }
//}

var_dump(new User(1, 'Foo'));
