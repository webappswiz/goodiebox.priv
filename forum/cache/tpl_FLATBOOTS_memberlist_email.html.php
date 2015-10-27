<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<form method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>" id="post">
<div class="clearfix">
  <div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></h3></div>	
<div class="well">
	<?php if ($this->_rootref['ERROR_MESSAGE']) {  ?>

	<div class="alert alert-info fade in">
    <i class="fa fa-warning"></i><strong> <?php echo ((isset($this->_rootref['L_INFO_BOX'])) ? $this->_rootref['L_INFO_BOX'] : ((isset($user->lang['INFO_BOX'])) ? $user->lang['INFO_BOX'] : '{ INFO_BOX }')); ?></strong> <?php echo (isset($this->_rootref['ERROR_MESSAGE'])) ? $this->_rootref['ERROR_MESSAGE'] : ''; ?>

    </div> 
	<?php } ?>

	<fieldset>
	<?php if ($this->_rootref['S_SEND_USER']) {  ?>

        <div class="control-group">
		  <label for="username" class="control-label"><?php echo ((isset($this->_rootref['L_RECIPIENT'])) ? $this->_rootref['L_RECIPIENT'] : ((isset($user->lang['RECIPIENT'])) ? $user->lang['RECIPIENT'] : '{ RECIPIENT }')); ?>:</label>
			<div class="controls">
			<div class="input-icon left">
			 <i class="fa fa-user"></i>
			  <input type="text" class="form-control input-sm" name="username" id="username" placeholder="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" disabled="">
			</div>
			</div>
		</div>	
		
		<div class="control-group">
		  <label for="subject" class="control-label"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</label>
			<div class="controls">
			<div class="input-icon left">
			 <i class="fa fa-tag"></i>
			  <input type="text" class="form-control input-sm" name="subject" id="subject" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>">
			</div>
			</div>
		</div>			
		
	<?php } else { ?>

		
        <div class="control-group">
		  <label for="email" class="control-label"><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>:</label>
			<div class="controls">
			<div class="input-icon left">
			 <i class="icon-moon-at"></i>
			  <input type="text" class="form-control input-sm" name="email" id="email" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>">
			</div>
			</div>
		</div>	

        <div class="control-group">
		  <label for="name" class="control-label"><?php echo ((isset($this->_rootref['L_REAL_NAME'])) ? $this->_rootref['L_REAL_NAME'] : ((isset($user->lang['REAL_NAME'])) ? $user->lang['REAL_NAME'] : '{ REAL_NAME }')); ?>:</label>
			<div class="controls">
			<div class="input-icon left">
			 <i class="fa fa-ok"></i>
			  <input type="text" class="form-control input-sm" name="name" id="name" value="<?php echo (isset($this->_rootref['NAME'])) ? $this->_rootref['NAME'] : ''; ?>">
			</div>
			</div>
		</div>	
		
        <div class="control-group">
		  <label for="lang" class="control-label"><?php echo ((isset($this->_rootref['L_DEST_LANG'])) ? $this->_rootref['L_DEST_LANG'] : ((isset($user->lang['DEST_LANG'])) ? $user->lang['DEST_LANG'] : '{ DEST_LANG }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_DEST_LANG_EXPLAIN'])) ? $this->_rootref['L_DEST_LANG_EXPLAIN'] : ((isset($user->lang['DEST_LANG_EXPLAIN'])) ? $user->lang['DEST_LANG_EXPLAIN'] : '{ DEST_LANG_EXPLAIN }')); ?></span>
			<div class="controls">
			 <select class="selectpicker" name="lang"><?php echo (isset($this->_rootref['S_LANG_OPTIONS'])) ? $this->_rootref['S_LANG_OPTIONS'] : ''; ?></select>
			</div>
		</div>	
		<?php } ?>

		<div class="space10"></div>
		  <label for="message" class="control-label"><?php echo ((isset($this->_rootref['L_MESSAGE_BODY'])) ? $this->_rootref['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ MESSAGE_BODY }')); ?>:</label>
			<div class="controls">
			  <textarea class="form-control" name="message" id="message" rows="5" tabindex="4" placeholder="<?php echo ((isset($this->_rootref['L_MESSAGE_BODY'])) ? $this->_rootref['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ MESSAGE_BODY }')); ?>"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></textarea>
			  <p class="help-block"><?php echo ((isset($this->_rootref['L_EMAIL_BODY_EXPLAIN'])) ? $this->_rootref['L_EMAIL_BODY_EXPLAIN'] : ((isset($user->lang['EMAIL_BODY_EXPLAIN'])) ? $user->lang['EMAIL_BODY_EXPLAIN'] : '{ EMAIL_BODY_EXPLAIN }')); ?></p>
			<input type="checkbox" name="cc_email" id="cc_email" value="1" checked="checked" tabindex="5" /><label class="checkbox-inline" for="cc_email"><?php echo ((isset($this->_rootref['L_CC_EMAIL'])) ? $this->_rootref['L_CC_EMAIL'] : ((isset($user->lang['CC_EMAIL'])) ? $user->lang['CC_EMAIL'] : '{ CC_EMAIL }')); ?></label>
			</div>
        <div class="space10"></div>
	</fieldset>

	<fieldset class="form-actions">
		<button type="submit" tabindex="6" name="submit" class="btn btn-default" value="<?php echo ((isset($this->_rootref['L_SEND_EMAIL'])) ? $this->_rootref['L_SEND_EMAIL'] : ((isset($user->lang['SEND_EMAIL'])) ? $user->lang['SEND_EMAIL'] : '{ SEND_EMAIL }')); ?>" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_SENDING'])) ? $this->_rootref['L_SENDING'] : ((isset($user->lang['SENDING'])) ? $user->lang['SENDING'] : '{ SENDING }')); ?> <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_SEND_EMAIL'])) ? $this->_rootref['L_SEND_EMAIL'] : ((isset($user->lang['SEND_EMAIL'])) ? $user->lang['SEND_EMAIL'] : '{ SEND_EMAIL }')); ?></button>
	</fieldset>
	
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</div>
</div>
</form>

<?php $this->_tpl_include('overall_footer.html'); ?>