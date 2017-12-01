クラスサンプル
====
#概要
インスタンス呼び出しによるクラスサンプル
static呼び出しのクラスではありません

#セットアップ
1.  $ ./phpize
2.  $ ./configure [--enable--hellopecl] 
3.  $ make
4.  $ make test
5.  $ [sudo] make install
you can see hellopecl.so in /usr/lib64/php/modules/ directory
6.  $ sudo vim /etc/php.d/hellopecl.ini 
extension=hellopecl.so
7.  $ sudo apachectl restart

#サンプルコード
非常に単純なサンプル
```
<?php
	$class = new Azarashi();
	echo $class->hello_pecl()."</br>\n";
	echo $class->addData(1, 2)."</br>\n";
	echo $class->addData(100, 200)."</br>\n";
	echo $class->counter_get()."</br>\n";
	echo $class->counter_get()."</br>\n";
	echo $class->counter_get()."</br>\n";
	phpinfo();
```

#動作確認
php-5.4.17-2.fc17.x86_64
php-devel-5.4.17-2.fc17.x86_64


# ファイル説明
CREDITS:         配布時に添付する場合のためのファイル
EXPERIMENTAL:    配布時に添付する場合のためのファイル
README:          自動生成されるファイル
config.m4:       UNIX用のビルドシステムファイル
config.w32:      Windows用のビルドシステムファイル
hellopecl.c:     エクステンション本体
php_hellopecl.h: エクステンションヘッダファイル


