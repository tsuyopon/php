# Overview
This is simple tutorial to use composer.

押さえておくべきポイントは次の２つ
- php composer.phar installによってcomposer.jsonにrequire指定されたパッケージがvendor配下にinstallされていること
- composer.jsonでautoloadを指定することによって、src/配下ではvendor/autoload.phpをrequireすることによって、useやnewをすれば使える。
  - ライブラリ側でもnamespace宣言は必要となる

# Contents
This command will install composer execute files from internet.
```
$ make setup
or
$ curl -sS https://getcomposer.org/installer | php
```

次のコマンドを実行するとvendor配下にcomposer.jsonに記述したrequireをインストールします。
```
$ make install
or
$ php composer.phar install
```

autoload関連をいじったら次を実行してください。
```
$ make generate
or
$ php composer.phar dump-autoload
```

動作を確認するには次のコマンドで可能です。
```
$ php src/test.php 
```

# Reference
- https://kohkimakimoto.github.io/getcomposer.org_doc_jp/doc/01-basic-usage.html
