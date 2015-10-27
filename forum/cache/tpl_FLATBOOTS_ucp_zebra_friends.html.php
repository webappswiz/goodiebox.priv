<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<fieldset class="framed-ucp">
    <legend><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></legend>
	 <p><?php echo ((isset($this->_rootref['L_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_FRIENDS_EXPLAIN'] : ((isset($user->lang['FRIENDS_EXPLAIN'])) ? $user->lang['FRIENDS_EXPLAIN'] : '{ FRIENDS_EXPLAIN }')); ?></p>
	<?php if ($this->_rootref['ERROR']) {  ?>

	<div class="alert alert-info fade in">
       <i class="fa fa-warning"></i> <strong><?php echo ((isset($this->_rootref['L_INFO_BOX'])) ? $this->_rootref['L_INFO_BOX'] : ((isset($user->lang['INFO_BOX'])) ? $user->lang['INFO_BOX'] : '{ INFO_BOX }')); ?></strong> <?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>

    </div>
	<?php } ?>

		
	<div class="control-group"> 
	   <label class="control-label" <?php if ($this->_rootref['S_USERNAME_OPTIONS']) {  ?>for="usernames"<?php } ?>><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS'])) ? $this->_rootref['L_YOUR_FRIENDS'] : ((isset($user->lang['YOUR_FRIENDS'])) ? $user->lang['YOUR_FRIENDS'] : '{ YOUR_FRIENDS }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_YOUR_FRIENDS_EXPLAIN'] : ((isset($user->lang['YOUR_FRIENDS_EXPLAIN'])) ? $user->lang['YOUR_FRIENDS_EXPLAIN'] : '{ YOUR_FRIENDS_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
       <div class="selector">
	   <?php if ($this->_rootref['S_USERNAME_OPTIONS']) {  ?>

			<select class="selectpicker" data-selected-text-format="count" data-container="body" name="usernames[]" id="usernames" multiple="multiple" size="5"><?php echo (isset($this->_rootref['S_USERNAME_OPTIONS'])) ? $this->_rootref['S_USERNAME_OPTIONS'] : ''; ?></select>
		<?php } else { ?>

			<span class="label label-default"><?php echo ((isset($this->_rootref['L_NO_FRIENDS'])) ? $this->_rootref['L_NO_FRIENDS'] : ((isset($user->lang['NO_FRIENDS'])) ? $user->lang['NO_FRIENDS'] : '{ NO_FRIENDS }')); ?></span>
		<?php } ?>

	   </div>
	</div> 
	</div>
	
	<div class="control-group"> 
	   <label class="control-label" for="add"><?php echo ((isset($this->_rootref['L_ADD_FRIENDS'])) ? $this->_rootref['L_ADD_FRIENDS'] : ((isset($user->lang['ADD_FRIENDS'])) ? $user->lang['ADD_FRIENDS'] : '{ ADD_FRIENDS }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_ADD_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_ADD_FRIENDS_EXPLAIN'] : ((isset($user->lang['ADD_FRIENDS_EXPLAIN'])) ? $user->lang['ADD_FRIENDS_EXPLAIN'] : '{ ADD_FRIENDS_EXPLAIN }')); ?></span>
	<div class="controls controls-row"> 
    	<textarea class="form-control" name="add" id="add" rows="2" placeholder="Jhon Doe"><?php echo (isset($this->_rootref['USERNAMES'])) ? $this->_rootref['USERNAMES'] : ''; ?></textarea>
	<a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a>
	</div> 
	<div class="space10"></div>
	</div>
	<div class="space10"></div>
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default" ><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
	<button type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btn btn-default" ><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
</form>
<?php $this->_tpl_include('ucp_footer.html'); ?>