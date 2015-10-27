<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="postform" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<div class="tab-pane active">
<div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h3></div>
	<div class="clearfix">
	<p><?php echo ((isset($this->_rootref['L_DRAFTS_EXPLAIN'])) ? $this->_rootref['L_DRAFTS_EXPLAIN'] : ((isset($user->lang['DRAFTS_EXPLAIN'])) ? $user->lang['DRAFTS_EXPLAIN'] : '{ DRAFTS_EXPLAIN }')); ?></p>
<?php if ($this->_rootref['S_EDIT_DRAFT']) {  ?>

    <fieldset class="framed-ucp">
	    <legend><?php echo ((isset($this->_rootref['L_EDIT_DRAFT'])) ? $this->_rootref['L_EDIT_DRAFT'] : ((isset($user->lang['EDIT_DRAFT'])) ? $user->lang['EDIT_DRAFT'] : '{ EDIT_DRAFT }')); ?></legend>
		  <?php $this->_tpl_include('posting_editor.html'); ?>

	 </fieldset>
	</div>
</div>

<div class="space10"></div>	
	<fieldset class="form-actions">
		<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
		<button type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SAVE'])) ? $this->_rootref['L_SAVE'] : ((isset($user->lang['SAVE'])) ? $user->lang['SAVE'] : '{ SAVE }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SAVE'])) ? $this->_rootref['L_SAVE'] : ((isset($user->lang['SAVE'])) ? $user->lang['SAVE'] : '{ SAVE }')); ?></button>
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset>
	
<?php } else { if (sizeof($this->_tpldata['draftrow'])) {  ?>

	<div class="panel panel-forum">
	<div class="panel-heading">
	 <i class="fa fa-edit"></i> <?php echo ((isset($this->_rootref['L_DRAFTS'])) ? $this->_rootref['L_DRAFTS'] : ((isset($user->lang['DRAFTS'])) ? $user->lang['DRAFTS'] : '{ DRAFTS }')); ?>

	</div>
	<div class="panel-inner">
	<table class="footable table table-striped table-primary table-hover">
	<thead>
		<tr>
			<th data-class="expand"><?php echo ((isset($this->_rootref['L_DRAFT_TITLE'])) ? $this->_rootref['L_DRAFT_TITLE'] : ((isset($user->lang['DRAFT_TITLE'])) ? $user->lang['DRAFT_TITLE'] : '{ DRAFT_TITLE }')); ?></th>
			<th class="large26" data-hide="phone"><?php echo ((isset($this->_rootref['L_SAVE_DATE'])) ? $this->_rootref['L_SAVE_DATE'] : ((isset($user->lang['SAVE_DATE'])) ? $user->lang['SAVE_DATE'] : '{ SAVE_DATE }')); ?></th>
			<th class="table-check"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
		</tr> 
	</thead>
	<tbody>
		<?php $_draftrow_count = (isset($this->_tpldata['draftrow'])) ? sizeof($this->_tpldata['draftrow']) : 0;if ($_draftrow_count) {for ($_draftrow_i = 0; $_draftrow_i < $_draftrow_count; ++$_draftrow_i){$_draftrow_val = &$this->_tpldata['draftrow'][$_draftrow_i]; ?>

	    <tr>
			<td>
			<a class="topictitle" href="<?php echo $_draftrow_val['U_VIEW_EDIT']; ?>"><?php echo $_draftrow_val['DRAFT_SUBJECT']; ?></a><br />
			<?php if ($_draftrow_val['S_LINK_TOPIC']) {  echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>: <a href="<?php echo $_draftrow_val['U_VIEW']; ?>"><?php echo $_draftrow_val['TITLE']; ?></a>
			<?php } else if ($_draftrow_val['S_LINK_FORUM']) {  echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_draftrow_val['U_VIEW']; ?>"><?php echo $_draftrow_val['TITLE']; ?></a>
			<?php } else if ($this->_rootref['S_PRIVMSGS']) {  } else { echo ((isset($this->_rootref['L_NO_TOPIC_FORUM'])) ? $this->_rootref['L_NO_TOPIC_FORUM'] : ((isset($user->lang['NO_TOPIC_FORUM'])) ? $user->lang['NO_TOPIC_FORUM'] : '{ NO_TOPIC_FORUM }')); } ?>

			</td>
			<td>
			<?php echo $_draftrow_val['DATE']; ?><br />
			<?php if ($_draftrow_val['U_INSERT']) {  ?><a href="<?php echo $_draftrow_val['U_INSERT']; ?>"><?php echo ((isset($this->_rootref['L_LOAD_DRAFT'])) ? $this->_rootref['L_LOAD_DRAFT'] : ((isset($user->lang['LOAD_DRAFT'])) ? $user->lang['LOAD_DRAFT'] : '{ LOAD_DRAFT }')); ?></a> &#8211; <?php } ?><a href="<?php echo $_draftrow_val['U_VIEW_EDIT']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_EDIT'])) ? $this->_rootref['L_VIEW_EDIT'] : ((isset($user->lang['VIEW_EDIT'])) ? $user->lang['VIEW_EDIT'] : '{ VIEW_EDIT }')); ?></a>
			</td>
			<td class="table-check"><div class="checker"><input type="checkbox" name="d[<?php echo $_draftrow_val['DRAFT_ID']; ?>]" id="d<?php echo $_draftrow_val['DRAFT_ID']; ?>"><label for="d<?php echo $_draftrow_val['DRAFT_ID']; ?>"></label></div></td>
	    </tr>
		<?php }} ?>

		</tbody>
		</table>
		</div>
	</div>
	<?php } else { ?>

	<div class="alert alert-info fade in">
        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>
        <i class="fa fa-warning"></i> <strong><?php echo ((isset($this->_rootref['L_INFO_BOX'])) ? $this->_rootref['L_INFO_BOX'] : ((isset($user->lang['INFO_BOX'])) ? $user->lang['INFO_BOX'] : '{ INFO_BOX }')); ?></strong>  <?php echo ((isset($this->_rootref['L_NO_SAVED_DRAFTS'])) ? $this->_rootref['L_NO_SAVED_DRAFTS'] : ((isset($user->lang['NO_SAVED_DRAFTS'])) ? $user->lang['NO_SAVED_DRAFTS'] : '{ NO_SAVED_DRAFTS }')); ?>

    </div> 
	<?php } ?>

		</div>
	</div>

            <div class="pull-left">
                <div class="btn-group">
				    <?php if (sizeof($this->_tpldata['draftrow'])) {  ?>

                    <div class="dropup">
                        <button href="#" data-toggle="dropdown" class="btn btn-default" title=""><i class="fa fa-check-square-o"></i> <span class="caret"></span></button>
						 <ul class="dropdown-menu">
                            <li><a href="#" onclick="marklist('postform', '', true); return false;" title=""><i class="fa fa-check-square-o"></i><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a></li>
                            <li><a href="#" onclick="marklist('postform', '', false); return false;" title=""><i class="fa fa-square-o"></i><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></li>
                          </ul> 
				    <button class="btn btn-default" type="submit" name="delete" data-original-title="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>"><i class="fa fa-trash-o"></i></button>
				   </div> 
                        <?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

                    <?php } ?>		  
		        </div> 
           </div>
<?php } ?>

</form>
<?php $this->_tpl_include('ucp_footer.html'); ?>