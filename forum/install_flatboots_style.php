<?php
/** 
*
* @package Flatboots Mini CMS
* @author ThemeSplat www.sitesplat.com
* @version 1.0.1
* @copyright (c) 2014 ThemeSplat www.sitesplat.com
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);

$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'FLATBOOTS - Mini CMS';
$version_config_name = 'flatboots_style_version';
$language_file = 'mods/info_acp_flatboots_style';

$versions = array(
	'1.0.0'	=> array(
		
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'FLATBOOTS_STYLE_TITLE'),
			array('acp', 'FLATBOOTS_STYLE_TITLE', array(
      	    'module_basename' 	 => 'flatboots_style',
            'modes'	          	 => array('config'),
      ), ),
			array('acp', 'FLATBOOTS_STYLE_TITLE', array(
			'module_basename' 	 => 'flatboots_style',
            'modes'          	  => array('menu'),
      ), ),
			array('acp', 'FLATBOOTS_STYLE_TITLE', array(
			'module_basename' 	 => 'flatboots_style',
            'modes'           	 => array('links'),
      ), ),
			array('acp', 'FLATBOOTS_STYLE_TITLE', array(
			'module_basename'  	=> 'flatboots_style',
            'modes'            	=> array('social'),
      ), ),
			array('acp', 'FLATBOOTS_STYLE_TITLE', array(
      	    'module_basename'  	=> 'flatboots_style',
            'modes'	           	=> array('upload'),
      ), ),
		),

		'table_add' => array(
			array(FLATBOOTS_STYLE_MENU_TABLE, array(
				'COLUMNS'			     => array(
					'button_id'              => array('UINT', NULL, 'auto_increment'),
					'button_url'             => array('TEXT', ''),
					'button_name'            => array('VCHAR', ''),
					'button_desc'            => array('VCHAR', ''),
					'button_external'        => array('BOOL', '0'),
					'button_display'         => array('BOOL', '1'),
					'button_only_registered' => array('BOOL', '0'),
					'button_only_guest'		 => array('BOOL', '0'),
					'left_id' 				 => array('UINT', '0'),
					'right_id' 				 => array('UINT', '0'),
					'parent_id' 			 => array('UINT', '0'),
					'icon' 					 => array('VCHAR', ''),
				),
				'PRIMARY_KEY' => array('button_id'),
			)),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array(
				'COLUMNS'			    => array(
					'config_name'		    => array('VCHAR', ''),
					'config_value'		    => array('TEXT', ''),
				),
			)),
			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'COLUMNS'			     => array(
					'button_id'              => array('UINT', NULL, 'auto_increment'),
					'button_url'             => array('TEXT', ''),
					'button_name'            => array('VCHAR', ''),
					'button_external'        => array('BOOL', '0'),
					'button_display'         => array('BOOL', '1'),
					'button_only_registered' => array('BOOL', '0'),
					'button_only_guest'		 => array('BOOL', '0'),
					'left_id' 				 => array('UINT', '0'),
					'right_id' 				 => array('UINT', '0'),
					'icon'            		 => array('VCHAR', ''),
				),
				'PRIMARY_KEY'                => array('button_id'),
			)),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'COLUMNS'			=> array(
					'button_id'              => array('UINT', NULL, 'auto_increment'),
					'button_url'             => array('TEXT', ''),
					'button_name'            => array('VCHAR', ''),
					'button_display'         => array('BOOL', '1'),
					'button_only_registered' => array('BOOL', '0'),
					'button_only_guest'		 => array('BOOL', '0'),
					'left_id' 				 => array('UINT', '0'),
					'right_id' 				 => array('UINT', '0'),
					'icon' 					 => array('VCHAR', ''),
				),
				'PRIMARY_KEY'                => array('button_id'),
			)),
		),

		'table_row_insert' => array(
			array(FLATBOOTS_STYLE_MENU_TABLE, array(
				'button_id'  			  => '1',
				'button_url'  			  => '{U_SEARCH}',
				'button_name'  			  => '{L_SEARCH}',
				'button_desc' 			  => '',
				'button_external' 		  => '0',
				'button_display'          => '1',
				'button_only_registered'  => '1',
				'button_only_guest'  	  => '0',
				'left_id'  				  => '1',
				'right_id'  			  => '2',
				'parent_id'  			  => '0',
				'icon'  				  => '',
      )),

      array(FLATBOOTS_STYLE_MENU_TABLE, array(
				'button_id'  			  => '2',
				'button_url'  			  => '{U_SEARCH}',
				'button_name'  			  => '{L_SEARCH_ADV}',
				'button_desc' 			  => '',
				'button_external' 		  => '0',
				'button_display'          => '1',
				'button_only_registered'  => '1',
				'button_only_guest'  	  => '0',
				'left_id'  				  => '3',
				'right_id'  			  => '4',
				'parent_id'  			  => '1',
				'icon'  				  => 'fa fa-search',
      )),

      array(FLATBOOTS_STYLE_MENU_TABLE, array(
				'button_id'  			  => '3',
				'button_url'  			  => '{U_SEARCH_SELF}',
				'button_name'  			  => '{L_SEARCH_SELF}',
				'button_desc' 			  => '',
				'button_external' 		  => '0',
				'button_display'          => '1',
				'button_only_registered'  => '1',
				'button_only_guest'  	  => '0',
				'left_id'  				  => '5',
				'right_id'  			  => '6',
				'parent_id'  			  => '1',
				'icon'  				  => 'fa fa-comments',
      )),

			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'about_us_title', 'config_value'  => 'About us')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'about_us', 'config_value'  => 'Why Would you Settle for Less when you can have More? Do not let other Authors Fool you with Empty Marketing Keywords. FLATBOOTS is what you Deserve. Built to last, Built from Scratch, Nothing Less.<a href="#" title=""><strong> Read more</strong></a>')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'google_analytics', 'config_value'  => '')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'twitter_id', 'config_value'  => '391407906655965184')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'adsense_header', 'config_value'  => '')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'adsense_footer', 'config_value'  => '')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'adsense_topic', 'config_value'  => '')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'logo_text', 'config_value'  => 'FLATBOOTS')),
            array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'hide_header', 'config_value'  => '0')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'hide_footer', 'config_value'  => '0')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'enable_popup_login', 'config_value'  => '0')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'mini_profile_position', 'config_value'  => 'right')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'call_enabled', 'config_value'  => '1')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'call_only_registered', 'config_value'  => '0')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'call_text', 'config_value'  => 'Swap-in out addons, use only what you really need!')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'call_button_text', 'config_value'  => 'Purchase Now')),
			array(FLATBOOTS_STYLE_CONFIG_TABLE, array('config_name'  => 'call_link', 'config_value'  => 'http://goo.gl/LvmwlF')),

			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'button_id' 			  => '1',
				'button_url' 			  => '#',
				'button_name'  			  => 'Advertise',
				'button_external'  		  => '0',
				'button_display'  		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id' 				  => '1',
				'right_id'  			  => '2',
				'icon'      			  => '',
      )),
			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'button_id' 			  => '2',
				'button_url'  			  => '{U_PRIVACY}',
				'button_name'  			  => 'Privacy',
				'button_external'  		  => '0',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest' 	  => '0',
				'left_id' 				  => '3',
				'right_id' 				  => '4',
				'icon'      			  => '',
      )),
			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'button_id'  			  => '3',
				'button_url' 			  => '#',
				'button_name'  			  => 'DMCA',
				'button_external'         => '0',
				'button_display'  		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'       => '0',
				'left_id' 				  => '5',
				'right_id' 				  => '6',
				'icon'      			  => '',
      )),
			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'button_id'  			  => '4',
				'button_url' 			  => '{U_TERMS_USE}',
				'button_name'  			  => 'Terms',
				'button_external' 		  => '0',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id'  				  => '7',
				'right_id'  			  => '8',
				'icon'     				  => '',
      )),
			array(FLATBOOTS_STYLE_LINKS_TABLE, array(
				'button_id'  			  => '5',
				'button_url' 			  => '#',
				'button_name'  			  => 'Contact',
				'button_external'  		  => '0',
				'button_display'  		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id'                 => '9',
				'right_id'  			  => '10',
				'icon'      			  => '',
      )),

			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id'  			  => '1',
				'button_url'  			  => '#1',
				'button_name' 			  => 'Google+',
				'button_display'          => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id' 				  => '1',
				'right_id' 				  => '2',
				'icon'  				  => 'fa fa-google-plus',
      )),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id'  			  => '2',
				'button_url'  			  => '#2',
				'button_name' 			  => 'Github',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id' 				  => '3',
				'right_id'  			  => '4',
				'icon'  				  => 'fa fa-github',
      )),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id'  			  => '3',
				'button_url'  			  => '#4',
				'button_name' 			  => 'Pinterest',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id' 				  => '5',
				'right_id'  			  => '6',
				'icon'  				  => 'fa fa-pinterest',
      )),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id'  			  => '4',
				'button_url' 			  => '#5',
				'button_name' 			  => 'Facebook',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest' 	  => '0',
				'left_id'  			      => '7',
				'right_id' 				  => '8',
				'icon'  				  => 'fa fa-facebook',
      )),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id' 			  => '5',
				'button_url'  			  => '#6',
				'button_name'  			  => 'Twitter',
				'button_display'  		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id'  			      => '9',
				'right_id'  			  => '10',
				'icon'  				  => 'fa fa-twitter',
      )),
			array(FLATBOOTS_STYLE_SOCIAL_TABLE, array(
				'button_id' 			  => '6',
				'button_url' 			  => '{U_FEED}',
				'button_name'  			  => 'rss',
				'button_display' 		  => '1',
				'button_only_registered'  => '0',
				'button_only_guest'  	  => '0',
				'left_id' 				  => '11',
				'right_id' 				  => '12',
				'icon' 					  => 'fa fa-rss',
      )),
    ),

		'config_add' => array(
			array('flatboots_avatar_effect', 'none', '0'),
		),

		'cache_purge' => array(
			array(),
			array('imageset'),
			array('template'),
			array('theme'),
		),

	),

);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>