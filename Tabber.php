<?php
/**
 * Tabber
 * Tabber Main File
 *
 * @author		Eric Fortin, Alexia E. Smith
 * @license		GPL
 * @package		Tabber
 * @link		https://www.mediawiki.org/wiki/Extension:Tabber
 *
**/

/******************************************/
/* Credits                                */
/******************************************/
$credits = [
	'path'				=> __FILE__,
	'name'				=> 'Tabber',
	'author'			=> 'Eric Fortin',
	'url'				=> 'https://www.mediawiki.org/wiki/Extension:Tabber',
	'descriptionmsg'	=> 'tabber-desc',
	'version'			=> '2.0'
];
$wgExtensionCredits['parserhook'][] = $credits;


/******************************************/
/* Language Strings, Page Aliases, Hooks  */
/******************************************/
$extDir = __DIR__.'/';

$wgExtensionMessagesFiles['Tabber']			= "{$extDir}/Tabber.i18n.php";

$wgAutoloadClasses['TabberHooks']			= "{$extDir}/Tabber.hooks.php";

$wgHooks['ParserFirstCallInit'][]			= 'TabberHooks::onParserFirstCallInit';

$wgResourceModules['ext.Social']				= [
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Tabber',
	'styles'		=> ['css/tabber.css'],
	'scripts'		=> ['js/tabber.js']
];
?>