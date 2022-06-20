<?php
/*
 * Constuctor Promotion
 * �R���X�g���N�^�������ɉ������w�肷�邱�ƂŁA�v���p�e�B�錾�ƈ����̏ȗ��ł���L�@�ł��B
 * see: https://wiki.php.net/rfc/constructor_promotion
 */
declare(strict_types=1);

final class User
{
    public function __construct(
        public int $id,
        private string $name, // PHP8�ł͂����ɃJ���}��t�^���邱�Ƃ��ł���悤�ł�
    ){}
}

// ��L�錾�͈ȉ��Ɠ����ł��B
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
