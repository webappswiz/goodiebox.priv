<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<div class="tab-pane active">
<?php $this->_tpl_include('ucp_pm_message_header.html'); ?>


</fieldset> <!--FORMER DOUBLE DIV PANEL AND INNER FOR VIEW FOLDER AND VIEW MESSASGE-->

<?php if ($this->_rootref['S_DISPLAY_HISTORY'] && ( $this->_rootref['U_VIEW_PREVIOUS_HISTORY'] || $this->_rootref['U_VIEW_NEXT_HISTORY'] )) {  ?>

	<fieldset>
		<ul class="pager">
		  <?php if ($this->_rootref['U_VIEW_PREVIOUS_HISTORY']) {  ?><li class="previous"><a href="<?php echo (isset($this->_rootref['U_VIEW_PREVIOUS_HISTORY'])) ? $this->_rootref['U_VIEW_PREVIOUS_HISTORY'] : ''; ?>" class="pull-left"><?php echo ((isset($this->_rootref['L_VIEW_PREVIOUS_HISTORY'])) ? $this->_rootref['L_VIEW_PREVIOUS_HISTORY'] : ((isset($user->lang['VIEW_PREVIOUS_HISTORY'])) ? $user->lang['VIEW_PREVIOUS_HISTORY'] : '{ VIEW_PREVIOUS_HISTORY }')); ?></a></li><?php } if ($this->_rootref['U_VIEW_NEXT_HISTORY']) {  ?><li class="next"><a href="<?php echo (isset($this->_rootref['U_VIEW_NEXT_HISTORY'])) ? $this->_rootref['U_VIEW_NEXT_HISTORY'] : ''; ?>" class="pull-right"><?php echo ((isset($this->_rootref['L_VIEW_NEXT_HISTORY'])) ? $this->_rootref['L_VIEW_NEXT_HISTORY'] : ((isset($user->lang['VIEW_NEXT_HISTORY'])) ? $user->lang['VIEW_NEXT_HISTORY'] : '{ VIEW_NEXT_HISTORY }')); ?></a></li><?php } ?>

		</ul>
	</fieldset>
<?php } ?>


<div class="space10"></div>
  
