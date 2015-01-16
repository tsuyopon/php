/*
   +----------------------------------------------------------------------+
   | unknown license:                                                      |
   +----------------------------------------------------------------------+
   | Authors: Unknown User <unknown@example.com>                          |
   +----------------------------------------------------------------------+
*/

/* $ Id: $ */ 

#ifndef PHP_HELLOPECL_H
#define PHP_HELLOPECL_H

#ifdef  __cplusplus
extern "C" {
#endif

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#ifdef HAVE_HELLOPECL
#define PHP_HELLOPECL_VERSION "0.0.1dev"


#include <php_ini.h>
#include <SAPI.h>
#include <ext/standard/info.h>
#include <Zend/zend_extensions.h>
#ifdef  __cplusplus
} // extern "C" 
#endif
#ifdef  __cplusplus
extern "C" {
#endif

extern zend_module_entry hellopecl_module_entry;
#define phpext_hellopecl_ptr &hellopecl_module_entry

#ifdef PHP_WIN32
#define PHP_HELLOPECL_API __declspec(dllexport)
#else
#define PHP_HELLOPECL_API
#endif

PHP_MINIT_FUNCTION(hellopecl);
PHP_MSHUTDOWN_FUNCTION(hellopecl);
PHP_RINIT_FUNCTION(hellopecl);
PHP_RSHUTDOWN_FUNCTION(hellopecl);
PHP_MINFO_FUNCTION(hellopecl);

#ifdef ZTS
#include "TSRM.h"
#endif

#define FREE_RESOURCE(resource) zend_list_delete(Z_LVAL_P(resource))

#define PROP_GET_LONG(name)    Z_LVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_LONG(name, l) zend_update_property_long(_this_ce, _this_zval, #name, strlen(#name), l TSRMLS_CC)

#define PROP_GET_DOUBLE(name)    Z_DVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_DOUBLE(name, d) zend_update_property_double(_this_ce, _this_zval, #name, strlen(#name), d TSRMLS_CC)

#define PROP_GET_STRING(name)    Z_STRVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_GET_STRLEN(name)    Z_STRLEN_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_STRING(name, s) zend_update_property_string(_this_ce, _this_zval, #name, strlen(#name), s TSRMLS_CC)
#define PROP_SET_STRINGL(name, s, l) zend_update_property_stringl(_this_ce, _this_zval, #name, strlen(#name), s, l TSRMLS_CC)


PHP_FUNCTION(hello_pecl);
#if (PHP_MAJOR_VERSION >= 5)
ZEND_BEGIN_ARG_INFO_EX(hello_pecl_arg_info, ZEND_SEND_BY_VAL, ZEND_RETURN_VALUE, 0)
ZEND_END_ARG_INFO()
#else /* PHP 4.x */
#define hello_pecl_arg_info NULL
#endif

#ifdef  __cplusplus
} // extern "C" 
#endif

#endif /* PHP_HAVE_HELLOPECL */

#endif /* PHP_HELLOPECL_H */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
