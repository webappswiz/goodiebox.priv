<?php
/**
*
* @package Flatboots Mini CMS
* @author ThemeSplat www.sitesplat.com
* @version 1.0.1
* @copyright (c) 2014 ThemeSplat www.sitesplat.com
*
*/

class acp_flatboots_style
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $template, $config, $phpEx, $phpbb_root_path;
		
		$this->tpl_name = 'acp_flatboots_style';

		$template->assign_vars(array(
    	'FONT_AWESOME_CSS_LINK'	    => generate_board_url() . "/styles/FLATBOOTS/theme/font/font-awesome/css/font-awesome.css",
    ));

    switch($mode)
    {
      case 'config':
      
        $this->page_title = $user->lang['FLATBOOTS_STYLE_TITLE'] . ' - ' . $user->lang['FLATBOOTS_STYLE_CONFIG'];
    
        $submit = (isset($_POST['submit'])) ? true : false;
  
  		  if ($submit)
  		  {
					$sql = 'SELECT *
	                  FROM ' . FLATBOOTS_STYLE_CONFIG_TABLE;
	        $result = $db->sql_query($sql);

	        while ($row = $db->sql_fetchrow($result))
	        {
						$value	= request_var($row['config_name'], '', true);

						$sql = 'UPDATE ' . FLATBOOTS_STYLE_CONFIG_TABLE . '
	                      SET config_value = "' . $value . '"
	                      WHERE config_name = "'. $row['config_name'] . '"';
						$db->sql_query($sql);
	        }
	        $db->sql_freeresult($result);
	        
					set_config('flatboots_avatar_effect', request_var('flatboots_avatar_effect', 'none'));

          trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
        }       

				$sql = 'SELECT *
                  FROM ' . FLATBOOTS_STYLE_CONFIG_TABLE;
        $result = $db->sql_query($sql);
						
        while ($row = $db->sql_fetchrow($result))
        {
					$template->assign_vars(array(
            strtoupper($row['config_name'])	=> $row['config_value'],
          ));
        }
        $db->sql_freeresult($result);
        
        $template->assign_vars(array(
          'S_FLATBOOTS_STYLE_CONFIG'	=> true,
          'AVATAR_EFFECT'				=> $config['flatboots_avatar_effect'],
        ));
				
        break;

			case 'links':

        $this->page_title	= $user->lang['FLATBOOTS_STYLE_TITLE'] . ' - ' . $user->lang['FLATBOOTS_STYLE_LINKS'];

        $action	= request_var('action', '');
        $button_id = request_var('button_id', 0);

        $template->assign_vars(array(
          'S_FLATBOOTS_STYLE_LINKS'	=> true,
        ));

        switch ($action)
				{
					case "delete":

						if (confirm_box(true))
						{
       			  $sql = 'DELETE FROM ' . FLATBOOTS_STYLE_LINKS_TABLE . '
						  WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action);
						}
						else
						{
						  confirm_box(false, $user->lang['DELETE_LINK_CONFIRM']);

							redirect($this->u_action);
						}

            break;

					case "add_button":

            $button_name = request_var('button_name', '', true);

            $template->assign_vars(array(
              'S_NAME'                => $button_name,
              'S_MENU_CREATE_BUTTON'  => true,
            ));

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_url	= request_var('button_url', '', true);
              $button_name	= request_var('button_name', '', true);
              $button_external	= request_var('button_external', 0);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);
              $button_only_guest	= request_var('button_only_guest', 0);
			  $button_icon	= request_var('button_icon', '');

              $sql = 'SELECT MAX(right_id) AS right_id
  						FROM ' . FLATBOOTS_STYLE_LINKS_TABLE;
  						$result = $db->sql_query($sql);
  						$row = $db->sql_fetchrow($result);
  						$db->sql_freeresult($result);

  						$left_id = $row['right_id'] + 1;
  						$right_id = $row['right_id'] + 2;

  						$sql = 'INSERT INTO ' . FLATBOOTS_STYLE_LINKS_TABLE . ' (button_url, button_name, button_external, button_display, button_only_registered, button_only_guest, left_id, right_id, icon)
                        VALUES ("' . $button_url . '", "' . $button_name . '", ' . $button_external . ', ' . $button_display . ',
                                ' . $button_only_registered . ', ' . $button_only_guest . ', ' . $left_id . ', ' . $right_id . ', "' . $button_icon . '")';
  						$db->sql_query($sql);

       				trigger_error($user->lang['LINK_ADDED'] . adm_back_link($this->u_action));
       			}

            break;

					case "edit_button":

            $sql = 'SELECT *
                    FROM ' . FLATBOOTS_STYLE_LINKS_TABLE . '
                    WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);

            $template->assign_vars(array(
              'S_URL'                       => $row['button_url'],
              'L_ACP_MENU_EDIT_BUTTON'      => $user->lang['FLATBOOTS_STYLE_EDIT_LINK'] . ' » ' . $row['button_name'],
              'S_EXTERNAL'                  => $row['button_external'],
              'S_NAME'                      => $row['button_name'],
              'S_DISPLAY'                   => $row['button_display'],
              'S_ONLY_REGISTERED'           => $row['button_only_registered'],
              'S_ONLY_GUEST'                => $row['button_only_guest'],
			  'S_ICON'                      => $row['icon'],
              'S_MENU_EDIT_BUTTON'          => true,
            ));
            $db->sql_freeresult($result);

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_url	= request_var('button_url', '', true);
              $button_name	= request_var('button_name', '', true);
              $button_external	= request_var('button_external', 0);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);
              $button_only_guest	= request_var('button_only_guest', 0);
							$button_icon	= request_var('button_icon', '');

        			$sql = 'UPDATE ' . FLATBOOTS_STYLE_LINKS_TABLE . '
                        SET button_url = "' . $button_url . '", button_name = "' . $button_name . '", button_external = ' . $button_external . ',
                            button_display = ' . $button_display . ', button_only_registered = ' . $button_only_registered . ',
                            button_only_guest = ' . $button_only_guest . ', icon = "' . $button_icon . '"
                          WHERE button_id = ' . $button_id;
  						$db->sql_query($sql);

       				trigger_error($user->lang['LINK_UPDATED'] . adm_back_link($this->u_action));
            }

     				break;

     			case 'move_up':
					case 'move_down':

						$sql = 'SELECT left_id, right_id
                         FROM ' . FLATBOOTS_STYLE_LINKS_TABLE . '
                         WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);

						acp_move_button(FLATBOOTS_STYLE_LINKS_TABLE, $row, $action);

						redirect($this->u_action);

					break;

					default:

       	    $sql = 'SELECT *
                      FROM ' . FLATBOOTS_STYLE_LINKS_TABLE . '
                      ORDER BY left_id';
            $result = $db->sql_query($sql);

            while ($row = $db->sql_fetchrow($result))
            {
              $template->assign_block_vars('links', array(
                'ID'              => $row['button_id'],
                'NAME'            => $row['button_name'],
                'URL'             => $row['button_url'],
                'U_DELETE'        => $this->u_action . '&amp;action=delete&amp;button_id=' . $row['button_id'],
                'U_EDIT'          => $this->u_action . '&amp;action=edit_button&amp;button_id=' . $row['button_id'],
                'U_MOVE_UP'		  => $this->u_action . '&amp;action=move_up&amp;button_id=' . $row['button_id'],
				'U_MOVE_DOWN'     => $this->u_action . '&amp;action=move_down&amp;button_id=' . $row['button_id'],
              ));
            }
            $db->sql_freeresult($result);

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_name = request_var('button_name', '', true);
       				redirect($this->u_action . '&amp;action=add_button&amp;button_name='.$button_name);
            }

            $template->assign_vars(array(
              'S_MENU_BUTTONS_LIST'   => true,
            ));
			}

      break;

			case 'upload':

        $this->page_title = $user->lang['FLATBOOTS_STYLE_TITLE'] . ' - ' . $user->lang['FLATBOOTS_STYLE_UPLOAD'];

        $submit = (isset($_POST['submit'])) ? true : false;

  		  if ($submit) {
					$image_name = $_FILES["image"]["name"];
					$upload_bg	= request_var('upload_bg', '0');
					$temp = explode(".", $image_name);

					if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif') {
					  if ($_FILES["image"]["error"] > 0) {
							trigger_error("Return Code: " . $_FILES["image"]["error"] . adm_back_link($this->u_action), E_USER_WARNING);
					  } else {
							if ( !$upload_bg) {
								$files = glob($phpbb_root_path.'images/flatboots_style_mod/logo/*');
                
                if ($files && sizeof($files))
                {
  								foreach($files as $file) {
  								  if(is_file($file))
  								    unlink($file);
  								}
                }

					    	move_uploaded_file($_FILES["image"]["tmp_name"], $phpbb_root_path."images/flatboots_style_mod/logo/" . $image_name);
							} else {
								$files = glob($phpbb_root_path.'images/flatboots_style_mod/bg/*');
                
                if ($files && sizeof($files))
                {
  								foreach($files as $file) {
  								  if(is_file($file))
  								    unlink($file);
  								}
                }

								move_uploaded_file($_FILES["image"]["tmp_name"], $phpbb_root_path."images/flatboots_style_mod/bg/" . $image_name);
							}
							trigger_error($user->lang['IMG_UPLOADED'] . adm_back_link($this->u_action));
					  }
					} else {
						trigger_error($user->lang['IMG_UPLOAD_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
					}
        }

				$delete = (isset($_POST['delete'])) ? true : false;

				if ($delete) {
					$delete_logo = request_var('delete_logo', '0');
					$delete_bg = request_var('delete_bg', '0');

					if ($delete_logo || $delete_bg) {
						if ($delete_logo) {
							$files = glob($phpbb_root_path.'images/flatboots_style_mod/logo/*');
              
              if ($files && sizeof($files))
              {
  							foreach($files as $file) {
  							  if(is_file($file))
  							    unlink($file);
  							}
              }
						}

						if ($delete_bg) {
							$files = glob($phpbb_root_path.'images/flatboots_style_mod/bg/*');
							
              if ($files && sizeof($files))
              {
                foreach($files as $file) {
  							  if(is_file($file))
  							    unlink($file);
  							}
              }
						}

						redirect($this->u_action);
					}
				}

				// Does logo image exist?
				$logo_exist = false;
				$logo_filename = '';
				$files = glob($phpbb_root_path.'images/flatboots_style_mod/logo/*');

        if ($files && sizeof($files))
        {
  				foreach($files as $file) {
  				  if(is_file($file)) {
  						$temp = explode(".", $file);
  						if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif') {
  							$logo_exist = true;
  							$logo_filename = basename($file);
  						}
  			   	}
  				}
        }

				// Does background image exist?
				$bg_exist = false;
				$bg_filename = '';
				$files = glob($phpbb_root_path.'images/flatboots_style_mod/bg/*');

        if ($files && sizeof($files))
        {
  				foreach($files as $file) {
  				  if(is_file($file)) {
  						$temp = explode(".", $file);
  						if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif') {
  							$bg_exist = true;
  							$bg_filename = basename($file);
  						}
  			   	}
  				}
        }

				// Uploaded images
				$template->assign_vars(array(
					'LOGO_IMAGE_EXIST'	         => $logo_exist,
					'BACKGROUND_IMAGE_EXIST'	 => $bg_exist,
					'LOGO_FILENAME'	             => generate_board_url() . "/images/flatboots_style_mod/logo/" . $logo_filename,
					'BACKGROUND_FILENAME'	     => generate_board_url() . "/images/flatboots_style_mod/bg/" . $bg_filename,
					'S_FLATBOOTS_STYLE_UPLOAD'	 => true,
				));

        break;
      
      case 'menu':
      
        $this->page_title	= $user->lang['FLATBOOTS_STYLE_TITLE'] . ' - ' . $user->lang['FLATBOOTS_STYLE_BUTTONS'];
        
        $action	= request_var('action', '');
        $parent_id = request_var('parent_id', 0);
        $button_id = request_var('button_id', 0);
        
        $template->assign_vars(array(
          'S_FLATBOOTS_STYLE_MENU'	=> true,
          'S_PARENT_ID'							=> $parent_id,
        ));              
           
        switch ($action)
				{
					case "delete":
            
						if (confirm_box(true))
						{
						  $sql = 'SELECT button_id
                          FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                          WHERE parent_id = ' . $button_id;
              $result = $db->sql_query($sql);
              
              while ($row = $db->sql_fetchrow($result))
              {     
                $sql = 'DELETE FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
  						WHERE button_id = ' . $row['button_id'];
  							$db->sql_query($sql);    
              }
              $db->sql_freeresult($result);
						
       			  $sql = 'DELETE FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
							WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action.'&amp;parent_id='.$parent_id);
						}
						else
						{
						  $sql = 'SELECT button_id
                          FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                          WHERE parent_id = ' . $button_id;
              $result = $db->sql_query($sql);
              
              ( $db->sql_affectedrows() ) ? confirm_box(false, $user->lang['DELETE_SUBBUTTONS_CONFIRM']) : confirm_box(false, $user->lang['DELETE_BUTTON_CONFIRM']) ;
              
							redirect($this->u_action.'&amp;parent_id='.$parent_id);
						}
						
            break;
            
					case "add_button":  
                            
            $button_name = request_var('button_name', '', true);
            
            $template->assign_vars(array(
              'S_NAME'                   => $button_name,
              'S_MENU_CREATE_BUTTON'     => true,
            ));
            
            // Load buttons for select
            $sql = 'SELECT button_name, button_id
                      FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                        WHERE parent_id = 0
                        ORDER BY left_id';
            $result = $db->sql_query($sql);
      
            while ($row = $db->sql_fetchrow($result))
            {     
              $template->assign_block_vars('parents', array(
                'ID'                 => $row['button_id'],
                'NAME'  	         => $row['button_name'],
              ));
            }
            $db->sql_freeresult($result);
                
            $submit = (isset($_POST['submit'])) ? true : false;
               
            if ($submit)
            {       
              $button_url	= request_var('button_url', '', true);
              $button_name	= request_var('button_name', '', true);
			  $button_desc	= request_var('button_desc', '', true);
              $button_parent	= request_var('button_parent', 0);
              $button_external	= request_var('button_external', 0);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);     
              $button_only_guest	= request_var('button_only_guest', 0);
			  $button_icon	= request_var('button_icon', '');
              
              $sql = 'SELECT MAX(right_id) AS right_id
  											FROM ' . FLATBOOTS_STYLE_MENU_TABLE;
  						$result = $db->sql_query($sql);
  						$row = $db->sql_fetchrow($result);
  						$db->sql_freeresult($result);
  						
  						$left_id = $row['right_id'] + 1;
  						$right_id = $row['right_id'] + 2;
  
  						$sql = 'INSERT INTO ' . FLATBOOTS_STYLE_MENU_TABLE . ' (button_url, button_name, button_desc, button_external, button_display, button_only_registered, button_only_guest, left_id, right_id, parent_id, icon)
                        VALUES ("' . $button_url . '", "' . $button_name . '", "' . $button_desc . '", ' . $button_external . ', ' . $button_display . ',
                                ' . $button_only_registered . ', ' . $button_only_guest . ', ' . $left_id . ', ' . $right_id . ', ' . $button_parent . ', "' . $button_icon . '")';
  						$db->sql_query($sql);
  
       				trigger_error($user->lang['BUTTON_ADDED'] . adm_back_link($this->u_action.'&amp;parent_id='.$button_parent));
       			}
            
            break;      
            
					case "edit_button":

            // Load buttons for select
            $sql = 'SELECT button_name, button_id
                      FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                      WHERE parent_id = 0
                      AND button_id <> ' . $button_id . '
                      ORDER BY left_id';
            $result = $db->sql_query($sql);
      
            while ($row = $db->sql_fetchrow($result))
            {     
              $template->assign_block_vars('parents', array(
                'ID'    => $row['button_id'],
                'NAME'  => $row['button_name'],
              ));
            }
            $db->sql_freeresult($result);

            $sql = 'SELECT *
                    FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                    WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);
      
            $template->assign_vars(array(
              'S_URL'                       => $row['button_url'],
              'L_ACP_MENU_EDIT_BUTTON'      => $user->lang['FLATBOOTS_STYLE_EDIT_BUTTON'] . ' » ' . $row['button_name'],
              'S_EXTERNAL'                  => $row['button_external'],
              'S_NAME'                      => $row['button_name'],
			  'S_DESC'                      => $row['button_desc'],
              'S_PARENT'                    => $row['parent_id'],
              'S_DISPLAY'                   => $row['button_display'],
              'S_ONLY_REGISTERED'           => $row['button_only_registered'],
              'S_ONLY_GUEST'                => $row['button_only_guest'],  
			  'S_ICON'                		=> $row['icon'],
              'S_MENU_EDIT_BUTTON'          => true,
            ));
            $db->sql_freeresult($result);
              
            $submit = (isset($_POST['submit'])) ? true : false;
            
            if ($submit)
            {
              $button_url	= request_var('button_url', '', true);
			  $button_name	= request_var('button_name', '', true);
			  $button_desc	= request_var('button_desc', '', true);
              $button_parent	= request_var('button_parent', 0);
              $button_external	= request_var('button_external', 0);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);
              $button_only_guest	= request_var('button_only_guest', 0);
			  $button_icon	= request_var('button_icon', '');
              
              if ($button_parent && !$row['parent_id'])
              {
                $sql = 'SELECT button_id
                        FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                        WHERE parent_id = ' . $button_id;
                $result = $db->sql_query($sql);
                
                if ( $db->sql_affectedrows() )
                {
                  trigger_error($user->lang['MOVE_BUTTON_WITH_SUBS'] . adm_back_link($this->u_action.'&amp;parent_id='.$parent_id), E_USER_WARNING);  
                }
              }
            
        			$sql = 'UPDATE ' . FLATBOOTS_STYLE_MENU_TABLE . '
                        SET button_url = "' . $button_url . '", button_name = "' . $button_name . '", button_desc = "' . $button_desc . '", button_external = ' . $button_external . ',
                        button_display = ' . $button_display . ', button_only_registered = ' . $button_only_registered . ',
                        button_only_guest = ' . $button_only_guest . ', parent_id = ' . $button_parent . ', icon = "' . $button_icon . '"
                        WHERE button_id = ' . $button_id;
  						$db->sql_query($sql);
  
       				trigger_error($user->lang['BUTTON_UPDATED'] . adm_back_link($this->u_action.'&amp;parent_id='.$button_parent));
            }
            
     				break;
     				
     			case 'move_up':
					case 'move_down':
					
						$sql = 'SELECT left_id, right_id
                        FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                        WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);

						acp_move_button(FLATBOOTS_STYLE_MENU_TABLE, $row, $action);
						
						redirect($this->u_action.'&amp;parent_id='.$parent_id);
						
					break;
     	
					default:

       	    $sql = 'SELECT *
                      FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                        WHERE parent_id = ' . $parent_id . '
                          ORDER BY left_id';
            $result = $db->sql_query($sql);
      
            while ($row = $db->sql_fetchrow($result))
            {
              $template->assign_block_vars('buttons', array(
                'ID'              => $row['button_id'],
                'NAME'            => $row['button_name'],
                'URL'             => $row['button_url'],
                'U_OPEN'          => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=&amp;parent_id='.$row['button_id'] : $this->u_action . '&amp;action=&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
                'U_DELETE'        => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=delete&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=delete&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
                'U_EDIT'          => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=edit_button&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=edit_button&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
                'U_MOVE_UP'		  => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=move_up&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=move_up&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
				'U_MOVE_DOWN'     => ($row['parent_id'] == 0) ? $this->u_action . '&amp;action=move_down&amp;parent_id=0&amp;button_id=' . $row['button_id'] : $this->u_action . '&amp;action=move_down&amp;parent_id='.$row['parent_id'].'&amp;button_id=' . $row['button_id'],
              ));
            }
            $db->sql_freeresult($result);
            
            $submit = (isset($_POST['submit'])) ? true : false;
             
            if ($submit)
            {          
              $button_name = request_var('button_name', '', true);
       				redirect($this->u_action . '&amp;action=add_button&amp;parent_id='.$parent_id.'&amp;button_name='.$button_name);
            }  
            
            $button_nav = $user->lang['MENU_NAV'];
            
            if ($parent_id)
            {
              $sql = 'SELECT button_name
                      FROM ' . FLATBOOTS_STYLE_MENU_TABLE . '
                      WHERE button_id = ' . $parent_id;
              $result = $db->sql_query($sql);  
              
              $button_nav .= ' » ' .$db->sql_fetchfield('button_name');
            }
                 
            $template->assign_vars(array(
              'S_MENU_BUTTONS_LIST'          => true,
              'S_BUTTONS_NAV'                => $button_nav,
            ));
			}

      break;

			case 'social':

        $this->page_title	= $user->lang['FLATBOOTS_STYLE_TITLE'] . ' - ' . $user->lang['FLATBOOTS_STYLE_SOCIAL'];

        $action	= request_var('action', '');
        $button_id = request_var('button_id', 0);

        $template->assign_vars(array(
          'S_FLATBOOTS_STYLE_SOCIAL'	       => true,
        ));

        switch ($action)
				{
					case "delete":

						if (confirm_box(true))
						{
       			  $sql = 'DELETE FROM ' . FLATBOOTS_STYLE_SOCIAL_TABLE . '
							WHERE button_id = ' . $button_id;
							$db->sql_query($sql);

							redirect($this->u_action);
						}
						else
						{
						  confirm_box(false, $user->lang['DELETE_SOCIAL_CONFIRM']);

							redirect($this->u_action);
						}

            break;

					case "add_button":

            $button_name = request_var('button_name', '', true);

            $template->assign_vars(array(
              'S_NAME'               		 => $button_name,
              'S_MENU_CREATE_BUTTON'  		 => true,
            ));

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_url	= request_var('button_url', '', true);
              $button_name	= request_var('button_name', '', true);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);
              $button_only_guest	= request_var('button_only_guest', 0);
			  			$button_icon	= request_var('button_icon', '');

              $sql = 'SELECT MAX(right_id) AS right_id
  											FROM ' . FLATBOOTS_STYLE_SOCIAL_TABLE;
  						$result = $db->sql_query($sql);
  						$row = $db->sql_fetchrow($result);
  						$db->sql_freeresult($result);

  						$left_id = $row['right_id'] + 1;
  						$right_id = $row['right_id'] + 2;

  						$sql = 'INSERT INTO ' . FLATBOOTS_STYLE_SOCIAL_TABLE . ' (button_url, button_name, icon, button_display, button_only_registered, button_only_guest, left_id, right_id)
                        VALUES ("' . $button_url . '", "' . $button_name . '", "' . $button_icon . '", ' . $button_display . ',
                                ' . $button_only_registered . ', ' . $button_only_guest . ', ' . $left_id . ', ' . $right_id . ')';
  						$db->sql_query($sql);

       				trigger_error($user->lang['SOCIAL_ADDED'] . adm_back_link($this->u_action));
       			}

            break;

					case "edit_button":

            $sql = 'SELECT *
                      FROM ' . FLATBOOTS_STYLE_SOCIAL_TABLE . '
                      WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);

            $template->assign_vars(array(
              'S_URL'                       => $row['button_url'],
              'L_ACP_MENU_EDIT_BUTTON'      => $user->lang['FLATBOOTS_STYLE_EDIT_SOCIAL'] . ' » ' . $row['button_name'],
              'S_NAME'                      => $row['button_name'],
              'S_DISPLAY'                   => $row['button_display'],
              'S_ONLY_REGISTERED'           => $row['button_only_registered'],
              'S_ONLY_GUEST'                => $row['button_only_guest'],
			  'S_ICON'                      => $row['icon'],
              'S_MENU_EDIT_BUTTON'          => true,
            ));
            $db->sql_freeresult($result);

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_url	= request_var('button_url', '', true);
              $button_name	= request_var('button_name', '', true);
              $button_display	= request_var('button_display', 1);
              $button_only_registered	= request_var('button_only_registered', 0);
              $button_only_guest	= request_var('button_only_guest', 0);
			  $button_icon	= request_var('button_icon', '');

        			$sql = 'UPDATE ' . FLATBOOTS_STYLE_SOCIAL_TABLE . '
                        SET button_url = "' . $button_url . '", button_name = "' . $button_name . '",
                        button_display = ' . $button_display . ', button_only_registered = ' . $button_only_registered . ',
                        button_only_guest = ' . $button_only_guest . ', icon = "' . $button_icon . '"
                        WHERE button_id = ' . $button_id;
  						$db->sql_query($sql);

       				trigger_error($user->lang['SOCIAL_UPDATED'] . adm_back_link($this->u_action));
            }

     				break;

     			case 'move_up':
					case 'move_down':

						$sql = 'SELECT left_id, right_id
                        FROM ' . FLATBOOTS_STYLE_SOCIAL_TABLE . '
                        WHERE button_id = ' . $button_id;
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);

						acp_move_button(FLATBOOTS_STYLE_SOCIAL_TABLE, $row, $action);

						redirect($this->u_action);

					break;

					default:

       	    $sql = 'SELECT *
                    FROM ' . FLATBOOTS_STYLE_SOCIAL_TABLE . '
                    ORDER BY left_id';
            $result = $db->sql_query($sql);

            while ($row = $db->sql_fetchrow($result))
            {
              $template->assign_block_vars('social', array(
                'ID'              => $row['button_id'],
                'NAME'            => $row['button_name'],
                'URL'             => $row['button_url'],
                'U_DELETE'        => $this->u_action . '&amp;action=delete&amp;button_id=' . $row['button_id'],
                'U_EDIT'          => $this->u_action . '&amp;action=edit_button&amp;button_id=' . $row['button_id'],
                'U_MOVE_UP'		  => $this->u_action . '&amp;action=move_up&amp;button_id=' . $row['button_id'],
				'U_MOVE_DOWN'     => $this->u_action . '&amp;action=move_down&amp;button_id=' . $row['button_id'],
              ));
            }
            $db->sql_freeresult($result);

            $submit = (isset($_POST['submit'])) ? true : false;

            if ($submit)
            {
              $button_name = request_var('button_name', '', true);
       				redirect($this->u_action . '&amp;action=add_button&amp;button_name='.$button_name);
            }

            $template->assign_vars(array(
              'S_MENU_BUTTONS_LIST'   			=> true,
            ));
				}

      	break;
    }
	}
}