<div id="post-<?php echo (isset($this->_rootref['MESSAGE_ID'])) ? $this->_rootref['MESSAGE_ID'] : ''; ?>" class="pm">
 <div class="panel panel-poll">
    <div class="panel-heading">
        <div class="side-segment"><h3 style="border-bottom: 4px solid #ccc;"><?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?></h3></div>    
		<div class="clearfix">
		 <div class="text-muted pull-left"><i class="fa fa-clock-o"></i> <?php echo (isset($this->_rootref['SENT_DATE'])) ? $this->_rootref['SENT_DATE'] : ''; ?></div>
		  <div class="pull-right">
			 <div class="btn-group btn-group-sm">	
			 <?php if ($this->_rootref['U_EMAIL_PM']) {  ?><a href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>" class="btn btn-default"><i class="fa fa-envelope"></i></a><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><i class="fa fa-print"></i></a><?php } ?>

             </div>
		     <?php if ($this->_rootref['U_DELETE'] || $this->_rootref['U_EDIT'] || $this->_rootref['U_QUOTE'] || $this->_rootref['U_REPORT']) {  ?>

		      <div class="btn-group btn-group-sm">
			  <?php if ($this->_rootref['U_EDIT']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_EDIT'])) ? $this->_rootref['U_EDIT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_POST_EDIT_PM'])) ? $this->_rootref['L_POST_EDIT_PM'] : ((isset($user->lang['POST_EDIT_PM'])) ? $user->lang['POST_EDIT_PM'] : '{ POST_EDIT_PM }')); ?>"><i class="fa fa-edit"></i> </a><?php } if ($this->_rootref['U_DELETE']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_DELETE'])) ? $this->_rootref['U_DELETE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_MESSAGE'])) ? $this->_rootref['L_DELETE_MESSAGE'] : ((isset($user->lang['DELETE_MESSAGE'])) ? $user->lang['DELETE_MESSAGE'] : '{ DELETE_MESSAGE }')); ?>"><i class="fa fa-trash-o"></i> </a><?php } if ($this->_rootref['U_REPORT']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_REPORT'])) ? $this->_rootref['U_REPORT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_REPORT_PM'])) ? $this->_rootref['L_REPORT_PM'] : ((isset($user->lang['REPORT_PM'])) ? $user->lang['REPORT_PM'] : '{ REPORT_PM }')); ?>"><i class="fa fa-warning"></i> </a><?php } if ($this->_rootref['U_QUOTE']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_QUOTE'])) ? $this->_rootref['U_QUOTE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_POST_QUOTE_PM'])) ? $this->_rootref['L_POST_QUOTE_PM'] : ((isset($user->lang['POST_QUOTE_PM'])) ? $user->lang['POST_QUOTE_PM'] : '{ POST_QUOTE_PM }')); ?>"><i class="fa fa-comment"></i> </a><?php } ?>

		      </div>
		     <?php } ?>

	        </div>
		</div>
	</div>
   
    <div class="panel-body">
	    <div class="media media-pm">
			<div class="avatar-over pull-left">
				<?php if ($this->_rootref['AUTHOR_AVATAR']) {  ?><a href="<?php echo (isset($this->_rootref['U_MESSAGE_AUTHOR'])) ? $this->_rootref['U_MESSAGE_AUTHOR'] : ''; ?>"><?php echo (isset($this->_rootref['AUTHOR_AVATAR'])) ? $this->_rootref['AUTHOR_AVATAR'] : ''; ?></a><?php } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/no_avatar.gif" alt="" /><?php } if ($this->_rootref['S_ONLINE']) {  ?> 
				<span class="status"><i class="fa fa-circle text-online"></i></span>
				<?php } ?>

			</div>
                <ul class="media-body user-info list-unstyled text-muted">
                 <li><?php echo ((isset($this->_rootref['L_PM_FROM'])) ? $this->_rootref['L_PM_FROM'] : ((isset($user->lang['PM_FROM'])) ? $user->lang['PM_FROM'] : '{ PM_FROM }')); ?>: <?php echo (isset($this->_rootref['MESSAGE_AUTHOR_FULL'])) ? $this->_rootref['MESSAGE_AUTHOR_FULL'] : ''; ?></li>
				 <?php if ($this->_rootref['S_TO_RECIPIENT']) {  ?><li><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>: <?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if ($_to_recipient_val['NAME_FULL']) {  echo $_to_recipient_val['NAME_FULL']; ?> &#45;<?php } else { ?><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>" style="color:<?php if ($_to_recipient_val['COLOUR']) {  echo $_to_recipient_val['COLOUR']; } else if ($_to_recipient_val['IS_GROUP']) {  ?>#0000FF<?php } ?>;"><?php echo $_to_recipient_val['NAME']; ?></a><?php } ?>&nbsp;<?php }} ?></li><?php } if ($this->_rootref['S_BCC_RECIPIENT']) {  ?><li><?php echo ((isset($this->_rootref['L_BCC'])) ? $this->_rootref['L_BCC'] : ((isset($user->lang['BCC'])) ? $user->lang['BCC'] : '{ BCC }')); ?>: <?php $_bcc_recipient_count = (isset($this->_tpldata['bcc_recipient'])) ? sizeof($this->_tpldata['bcc_recipient']) : 0;if ($_bcc_recipient_count) {for ($_bcc_recipient_i = 0; $_bcc_recipient_i < $_bcc_recipient_count; ++$_bcc_recipient_i){$_bcc_recipient_val = &$this->_tpldata['bcc_recipient'][$_bcc_recipient_i]; if ($_bcc_recipient_val['NAME_FULL']) {  echo $_bcc_recipient_val['NAME_FULL']; ?> &#45;<?php } else { ?><a href="<?php echo $_bcc_recipient_val['U_VIEW']; ?>" style="color:<?php if ($_bcc_recipient_val['COLOUR']) {  echo $_bcc_recipient_val['COLOUR']; } else if ($_bcc_recipient_val['IS_GROUP']) {  ?>#0000FF<?php } ?>;"><?php echo $_bcc_recipient_val['NAME']; ?></a><?php } ?>&nbsp;<?php }} ?></li><?php } ?>

                  <li class="share-box">
				   <a data-toggle="modal" href="#mini<?php echo (isset($this->_rootref['MESSAGE_ID'])) ? $this->_rootref['MESSAGE_ID'] : ''; ?>" class="btn btn-bordered btn-xs"><i class="glyphicon glyphicon-user"></i></a>
				
				<div class="modal fade" id="mini<?php echo (isset($this->_rootref['MESSAGE_ID'])) ? $this->_rootref['MESSAGE_ID'] : ''; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title"><?php echo ((isset($this->_rootref['L_USER_MINI_PROFILE'])) ? $this->_rootref['L_USER_MINI_PROFILE'] : ((isset($user->lang['USER_MINI_PROFILE'])) ? $user->lang['USER_MINI_PROFILE'] : '{ USER_MINI_PROFILE }')); ?></h4>
						</div>
						<div class="modal-body">
						  <div class="row profile-data">
							<!-- Left Side Start -->
							<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center">
							  <!-- Profile Avatar Start -->
							  <div class="profile-avatar">
								<?php if ($this->_rootref['AUTHOR_AVATAR']) {  ?><a href="<?php echo (isset($this->_rootref['U_MESSAGE_AUTHOR'])) ? $this->_rootref['U_MESSAGE_AUTHOR'] : ''; ?>"><?php echo (isset($this->_rootref['AUTHOR_AVATAR'])) ? $this->_rootref['AUTHOR_AVATAR'] : ''; ?></a><?php } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/no_avatar.gif" alt="" /><?php } ?>

							  </div>
							  <!-- Profile Avatar End --><?php if ($this->_rootref['RANK_IMG']) {  ?><div class="profile-rank text-center"><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></div><?php } ?>

	
							<a class="btn btn-sm btn-default" title="" href="<?php echo (isset($this->_rootref['U_MESSAGE_AUTHOR'])) ? $this->_rootref['U_MESSAGE_AUTHOR'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_MINI_PROFILE_VIEW_FULL'])) ? $this->_rootref['L_USER_MINI_PROFILE_VIEW_FULL'] : ((isset($user->lang['USER_MINI_PROFILE_VIEW_FULL'])) ? $user->lang['USER_MINI_PROFILE_VIEW_FULL'] : '{ USER_MINI_PROFILE_VIEW_FULL }')); ?></a>
							
							</div>
							<!-- Left Side End --><!-- Right Side Start -->
							<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
							 <h3 style="border-bottom: 4px solid #ffffff;"><?php echo (isset($this->_rootref['MESSAGE_AUTHOR_FULL'])) ? $this->_rootref['MESSAGE_AUTHOR_FULL'] : ''; ?></h3>
							  <ul class="icon-list list-unstyled">
								<?php if ($this->_rootref['RANK_TITLE']) {  ?><li><i class="fa fa-sitemap"></i> <?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?>: <?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></li><?php } ?>

								<li><i class="fa fa-comments"></i> <?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>: <?php echo (isset($this->_rootref['AUTHOR_POSTS'])) ? $this->_rootref['AUTHOR_POSTS'] : ''; ?></li>
								<?php if ($this->_rootref['AUTHOR_JOINED']) {  ?><li><i class="fa fa-calendar"></i> <?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>: <?php echo (isset($this->_rootref['AUTHOR_JOINED'])) ? $this->_rootref['AUTHOR_JOINED'] : ''; ?></li><?php } if ($this->_rootref['AUTHOR_FROM']) {  ?><li><i class="fa fa-map-marker"></i> <?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>: <?php echo (isset($this->_rootref['AUTHOR_FROM'])) ? $this->_rootref['AUTHOR_FROM'] : ''; ?></li><?php } ?>

								<li><i class="fa fa-bolt"></i> <?php echo ((isset($this->_rootref['L_USER_STATUS'])) ? $this->_rootref['L_USER_STATUS'] : ((isset($user->lang['USER_STATUS'])) ? $user->lang['USER_STATUS'] : '{ USER_STATUS }')); ?>:<?php if ($this->_rootref['S_ONLINE']) {  ?> <?php echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); } else { ?> <?php echo ((isset($this->_rootref['L_OFF_LINE'])) ? $this->_rootref['L_OFF_LINE'] : ((isset($user->lang['OFF_LINE'])) ? $user->lang['OFF_LINE'] : '{ OFF_LINE }')); } ?></li>
							  </ul>
							</div>
							<!-- Right Side End -->
                         </div>
						</div>
						<div class="modal-footer">
		                 <?php if ($this->_rootref['U_PM'] || $this->_rootref['U_EMAIL'] || $this->_rootref['U_WWW'] || $this->_rootref['U_MSN'] || $this->_rootref['U_ICQ'] || $this->_rootref['U_YIM'] || $this->_rootref['U_AIM'] || $this->_rootref['U_JABBER']) {  ?>

						
						  <div class="clearfix">
						  <ul class="mini-profile-contact">
							<?php if ($this->_rootref['U_PM']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_PM'])) ? $this->_rootref['U_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>"><i class="fa fa-envelope"></i></a></li><?php } if ($this->_rootref['U_EMAIL']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_EMAIL'])) ? $this->_rootref['U_EMAIL'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo (isset($this->_rootref['MESSAGE_AUTHOR'])) ? $this->_rootref['MESSAGE_AUTHOR'] : ''; ?>"><i class="fa fa-send"></i></a></li><?php } if ($this->_rootref['U_WWW']) {  ?><li><a class="default-contact" href="<?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>"><i class="fa fa-globe"></i></a></li><?php } if ($this->_rootref['U_MSN']) {  ?><li><a class="linkedin" href="<?php echo (isset($this->_rootref['U_MSN'])) ? $this->_rootref['U_MSN'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>"><i class="fa fa-windows"></i> </a></li><?php } ?><!-- remove style="display:none;" to make these set visible. All these are obsolete and should be replaced with Twitter,google+ for example.  --><?php if ($this->_rootref['U_ICQ']) {  ?><li style="display:none;"><a href="<?php echo (isset($this->_rootref['U_ICQ'])) ? $this->_rootref['U_ICQ'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>"><span><?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?></span></a></li><?php } if ($this->_rootref['U_YIM']) {  ?><li style="display:none;"><a href="<?php echo (isset($this->_rootref['U_YIM'])) ? $this->_rootref['U_YIM'] : ''; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>"><span><?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?></span></a></li><?php } if ($this->_rootref['U_AIM']) {  ?><li style="display:none;"><a href="<?php echo (isset($this->_rootref['U_AIM'])) ? $this->_rootref['U_AIM'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>"><span><?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?></span></a></li><?php } if ($this->_rootref['U_JABBER']) {  ?><li style="display:none;"><a href="<?php echo (isset($this->_rootref['U_JABBER'])) ? $this->_rootref['U_JABBER'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>"><span><?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?></span></a></li><?php } ?><!-- remove style="display:none;" to make these set visible. All these are obsolete and should be replaced with Twitter,google+, facebook from the phpbb team  -->
						 </ul>
						</div>
						 <?php } ?>

						</div>
					  </div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				  </div><!-- /.modal --><?php if ($this->_rootref['U_PM']) {  ?><a title="" href="<?php echo (isset($this->_rootref['U_PM'])) ? $this->_rootref['U_PM'] : ''; ?>" class="btn btn-bordered btn-xs"><i class="glyphicon glyphicon-envelope"></i></a><?php } ?>

				</li>
			   </ul>
        </div>
	
		<div class="content"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></div>

		<?php if ($this->_rootref['S_HAS_ATTACHMENTS']) {  ?>

		<div class="attachbox">
			<h5><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></h5>
			<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>

			<span><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></span>
			<?php }} ?>

		</div>
		<?php } if ($this->_rootref['S_DISPLAY_NOTICE']) {  ?>

			<div class="rules"><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></div>
		<?php } if ($this->_rootref['EDITED_MESSAGE'] || $this->_rootref['EDIT_REASON']) {  ?>

		<div class="notice"><?php echo (isset($this->_rootref['EDITED_MESSAGE'])) ? $this->_rootref['EDITED_MESSAGE'] : ''; ?>

			<?php if ($this->_rootref['EDIT_REASON']) {  ?><strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <small><?php echo (isset($this->_rootref['EDIT_REASON'])) ? $this->_rootref['EDIT_REASON'] : ''; ?></small><?php } ?>

		</div>
		<?php } if ($this->_rootref['SIGNATURE']) {  ?>

		 <p class="separator text-center hidden-xs"><i class="fa fa-ellipsis-h fa-2x"></i></p>
		 <div id="sig<?php echo (isset($this->_rootref['MESSAGE_ID'])) ? $this->_rootref['MESSAGE_ID'] : ''; ?>" class="hidden-xs"><?php echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></div>
		<?php } ?>

	</div>	
	
	</div>
