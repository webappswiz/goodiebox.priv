<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<form method="post" action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>" id="viewprofile">
 <div class="side-segment"><h3><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></h3></div>

 <div class="row">
        <div class="col-md-6">
            <div class="panel panel-profile text-muted">
                <div class="panel-heading text-center bg-profile">
				 <div class="pull-left pos-abs l-25">
					<a href="<?php echo (isset($this->_rootref['U_UCP_PROFILE'])) ? $this->_rootref['U_UCP_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_UCP_PROFILE'])) ? $this->_rootref['L_UCP_PROFILE'] : ((isset($user->lang['UCP_PROFILE'])) ? $user->lang['UCP_PROFILE'] : '{ UCP_PROFILE }')); ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
				 </div>
				 <div class="pull-right pos-abs r-25">
					<?php if ($this->_rootref['U_ACP'] || $this->_rootref['U_USER_BAN']) {  ?>

					<div class="btn-group">
						<div class="dropdown">
						  <a href="#" data-toggle="dropdown" class="btn btn-xs btn-primary" title="<?php echo ((isset($this->_rootref['L_MANAGE'])) ? $this->_rootref['L_MANAGE'] : ((isset($user->lang['MANAGE'])) ? $user->lang['MANAGE'] : '{ MANAGE }')); ?>"><i class="fa fa-cog"></i></a>
							<ul class="dropdown-menu dropdown-menu-right">
								<?php if ($this->_rootref['U_USER_ADMIN']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_USER_ADMIN'])) ? $this->_rootref['U_USER_ADMIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_ADMIN'])) ? $this->_rootref['L_USER_ADMIN'] : ((isset($user->lang['USER_ADMIN'])) ? $user->lang['USER_ADMIN'] : '{ USER_ADMIN }')); ?></a></li><?php } if ($this->_rootref['U_USER_BAN']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_USER_BAN'])) ? $this->_rootref['U_USER_BAN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_BAN'])) ? $this->_rootref['L_USER_BAN'] : ((isset($user->lang['USER_BAN'])) ? $user->lang['USER_BAN'] : '{ USER_BAN }')); ?></a></li><?php } if ($this->_rootref['U_SWITCH_PERMISSIONS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_SWITCH_PERMISSIONS'])) ? $this->_rootref['U_SWITCH_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USE_PERMISSIONS'])) ? $this->_rootref['L_USE_PERMISSIONS'] : ((isset($user->lang['USE_PERMISSIONS'])) ? $user->lang['USE_PERMISSIONS'] : '{ USE_PERMISSIONS }')); ?></a></li><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a></li><?php } ?>

							</ul>
						</div>
					</div>
					<?php } ?>

				 </div>
				 
				 <div class="profile-avatar">
				  <?php if ($this->_rootref['AVATAR_IMG']) {  echo (isset($this->_rootref['AVATAR_IMG'])) ? $this->_rootref['AVATAR_IMG'] : ''; } if (! $this->_rootref['AVATAR_IMG']) {  ?>

				   <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/no_avatar.gif" alt="" />
			      <?php } ?>

				 </div>

                    <h4><?php if ($this->_rootref['USER_COLOR']) {  ?><span style="color: <?php echo (isset($this->_rootref['USER_COLOR'])) ? $this->_rootref['USER_COLOR'] : ''; ?>; font-weight: bold;"><?php } else { } ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></h4>
                    <p><?php if ($this->_rootref['RANK_TITLE']) {  ?> <?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; } ?></p> 
                    <p><?php if ($this->_rootref['RANK_IMG']) {  echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; } ?></p>
					  <!-- <small>@SiteSplat</small> -->				
                </div>
				<?php if ($this->_rootref['INTERESTS']) {  ?>

				<div class="panel-body"> 
                <div class="text-center"> 
				    <h5><?php echo ((isset($this->_rootref['L_INTERESTS'])) ? $this->_rootref['L_INTERESTS'] : ((isset($user->lang['INTERESTS'])) ? $user->lang['INTERESTS'] : '{ INTERESTS }')); ?></h5>
                    <p><?php echo (isset($this->_rootref['INTERESTS'])) ? $this->_rootref['INTERESTS'] : ''; ?></p>
                </div>
				</div>
				<?php } ?>

				<div class="panel-footer no-padding"> 
				 <div class="clearfix">
				 <?php if ($this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_ZEBRA']) {  if ($this->_rootref['U_REMOVE_FRIEND']) {  ?>

				 <div class="col-md-12 partition-green padding-10 text-center">
						<a class="btn btn-block btn-white" title="" href="<?php echo (isset($this->_rootref['U_REMOVE_FRIEND'])) ? $this->_rootref['U_REMOVE_FRIEND'] : ''; ?>"><i class="fa fa-times"></i> <i class="fa fa-heart"></i> <?php echo ((isset($this->_rootref['L_REMOVE_FRIEND'])) ? $this->_rootref['L_REMOVE_FRIEND'] : ((isset($user->lang['REMOVE_FRIEND'])) ? $user->lang['REMOVE_FRIEND'] : '{ REMOVE_FRIEND }')); ?></a>
				 </div>
					<?php } else if ($this->_rootref['U_REMOVE_FOE']) {  ?>

					<div class="col-md-12 partition-blue padding-10 text-center">
						<a class="btn btn-block btn-white" title="" href="<?php echo (isset($this->_rootref['U_REMOVE_FOE'])) ? $this->_rootref['U_REMOVE_FOE'] : ''; ?>"><i class="fa fa-times"></i> <i class="fa fa-bug"></i> <?php echo ((isset($this->_rootref['L_REMOVE_FOE'])) ? $this->_rootref['L_REMOVE_FOE'] : ((isset($user->lang['REMOVE_FOE'])) ? $user->lang['REMOVE_FOE'] : '{ REMOVE_FOE }')); ?></a>
					</div>
					<?php } else { if ($this->_rootref['U_ADD_FRIEND']) {  ?>

					 <div class="col-md-6 partition-green padding-10 text-center">
						<a class="btn btn-block btn-white" title="" href="<?php echo (isset($this->_rootref['U_ADD_FRIEND'])) ? $this->_rootref['U_ADD_FRIEND'] : ''; ?>"><i class="fa fa-plus"></i> <i class="fa fa-heart"></i> <?php echo ((isset($this->_rootref['L_ADD_FRIEND'])) ? $this->_rootref['L_ADD_FRIEND'] : ((isset($user->lang['ADD_FRIEND'])) ? $user->lang['ADD_FRIEND'] : '{ ADD_FRIEND }')); ?></a>
					</div>
					<?php } if ($this->_rootref['U_ADD_FOE']) {  ?>

					<div class="col-md-6 partition-blue padding-10 text-center">
						<a class="btn btn-block btn-white" title="" href="<?php echo (isset($this->_rootref['U_ADD_FOE'])) ? $this->_rootref['U_ADD_FOE'] : ''; ?>"><i class="fa fa-plus"></i> <i class="fa fa-bug"></i> <?php echo ((isset($this->_rootref['L_ADD_FOE'])) ? $this->_rootref['L_ADD_FOE'] : ((isset($user->lang['ADD_FOE'])) ? $user->lang['ADD_FOE'] : '{ ADD_FOE }')); ?></a>
					</div>
					<?php } } } ?> 
				</div>
				</div>
            </div>
    	</div>
	
	    <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> <?php echo ((isset($this->_rootref['L_BIO'])) ? $this->_rootref['L_BIO'] : ((isset($user->lang['BIO'])) ? $user->lang['BIO'] : '{ BIO }')); if ($this->_rootref['S_USER_INACTIVE']) {  ?> <span class="label label-default"><?php echo ((isset($this->_rootref['L_USER_IS_INACTIVE'])) ? $this->_rootref['L_USER_IS_INACTIVE'] : ((isset($user->lang['USER_IS_INACTIVE'])) ? $user->lang['USER_IS_INACTIVE'] : '{ USER_IS_INACTIVE }')); ?>: <?php echo (isset($this->_rootref['USER_INACTIVE_REASON'])) ? $this->_rootref['USER_INACTIVE_REASON'] : ''; ?></span><?php } ?></strong></div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-body">
                            <ul class="list-unstyled list-info text-muted">
                                <li>
                                    <span class="icon glyphicon glyphicon-user"></span>
                                    <label><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></label>
                                    <?php if ($this->_rootref['USER_COLOR']) {  ?><span style="color: <?php echo (isset($this->_rootref['USER_COLOR'])) ? $this->_rootref['USER_COLOR'] : ''; ?>; font-weight: bold;"><?php } else { } ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></span>
                                </li>
								<li>
                                    <span class="icon glyphicon glyphicon-globe"></span>
                                    <label><?php echo ((isset($this->_rootref['L_USER_STATUS'])) ? $this->_rootref['L_USER_STATUS'] : ((isset($user->lang['USER_STATUS'])) ? $user->lang['USER_STATUS'] : '{ USER_STATUS }')); ?></label>
                                     <?php if ($this->_rootref['S_ONLINE']) {  echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); } else { echo ((isset($this->_rootref['L_OFF_LINE'])) ? $this->_rootref['L_OFF_LINE'] : ((isset($user->lang['OFF_LINE'])) ? $user->lang['OFF_LINE'] : '{ OFF_LINE }')); } ?>

                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-map-marker"></span>
                                    <label><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?></label>
                                    <?php if ($this->_rootref['LOCATION']) {  echo (isset($this->_rootref['LOCATION'])) ? $this->_rootref['LOCATION'] : ''; } else { } ?>

                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-home"></span>
                                    <label><?php echo ((isset($this->_rootref['L_AGE'])) ? $this->_rootref['L_AGE'] : ((isset($user->lang['AGE'])) ? $user->lang['AGE'] : '{ AGE }')); ?></label>
                                    <?php if ($this->_rootref['AGE'] !== ('')) {  ?> <?php echo (isset($this->_rootref['AGE'])) ? $this->_rootref['AGE'] : ''; } else { } ?>

                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-briefcase"></span>
                                    <label><?php echo ((isset($this->_rootref['L_OCCUPATION'])) ? $this->_rootref['L_OCCUPATION'] : ((isset($user->lang['OCCUPATION'])) ? $user->lang['OCCUPATION'] : '{ OCCUPATION }')); ?></label>
                                    <?php if ($this->_rootref['OCCUPATION']) {  echo (isset($this->_rootref['OCCUPATION'])) ? $this->_rootref['OCCUPATION'] : ''; } ?>

                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-link"></span>
                                    <label><?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?></label>
                                   <?php if ($this->_rootref['U_WWW']) {  ?><a href="<?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>"><?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?></a><?php } ?>

                                </li>
                                <?php $_custom_fields_count = (isset($this->_tpldata['custom_fields'])) ? sizeof($this->_tpldata['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$this->_tpldata['custom_fields'][$_custom_fields_i]; ?>

								<li>
                                    <span class="icon glyphicon glyphicon-cog"></span>
                                    <label><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?></label>
                                    <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?>

                                </li>
								<?php }} ?>	
                            </ul>
                            
                        </div>
                    </div>
                </div>
				<div class="panel-footer">
				    <div class="clearfix">
						<ul class="mini-profile-contact pull-right">
							<?php if ($this->_rootref['U_EMAIL']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_EMAIL'])) ? $this->_rootref['U_EMAIL'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>"><i class="fa fa-send"></i></a></li><?php } if ($this->_rootref['U_PM']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_PM'])) ? $this->_rootref['U_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_PRIVATE_MESSAGE'])) ? $this->_rootref['L_SEND_PRIVATE_MESSAGE'] : ((isset($user->lang['SEND_PRIVATE_MESSAGE'])) ? $user->lang['SEND_PRIVATE_MESSAGE'] : '{ SEND_PRIVATE_MESSAGE }')); ?>"><i class="fa fa-envelope"></i></a></li><?php } if ($this->_rootref['U_MSN'] || $this->_rootref['USER_MSN']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_MSN'])) ? $this->_rootref['U_MSN'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_SEND_MSNM_MESSAGE'])) ? $this->_rootref['L_SEND_MSNM_MESSAGE'] : ((isset($user->lang['SEND_MSNM_MESSAGE'])) ? $user->lang['SEND_MSNM_MESSAGE'] : '{ SEND_MSNM_MESSAGE }')); ?>"><i class="fa fa-windows"></i></a></li><?php } if ($this->_rootref['U_YIM'] || $this->_rootref['USER_YIM']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_YIM'])) ? $this->_rootref['U_YIM'] : ''; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_SEND_YIM_MESSAGE'])) ? $this->_rootref['L_SEND_YIM_MESSAGE'] : ((isset($user->lang['SEND_YIM_MESSAGE'])) ? $user->lang['SEND_YIM_MESSAGE'] : '{ SEND_YIM_MESSAGE }')); ?>"><i class="fa fa-yahoo"></i></a></li><?php } if ($this->_rootref['U_AIM'] || $this->_rootref['USER_AIM']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_AIM'])) ? $this->_rootref['U_AIM'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_SEND_AIM_MESSAGE'])) ? $this->_rootref['L_SEND_AIM_MESSAGE'] : ((isset($user->lang['SEND_AIM_MESSAGE'])) ? $user->lang['SEND_AIM_MESSAGE'] : '{ SEND_AIM_MESSAGE }')); ?>"><i class="fa fa-comment"></i></a></li><?php } if ($this->_rootref['U_ICQ'] || $this->_rootref['USER_ICQ']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_ICQ'])) ? $this->_rootref['U_ICQ'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_SEND_ICQ_MESSAGE'])) ? $this->_rootref['L_SEND_ICQ_MESSAGE'] : ((isset($user->lang['SEND_ICQ_MESSAGE'])) ? $user->lang['SEND_ICQ_MESSAGE'] : '{ SEND_ICQ_MESSAGE }')); ?>"><i class="fa fa-comment"></i></a></li><?php } if ($this->_rootref['U_JABBER'] && $this->_rootref['S_JABBER_ENABLED']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_JABBER'])) ? $this->_rootref['U_JABBER'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_SEND_JABBER_MESSAGE'])) ? $this->_rootref['L_SEND_JABBER_MESSAGE'] : ((isset($user->lang['SEND_JABBER_MESSAGE'])) ? $user->lang['SEND_JABBER_MESSAGE'] : '{ SEND_JABBER_MESSAGE }')); ?>"><i class="fa fa-comment"></i></a></li><?php } ?>

						</ul>
					</div>
			    </div>
            </div>
        </div>
	
 </div>
 