function acp_move_button($table, $button_row, $action = 'move_up')
{
	global $db;
	
	$sql_extend = ( $action == 'move_up' ) ? "right_id < {$button_row['right_id']} ORDER BY right_id DESC" : "left_id > {$button_row['left_id']} ORDER BY left_id ASC";

	$sql = 'SELECT *
						FROM ' . $table . '
						  WHERE ' . $sql_extend;
	$result = $db->sql_query_limit($sql, 1);

	$target = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$target = $row;
	}
	$db->sql_freeresult($result);

	if (!sizeof($target))
	{
	  // The button is already on top or bottom
		return false;
	}

	/**
	* $left_id and $right_id define the scope of the nodes that are affected by the move.
	* $diff_up and $diff_down are the values to substract or add to each node's left_id
	* and right_id in order to move them up or down.
	* $move_up_left and $move_up_right define the scope of the nodes that are moving
	* up. Other nodes in the scope of ($left_id, $right_id) are considered to move down.
	*/
	if ($action == 'move_up')
	{
		$left_id = $target['left_id'];
		$right_id = $button_row['right_id'];

		$diff_up = $button_row['left_id'] - $target['left_id'];
		$diff_down = $button_row['right_id'] + 1 - $button_row['left_id'];

		$move_up_left = $button_row['left_id'];
		$move_up_right = $button_row['right_id'];
	}
	else
	{
		$left_id = $button_row['left_id'];
		$right_id = $target['right_id'];

		$diff_up = $button_row['right_id'] + 1 - $button_row['left_id'];
		$diff_down = $target['right_id'] - $button_row['right_id'];

		$move_up_left = $button_row['right_id'] + 1;
		$move_up_right = $target['right_id'];
	}

	$sql = 'UPDATE ' . $table . "
						SET left_id = left_id + CASE
							WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
							ELSE {$diff_down}
						END,
						right_id = right_id + CASE
							WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
							ELSE {$diff_down}
						END
						WHERE
							left_id BETWEEN {$left_id} AND {$right_id}
							AND right_id BETWEEN {$left_id} AND {$right_id}";
	$db->sql_query($sql);
}	

?>