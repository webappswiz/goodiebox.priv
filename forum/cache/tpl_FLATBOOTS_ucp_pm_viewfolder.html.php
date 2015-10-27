<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); if (! $this->_rootref['PROMPT']) {  $this->_tpl_include('ucp_pm_message_header.html'); } if ($this->_rootref['PROMPT']) {  ?>

	<form id="viewfolder" method="post" action="<?php echo (isset($this->_rootref['S_PM_ACTION'])) ? $this->_rootref['S_PM_ACTION'] : ''; ?>">
	<fieldset class="framed-ucp">
		<legend><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV'])) ? $this->_rootref['L_EXPORT_AS_CSV'] : ((isset($user->lang['EXPORT_AS_CSV'])) ? $user->lang['EXPORT_AS_CSV'] : '{ EXPORT_AS_CSV }')); ?> <?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></legend>
		
			 <div class="controls controls-row">						
              <label class="control-label" for="delimiter"><?php echo ((isset($this->_rootref['L_DELIMITER'])) ? $this->_rootref['L_DELIMITER'] : ((isset($user->lang['DELIMITER'])) ? $user->lang['DELIMITER'] : '{ DELIMITER }')); ?>:</label>
                <div class="controls">
                <input type="text" class="" id="delimiter" name="delimiter" value=",">
                </div>

             <label class="control-label" for="enclosure"><?php echo ((isset($this->_rootref['L_ENCLOSURE'])) ? $this->_rootref['L_ENCLOSURE'] : ((isset($user->lang['ENCLOSURE'])) ? $user->lang['ENCLOSURE'] : '{ ENCLOSURE }')); ?>:</label>
                <div class="controls">
                   <input type="text" class="" id="enclosure" name="enclosure" value="&#034;">
                </div>					
			 </div>
	</fieldset>
	<fieldset class="form-actions">
		<input type="hidden" name="export_option" value="CSV" />
		<button class="btn btn-default" type="submit" name="submit_export" value="<?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?>"><?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?></button>
		<button class="btn btn-default" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset>
	</form>
<?php } else { if ($this->_rootref['NUM_REMOVED']) {  ?>

		<div class="notice">
			<p><?php echo (isset($this->_rootref['RULE_REMOVED_MESSAGES'])) ? $this->_rootref['RULE_REMOVED_MESSAGES'] : ''; ?></p>
		</div>
	<?php } if ($this->_rootref['NUM_NOT_MOVED']) {  ?>

		<div class="notice">
			<p><?php echo (isset($this->_rootref['NOT_MOVED_MESSAGES'])) ? $this->_rootref['NOT_MOVED_MESSAGES'] : ''; ?><br /><?php echo (isset($this->_rootref['RELEASE_MESSAGE_INFO'])) ? $this->_rootref['RELEASE_MESSAGE_INFO'] : ''; ?></p>
		</div>
	<?php } if (sizeof($this->_tpldata['messagerow'])) {  ?>

	<div class="panel panel-forum">
	<div class="panel-heading">
	 <i class="fa fa-envelope"></i> <?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?>

	</div>
	<div class="panel-inner">
	<table class="footable table table-striped table-primary table-hover">
		<thead>
            <tr>
               <th data-class="expand"><?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  ?> <?php echo ((isset($this->_rootref['L_MESSAGE_TO'])) ? $this->_rootref['L_MESSAGE_TO'] : ((isset($user->lang['MESSAGE_TO'])) ? $user->lang['MESSAGE_TO'] : '{ MESSAGE_TO }')); ?> / <?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); } else { echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?> / <?php echo ((isset($this->_rootref['L_FROM'])) ? $this->_rootref['L_FROM'] : ((isset($user->lang['FROM'])) ? $user->lang['FROM'] : '{ FROM }')); } ?></th>
               <th data-hide="phone" class="large23"><?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  ?> <?php echo ((isset($this->_rootref['L_SENT_AT'])) ? $this->_rootref['L_SENT_AT'] : ((isset($user->lang['SENT_AT'])) ? $user->lang['SENT_AT'] : '{ SENT_AT }')); ?> <?php echo ((isset($this->_rootref['L_DATES'])) ? $this->_rootref['L_DATES'] : ((isset($user->lang['DATES'])) ? $user->lang['DATES'] : '{ DATES }')); } else { ?> <?php echo ((isset($this->_rootref['L_DATES'])) ? $this->_rootref['L_DATES'] : ((isset($user->lang['DATES'])) ? $user->lang['DATES'] : '{ DATES }')); } ?></th>
		       <th data-hide="phone" class="table-check"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
		  </tr>
        </thead>
		<tbody>
		<?php $_messagerow_count = (isset($this->_tpldata['messagerow'])) ? sizeof($this->_tpldata['messagerow']) : 0;if ($_messagerow_count) {for ($_messagerow_i = 0; $_messagerow_i < $_messagerow_count; ++$_messagerow_i){$_messagerow_val = &$this->_tpldata['messagerow'][$_messagerow_i]; ?>

		<tr> 
            <td>
			    <?php if ($_messagerow_val['S_PM_DELETED']) {  ?>

				<a href="<?php echo $_messagerow_val['U_REMOVE_PM']; ?>" class="topictitle"><?php echo ((isset($this->_rootref['L_DELETE_MESSAGE'])) ? $this->_rootref['L_DELETE_MESSAGE'] : ((isset($user->lang['DELETE_MESSAGE'])) ? $user->lang['DELETE_MESSAGE'] : '{ DELETE_MESSAGE }')); ?></a><br />
				<span class="error"><?php echo ((isset($this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'])) ? $this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'] : ((isset($user->lang['MESSAGE_REMOVED_FROM_OUTBOX'])) ? $user->lang['MESSAGE_REMOVED_FROM_OUTBOX'] : '{ MESSAGE_REMOVED_FROM_OUTBOX }')); ?></span>
				<?php } else { ?>

				<span class="fa fa-envelope <?php if ($_messagerow_val['PM_CLASS']) {  echo $_messagerow_val['PM_CLASS']; } ?>"></span> <a href="<?php echo $_messagerow_val['U_VIEW_PM']; ?>" class="<?php if ($_messagerow_val['S_PM_UNREAD']) {  ?>topictitle<?php } else { ?>nothing<?php } ?>"><?php echo $_messagerow_val['SUBJECT']; ?></a><br />
				<?php } if ($this->_rootref['S_SHOW_RECIPIENTS']) {  echo ((isset($this->_rootref['L_BY'])) ? $this->_rootref['L_BY'] : ((isset($user->lang['BY'])) ? $user->lang['BY'] : '{ BY }')); ?> <?php echo $_messagerow_val['RECIPIENTS']; } else { echo ((isset($this->_rootref['L_BY'])) ? $this->_rootref['L_BY'] : ((isset($user->lang['BY'])) ? $user->lang['BY'] : '{ BY }')); ?> <?php echo $_messagerow_val['MESSAGE_AUTHOR_FULL']; } if ($_messagerow_val['S_PM_REPORTED']) {  ?><a href="<?php echo $_messagerow_val['U_MCP_REPORT']; ?>"><i class="fa fa-exclamation-sign"></i></a><?php } if ($_messagerow_val['ATTACH_ICON_IMG']) {  ?><i class="icon-paper-clip icon-flip-horizontal" rel="tooltip" data-placement="top" data-original-title="<?php echo ((isset($this->_rootref['L_ATTACH_FORUM'])) ? $this->_rootref['L_ATTACH_FORUM'] : ((isset($user->lang['ATTACH_FORUM'])) ? $user->lang['ATTACH_FORUM'] : '{ ATTACH_FORUM }')); ?>"></i> <?php } if ($_messagerow_val['S_AUTHOR_DELETED']) {  ?>

				<br /><small><?php echo ((isset($this->_rootref['L_PM_FROM_REMOVED_AUTHOR'])) ? $this->_rootref['L_PM_FROM_REMOVED_AUTHOR'] : ((isset($user->lang['PM_FROM_REMOVED_AUTHOR'])) ? $user->lang['PM_FROM_REMOVED_AUTHOR'] : '{ PM_FROM_REMOVED_AUTHOR }')); ?></small>
				<?php } if ($this->_rootref['S_UNREAD']) {  if ($_messagerow_val['FOLDER']) {  ?><a href="<?php echo $_messagerow_val['U_FOLDER']; ?>"><?php echo $_messagerow_val['FOLDER']; ?></a><?php } else { echo ((isset($this->_rootref['L_UNKNOWN_FOLDER'])) ? $this->_rootref['L_UNKNOWN_FOLDER'] : ((isset($user->lang['UNKNOWN_FOLDER'])) ? $user->lang['UNKNOWN_FOLDER'] : '{ UNKNOWN_FOLDER }')); } } ?>

			</td>
            <td><?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  echo $_messagerow_val['SENT_TIME']; } else { echo $_messagerow_val['SENT_TIME']; } ?></td>
            <td class="table-check"><div class="checker"><input id="<?php echo $_messagerow_val['MESSAGE_ID']; ?>" name="marked_msg_id[]" value="<?php echo $_messagerow_val['MESSAGE_ID']; ?>" type="checkbox"><label for="<?php echo $_messagerow_val['MESSAGE_ID']; ?>"></label></div></td>
		</tr>
		<?php }} ?>

		</tbody>
	</table>
	</div>
	</div>
	<?php } else { ?>

		<p><strong>
			<?php if ($this->_rootref['S_COMPOSE_PM_VIEW'] && $this->_rootref['S_NO_AUTH_SEND_MESSAGE']) {  if ($this->_rootref['S_USER_NEW']) {  echo ((isset($this->_rootref['L_USER_NEW_PERMISSION_DISALLOWED'])) ? $this->_rootref['L_USER_NEW_PERMISSION_DISALLOWED'] : ((isset($user->lang['USER_NEW_PERMISSION_DISALLOWED'])) ? $user->lang['USER_NEW_PERMISSION_DISALLOWED'] : '{ USER_NEW_PERMISSION_DISALLOWED }')); } else { echo ((isset($this->_rootref['L_NO_AUTH_SEND_MESSAGE'])) ? $this->_rootref['L_NO_AUTH_SEND_MESSAGE'] : ((isset($user->lang['NO_AUTH_SEND_MESSAGE'])) ? $user->lang['NO_AUTH_SEND_MESSAGE'] : '{ NO_AUTH_SEND_MESSAGE }')); } } else { ?>

				<?php echo ((isset($this->_rootref['L_NO_MESSAGES'])) ? $this->_rootref['L_NO_MESSAGES'] : ((isset($user->lang['NO_MESSAGES'])) ? $user->lang['NO_MESSAGES'] : '{ NO_MESSAGES }')); ?>

			<?php } ?>

		</strong></p>
	<?php } if ($this->_rootref['FOLDER_CUR_MESSAGES'] != 0) {  ?>

	<div class="table_options">
             <div class="pull-left">
                <div class="btn-group">
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-default" title=""><i class="fa fa-check-square-o"></i> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick="marklist('viewfolder', 'marked_msg', true); return false;" title=""><i class="fa fa-check-square-o"></i><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a></li>
                            <li><a href="#" onclick="marklist('viewfolder', 'marked_msg', false); return false;" title=""><i class="fa fa-square-o"></i><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></li>
                          </ul>
                    </div>
            </div>
            <div class="btn-group">
                 <div class="dropdown">
                    <a href="#" data-toggle="dropdown" class="btn btn-default" title=""><i class="fa fa-folder"></i> <span class="caret"></span></a>
                       <ul class="dropdown-menu">
						<li><a href="<?php echo (isset($this->_rootref['U_UCP_PM_INBOX'])) ? $this->_rootref['U_UCP_PM_INBOX'] : ''; ?>" title=""><i class="fa fa-download"></i><?php echo ((isset($this->_rootref['L_UCP_PM_INBOX'])) ? $this->_rootref['L_UCP_PM_INBOX'] : ((isset($user->lang['UCP_PM_INBOX'])) ? $user->lang['UCP_PM_INBOX'] : '{ UCP_PM_INBOX }')); ?></a></li>
                        <li><a href="<?php echo (isset($this->_rootref['U_UCP_PM_SENTBOX'])) ? $this->_rootref['U_UCP_PM_SENTBOX'] : ''; ?>" title=""><i class="fa fa-upload"></i><?php echo ((isset($this->_rootref['L_UCP_PM_SENTBOX'])) ? $this->_rootref['L_UCP_PM_SENTBOX'] : ((isset($user->lang['UCP_PM_SENTBOX'])) ? $user->lang['UCP_PM_SENTBOX'] : '{ UCP_PM_SENTBOX }')); ?></a></li>
                        <li><a href="<?php echo (isset($this->_rootref['U_UCP_PM_OUTBOX'])) ? $this->_rootref['U_UCP_PM_OUTBOX'] : ''; ?>" title=""><i class="fa fa-upload"></i><?php echo ((isset($this->_rootref['L_UCP_PM_OUTBOX'])) ? $this->_rootref['L_UCP_PM_OUTBOX'] : ((isset($user->lang['UCP_PM_OUTBOX'])) ? $user->lang['UCP_PM_OUTBOX'] : '{ UCP_PM_OUTBOX }')); ?></a></li>
                       </ul>
                 </div>
           </div>
           </div>
		 
	    <div class="pull-right">
        <ul class="pagination pagination-sm">
		<li><a title="" data-original-title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></a></li>
	    <?php if ($this->_rootref['TOTAL_MESSAGES'] || $this->_rootref['S_VIEW_MESSAGE']) {  ?>

		<li class="active"><a><?php echo (isset($this->_rootref['TOTAL_MESSAGES'])) ? $this->_rootref['TOTAL_MESSAGES'] : ''; ?></a></li>
	    <?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a></li><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?><li><a><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li><?php } } if ($this->_rootref['NEXT_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a></li><?php } } ?>

        </ul>
        </div>
    </div>
<?php } ?>


	<div class="space10"></div>

<?php if ($this->_rootref['FOLDER_CUR_MESSAGES'] != 0) {  ?>

<fieldset>
 <div class="clearfix">
	<div class="hidden-xs">
	   <div class="input-group col-md-4 col-sm-5 pull-right">
		<select class="selectpicker" data-width="auto" name="export_option" id="export_option">
		<option data-icon="icon-download-alt"  value="CSV"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV'])) ? $this->_rootref['L_EXPORT_AS_CSV'] : ((isset($user->lang['EXPORT_AS_CSV'])) ? $user->lang['EXPORT_AS_CSV'] : '{ EXPORT_AS_CSV }')); ?></option>
		<option data-icon="icon-align-justify" value="CSV_EXCEL"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV_EXCEL'])) ? $this->_rootref['L_EXPORT_AS_CSV_EXCEL'] : ((isset($user->lang['EXPORT_AS_CSV_EXCEL'])) ? $user->lang['EXPORT_AS_CSV_EXCEL'] : '{ EXPORT_AS_CSV_EXCEL }')); ?></option>
		<option data-icon="icon-columns" value="XML"><?php echo ((isset($this->_rootref['L_EXPORT_AS_XML'])) ? $this->_rootref['L_EXPORT_AS_XML'] : ((isset($user->lang['EXPORT_AS_XML'])) ? $user->lang['EXPORT_AS_XML'] : '{ EXPORT_AS_XML }')); ?></option>
		</select>
		<div class="input-group-btn">
		<button type="submit" name="submit_export" class="btn btn-default"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
		</div>
	   </div>
	</div>
		
	<div class="input-group col-md-4 col-sm-5">
		<select class="selectpicker" data-width="auto" name="mark_option">
		<?php echo (isset($this->_rootref['S_MARK_OPTIONS'])) ? $this->_rootref['S_MARK_OPTIONS'] : ''; ?>

		<?php echo (isset($this->_rootref['S_MOVE_MARKED_OPTIONS'])) ? $this->_rootref['S_MOVE_MARKED_OPTIONS'] : ''; ?>

		</select> 
		<div class="input-group-btn">
		<button type="submit" name="submit_mark" class="btn btn-default"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
		</div>
	</div>	
 </div>
</fieldset>
<?php } ?>

	
	</fieldset><!-- FORMER DOUBLE DIV PANEL AND INNER FOR VIEW FOLDER AND VIEW MESSASGE -->

	<div class="space10"></div>
<div class="hidden-xs">
<?php if ($this->_rootref['FOLDER_CUR_MESSAGES'] != 0) {  ?>

	<fieldset class="controls-row">
                    <div class="sorting collapse">
					 <div class="panel panel-default">
					  <div class="panel-body">
                        <div class="col-md-12 col-sm-12">
						<div class="col-md-4 col-sm-4"> 
                         <label for="bday_day"><?php echo ((isset($this->_rootref['L_DISPLAY'])) ? $this->_rootref['L_DISPLAY'] : ((isset($user->lang['DISPLAY'])) ? $user->lang['DISPLAY'] : '{ DISPLAY }')); ?>:</label>
                            <div class="control-row">
                              <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>

                            </div>
						</div>
	 
	                    <div class="col-md-4 col-sm-4"> 
                          <label for="bday_day"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> </label>
                            <div class="control-row">
                              <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?>

                            </div>
						</div>
											
						<div class="col-md-4 col-sm-4"> 
                           <label for="bday_day"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></label>
                            <div class="control-row">
							<div class="input-group">
                             <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>

							 <span class="input-group-btn">
                              <button class="btn btn-default" name="sort" type="submit"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
							  <input type="hidden" name="cur_folder_id" value="<?php echo (isset($this->_rootref['CUR_FOLDER_ID'])) ? $this->_rootref['CUR_FOLDER_ID'] : ''; ?>" />
							</span>
							</div>
						    </div>   
						</div>
                        </div>
                      </div>
					 </div>
					</div>
            <!-- // Widget --> 
	</fieldset> 
<?php } ?>

</div>

	<?php $this->_tpl_include('ucp_pm_message_footer.html'); } $this->_tpl_include('ucp_footer.html'); ?>