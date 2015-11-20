<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<div class="tab-pane active"> 
<div class="side-segment"><h3<?php if ($this->_rootref['GROUP_COLOR']) {  ?> style="color:#<?php echo (isset($this->_rootref['GROUP_COLOR'])) ? $this->_rootref['GROUP_COLOR'] : ''; ?>;"<?php } ?>><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); if ($this->_rootref['GROUP_NAME']) {  ?> - <?php echo (isset($this->_rootref['GROUP_NAME'])) ? $this->_rootref['GROUP_NAME'] : ''; } ?></h3></div>
<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>

<div class="clearfix">
	<?php if ($this->_rootref['S_ERROR']) {  ?>

	<div class="alert alert-info fade in">
        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>
        <i class="fa fa-warning"></i> <strong><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></strong>  <?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?>

    </div> 
	<?php } ?>

	
	<div class="alert alert-info fade in">
        <button aria-hidden="true" type="button" class="close" data-dismiss="alert"><i class="awe-remove-circle"></i></button>
         <p><?php echo ((isset($this->_rootref['L_GROUPS_EXPLAIN'])) ? $this->_rootref['L_GROUPS_EXPLAIN'] : ((isset($user->lang['GROUPS_EXPLAIN'])) ? $user->lang['GROUPS_EXPLAIN'] : '{ GROUPS_EXPLAIN }')); ?></p>
    </div>
	
	<?php if ($this->_rootref['S_EDIT']) {  ?>

		<fieldset class="framed-ucp">
		 <legend><?php echo ((isset($this->_rootref['L_GROUP_DETAILS'])) ? $this->_rootref['L_GROUP_DETAILS'] : ((isset($user->lang['GROUP_DETAILS'])) ? $user->lang['GROUP_DETAILS'] : '{ GROUP_DETAILS }')); ?></legend>
		<label class="control-label" for="group_name"><?php echo ((isset($this->_rootref['L_GROUP_NAME'])) ? $this->_rootref['L_GROUP_NAME'] : ((isset($user->lang['GROUP_NAME'])) ? $user->lang['GROUP_NAME'] : '{ GROUP_NAME }')); ?>:</label>
	   <div class="control-group"> 
		<div class="controls controls-row">
	   <?php if ($this->_rootref['S_SPECIAL_GROUP']) {  ?><strong<?php if ($this->_rootref['GROUP_COLOUR']) {  ?> style="color: #<?php echo (isset($this->_rootref['GROUP_COLOUR'])) ? $this->_rootref['GROUP_COLOUR'] : ''; ?>;"<?php } ?>><?php echo (isset($this->_rootref['GROUP_NAME'])) ? $this->_rootref['GROUP_NAME'] : ''; ?></strong> <input name="group_name" type="hidden" value="<?php echo (isset($this->_rootref['GROUP_INTERNAL_NAME'])) ? $this->_rootref['GROUP_INTERNAL_NAME'] : ''; ?>" />
		<?php } else { ?> 
			<input name="group_name" type="text" id="group_name" value="<?php echo (isset($this->_rootref['GROUP_INTERNAL_NAME'])) ? $this->_rootref['GROUP_INTERNAL_NAME'] : ''; ?>" class="form-control">
		<?php } ?>

		</div> 
		</div>

		<div class="control-group"> 
	   <label class="control-label" for="group_desc"><?php echo ((isset($this->_rootref['L_GROUP_DESC'])) ? $this->_rootref['L_GROUP_DESC'] : ((isset($user->lang['GROUP_DESC'])) ? $user->lang['GROUP_DESC'] : '{ GROUP_DESC }')); ?>:</label>
	<div class="controls controls-row"> 
    	<textarea placeholder="<?php echo ((isset($this->_rootref['L_GROUP_DESC'])) ? $this->_rootref['L_GROUP_DESC'] : ((isset($user->lang['GROUP_DESC'])) ? $user->lang['GROUP_DESC'] : '{ GROUP_DESC }')); ?>" rows="2" id="group_desc" name="group_desc" class="form-control"><?php echo (isset($this->_rootref['GROUP_DESC'])) ? $this->_rootref['GROUP_DESC'] : ''; ?></textarea>
	<div class="radio"><input type="checkbox" name="desc_parse_bbcode" id="desc_parse_bbcode"<?php if ($this->_rootref['S_DESC_BBCODE_CHECKED']) {  ?> checked="checked"<?php } ?> ><label for="desc_parse_bbcode"><?php echo ((isset($this->_rootref['L_PARSE_BBCODE'])) ? $this->_rootref['L_PARSE_BBCODE'] : ((isset($user->lang['PARSE_BBCODE'])) ? $user->lang['PARSE_BBCODE'] : '{ PARSE_BBCODE }')); ?></label></div>
	<div class="radio"><input type="checkbox" name="desc_parse_smilies" id="desc_parse_smilies"<?php if ($this->_rootref['S_DESC_SMILIES_CHECKED']) {  ?> checked="checked"<?php } ?> ><label for="desc_parse_smilies"><?php echo ((isset($this->_rootref['L_PARSE_SMILIES'])) ? $this->_rootref['L_PARSE_SMILIES'] : ((isset($user->lang['PARSE_SMILIES'])) ? $user->lang['PARSE_SMILIES'] : '{ PARSE_SMILIES }')); ?></label></div>
	<div class="radio"><input type="checkbox" name="desc_parse_urls" id="desc_parse_urls"<?php if ($this->_rootref['S_DESC_URLS_CHECKED']) {  ?> checked="checked"<?php } ?> ><label for="desc_parse_urls"><?php echo ((isset($this->_rootref['L_PARSE_URLS'])) ? $this->_rootref['L_PARSE_URLS'] : ((isset($user->lang['PARSE_URLS'])) ? $user->lang['PARSE_URLS'] : '{ PARSE_URLS }')); ?></label></div>
	</div> 
	</div>
		
	<?php if (! $this->_rootref['S_SPECIAL_GROUP']) {  ?>

	<div class="control-group"> 
	   <label class="control-label" for="group_type1"><?php echo ((isset($this->_rootref['L_GROUP_TYPE'])) ? $this->_rootref['L_GROUP_TYPE'] : ((isset($user->lang['GROUP_TYPE'])) ? $user->lang['GROUP_TYPE'] : '{ GROUP_TYPE }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_GROUP_TYPE_EXPLAIN'])) ? $this->_rootref['L_GROUP_TYPE_EXPLAIN'] : ((isset($user->lang['GROUP_TYPE_EXPLAIN'])) ? $user->lang['GROUP_TYPE_EXPLAIN'] : '{ GROUP_TYPE_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
      <div class="radio"><input type="radio" name="group_type" id="group_type1" value="<?php echo (isset($this->_rootref['GROUP_TYPE_FREE'])) ? $this->_rootref['GROUP_TYPE_FREE'] : ''; ?>"<?php echo (isset($this->_rootref['GROUP_FREE'])) ? $this->_rootref['GROUP_FREE'] : ''; ?>><label for="group_type1"><?php echo ((isset($this->_rootref['L_GROUP_OPEN'])) ? $this->_rootref['L_GROUP_OPEN'] : ((isset($user->lang['GROUP_OPEN'])) ? $user->lang['GROUP_OPEN'] : '{ GROUP_OPEN }')); ?></label></div>
	  <div class="radio"><input type="radio" name="group_type" id="group_type2" value="<?php echo (isset($this->_rootref['GROUP_TYPE_OPEN'])) ? $this->_rootref['GROUP_TYPE_OPEN'] : ''; ?>"<?php echo (isset($this->_rootref['GROUP_OPEN'])) ? $this->_rootref['GROUP_OPEN'] : ''; ?>><label for="group_type2"><?php echo ((isset($this->_rootref['L_GROUP_REQUEST'])) ? $this->_rootref['L_GROUP_REQUEST'] : ((isset($user->lang['GROUP_REQUEST'])) ? $user->lang['GROUP_REQUEST'] : '{ GROUP_REQUEST }')); ?></label></div>
	  <div class="radio"><input type="radio" name="group_type" id="group_type3" value="<?php echo (isset($this->_rootref['GROUP_TYPE_CLOSED'])) ? $this->_rootref['GROUP_TYPE_CLOSED'] : ''; ?>"<?php echo (isset($this->_rootref['GROUP_CLOSED'])) ? $this->_rootref['GROUP_CLOSED'] : ''; ?>><label for="group_type3"><?php echo ((isset($this->_rootref['L_GROUP_CLOSED'])) ? $this->_rootref['L_GROUP_CLOSED'] : ((isset($user->lang['GROUP_CLOSED'])) ? $user->lang['GROUP_CLOSED'] : '{ GROUP_CLOSED }')); ?></label></div>
	  <div class="radio"><input type="radio" name="group_type" id="group_type4" value="<?php echo (isset($this->_rootref['GROUP_TYPE_HIDDEN'])) ? $this->_rootref['GROUP_TYPE_HIDDEN'] : ''; ?>"<?php echo (isset($this->_rootref['GROUP_HIDDEN'])) ? $this->_rootref['GROUP_HIDDEN'] : ''; ?>><label for="group_type4"><?php echo ((isset($this->_rootref['L_GROUP_HIDDEN'])) ? $this->_rootref['L_GROUP_HIDDEN'] : ((isset($user->lang['GROUP_HIDDEN'])) ? $user->lang['GROUP_HIDDEN'] : '{ GROUP_HIDDEN }')); ?></label></div>
	</div> 
	</div>
		<?php } else { ?>

			<input name="group_type" type="hidden" value="<?php echo (isset($this->_rootref['GROUP_TYPE_SPECIAL'])) ? $this->_rootref['GROUP_TYPE_SPECIAL'] : ''; ?>" />
		<?php } ?>

		</fieldset>
</div>

<fieldset class="framed-ucp">
<legend><?php echo ((isset($this->_rootref['L_GROUP_SETTINGS_SAVE'])) ? $this->_rootref['L_GROUP_SETTINGS_SAVE'] : ((isset($user->lang['GROUP_SETTINGS_SAVE'])) ? $user->lang['GROUP_SETTINGS_SAVE'] : '{ GROUP_SETTINGS_SAVE }')); ?></legend>
	<div class="control-group"> 
	   <label class="control-label" for="group_colour"><?php echo ((isset($this->_rootref['L_GROUP_COLOR'])) ? $this->_rootref['L_GROUP_COLOR'] : ((isset($user->lang['GROUP_COLOR'])) ? $user->lang['GROUP_COLOR'] : '{ GROUP_COLOR }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_GROUP_COLOR_EXPLAIN'])) ? $this->_rootref['L_GROUP_COLOR_EXPLAIN'] : ((isset($user->lang['GROUP_COLOR_EXPLAIN'])) ? $user->lang['GROUP_COLOR_EXPLAIN'] : '{ GROUP_COLOR_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
       <input type="text" name="group_colour" id="group_colour" value="<?php echo (isset($this->_rootref['GROUP_COLOUR'])) ? $this->_rootref['GROUP_COLOUR'] : ''; ?>" maxlength="6" placeholder="Ex:sitesplat" class="form-control"><span style="background-color: #<?php echo (isset($this->_rootref['GROUP_COLOUR'])) ? $this->_rootref['GROUP_COLOUR'] : ''; ?>;">&nbsp;&nbsp;&nbsp;</span> [ <a href="<?php echo (isset($this->_rootref['U_SWATCH'])) ? $this->_rootref['U_SWATCH'] : ''; ?>" onclick="popup(this.href, 636, 150, '_swatch'); return false;"><?php echo ((isset($this->_rootref['L_COLOUR_SWATCH'])) ? $this->_rootref['L_COLOUR_SWATCH'] : ((isset($user->lang['COLOUR_SWATCH'])) ? $user->lang['COLOUR_SWATCH'] : '{ COLOUR_SWATCH }')); ?></a> ]
	</div> 
	</div>
	
	<div class="control-group"> 
	   <label class="control-label" for="group_rank"><?php echo ((isset($this->_rootref['L_GROUP_RANK'])) ? $this->_rootref['L_GROUP_RANK'] : ((isset($user->lang['GROUP_RANK'])) ? $user->lang['GROUP_RANK'] : '{ GROUP_RANK }')); ?>:</label>
	<div class="controls controls-row"> 
       <div class="selector"><select class="selectpicker" name="group_rank" id="group_rank"><?php echo (isset($this->_rootref['S_RANK_OPTIONS'])) ? $this->_rootref['S_RANK_OPTIONS'] : ''; ?></select></div>
	</div> 
	</div>
</fieldset>

<?php $this->_tpl_include('ucp_avatar_options.html'); ?>


<div class="space10"></div>
<fieldset class="form-actions">
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	<?php if ($this->_rootref['S_DISPLAY_GALLERY']) {  ?><button type="submit" name="display_gallery" value="<?php echo ((isset($this->_rootref['L_DISPLAY_GALLERY'])) ? $this->_rootref['L_DISPLAY_GALLERY'] : ((isset($user->lang['DISPLAY_GALLERY'])) ? $user->lang['DISPLAY_GALLERY'] : '{ DISPLAY_GALLERY }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_DISPLAY_GALLERY'])) ? $this->_rootref['L_DISPLAY_GALLERY'] : ((isset($user->lang['DISPLAY_GALLERY'])) ? $user->lang['DISPLAY_GALLERY'] : '{ DISPLAY_GALLERY }')); ?></button> <?php } if ($this->_rootref['S_IN_AVATAR_GALLERY']) {  ?><button type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?></button> <?php } else { ?>

	<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button> <?php } ?>

	<button type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
<?php } else if ($this->_rootref['S_LIST']) {  if (sizeof($this->_tpldata['leader'])) {  ?>

	<div class="panel panel-default">
	<table class="footable table table-striped table-bordered table-white table-primary table-hover">
	<thead>
	<tr>
		<th data-class="expand"><?php echo ((isset($this->_rootref['L_GROUP_LEAD'])) ? $this->_rootref['L_GROUP_LEAD'] : ((isset($user->lang['GROUP_LEAD'])) ? $user->lang['GROUP_LEAD'] : '{ GROUP_LEAD }')); ?></th>
		<th data-hide="phone"><?php echo ((isset($this->_rootref['L_GROUP_DEFAULT'])) ? $this->_rootref['L_GROUP_DEFAULT'] : ((isset($user->lang['GROUP_DEFAULT'])) ? $user->lang['GROUP_DEFAULT'] : '{ GROUP_DEFAULT }')); ?></th>
		<th data-hide="phone"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></th>
		<th data-hide="phone"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $_leader_count = (isset($this->_tpldata['leader'])) ? sizeof($this->_tpldata['leader']) : 0;if ($_leader_count) {for ($_leader_i = 0; $_leader_i < $_leader_count; ++$_leader_i){$_leader_val = &$this->_tpldata['leader'][$_leader_i]; ?>

		<tr>
			<td><?php echo $_leader_val['USERNAME_FULL']; ?></td>
			<td><?php if ($_leader_val['S_GROUP_DEFAULT']) {  echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); } else { echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); } ?></td>
			<td><?php echo $_leader_val['USER_POSTS']; ?></td>
			<td><?php echo $_leader_val['JOINED']; ?></td>
			<td>&nbsp;</td>
		</tr>
	<?php }} ?>

	</tbody>
	</table>
	</div>
	<?php } $_member_count = (isset($this->_tpldata['member'])) ? sizeof($this->_tpldata['member']) : 0;if ($_member_count) {for ($_member_i = 0; $_member_i < $_member_count; ++$_member_i){$_member_val = &$this->_tpldata['member'][$_member_i]; if ($_member_val['S_PENDING']) {  ?>

		<div class="panel panel-default">
			<table class="footable table table-striped table-bordered table-white table-primary table-hover">
			<thead>
			<tr>
				<th data-class="expand"><?php echo ((isset($this->_rootref['L_GROUP_PENDING'])) ? $this->_rootref['L_GROUP_PENDING'] : ((isset($user->lang['GROUP_PENDING'])) ? $user->lang['GROUP_PENDING'] : '{ GROUP_PENDING }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_GROUP_DEFAULT'])) ? $this->_rootref['L_GROUP_DEFAULT'] : ((isset($user->lang['GROUP_DEFAULT'])) ? $user->lang['GROUP_DEFAULT'] : '{ GROUP_DEFAULT }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></th>
				<th><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
			</tr>
			</thead>
			<tbody>
		<?php } else if ($_member_val['S_APPROVED']) {  if ($this->_rootref['S_PENDING_SET']) {  ?>

				</tbody>
			</table>
			</div>
			<?php } ?>

		<div class="panel panel-default">
			<table class="footable table table-striped table-bordered table-white table-primary table-hover">
			<thead>
			<tr>
				<th data-class="expand"><?php echo ((isset($this->_rootref['L_GROUP_APPROVED'])) ? $this->_rootref['L_GROUP_APPROVED'] : ((isset($user->lang['GROUP_APPROVED'])) ? $user->lang['GROUP_APPROVED'] : '{ GROUP_APPROVED }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_GROUP_DEFAULT'])) ? $this->_rootref['L_GROUP_DEFAULT'] : ((isset($user->lang['GROUP_DEFAULT'])) ? $user->lang['GROUP_DEFAULT'] : '{ GROUP_DEFAULT }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></th>
				<th data-hide="phone"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></th>
				<th><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
			</tr>
			</thead>
			<tbody>
		<?php } else { ?>

			<tr>
				<td><?php echo $_member_val['USERNAME_FULL']; ?></td>
				<td><?php if ($_member_val['S_GROUP_DEFAULT']) {  echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); } else { echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); } ?></td>
				<td><?php echo $_member_val['USER_POSTS']; ?></td>
				<td><?php echo $_member_val['JOINED']; ?></td>
				<td><div class="text-center"><input type="checkbox" name="mark[]" value="<?php echo $_member_val['USER_ID']; ?>" id="<?php echo $_member_val['USER_ID']; ?>"><label for="<?php echo $_member_val['USER_ID']; ?>"></label></div></td>
			</tr>
		<?php } }} else { ?>

	<div class="panel panel-default">
		<table class="footable table table-striped table-bordered table-white table-primary table-hover">
		<thead>
		<tr>
			<th><?php echo ((isset($this->_rootref['L_MEMBERS'])) ? $this->_rootref['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ MEMBERS }')); ?></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td><?php echo ((isset($this->_rootref['L_GROUPS_NO_MEMBERS'])) ? $this->_rootref['L_GROUPS_NO_MEMBERS'] : ((isset($user->lang['GROUPS_NO_MEMBERS'])) ? $user->lang['GROUPS_NO_MEMBERS'] : '{ GROUPS_NO_MEMBERS }')); ?></td>
		</tr>
	<?php } ?>

	</tbody>
	</table>
	</div>
	
	<div class="clearfix">
		<div class="pull-right">
            <ul class="pagination pagination-sm">
             <?php if ($this->_rootref['PAGINATION']) {  ?><li><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['S_ON_PAGE'])) ? $this->_rootref['S_ON_PAGE'] : ''; ?></a></li> <?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?><li><a><?php echo (isset($this->_rootref['S_ON_PAGE'])) ? $this->_rootref['S_ON_PAGE'] : ''; ?></a></li><?php } ?>

	        </ul> 	
	    </div>
    </div>

