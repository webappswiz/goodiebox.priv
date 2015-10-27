<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<?php $this->_tpl_include('ucp_avatar_options.html'); ?>

<div class="space10"></div>
<div class="form-actions"> 
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	<?php if ($this->_rootref['S_DISPLAY_GALLERY']) {  ?><button type="submit" name="display_gallery" value="<?php echo ((isset($this->_rootref['L_DISPLAY_GALLERY'])) ? $this->_rootref['L_DISPLAY_GALLERY'] : ((isset($user->lang['DISPLAY_GALLERY'])) ? $user->lang['DISPLAY_GALLERY'] : '{ DISPLAY_GALLERY }')); ?>" class="btn btn-default" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_LOADING'])) ? $this->_rootref['L_LOADING'] : ((isset($user->lang['LOADING'])) ? $user->lang['LOADING'] : '{ LOADING }')); ?><i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_DISPLAY_GALLERY'])) ? $this->_rootref['L_DISPLAY_GALLERY'] : ((isset($user->lang['DISPLAY_GALLERY'])) ? $user->lang['DISPLAY_GALLERY'] : '{ DISPLAY_GALLERY }')); ?></button>&nbsp; <?php } if ($this->_rootref['S_IN_AVATAR_GALLERY']) {  ?><button type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" class="btn btn-default"><?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?></button><?php } else { ?>

	<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button> <?php } ?>&nbsp; 
	<button type="submit" class="btn btn-default" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_LOADING'])) ? $this->_rootref['L_LOADING'] : ((isset($user->lang['LOADING'])) ? $user->lang['LOADING'] : '{ LOADING }')); ?><i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</div> 
</form>
<?php $this->_tpl_include('ucp_footer.html'); ?>