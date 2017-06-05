# Overview
This is simple tutorial to use composer.

$B2!$5$($F$*$/$Y$-%]%$%s%H$O<!$N#2$D(B
- php composer.phar install$B$K$h$C$F(Bcomposer.json$B$K(Brequire$B;XDj$5$l$?%Q%C%1!<%8$,(Bvendor$BG[2<$K(Binstall$B$5$l$F$$$k$3$H(B
- composer.json$B$G(Bautoload$B$r;XDj$9$k$3$H$K$h$C$F!"(Bsrc/$BG[2<$G$O(Bvendor/autoload.php$B$r(Brequire$B$9$k$3$H$K$h$C$F!"(Buse$B$d(Bnew$B$r$9$l$P;H$($k!#(B
  - $B%i%$%V%i%jB&$G$b(Bnamespace$B@k8@$OI,MW$H$J$k(B

# Contents
This command will install composer execute files from internet.
```
$ make setup
or
$ curl -sS https://getcomposer.org/installer | php
```

$B<!$N%3%^%s%I$r<B9T$9$k$H(Bvendor$BG[2<$K(Bcomposer.json$B$K5-=R$7$?(Brequire$B$r%$%s%9%H!<%k$7$^$9!#(B
```
$ make install
or
$ php composer.phar install
```

autoload$B4XO"$r$$$8$C$?$i<!$r<B9T$7$F$/$@$5$$!#(B
```
$ make generate
or
$ php composer.phar dump-autoload
```

$BF0:n$r3NG'$9$k$K$O<!$N%3%^%s%I$G2DG=$G$9!#(B
```
$ php src/test.php 
```

# Reference
- https://kohkimakimoto.github.io/getcomposer.org_doc_jp/doc/01-basic-usage.html