<div class="clearfix">
<fieldset>
  <div class="pull-right">
	<div class="input-group">
	<select class="selectpicker" data-container="body" data-width="auto" data-style="btn btn-default form-control" name="action">
	  <option value=""><?php echo ((isset($this->_rootref['L_SELECT_OPTION'])) ? $this->_rootref['L_SELECT_OPTION'] : ((isset($user->lang['SELECT_OPTION'])) ? $user->lang['SELECT_OPTION'] : '{ SELECT_OPTION }')); ?></option>
	  <?php echo (isset($this->_rootref['S_ACTION_OPTIONS'])) ? $this->_rootref['S_ACTION_OPTIONS'] : ''; ?>

	</select>
	<span class="input-group-btn">
	  <button name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" type="submit" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	</span>
	</div>
  </div>
	
  <div class="pull-left">
	<div class="btn-group">
	 <a href="javascript:;" onclick="marklist('ucp', 'mark', true); return false;" class="btn btn-default" title="" data-original-title="<?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?>"><i class="fa fa-check-square-o"></i></a>
	 <a href="javascript:;" onclick="marklist('ucp', 'mark', false); return false;" class="btn btn-default" title="" data-original-title="<?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?>"><i class="fa fa-square"></i></a>
	</div>
  </div>
</fieldset>
</div>
	
