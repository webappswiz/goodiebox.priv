<?php
/**
*
* common [English]
*
* @package language
* @version 1.0.1
* @copyright (c) 2013 SiteSplat, (c) ThemeSplat
* @license htp://www.sitesplat.com/
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
	'TRANSLATION_INFO'	=> 'Translated by <a href="http://wwww.sitesplat.com/">ThemeSplat</a>.',
	
	'ABOUT_US_TITLE'            		=> 'About us Title',
	'ABOUT_US'            				=> 'About us Body',
	'GOOGLE_ANALYTICS'          		=> 'Google Analytics',
	'TWITTER_ID'            			=> 'Twitter ID',
	'ADSENSE_HEADER'            		=> 'Adsense Header',
	'ADSENSE_FOOTER'            		=> 'Adsense Footer',
	'ADSENSE_TOPIC'            			=> 'Adsense Topic',
	'LOGO_TEXT'                 		=> 'Logo Text',
	'HIDE_HEADER'              			=> 'Hide Sub-header',
	'HIDE_FOOTER'              			=> 'Hide Footer',
	'ENABLE_POPUP_LOGIN'				=> 'Enable Modal Login',
	'AVATAR_EFFECT'						=> 'Avatar Effects in Topic',
	'MINI_PROFILE_POSITION'				=> 'Mini User Profile Position',

	'CALL_ENABLED'					    => 'Enable Call to Action (CtA) bar',
	'CALL_ONLY_REGISTERED'	            => 'Display CtA bar only for registered users',
	'CALL_TEXT'							=> 'CtA text',
	'CALL_BUTTON_TEXT'			        => 'CtA button text',
	'CALL_LINK'							=> 'CtA button URL',

	// Descriptions for Config page
	'ABOUT_US_TITLE_EXPLAIN'   	  	  	=> 'Enter the Title for the About us Block',
	'ABOUT_US_EXPLAIN'          		=> 'Enter The text for te Body of the About us Block. It accepts basic HTML tags',
	'GOOGLE_ANALYTICS_EXPLAIN'  		=> 'Enter the full Google Analytics Code. Included the script tags etc.',
	'TWITTER_ID_EXPLAIN'        		=> 'Enter your Twitter ID number. To retrieve your number follow the Documentation instructions.',
	'ADSENSE_HEADER_EXPLAIN'    		=> 'Enter your Google Adsense code block or your Banner HTML code. This will shown in the Forum HEADER Section',
	'ADSENSE_FOOTER_EXPLAIN'    		=> 'Enter your Google Adsense code block or your Banner HTML code. This will shown in the Forum FOOTER Section',
	'ADSENSE_TOPIC_EXPLAIN'     		=> 'Enter your Google Adsense code block or your Banner HTML code. This will shown in the after the first Post in TOPIC page',
	'LOGO_TEXT_EXPLAIN'        	 		=> 'Enter your Logo Text',
	'HIDE_HEADER_EXPLAIN'    			=> 'Hides the Sub-header section where the search bar is displayed',
	'HIDE_FOOTER_EXPLAIN'    			=> 'Hides the FOOTER block and all the elements within it',
	'ENABLE_POPUP_LOGIN_EXPLAIN'		=> 'This Enables the Modal Login for the Forum',
	'AVATAR_EFFECT_EXPLAIN'				=> 'Changes the Avatar Frame Style',
	'MINI_PROFILE_POSITION_EXPLAIN'		=> 'Changes the User Mini Profile position in Topics.',

	'FLATBOOTS_STYLE_TITLE'				=> 'FLATBOOTS Mini CMS',
	'FLATBOOTS_STYLE_CONFIG'			=> 'General Configuration',
	'FLATBOOTS_STYLE_BUTTONS'			=> 'Header Menu Settings',
	'FLATBOOTS_STYLE_UPLOAD'			=> 'Logo &#38; Background',
	'FLATBOOTS_STYLE_LINKS'				=> 'Favorite Links',
	'FLATBOOTS_STYLE_SOCIAL'			=> 'Social Networks',

	'FLATBOOTS_STYLE_ADD_BUTTON'		=> 'Add a New Button',
    'FLATBOOTS_STYLE_EDIT_BUTTON'     	=> 'Edit Button',
	'MENU_BUTTON_NAME'	       			=> 'Button Name',
	'MENU_BUTTON_NAME_EXPLAIN' 			=> 'You can use plain text or language variable such as {L_PRIVATE_MESSAGES}',
	'MENU_BUTTON_DESC'	      		    => 'Button Description',
	'MENU_BUTTON_DESC_EXPLAIN' 			=> 'Text below the Button Title',
	'MENU_BUTTON_URL'		      	    => 'URL',
	'MENU_BUTTON_ICON_EXPLAIN'		    => 'Only used if the button/link is part of a parent button',
	'MENU_BUTTON_URL_EXPLAIN'	 		=> 'You can use URL adress including http:// protocol or template variable such as {U_PRIVATEMSGS}. You can find available template variables in includes/functions.php file around line 4545',
	'MENU_DISPLAY'			      	    => 'Display the Button',
	'MENU_EXTERNAL'			       	    => 'Link will be opened in a new window',
	'MENU_ONLY_REGISTERED'    		    => 'Display only for Registered Users',
	'MENU_ONLY_GUEST'          			=> 'Display only for Guests',
	'MENU_BUTTON_PARENT'       			=> 'Parent Button',
	'MENU_BUTTON_PARENT_EXPLAIN' 		=> 'Select the parent button if you want to have a dropdown section',
	'MOVE_BUTTON_WITH_SUBS'    			=> 'This button can\'t be a sub-button because it contains already sub-buttons.',
	'MENU_NAV'         	       			=> 'Menu',
	'MENU_ICON'          			 	=> 'Icon',
	'DELETE_BUTTON_CONFIRM'    			=> 'Are you sure you want to delete this Button?',
	'DELETE_SUBBUTTONS_CONFIRM'			=> 'Are you sure you want to delete this Button and all its sub-buttons?',
	'NO_BUTTONS'               			=> 'There is no Button to Manage',
	'NO_SUBBUTTONS'            			=> 'There is no sub-button to Manage',
	'BUTTON_UPDATED'           			=> 'Button has been updated Successfully',
	'BUTTON_ADDED'             			=> 'New button has been added Successfully',

	'IMG_UPLOADED'              		=> 'Image has been uploaded Successfully',
	'SELECT_IMAGE'              		=> 'Select Image',
	'IMG_UPLOAD_EXPLAIN'        		=> 'Allowed extensions are png, jpg, jpeg and gif.',
	'IMG_UPLOAD_ERROR'          		=> 'Only png, jpg, jpeg and gif extensions are allowed.',

	'IMAGE_LOGO' 						=> 'Site logo',
	'IMAGE_BG' 							=> 'Forum background image',
	'CHECK_TO_DELETE' 					=> 'Check to Delete then hit the delete button',
	'IMAGE_DELETED' 					=> 'Image has been deleted successfully',
	'CHECK_TO_UPLOAD_BG' 				=> 'Check only to upload the Forum background Image, (Not needed for the Site logo)',

	'FLATBOOTS_STYLE_ADD_LINK'			=> 'Add link',
    'FLATBOOTS_STYLE_EDIT_LINK'		    => 'Edit link',
	'MENU_LINK_NAME'	       			=> 'Link name',
	'MENU_LINK_NAME_EXPLAIN' 			=> 'You can use plain text or language variable such as {L_PRIVATE_MESSAGES}',
	'MENU_LINK_URL'		       			=> 'URL',
	'MENU_LINK_URL_EXPLAIN'	 			=> 'You can use URL adress including http:// protocol or template variable such as {U_PRIVATEMSGS}. You can find available template variables in includes/functions.php file around line 4545',
	'MENU_LINK_DISPLAY'			        => 'Display the link',
	'MENU_LINK_EXTERNAL'			    => 'Link will be opened in a new window',
	'MENU_LINK_ONLY_REGISTERED'   		=> 'Display only to registered users',
	'MENU_LINK_ONLY_GUEST'        		=> 'Display only to guests',
	'MENU_LINK_NAV'         	    	=> 'Links',
	'MENU_LINK_ICON'          			=> 'Icon',
	'DELETE_LINK_CONFIRM'    			=> 'Are you sure you want to delete this Link?',
	'NO_LINKS'               			=> 'There is no link to Manage',
	'LINK_UPDATED'           			=> 'Link has been updated Successfully',
	'LINK_ADDED'             			=> 'New link has been added Successfully',

	'FLATBOOTS_STYLE_ADD_SOCIAL'		=> 'Add social Network',
    'FLATBOOTS_STYLE_EDIT_SOCIAL'		=> 'Edit social Network',
	'MENU_SOCIAL_NAME'	       			=> 'Social Network Name',
	'MENU_SOCIAL_NAME_EXPLAIN' 			=> 'You can use plain text or language variable such as {L_PRIVATE_MESSAGES}',
	'MENU_SOCIAL_URL'		       		=> 'URL',
	'MENU_SOCIAL_URL_EXPLAIN'	 		=> 'You can use URL adress including http:// protocol or template variable such as {U_PRIVATEMSGS}. You can find available template variables in includes/functions.php file around line 4545',
	'MENU_SOCIAL_DISPLAY'			    => 'Display the social network',
	'MENU_SOCIAL_ONLY_REGISTERED'   	=> 'Display only for Registered Users',
	'MENU_SOCIAL_ONLY_GUEST'        	=> 'Display only for Guests',
	'MENU_SOCIAL_NAV'         	    	=> 'Social Networks',
	'DELETE_SOCIAL_CONFIRM'    			=> 'Are you sure you want to delete this Social Network?',
	'NO_SOCIALS'               			=> 'There is no social network to manage',
	'SOCIAL_UPDATED'           			=> 'Social network has been updated Successfully',
	'SOCIAL_ADDED'             			=> 'New social network has been added Successfully',

));

?>