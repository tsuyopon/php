# 目的
Apacheと連携してPHPを使いたい場合があります。
そのような場合にさくっとHTTPポートを立ち上げることができるイメージがあります。それが php:<version>-apacheです。

php公式からイメージが提供されています。
- https://hub.docker.com/_/php?tab=tags&page=1&ordering=last_updated

# 詳細

### イメージの取得
7系、8系のstable(2021/06/26時点)のイメージは次のように取得することが可能です。
```
$ sudo docker pull php:8.0.7-apache
$ sudo docker pull php:7.4.20-apache
```

### Apache + PHPによる機能を使ってみる。
このレポジトリ直下にindex.phpが配置されています。
このディレクトリ直下を/var/www/htmlとしてマウントさせます。ローカルの8080からContainerの80へとアクセスできるようになっています。
```
$ sudo docker run --rm -p 8000:80 -v `pwd`:/var/www/html php:8.0.7-apache
```

次のURLでアクセスすることができます。
- http://localhost:8000/