<fieldset class="framed-ucp">
	<legend><?php echo ((isset($this->_rootref['L_ADD_USERS'])) ? $this->_rootref['L_ADD_USERS'] : ((isset($user->lang['ADD_USERS'])) ? $user->lang['ADD_USERS'] : '{ ADD_USERS }')); ?></legend>
	<p><?php echo ((isset($this->_rootref['L_ADD_USERS_UCP_EXPLAIN'])) ? $this->_rootref['L_ADD_USERS_UCP_EXPLAIN'] : ((isset($user->lang['ADD_USERS_UCP_EXPLAIN'])) ? $user->lang['ADD_USERS_UCP_EXPLAIN'] : '{ ADD_USERS_UCP_EXPLAIN }')); ?></p>
	<fieldset>
	<div class="control-group"> 
	   <label class="control-label" for="default0"><?php echo ((isset($this->_rootref['L_USER_GROUP_DEFAULT'])) ? $this->_rootref['L_USER_GROUP_DEFAULT'] : ((isset($user->lang['USER_GROUP_DEFAULT'])) ? $user->lang['USER_GROUP_DEFAULT'] : '{ USER_GROUP_DEFAULT }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_USER_GROUP_DEFAULT_EXPLAIN'])) ? $this->_rootref['L_USER_GROUP_DEFAULT_EXPLAIN'] : ((isset($user->lang['USER_GROUP_DEFAULT_EXPLAIN'])) ? $user->lang['USER_GROUP_DEFAULT_EXPLAIN'] : '{ USER_GROUP_DEFAULT_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
	<div class="radio"><input type="radio" name="default" id="default1" value="1"><label for="default1"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label></div>
	<div class="radio"><input type="radio" name="default" id="default0" value="0" checked="checked"><label for="default0"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label></div>
	</div> 
	</div>
	
	<div class="control-group"> 
	   <label class="control-label" for="usernames"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_USERNAMES_EXPLAIN'])) ? $this->_rootref['L_USERNAMES_EXPLAIN'] : ((isset($user->lang['USERNAMES_EXPLAIN'])) ? $user->lang['USERNAMES_EXPLAIN'] : '{ USERNAMES_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
    	<textarea placeholder="" rows="2" name="usernames" id="usernames" class="form-control"></textarea>
	<a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a>
	</div> 
	</div>
	</fieldset>
	<div class="space10"></div>
	<button class="btn btn-default" type="submit" name="addusers" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>

<?php } else { if (sizeof($this->_tpldata['leader'])) {  ?>

      <div class="panel panel-default">
		<table class="footable table table-striped table-bordered table-white table-primary table-hover">
			<thead>
			<tr>
				<th><?php echo ((isset($this->_rootref['L_GROUP_LEADER'])) ? $this->_rootref['L_GROUP_LEADER'] : ((isset($user->lang['GROUP_LEADER'])) ? $user->lang['GROUP_LEADER'] : '{ GROUP_LEADER }')); ?></th>
				<th><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></th>
			</tr>
			</thead>
			<tbody>
		<?php $_leader_count = (isset($this->_tpldata['leader'])) ? sizeof($this->_tpldata['leader']) : 0;if ($_leader_count) {for ($_leader_i = 0; $_leader_i < $_leader_count; ++$_leader_i){$_leader_val = &$this->_tpldata['leader'][$_leader_i]; ?>

		<tr>
			<td>
				<a href="<?php echo $_leader_val['U_EDIT']; ?>" class="topictitle"<?php if ($_leader_val['GROUP_COLOUR']) {  ?> style="color: #<?php echo $_leader_val['GROUP_COLOUR']; ?>;"<?php } ?>><?php echo $_leader_val['GROUP_NAME']; ?></a>
			    <?php if ($_leader_val['GROUP_DESC']) {  ?><br /><?php echo $_leader_val['GROUP_DESC']; } ?>

			</td>
			<td class="center">
				<a href="<?php echo $_leader_val['U_EDIT']; ?>">[<?php echo ((isset($this->_rootref['L_EDIT'])) ? $this->_rootref['L_EDIT'] : ((isset($user->lang['EDIT'])) ? $user->lang['EDIT'] : '{ EDIT }')); ?>]</a>
				<a href="<?php echo $_leader_val['U_LIST']; ?>">[<?php echo ((isset($this->_rootref['L_GROUP_LIST'])) ? $this->_rootref['L_GROUP_LIST'] : ((isset($user->lang['GROUP_LIST'])) ? $user->lang['GROUP_LIST'] : '{ GROUP_LIST }')); ?>]</a>
			</td>
		</tr>
		<?php }} ?>

		</tbody>
	</table>
	</div>
	<?php } else { ?>

		<p><strong><?php echo ((isset($this->_rootref['L_NO_LEADERS'])) ? $this->_rootref['L_NO_LEADERS'] : ((isset($user->lang['NO_LEADERS'])) ? $user->lang['NO_LEADERS'] : '{ NO_LEADERS }')); ?></strong></p>
	<?php } } ?>

</form>
<?php $this->_tpl_include('ucp_footer.html'); ?>