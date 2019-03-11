<?php
/**
 *
 * Group Subscription. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Spanish translation by iorG19 (https://www.palabradeiorg.es)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'El campo `%s` recibió un valor fuera de su rango.',
	'EXCEPTION_TOO_LONG'			=> 'El campo `%s` recibió un valor más largo que su longitud máxima.',
	'EXCEPTION_NOT_UNIQUE'			=> 'El campo `%s` recibió un valor que no es único.',
	'EXCEPTION_INVALID_CURRENCY'	=> 'El campo `%s` recibió un código de moneda no válido.',
	'EXCEPTION_INVALID_IDENT'		=> 'El campo `%s` debe contener solo a-z, 0-9, _, y comenzar con una letra.',
));
