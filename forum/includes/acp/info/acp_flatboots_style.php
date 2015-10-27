<?php
/**
*
* @package Flatboots Mini CMS
* @author ThemeSplat www.sitesplat.com
* @version 1.0.1
* @copyright (c) 2014 ThemeSplat www.sitesplat.com
*
*/

class acp_flatboots_style_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_flatboots_style',
			'title'		=> 'FLATBOOTS_STYLE_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'config'		=> array('title' => 'FLATBOOTS_STYLE_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'menu'			=> array('title' => 'FLATBOOTS_STYLE_BUTTONS', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'upload'		=> array('title' => 'FLATBOOTS_STYLE_UPLOAD', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'links'			=> array('title' => 'FLATBOOTS_STYLE_LINKS', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
				'social'		=> array('title' => 'FLATBOOTS_STYLE_SOCIAL', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
			),
		);
	}
}

?>