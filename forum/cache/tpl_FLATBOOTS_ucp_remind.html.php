<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

	<div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_SEND_PASSWORD'])) ? $this->_rootref['L_SEND_PASSWORD'] : ((isset($user->lang['SEND_PASSWORD'])) ? $user->lang['SEND_PASSWORD'] : '{ SEND_PASSWORD }')); ?></h3></div>
<div class="well">
<form class="form-horizontal" role="form" action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>" method="post" id="remind">
  <fieldset>
  <div class="col-md-6">
    <div class="form-group">
		<label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label>
          <div class="input-icon left">
	        <i class="fa fa-user"></i>
		    <input class="form-control input-sm" type="text" name="username" id="username" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" placeholder="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>"/>
		  </div>
	</div>
    <div class="form-group">
		<label for="email"><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>:</label>
          <div class="input-icon left">
	        <i class="icon-moon-at"></i>
		    <input class="form-control input-sm" type="text" name="email" id="email" size="25" maxlength="100" placeholder="Ex:Jhon@mail.com"/>
		  </div>
	</div> 
	<div class="form-group">
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<button type="submit" name="submit" id="submit" class="btn btn-default" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" tabindex="2" data-loading-text="<?php echo ((isset($this->_rootref['L_SENDING'])) ? $this->_rootref['L_SENDING'] : ((isset($user->lang['SENDING'])) ? $user->lang['SENDING'] : '{ SENDING }')); ?> <i class='fa-spin fa fa-spinner fa-lg'></i>"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
		<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</div> 
   </div>
   <div class="pull-right hidden-xs hidden-sm">
		<div class="admin-header-head">
		    <div class="user-fxicon user-fxicon-remind">
				<i class="icon-moon-protecteddirectory"></i>
		    </div>
		</div>
	</div>
  </fieldset>
  </form>
</div>
<?php $this->_tpl_include('overall_footer.html'); ?>