<div class="clearfix">
<div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_USER_FORUM'])) ? $this->_rootref['L_USER_FORUM'] : ((isset($user->lang['USER_FORUM'])) ? $user->lang['USER_FORUM'] : '{ USER_FORUM }')); ?></h3></div>

 <section class="ui-timeline text-muted">
            <article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-caption">
                            <a class="btn btn-primary btn-block" href="#"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></a>
                        </div>
                    </div>
                </div>
            </article>

            <article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time"><?php echo (isset($this->_rootref['JOINED'])) ? $this->_rootref['JOINED'] : ''; ?></div>
                        <div class="tl-icon square-icon sm bg-info"><i class="fa fa-automobile"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-primary"><?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?> <?php echo ((isset($this->_rootref['L_MEMBERLIST_P_JOINED'])) ? $this->_rootref['L_MEMBERLIST_P_JOINED'] : ((isset($user->lang['MEMBERLIST_P_JOINED'])) ? $user->lang['MEMBERLIST_P_JOINED'] : '{ MEMBERLIST_P_JOINED }')); ?></h4>
                            <p><?php echo ((isset($this->_rootref['L_MEMBERLIST_P_EXPL'])) ? $this->_rootref['L_MEMBERLIST_P_EXPL'] : ((isset($user->lang['MEMBERLIST_P_EXPL'])) ? $user->lang['MEMBERLIST_P_EXPL'] : '{ MEMBERLIST_P_EXPL }')); ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="tl-item alt">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time"><?php echo (isset($this->_rootref['VISITED'])) ? $this->_rootref['VISITED'] : ''; ?></div>
                        <div class="tl-icon square-icon sm bg-warning"><i class="fa fa-eye"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-danger"><?php echo ((isset($this->_rootref['L_VISITED'])) ? $this->_rootref['L_VISITED'] : ((isset($user->lang['VISITED'])) ? $user->lang['VISITED'] : '{ VISITED }')); ?></h4>
                            <p><?php echo ((isset($this->_rootref['L_MEMBERLIST_P_DATE_EXPL'])) ? $this->_rootref['L_MEMBERLIST_P_DATE_EXPL'] : ((isset($user->lang['MEMBERLIST_P_DATE_EXPL'])) ? $user->lang['MEMBERLIST_P_DATE_EXPL'] : '{ MEMBERLIST_P_DATE_EXPL }')); ?></p>
                        </div>
                    </div>
                </div>
            </article>

			
			<article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">3 hours ago</div>
                        <div class="tl-icon square-icon sm bg-success"><i class="fa fa-comments"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-warning"><?php echo ((isset($this->_rootref['L_TOTAL_POSTS'])) ? $this->_rootref['L_TOTAL_POSTS'] : ((isset($user->lang['TOTAL_POSTS'])) ? $user->lang['TOTAL_POSTS'] : '{ TOTAL_POSTS }')); ?></h4>
                            <p><?php echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; ?> <?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>| <strong><a href="<?php echo (isset($this->_rootref['U_SEARCH_USER'])) ? $this->_rootref['U_SEARCH_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_USER_POSTS'])) ? $this->_rootref['L_SEARCH_USER_POSTS'] : ((isset($user->lang['SEARCH_USER_POSTS'])) ? $user->lang['SEARCH_USER_POSTS'] : '{ SEARCH_USER_POSTS }')); ?></a></strong><?php } if ($this->_rootref['POSTS_PCT']) {  ?>(<?php echo (isset($this->_rootref['POSTS_PCT'])) ? $this->_rootref['POSTS_PCT'] : ''; ?> / <?php echo (isset($this->_rootref['POSTS_DAY'])) ? $this->_rootref['POSTS_DAY'] : ''; ?>)<?php } if ($this->_rootref['POSTS_IN_QUEUE'] && $this->_rootref['U_MCP_QUEUE']) {  ?>(<a href="<?php echo (isset($this->_rootref['U_MCP_QUEUE'])) ? $this->_rootref['U_MCP_QUEUE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?></a>)<?php } else if ($this->_rootref['POSTS_IN_QUEUE']) {  ?>(<?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?>)<?php } ?></p>
                        </div>
                    </div>
                </div>
            </article>
			
			<?php if ($this->_rootref['S_SHOW_ACTIVITY'] && $this->_rootref['POSTS']) {  ?>

			<article class="tl-item alt">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">7 hours ago</div>
                        <div class="tl-icon square-icon sm bg-primary"><i class="fa fa-check"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-success"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_FORUM'])) ? $this->_rootref['L_ACTIVE_IN_FORUM'] : ((isset($user->lang['ACTIVE_IN_FORUM'])) ? $user->lang['ACTIVE_IN_FORUM'] : '{ ACTIVE_IN_FORUM }')); ?></h4>
                            <p><?php if ($this->_rootref['ACTIVE_FORUM'] != ('')) {  ?> <a href="<?php echo (isset($this->_rootref['U_ACTIVE_FORUM'])) ? $this->_rootref['U_ACTIVE_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_FORUM'])) ? $this->_rootref['ACTIVE_FORUM'] : ''; ?></a> (<?php echo (isset($this->_rootref['ACTIVE_FORUM_POSTS'])) ? $this->_rootref['ACTIVE_FORUM_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_FORUM_PCT'])) ? $this->_rootref['ACTIVE_FORUM_PCT'] : ''; ?>)<?php } else { ?> - <?php } ?></p>
                        </div>
                    </div>
                </div>
            </article>
			
			
			<article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">3 hours ago</div>
                        <div class="tl-icon square-icon sm bg-info"><i class="fa fa-fire"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-warning"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_TOPIC'])) ? $this->_rootref['L_ACTIVE_IN_TOPIC'] : ((isset($user->lang['ACTIVE_IN_TOPIC'])) ? $user->lang['ACTIVE_IN_TOPIC'] : '{ ACTIVE_IN_TOPIC }')); ?></h4>
                            <p><?php if ($this->_rootref['ACTIVE_TOPIC'] != ('')) {  ?> <a href="<?php echo (isset($this->_rootref['U_ACTIVE_TOPIC'])) ? $this->_rootref['U_ACTIVE_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_TOPIC'])) ? $this->_rootref['ACTIVE_TOPIC'] : ''; ?></a> (<?php echo (isset($this->_rootref['ACTIVE_TOPIC_POSTS'])) ? $this->_rootref['ACTIVE_TOPIC_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_TOPIC_PCT'])) ? $this->_rootref['ACTIVE_TOPIC_PCT'] : ''; ?>)<?php } else { ?> - <?php } ?></p>
                        </div>
                    </div>
                </div>
            </article>
			<?php } if ($this->_rootref['S_WARNINGS']) {  ?>

            <article class="tl-item alt">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">3 hours ago</div>
                        <div class="tl-icon square-icon sm bg-success"><i class="fa fa-bomb"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-warning"><?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?></h4>
                            <p><?php echo (isset($this->_rootref['WARNINGS'])) ? $this->_rootref['WARNINGS'] : ''; ?> <?php if ($this->_rootref['U_NOTES'] || $this->_rootref['U_WARN']) {  ?> [ <?php if ($this->_rootref['U_NOTES']) {  ?><a href="<?php echo (isset($this->_rootref['U_NOTES'])) ? $this->_rootref['U_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a><?php } if ($this->_rootref['U_WARN']) {  if ($this->_rootref['U_NOTES']) {  ?> | <?php } ?><a href="<?php echo (isset($this->_rootref['U_WARN'])) ? $this->_rootref['U_WARN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a><?php } ?> ]<?php } ?></p>
                        </div>
                    </div>
                </div>
            </article>
            <?php } ?>


			<article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-caption">
                            <a class="btn btn-danger btn-block" href="javascript:;"><?php echo ((isset($this->_rootref['L_END_TIMELINE'])) ? $this->_rootref['L_END_TIMELINE'] : ((isset($user->lang['END_TIMELINE'])) ? $user->lang['END_TIMELINE'] : '{ END_TIMELINE }')); ?></a>
                        </div>
                    </div>
                </div>
            </article>

		<!-- Last articles
		    <article class="tl-item">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">10 hours ago</div>
                        <div class="tl-icon square-icon sm bg-primary"><i class="fa fa-clock-o"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-info">Accusantium sint</h4>
                            <p>Ipsam, minus, quam, sit officiis accusantium sint voluptates voluptatibus minima cum non quos corrupti dolorem eligendi modi eius magnam unde!</p>
                        </div>
                    </div>
                </div>
            </article>
		
            <article class="tl-item alt">
                <div class="tl-body">
                    <div class="tl-entry">
                        <div class="tl-time">9:10 AM</div>
                        <div class="tl-icon square-icon sm bg-info"><i class="fa fa-gift"></i></div>
                        <div class="tl-content">
                            <h4 class="tl-tile text-primary">Sed cumque temporibus</h4>
                            <p>Deserunt sed cumque temporibus. Doloribus, iste, sit recusandae fugiat assumenda ea magni at doloremque ipsum amet molestias error mollitia maxime ad alias eos id cumque corporis placeat nisi a quaerat nemo magnam ab numquam ratione facere dolorum. Cumque, dolores, sint molestiae eaque quibusdam illo error!</p>
                        </div>
                    </div>
                </div>
            </article>	
        Last articles -->
		
        </section>
 
 
 
</div>

<?php if ($this->_rootref['SIGNATURE']) {  ?>

   <div class="clearfix">
    <div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_SIGNATURE'])) ? $this->_rootref['L_SIGNATURE'] : ((isset($user->lang['SIGNATURE'])) ? $user->lang['SIGNATURE'] : '{ SIGNATURE }')); ?></h3></div>
     <div class="panel">
	 <div class="panel-body">
      <div class="signature" style="border-top:none; margin-top: 0;"><?php echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></div>
    </div>
	</div>
   </div>
<?php } ?>


</form>

<div class="row">
<?php $this->_tpl_include('jumpbox.html'); ?>

</div>

<?php $this->_tpl_include('jump_links.html'); $this->_tpl_include('overall_footer.html'); ?>