</div>

<ul class="pager">
  <?php if ($this->_rootref['U_PREVIOUS_PM']) {  ?><li class="previous"><a href="<?php echo (isset($this->_rootref['U_PREVIOUS_PM'])) ? $this->_rootref['U_PREVIOUS_PM'] : ''; ?>" class="pull-left"><?php echo ((isset($this->_rootref['L_VIEW_PREVIOUS_PM'])) ? $this->_rootref['L_VIEW_PREVIOUS_PM'] : ((isset($user->lang['VIEW_PREVIOUS_PM'])) ? $user->lang['VIEW_PREVIOUS_PM'] : '{ VIEW_PREVIOUS_PM }')); ?></a></li><?php } if ($this->_rootref['U_NEXT_PM']) {  ?><li class="next"><a href="<?php echo (isset($this->_rootref['U_NEXT_PM'])) ? $this->_rootref['U_NEXT_PM'] : ''; ?>" class="pull-right"><?php echo ((isset($this->_rootref['L_VIEW_NEXT_PM'])) ? $this->_rootref['L_VIEW_NEXT_PM'] : ((isset($user->lang['VIEW_NEXT_PM'])) ? $user->lang['VIEW_NEXT_PM'] : '{ VIEW_NEXT_PM }')); ?></a></li><?php } ?>

