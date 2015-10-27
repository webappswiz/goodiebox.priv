<?php if (!defined('IN_PHPBB')) exit; ?><div class="tab-pane active">
<style>
.btn-file{position:relative;overflow:hidden;vertical-align:middle}.btn-file>input{position:absolute;top:0;right:0;width:100%;height:100%;margin:0;font-size:23px;cursor:pointer;filter:alpha(opacity=0);opacity:0;direction:ltr}.fileinput{display:inline-block;margin-bottom:9px}.fileinput .form-control{display:inline-block;padding-top:7px;padding-bottom:5px;margin-bottom:0;vertical-align:middle;cursor:text}.fileinput .thumbnail{display:inline-block;margin-bottom:5px;overflow:hidden;text-align:center;vertical-align:middle}.fileinput .thumbnail>img{max-height:100%}.fileinput .btn{vertical-align:middle}.fileinput-exists .fileinput-new,.fileinput-new .fileinput-exists{display:none}.fileinput-inline .fileinput-controls{display:inline}.fileinput-filename{display:inline-block;overflow:hidden;vertical-align:middle}.form-control .fileinput-filename{vertical-align:bottom}.fileinput.input-group{display:table}.fileinput.input-group>*{position:relative;z-index:2}.fileinput.input-group>.btn-file{z-index:1}.fileinput-new.input-group .btn-file,.fileinput-new .input-group .btn-file{border-radius:0 4px 4px 0}.fileinput-new.input-group .btn-file.btn-xs,.fileinput-new .input-group .btn-file.btn-xs,.fileinput-new.input-group .btn-file.btn-sm,.fileinput-new .input-group .btn-file.btn-sm{border-radius:0 3px 3px 0}.fileinput-new.input-group .btn-file.btn-lg,.fileinput-new .input-group .btn-file.btn-lg{border-radius:0 6px 6px 0}.form-group.has-warning .fileinput .fileinput-preview{color:#8a6d3b}.form-group.has-warning .fileinput .thumbnail{border-color:#faebcc}.form-group.has-error .fileinput .fileinput-preview{color:#a94442}.form-group.has-error .fileinput .thumbnail{border-color:#ebccd1}.form-group.has-success .fileinput .fileinput-preview{color:#3c763d}.form-group.has-success .fileinput .thumbnail{border-color:#d6e9c6}.input-group-addon:not(:first-child){border-left:0}
</style>
	<fieldset class="framed-ucp">
	<legend><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></legend>
	<?php if (! $this->_rootref['S_AVATARS_ENABLED']) {  ?>

		<p><?php echo ((isset($this->_rootref['L_AVATAR_FEATURES_DISABLED'])) ? $this->_rootref['L_AVATAR_FEATURES_DISABLED'] : ((isset($user->lang['AVATAR_FEATURES_DISABLED'])) ? $user->lang['AVATAR_FEATURES_DISABLED'] : '{ AVATAR_FEATURES_DISABLED }')); ?></p>
	<?php } if ($this->_rootref['ERROR']) {  ?>

	<div class="alert alert-info fade in">
      <i class="fa fa-warning"></i> <strong><?php echo ((isset($this->_rootref['L_INFO_BOX'])) ? $this->_rootref['L_INFO_BOX'] : ((isset($user->lang['INFO_BOX'])) ? $user->lang['INFO_BOX'] : '{ INFO_BOX }')); ?></strong> <?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>

    </div>
	<?php } ?>

	
<div class="controls controls-row"> 
 <label for="uploadfile" class="control-label"><?php echo ((isset($this->_rootref['L_CURRENT_IMAGE'])) ? $this->_rootref['L_CURRENT_IMAGE'] : ((isset($user->lang['CURRENT_IMAGE'])) ? $user->lang['CURRENT_IMAGE'] : '{ CURRENT_IMAGE }')); ?>:</label>
  <div class="fileinput fileinput-new" data-provides="fileinput">
	<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;">
	 <?php if ($this->_rootref['AVATAR']) {  echo (isset($this->_rootref['AVATAR'])) ? $this->_rootref['AVATAR'] : ''; } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/no_avatar.gif" alt="" /><?php } ?>

	</div>
	  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
	<?php if ($this->_rootref['S_UPLOAD_AVATAR_FILE']) {  ?>

	   <div style="text-align: center;">
		<span class="btn btn-default btn-file btn-sm">
		<span class="fileinput-new"><?php echo ((isset($this->_rootref['L_SELECT_IMAGE'])) ? $this->_rootref['L_SELECT_IMAGE'] : ((isset($user->lang['SELECT_IMAGE'])) ? $user->lang['SELECT_IMAGE'] : '{ SELECT_IMAGE }')); ?></span>
		<span class="fileinput-exists">Change</span>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo (isset($this->_rootref['AVATAR_SIZE'])) ? $this->_rootref['AVATAR_SIZE'] : ''; ?>" /><input type="file" name="uploadfile" id="uploadfile" class="default">
		</span>
		<a href="#" title="<?php echo ((isset($this->_rootref['L_DELETE_AVATAR'])) ? $this->_rootref['L_DELETE_AVATAR'] : ((isset($user->lang['DELETE_AVATAR'])) ? $user->lang['DELETE_AVATAR'] : '{ DELETE_AVATAR }')); ?>" class="btn btn-default fileinput-exists btn-sm" data-dismiss="fileinput"><i class="fa fa-times"></i></a>
		</div>
   <?php } ?>

  </div>
   <div class="clearfix">
      <?php if ($this->_rootref['AVATAR']) {  ?><input type="checkbox" name="delete" id="delete" ><label class="checkbox-inline" for="delete"><?php echo ((isset($this->_rootref['L_DELETE_AVATAR'])) ? $this->_rootref['L_DELETE_AVATAR'] : ((isset($user->lang['DELETE_AVATAR'])) ? $user->lang['DELETE_AVATAR'] : '{ DELETE_AVATAR }')); ?></label><?php } else { } if ($this->_rootref['S_AVATARS_ENABLED'] && $this->_rootref['S_ALLOW_GRAVATAR']) {  ?><input class="test_priv1" type="checkbox" name="gravatar" id="gravatar"<?php if ($this->_rootref['S_GRAVATAR']) {  ?> checked="checked"<?php } ?> onclick="set_grav(this)"><label class="checkbox-inline" for="gravatar"><?php echo ((isset($this->_rootref['L_GRAVATAR_AVATAR_SELECT'])) ? $this->_rootref['L_GRAVATAR_AVATAR_SELECT'] : ((isset($user->lang['GRAVATAR_AVATAR_SELECT'])) ? $user->lang['GRAVATAR_AVATAR_SELECT'] : '{ GRAVATAR_AVATAR_SELECT }')); ?></label><?php } ?>

   </div>
  <div class="help-block"><span class="label label-info"><?php echo ((isset($this->_rootref['L_NOTE'])) ? $this->_rootref['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ NOTE }')); ?></span> <?php echo ((isset($this->_rootref['L_AVATAR_EXPLAIN'])) ? $this->_rootref['L_AVATAR_EXPLAIN'] : ((isset($user->lang['AVATAR_EXPLAIN'])) ? $user->lang['AVATAR_EXPLAIN'] : '{ AVATAR_EXPLAIN }')); ?></div>
</div>

    <?php if ($this->_rootref['S_UPLOAD_AVATAR_URL']) {  ?>   
	  <div class="control-group">
      <label for="uploadurl" class="control-label"><?php echo ((isset($this->_rootref['L_UPLOAD_AVATAR_URL'])) ? $this->_rootref['L_UPLOAD_AVATAR_URL'] : ((isset($user->lang['UPLOAD_AVATAR_URL'])) ? $user->lang['UPLOAD_AVATAR_URL'] : '{ UPLOAD_AVATAR_URL }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_UPLOAD_AVATAR_URL_EXPLAIN'])) ? $this->_rootref['L_UPLOAD_AVATAR_URL_EXPLAIN'] : ((isset($user->lang['UPLOAD_AVATAR_URL_EXPLAIN'])) ? $user->lang['UPLOAD_AVATAR_URL_EXPLAIN'] : '{ UPLOAD_AVATAR_URL_EXPLAIN }')); ?></span>
        <div class="controls controls-row"> 
             <input type="text" name="uploadurl" id="uploadurl" value="<?php echo (isset($this->_rootref['AVATAR_URL'])) ? $this->_rootref['AVATAR_URL'] : ''; ?>" class="av-option form-control" placeholder="http://the-avatar-site/avatar.gif">
        </div>
      </div>
	<?php } if ($this->_rootref['S_LINK_AVATAR']) {  ?>

	 <div class="control-group">
      <label for="remotelink" class="control-label"><?php echo ((isset($this->_rootref['L_LINK_REMOTE_AVATAR'])) ? $this->_rootref['L_LINK_REMOTE_AVATAR'] : ((isset($user->lang['LINK_REMOTE_AVATAR'])) ? $user->lang['LINK_REMOTE_AVATAR'] : '{ LINK_REMOTE_AVATAR }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_LINK_REMOTE_AVATAR_EXPLAIN'])) ? $this->_rootref['L_LINK_REMOTE_AVATAR_EXPLAIN'] : ((isset($user->lang['LINK_REMOTE_AVATAR_EXPLAIN'])) ? $user->lang['LINK_REMOTE_AVATAR_EXPLAIN'] : '{ LINK_REMOTE_AVATAR_EXPLAIN }')); ?></span>
        <div class="controls controls-row"> 
             <input type="text" name="remotelink" id="remotelink" value="<?php echo (isset($this->_rootref['AVATAR_REMOTE'])) ? $this->_rootref['AVATAR_REMOTE'] : ''; ?>" class="av-option form-control input-sm" placeholder="http://the-avatar-site/avatar.gif">
        </div>
      </div>
		
	<div class="control-group">
         <label for="width" class="control-label"><?php echo ((isset($this->_rootref['L_LINK_REMOTE_SIZE'])) ? $this->_rootref['L_LINK_REMOTE_SIZE'] : ((isset($user->lang['LINK_REMOTE_SIZE'])) ? $user->lang['LINK_REMOTE_SIZE'] : '{ LINK_REMOTE_SIZE }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_LINK_REMOTE_SIZE_EXPLAIN'])) ? $this->_rootref['L_LINK_REMOTE_SIZE_EXPLAIN'] : ((isset($user->lang['LINK_REMOTE_SIZE_EXPLAIN'])) ? $user->lang['LINK_REMOTE_SIZE_EXPLAIN'] : '{ LINK_REMOTE_SIZE_EXPLAIN }')); ?></span>
        <div class="controls controls-row">
        <div class="input-group col-md-3">
		   <span class="input-group-addon"><?php echo ((isset($this->_rootref['L_WIDTH_SIZE'])) ? $this->_rootref['L_WIDTH_SIZE'] : ((isset($user->lang['WIDTH_SIZE'])) ? $user->lang['WIDTH_SIZE'] : '{ WIDTH_SIZE }')); ?></span>
            <input type="text" name="width" id="width" value="<?php echo (isset($this->_rootref['AVATAR_WIDTH'])) ? $this->_rootref['AVATAR_WIDTH'] : ''; ?>" class="form-control input-sm" placeholder="<?php echo ((isset($this->_rootref['L_WIDTH_PLACEHOLDER'])) ? $this->_rootref['L_WIDTH_PLACEHOLDER'] : ((isset($user->lang['WIDTH_PLACEHOLDER'])) ? $user->lang['WIDTH_PLACEHOLDER'] : '{ WIDTH_PLACEHOLDER }')); ?>">
			<span class="input-group-addon"><?php echo ((isset($this->_rootref['L_PIXEL_SIZE'])) ? $this->_rootref['L_PIXEL_SIZE'] : ((isset($user->lang['PIXEL_SIZE'])) ? $user->lang['PIXEL_SIZE'] : '{ PIXEL_SIZE }')); ?></span>
        </div>
	 <div class="space10"></div>
		<div class="input-group col-md-3">
		    <span class="input-group-addon"><?php echo ((isset($this->_rootref['L_HEIGHT_SIZE'])) ? $this->_rootref['L_HEIGHT_SIZE'] : ((isset($user->lang['HEIGHT_SIZE'])) ? $user->lang['HEIGHT_SIZE'] : '{ HEIGHT_SIZE }')); ?></span>
            <input type="text" name="height" id="height" value="<?php echo (isset($this->_rootref['AVATAR_HEIGHT'])) ? $this->_rootref['AVATAR_HEIGHT'] : ''; ?>" class="form-control input-sm" placeholder="<?php echo ((isset($this->_rootref['L_HEIGTH_PLACEHOLDER'])) ? $this->_rootref['L_HEIGTH_PLACEHOLDER'] : ((isset($user->lang['HEIGTH_PLACEHOLDER'])) ? $user->lang['HEIGTH_PLACEHOLDER'] : '{ HEIGTH_PLACEHOLDER }')); ?>">
			<span class="input-group-addon"><?php echo ((isset($this->_rootref['L_PIXEL_SIZE'])) ? $this->_rootref['L_PIXEL_SIZE'] : ((isset($user->lang['PIXEL_SIZE'])) ? $user->lang['PIXEL_SIZE'] : '{ PIXEL_SIZE }')); ?></span>
         </div>
        </div>
		<div class="space10"></div>
	</div>
	<?php } ?>

   </fieldset>

	<?php if ($this->_rootref['S_IN_AVATAR_GALLERY']) {  ?>

        <div class="space10"></div>
    <fieldset class="framed-ucp">
		<legend><?php echo ((isset($this->_rootref['L_AVATAR_GALLERY'])) ? $this->_rootref['L_AVATAR_GALLERY'] : ((isset($user->lang['AVATAR_GALLERY'])) ? $user->lang['AVATAR_GALLERY'] : '{ AVATAR_GALLERY }')); ?></legend>
		 <label class="control-label" for="category"><?php echo ((isset($this->_rootref['L_AVATAR_CATEGORY'])) ? $this->_rootref['L_AVATAR_CATEGORY'] : ((isset($user->lang['AVATAR_CATEGORY'])) ? $user->lang['AVATAR_CATEGORY'] : '{ AVATAR_CATEGORY }')); ?>:</label>
	 <div class="controls controls-row">
		 <div class="input-group">
			<select class="selectpicker" data-container="body" data-style="btn btn-default form-control" name="category" id="category"><?php echo (isset($this->_rootref['S_CAT_OPTIONS'])) ? $this->_rootref['S_CAT_OPTIONS'] : ''; ?></select>
             <span class="input-group-btn">			
			<button type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?></button>
		     <button type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="display_gallery" class="btn btn-default"><?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?></button>
		  </span>
		  </div>
	 </div>

    <div id="gallery">
	<div class="row">
	 <?php $_avatar_row_count = (isset($this->_tpldata['avatar_row'])) ? sizeof($this->_tpldata['avatar_row']) : 0;if ($_avatar_row_count) {for ($_avatar_row_i = 0; $_avatar_row_i < $_avatar_row_count; ++$_avatar_row_i){$_avatar_row_val = &$this->_tpldata['avatar_row'][$_avatar_row_i]; ?>

	 <div class="row">
	  <div class="col-md-12">
	   <?php $_avatar_column_count = (isset($_avatar_row_val['avatar_column'])) ? sizeof($_avatar_row_val['avatar_column']) : 0;if ($_avatar_column_count) {for ($_avatar_column_i = 0; $_avatar_column_i < $_avatar_column_count; ++$_avatar_column_i){$_avatar_column_val = &$_avatar_row_val['avatar_column'][$_avatar_column_i]; ?>

	   <div class="col-md-3">
		 <input type="radio" name="avatar_select" id="av-<?php echo $_avatar_row_val['S_ROW_COUNT']; ?>-<?php echo $_avatar_column_val['S_ROW_COUNT']; ?>" value="<?php echo $_avatar_column_val['AVATAR_FILE']; ?>" />
		 <label for="av-<?php echo $_avatar_row_val['S_ROW_COUNT']; ?>-<?php echo $_avatar_column_val['S_ROW_COUNT']; ?>"><img src="<?php echo $_avatar_column_val['AVATAR_IMAGE']; ?>" alt=""></label>
	  </div>
	  <?php }} ?>

	  </div>
	  </div>
	 <?php }} ?>

    </div>
	</div>
   </fieldset>
	<?php } ?>	
<script>
head.load("<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/vendors/jupload.min.js");
</script>
<?php if ($this->_rootref['S_ALLOW_GRAVATAR']) {  ?>

<script>
head.ready(function () {
$(".test_priv1").on('ifChanged', function() {
      jQuery('.av-option:input').prop('disabled', this.checked);
    })
  .trigger('ifChanged');
});
</script>
<?php } ?>

</div>