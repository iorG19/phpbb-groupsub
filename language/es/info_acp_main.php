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
	'ACP_GROUPSUB_TITLE'	=> 'Group Subscription',

	'ACP_GROUPSUB_SETTINGS'					=> 'Ajustes',
	'ACP_GROUPSUB_SETTINGS_TITLE'			=> 'Ajustes para Suscripción de grupo',
	'ACP_GROUPSUB_SETTINGS_SAVED'			=> 'Las opciones de suscripción de grupo se han guardadado correctamente',
	'ACP_GROUPSUB_SETTINGS_PAYPAL'			=> 'Configuraciones de PayPal',
	'ACP_GROUPSUB_PP_SANDBOX'				=> 'Habilitar el modo sandbox',
	'ACP_GROUPSUB_PP_SANDBOX_EXPLAIN'		=> 'El modo sandbox le permite probar los pagos de PayPal sin usar fondos reales.',
	'ACP_GROUPSUB_PP_SB_BUSINESS'			=> 'Correo electrónico de Sandbox',
	'ACP_GROUPSUB_PP_SB_BUSINESS_EXPLAIN'	=> 'Esta es la dirección de correo electrónico de su cuenta Sandbox de PayPal.',
	'ACP_GROUPSUB_PP_BUSINESS'				=> 'Email de Paypal',
	'ACP_GROUPSUB_PP_BUSINESS_EXPLAIN'		=> 'Esta es la dirección de correo electrónico de la cuenta de PayPal que aceptará pagos.',
	'ACP_GROUPSUB_SETTINGS_DEFAULTS'		=> 'Paquetes predeterminados',
	'ACP_GROUPSUB_DEFAULT_CURRENCY'			=> 'Moneda por defecto',
	'ACP_GROUPSUB_DEFAULT_CURRENCY_EXPLAIN'	=> 'Esta es la moneda predeterminada para todos los paquetes nuevos y que se puede modificar por paquete.',
	'ACP_GROUPSUB_WARN_TIME'				=> 'Tiempo de advertencia',
	'ACP_GROUPSUB_WARN_TIME_EXPLAIN'		=> 'El número de días antes del vencimiento de una suscripción para notificar al suscriptor.',
	'ACP_GROUPSUB_GRACE'					=> 'Periodo de gracia',
	'ACP_GROUPSUB_GRACE_EXPLAIN'			=> 'El número de días posteriores a la finalización de una suscripción antes de mover al usuario de los grupos.',

	'ACP_GROUPSUB_MANAGE_PKGS'					=> 'Administrar paquetes',
	'ACP_GROUPSUB_MANAGE_PKGS_TITLE'			=> 'Administrar paquetes de suscripción',
	'ACP_GROUPSUB_MANAGE_PKGS_EXPLAIN'			=> 'Aquí puede gestionar los paquetes de suscripción que están disponibles.',
	'ACP_GROUPSUB_NO_PKGS'						=> 'No hay paquetes de suscripción',
	'ACP_GROUPSUB_PKG_ADD'						=> 'Crear paquete de suscripción',
	'ACP_GROUPSUB_PKG_ADD_SUCCESS'				=> 'Paquete de suscripción creado correctamente',
	'ACP_GROUPSUB_PKG_EDIT'						=> 'Editar paquete de suscripción',
	'ACP_GROUPSUB_PKG_EDIT_SUCCESS'				=> 'Detalles del paquete de suscripción guardados exitosamente',
	'ACP_GROUPSUB_PKG_DELETE_CONFIRM'			=> '¿Está seguro de que desea eliminar este paquete de suscripción?',
	'ACP_GROUPSUB_PKG_DELETE_SUCCESS'			=> 'Paquete eliminado correctamente',
	'ACP_GROUPSUB_PKG_DETAILS'					=> 'Detalles del paquete',
	'ACP_GROUPSUB_PKG_ENABLE'					=> 'Habilitar paquete',
	'ACP_GROUPSUB_PKG_ENABLE_EXPLAIN'			=> 'Poner este paquete a disposición de los usuarios.',
	'ACP_GROUPSUB_PKG_IDENT'					=> 'Identificador de paquete',
	'ACP_GROUPSUB_PKG_IDENT_EXPLAIN'			=> 'Un valor único para identificar el paquete. El valor debe contener solo a-z, 0-9, _, y comenzar con una letra.',
	'ACP_GROUPSUB_PKG_NAME'						=> 'Nombre del paquete',
	'ACP_GROUPSUB_PKG_DESC'						=> 'Descripción del paquete',
	'ACP_GROUPSUB_PKG_GROUPS'					=> 'Grupos de paquetes',
	'ACP_GROUPSUB_PKG_GROUPS_EXPLAIN'			=> 'Seleccione uno o más grupos a los que otorgar acceso a los suscriptores.',
	'ACP_GROUPSUB_PKG_DEFAULT_GROUP'			=> 'Establecer grupo predeterminado',
	'ACP_GROUPSUB_PKG_DEFAULT_GROUP_EXPLAIN'	=> 'Opcionalmente, seleccione un grupo para establecer como el grupo predeterminado para suscriptores.',
	'ACP_GROUPSUB_PKG_TERM_ADD'					=> 'Añadir término',
	'ACP_GROUPSUB_PKG_TERMS'					=> 'Terminos de suscripcion',
	'ACP_GROUPSUB_PKG_PRICE'					=> 'Precio de suscripción',
	'ACP_GROUPSUB_PKG_PRICE_EXPLAIN'			=> 'Introduzca el precio de la suscripción.',
	'ACP_GROUPSUB_PKG_LENGTH'					=> 'Duración de la suscripción',
	'ACP_GROUPSUB_PKG_LENGTH_EXPLAIN'			=> 'Introduzca la duración de la suscripción. Introduce 0 para una suscripción ilimitada.',

	'ACP_GROUPSUB_MANAGE_SUBS'			=> 'Administrar Suscripciones',
	'ACP_GROUPSUB_MANAGE_SUBS_EXPLAIN'	=> 'Aquí puede ver, modificar y cancelar suscripciones..',
	'ACP_GROUPSUB_NO_SUBS'				=> 'Sin suscripciones',
	'ACP_GROUPSUB_SUB_ADD'				=> 'Crear suscripción',
	'ACP_GROUPSUB_SUB_ADD_SUCCESS'		=> 'Suscripción creada con éxito.',
	'ACP_GROUPSUB_SUB_EDIT'				=> 'Editar suscripción',
	'ACP_GROUPSUB_SUB_EDIT_SUCCESS'		=> 'Detalles de suscripción guardados con éxito',
	'ACP_GROUPSUB_SUB_DELETE_CONFIRM'	=> '¿Estás seguro de que deseas cancelar esta suscripción?',
	'ACP_GROUPSUB_SUB_DELETE_SUCCESS'	=> 'Suscripción cancelada con éxito',
	'ACP_GROUPSUB_SUB_DETAILS'			=> 'Detalles de la suscripción',
	'ACP_GROUPSUB_SUB_USER'				=> 'Suscriptor',
	'ACP_GROUPSUB_SUB_PACKAGE'			=> 'Paquete',
	'ACP_GROUPSUB_SUB_SELECT_PACKAGE'	=> 'Seleccionar paquete',
	'ACP_GROUPSUB_SUB_EXPIRE'			=> 'Vencimiento',
	'ACP_GROUPSUB_SUB_EXPIRE_EXPLAIN'	=> 'Ingrese la fecha en la cual esta suscripción debe terminar. Deje este campo en blanco para una suscripción sin fin.',
	'ACP_GROUPSUB_SUB_START'			=> 'Comienzo',
	'ACP_GROUPSUB_SUB_START_EXPLAIN'	=> 'Ingrese una fecha de inicio para esta suscripción.',

	'ACP_GROUPSUB_ERROR_CURRENCY'		=> 'Debes seleccionar una moneda válida.',
	'ACP_GROUPSUB_ERROR_NO_PKGS'		=> 'No hay paquetes para los cuales crear una suscripción.',
	'ACP_GROUPSUB_ERROR_DATE_IN_PAST'	=> 'La fecha de vencimiento introducida fue en el pasado..',
	'ACP_GROUPSUB_ERROR_INVALID_DATE'	=> 'La fecha ingresada esta en un formato inválido.',
	'ACP_GROUPSUB_ERROR_MISSING_TERMS'	=> 'Cada paquete debe tener al menos un término para ser habilitado.',
	'ACP_GROUPSUB_ERROR_SUB_CONFLICT'	=> 'Este miembro ya tiene una suscripción activa a este paquete.<br><br><a href="%s">Editar suscripción activa</a>',

	'ACP_GROUPSUB_TRANSACTIONS'	=> 'Ver transacciones',
	'ACP_GROUPSUB_NO_TRANS'		=> 'No hay transacciones',

	'ACP_GROUPSUB_PKG'			=> 'Paquete',
	'ACP_GROUPSUB_NAME'			=> 'Nombre',
	'ACP_GROUPSUB_TERMS'		=> 'Terminos y condiciones',
	'ACP_GROUPSUB_PRICE'		=> 'Precio',
	'ACP_GROUPSUB_LENGTH'		=> 'Duración',
	'ACP_GROUPSUB_USER'			=> 'Suscriptor',
	'ACP_GROUPSUB_SUB'			=> 'Suscripción',
	'ACP_GROUPSUB_START'		=> 'Fecha de comienzo',
	'ACP_GROUPSUB_EXPIRES'		=> 'Fecha de vencimiento',
	'ACP_GROUPSUB_STATUS'		=> 'Estado',
	'ACP_GROUPSUB_TRANS_ID'		=> 'ID',
	'ACP_GROUPSUB_TRANS_TYPE'	=> 'Tipo',
	'ACP_GROUPSUB_AMOUNT'		=> 'Cantidad',
	'ACP_GROUPSUB_TIME'			=> 'Tiempo',
	'ACP_GROUPSUB_LIVE'			=> 'Real',
	'ACP_GROUPSUB_SB'			=> 'Sandbox',
	'ACP_GROUPSUB_MORE'			=> '+%d más…',
	'ACP_GROUPSUB_VIEW'			=> 'Ver',

	'ACP_GROUPSUB_EXPIRES_UNLIMITED'	=> 'Ilimitado',
	'ACP_GROUPSUB_EXPIRES_NEVER'		=> 'Nunca',
	'ACP_GROUPSUB_ACTIVE'				=> 'Activo',
	'ACP_GROUPSUB_ENDED'				=> 'Terminado',
	'ACP_GROUPSUB_ALL_PACKAGES'			=> 'Todos los paquetes de suscripción',
	'ACP_GROUPSUB_SUBS_PER_PAGE'		=> 'Artículos por página',
	'ACP_GROUPSUB_DELETED'				=> 'borrado',
));
