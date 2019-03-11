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
	'GROUPSUB_PACKAGE_LIST'		=> 'Suscripciones',
	'GROUPSUB_NO_PACKAGES'		=> 'No hay suscripciones disponibles.',
	'GROUPSUB_NO_DESC'			=> 'No hay descripción disponible.',
	'GROUPSUB_SUBSCRIPTION'		=> 'Suscripción',
	'GROUPSUB_PRICE'			=> 'Precio',
	'GROUPSUB_LENGTH'			=> 'Duración',
	'GROUPSUB_LENGTH_UNLIMITED'	=> 'Ilimitada',
	'GROUPSUB_SUBSCRIBE'		=> 'Suscribir',
	'GROUPSUB_RENEW'			=> 'Renovar suscripción',
	'GROUPSUB_CHOOSE_TERM'		=> 'Suscribete a %s',
	'GROUPSUB_SUBSCRIBED'		=> 'Estas suscrito',
	'GROUPSUB_SUBSCRIBED_UNTIL'	=> 'Estas suscrito hasta %s',
	'GROUPSUB_CONFIRM'			=> 'Confirmar suscripción a %s',

	'GROUPSUB_RETURN_TITLE'		=> '¡Gracias!',
	'GROUPSUB_RETURN'			=> 'Suscrito',
	'GROUPSUB_RETURN_MESSAGE'	=> 'Te has suscrito a <b>%1$s</b> para %2$s. Espere unos minutos para que se procese su pago y se active su suscripción.',

	'GROUPSUB_PP_LOCALE'	=> 'es_ES',
	'GROUPSUB_PP_BUY_NOW'	=> 'Comprar ahora',

	'GROUPSUB_DECIMAL_SEPARATOR'	=> ',',
	'GROUPSUB_THOUSANDS_SEPARATOR'	=> '.',

	'GROUPSUB_DAYS'		=> array(
		1	=> 'día',
		2	=> 'días',
	),
	'GROUPSUB_WEEKS'	=> array(
		1	=> 'semana',
		2	=> 'semanas',
	),
	'GROUPSUB_MONTHS'	=> array(
		1	=> 'mes',
		2	=> 'meses',
	),
	'GROUPSUB_YEARS'	=> array(
		1	=> 'año',
		2	=> 'años',
	),
));
