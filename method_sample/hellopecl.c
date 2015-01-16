/*
   +----------------------------------------------------------------------+
   | unknown license:                                                      |
   +----------------------------------------------------------------------+
   | Authors: Unknown User <unknown@example.com>                          |
   +----------------------------------------------------------------------+
*/

/* $ Id: $ */ 

#include "php_hellopecl.h"

#if HAVE_HELLOPECL

/* {{{ hellopecl_functions[] */
function_entry hellopecl_functions[] = {
	PHP_FE(hello_pecl          , hello_pecl_arg_info)
	{ NULL, NULL, NULL }
};
/* }}} */


/* {{{ hellopecl_module_entry
 */
zend_module_entry hellopecl_module_entry = {
	STANDARD_MODULE_HEADER,
	"hellopecl",
	hellopecl_functions,
	PHP_MINIT(hellopecl),     /* Replace with NULL if there is nothing to do at php startup   */ 
	PHP_MSHUTDOWN(hellopecl), /* Replace with NULL if there is nothing to do at php shutdown  */
	PHP_RINIT(hellopecl),     /* Replace with NULL if there is nothing to do at request start */
	PHP_RSHUTDOWN(hellopecl), /* Replace with NULL if there is nothing to do at request end   */
	PHP_MINFO(hellopecl),
	PHP_HELLOPECL_VERSION, 
	STANDARD_MODULE_PROPERTIES
};
/* }}} */

#ifdef COMPILE_DL_HELLOPECL
ZEND_GET_MODULE(hellopecl)
#endif


/* {{{ PHP_MINIT_FUNCTION */
PHP_MINIT_FUNCTION(hellopecl)
{

	/* add your stuff here */

	return SUCCESS;
}
/* }}} */


/* {{{ PHP_MSHUTDOWN_FUNCTION */
PHP_MSHUTDOWN_FUNCTION(hellopecl)
{

	/* add your stuff here */

	return SUCCESS;
}
/* }}} */


/* {{{ PHP_RINIT_FUNCTION */
PHP_RINIT_FUNCTION(hellopecl)
{
	/* add your stuff here */

	return SUCCESS;
}
/* }}} */


/* {{{ PHP_RSHUTDOWN_FUNCTION */
PHP_RSHUTDOWN_FUNCTION(hellopecl)
{
	/* add your stuff here */

	return SUCCESS;
}
/* }}} */


/* {{{ PHP_MINFO_FUNCTION */
PHP_MINFO_FUNCTION(hellopecl)
{
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
PHP_FUNCTION(hello_pecl)
{



	if (ZEND_NUM_ARGS()>0)  {
		WRONG_PARAM_COUNT;
	}


	do {
		RETURN_STRING("HELLO PECL", 1);
	} while (0);
}
/* }}} hello_pecl */

#endif /* HAVE_HELLOPECL */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
