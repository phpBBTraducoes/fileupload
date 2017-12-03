<?php
/**
*
* @package phpBB Extension - File Upload
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_FILEUPLOAD_SAVED'				=> 'Configurações do Upload de Arquivo salvas',
	'ACP_FILEUPLOAD_VERSION'			=> 'Versão',
	'ACP_FILE_UPLOAD_CONFIGURATION'		=> 'Configuração do Upload de Arquivo',
	'ACP_FILEUPLOAD_ENABLE'				=> 'Habilita Upload de Arquivo',
	'ACP_FILEUPLOAD_ENABLE_EXPLAIN'		=> 'Configuração global para habilitar o upload de arquivo.',
	'ACP_FILEUPLOAD_NUMBER'				=> 'Tamanho do upload',
	'ACP_FILEUPLOAD_NUMBER_EXPLAIN'		=> 'O tamanho padrão do upload é 2 MB.',
	'ACP_FILEUPLOAD_NEW_DOWNLOAD_SIZE'	=> 'O tamanho máximo que seu php.ini permite é <strong>%1$s %2$s</strong>!',
));
