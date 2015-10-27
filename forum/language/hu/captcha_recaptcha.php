<?php
/**
*
* recaptcha [Hungarian]
*
* @package language
* @version $Id: captcha_recaptcha.php 229 2011-07-12 20:55:47Z marcee $
* @copyright (c) 2009 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2009 phpBB Group
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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'hu',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'A reCaptcha használatához, létre kell hoznod egy azonosítót a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'A megadott vizuális megerősítő kód hibás.',

	'RECAPTCHA_PUBLIC'				=> 'Publikus reCaptcha kulcs',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A publikus reCaptcha kulcsod. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető.',
	'RECAPTCHA_PRIVATE'				=> 'Privát reCaptcha kulcs',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A privát reCaptcha kulcsod. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető.',

	'RECAPTCHA_EXPLAIN'				=> 'A robotok általi automatikus űrlapküldések megakadályozása érdekében be kell írnod a képen látható mindkét szót az alatta lévő szövegmezőbe.',
));

?>
