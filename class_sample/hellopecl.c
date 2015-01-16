/*
   +----------------------------------------------------------------------+
   | MIT license:                                                        |
   +----------------------------------------------------------------------+
   | Authors: Azarashi Taro <goma@azarashi.com>                          |
   +----------------------------------------------------------------------+
*/

/* $ Id: $ */ 

#include "php_hellopecl.h"

#if HAVE_HELLOPECL
static zend_class_entry *myclass_ce;

/* {{{ hellopecl_functions[] */
function_entry hellopecl_functions[] = {
	PHP_ME(Azarashi, hello_pecl , NULL, 0)     // �᥽�å��ɲ�
	PHP_ME(Azarashi, addData    , NULL, 0)     // �᥽�å��ɲ�
	PHP_ME(Azarashi, counter_get, NULL, 0)     // �᥽�å��ɲ�
	{ NULL, NULL, NULL }          // ����«
};
/* }}} */

/* {{{ hellopecl_module_entry
 */
zend_module_entry hellopecl_module_entry = {                 // �⥸�塼�륨��ȥ깽¤��
	STANDARD_MODULE_HEADER,    // ����«
	"hellopecl",               // �⥸�塼��̾��
	NULL,                      // �⥸�塼��ؤδؿ���Ͽ
	PHP_MINIT(hellopecl),      // �⥸�塼���ѥ��󥹥ȥ饯��
	PHP_MSHUTDOWN(hellopecl),  // �⥸�塼���ѥǥ��ȥ饯��
	PHP_RINIT(hellopecl),      // �ꥯ��������˸ƤӽФ�����������󥹥ȥ饯��
	PHP_RSHUTDOWN(hellopecl),  // �ꥯ��������˸ƤӽФ���뽪λ���ǥ��ȥ饯��
	PHP_MINFO(hellopecl),      // PHPINFO�����Ѥ����
	PHP_HELLOPECL_VERSION,     // �⥸�塼��С������
	STANDARD_MODULE_PROPERTIES 
};
/* }}} */

#ifdef COMPILE_DL_HELLOPECL
ZEND_GET_MODULE(hellopecl)
ZEND_DECLARE_MODULE_GLOBALS(counter)
#endif

/* {{{ PHP_MINIT_FUNCTION */
PHP_MINIT_FUNCTION(hellopecl)
{
//	php_printf("PHP_MINIT_FUNCTION\n");
    zend_class_entry ce;
    INIT_CLASS_ENTRY(ce, "Azarashi", hellopecl_functions);
    myclass_ce = zend_register_internal_class(&ce TSRMLS_CC);
//    zend_declare_property_string(myclass_ce, "count", 1, "category", "goma");
    return SUCCESS;
}
/* }}} */

/* {{{ PHP_MSHUTDOWN_FUNCTION */
PHP_MSHUTDOWN_FUNCTION(hellopecl)
{
//	php_printf("PHP_MSHUTDOWN_FUNCTION\n");
	return SUCCESS;
}
/* }}} */

/* {{{ PHP_RINIT_FUNCTION */
PHP_RINIT_FUNCTION(hellopecl)
{
//	php_printf("PHP_RINIT_FUNCTION\n");
	return SUCCESS;
}
/* }}} */

/* {{{ PHP_RSHUTDOWN_FUNCTION */
PHP_RSHUTDOWN_FUNCTION(hellopecl)
{
//	php_printf("PHP_RSHUTDOWN_FUNCTION\n");
	return SUCCESS;
}
/* }}} */

/* {{{ PHP_MINFO_FUNCTION */
PHP_MINFO_FUNCTION(hellopecl)
{
	php_printf("PHP_MINFO_FUNCTION\n");
	php_printf("The unknown extension\n");
	php_info_print_table_start();
	php_info_print_table_row(2, "Version",PHP_HELLOPECL_VERSION " (devel)");
	php_info_print_table_row(2, "Released", "2011-06-18");
	php_info_print_table_row(2, "CVS Revision", "$Id: $");
	php_info_print_table_row(2, "Authors", "Unknown User 'unknown@example.com' (lead)\n");
	php_info_print_table_end();
	/* add your stuff here */

}
/* }}} */

/* {{{ proto string hello_pecl()
   */
PHP_METHOD(Azarashi, hello_pecl)
{
//	php_printf("PHP_FUNCTION\n");

	if (ZEND_NUM_ARGS()>0)  {
		WRONG_PARAM_COUNT;
	}

	do {
		RETURN_STRING("HELLO PECL", 1);
	} while (0);
}
/* }}} hello_pecl */

/* {{{ proto string addData()
   */
PHP_METHOD(Azarashi, addData)
{

	double d;
	long l1, l2;

	if ( ZEND_NUM_ARGS()<2 || zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "ll", &l1, &l2) == FAILURE) {
		WRONG_PARAM_COUNT;
	}
	d = l1 + l2;

	RETURN_LONG(d);
}
/* }}} addData */

/* {{{ proto string counter_get()
   */
PHP_METHOD(Azarashi, counter_get)
{
	RETURN_LONG( COUNTER_G(basic_counter_value++) );
}
/* }}} counter_get */

#endif /* HAVE_HELLOPECL */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