</ul>

<div class="clearfix">
<div class="pull-right">
    <ul class="pagination pagination-sm hidden-xs">
	 <li><a title="" data-original-title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></a></li>
    </ul>
</div>
</div>
	 
<?php if ($this->_rootref['S_VIEW_MESSAGE']) {  ?>

<div class="clearfix">
<fieldset class="framed-ucp sorting collapse">
<legend><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></legend>

	<?php if ($this->_rootref['S_MARK_OPTIONS']) {  ?>

	   <label class="control-label" for="mark_option"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></label>
	<div class="controls controls-row"> 
	  <div class="input-group col-md-6">
	   <select class="selectpicker" data-container="body" data-width="auto" data-style="btn btn-default form-control" name="mark_option" id="mark_option"><?php echo (isset($this->_rootref['S_MARK_OPTIONS'])) ? $this->_rootref['S_MARK_OPTIONS'] : ''; ?></select>
	   <div class="input-group-btn">
	   <button class="btn btn-default" type="submit" name="submit_mark" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
	   </div>
	  </div>
	</div> 
	<?php } if (! $this->_rootref['S_UNREAD'] && ! $this->_rootref['S_SPECIAL_FOLDER']) {  ?>

	   <label class="control-label" for="dest_folder"><?php if ($this->_rootref['S_VIEW_MESSAGE']) {  echo ((isset($this->_rootref['L_MOVE_TO_FOLDER'])) ? $this->_rootref['L_MOVE_TO_FOLDER'] : ((isset($user->lang['MOVE_TO_FOLDER'])) ? $user->lang['MOVE_TO_FOLDER'] : '{ MOVE_TO_FOLDER }')); ?>: <?php } else { echo ((isset($this->_rootref['L_MOVE_MARKED_TO_FOLDER'])) ? $this->_rootref['L_MOVE_MARKED_TO_FOLDER'] : ((isset($user->lang['MOVE_MARKED_TO_FOLDER'])) ? $user->lang['MOVE_MARKED_TO_FOLDER'] : '{ MOVE_MARKED_TO_FOLDER }')); } ?></label>
	<div class="controls controls-row"> 
	  <div class="input-group col-md-6">
	    <select class="selectpicker" data-container="body" data-width="auto" data-style="btn btn-default form-control" data-width="auto" name="dest_folder" id="dest_folder"><?php echo (isset($this->_rootref['S_TO_FOLDER_OPTIONS'])) ? $this->_rootref['S_TO_FOLDER_OPTIONS'] : ''; ?></select>
	   <div class="input-group-btn">
		<button class="btn btn-default" type="submit" name="move_pm" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
	   </div>
	   </div>
	</div> 
	<?php } ?>

	<input type="hidden" name="marked_msg_id[]" value="<?php echo (isset($this->_rootref['MSG_ID'])) ? $this->_rootref['MSG_ID'] : ''; ?>" />
	<input type="hidden" name="cur_folder_id" value="<?php echo (isset($this->_rootref['CUR_FOLDER_ID'])) ? $this->_rootref['CUR_FOLDER_ID'] : ''; ?>" />
	<input type="hidden" name="p" value="<?php echo (isset($this->_rootref['MSG_ID'])) ? $this->_rootref['MSG_ID'] : ''; ?>" />
</fieldset>
</div>
<?php } $this->_tpl_include('ucp_pm_message_footer.html'); if ($this->_rootref['S_DISPLAY_HISTORY']) {  $this->_tpl_include('ucp_pm_history.html'); } ?>

</div>
<?php $this->_tpl_include('ucp_footer.html'); ?>