dnl
dnl $ Id: $
dnl

PHP_ARG_ENABLE(hellopecl, whether to enable hellopecl functions,
[  --enable-hellopecl         Enable hellopecl support])

if test "$PHP_HELLOPECL" != "no"; then
  export OLD_CPPFLAGS="$CPPFLAGS"
  export CPPFLAGS="$CPPFLAGS $INCLUDES -DHAVE_HELLOPECL"

  AC_MSG_CHECKING(PHP version)
  AC_TRY_COMPILE([#include <php_version.h>], [
#if PHP_VERSION_ID < 40000
#error  this extension requires at least PHP version 4.0.0
#endif
],
[AC_MSG_RESULT(ok)],
[AC_MSG_ERROR([need at least PHP 4.0.0])])

  export CPPFLAGS="$OLD_CPPFLAGS"


  PHP_SUBST(HELLOPECL_SHARED_LIBADD)
  AC_DEFINE(HAVE_HELLOPECL, 1, [ ])

  PHP_NEW_EXTENSION(hellopecl, hellopecl.c , $ext_shared)

fi

