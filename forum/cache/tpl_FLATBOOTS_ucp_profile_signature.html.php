<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="postform" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<?php if ($this->_rootref['SIGNATURE_PREVIEW'] != ('')) {  ?>

	<div class="well">
		<h3><?php echo ((isset($this->_rootref['L_SIGNATURE_PREVIEW'])) ? $this->_rootref['L_SIGNATURE_PREVIEW'] : ((isset($user->lang['SIGNATURE_PREVIEW'])) ? $user->lang['SIGNATURE_PREVIEW'] : '{ SIGNATURE_PREVIEW }')); ?></h3>
			<div class="signature" style="border-top:none; margin-top: 0; "><?php echo (isset($this->_rootref['SIGNATURE_PREVIEW'])) ? $this->_rootref['SIGNATURE_PREVIEW'] : ''; ?></div>
	</div>
<?php } ?>


<div class="well">
   <fieldset class="framed-ucp">
   <legend><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></legend>

	<div class="alert alert-info fade in">
			<?php echo ((isset($this->_rootref['L_SIGNATURE_EXPLAIN'])) ? $this->_rootref['L_SIGNATURE_EXPLAIN'] : ((isset($user->lang['SIGNATURE_EXPLAIN'])) ? $user->lang['SIGNATURE_EXPLAIN'] : '{ SIGNATURE_EXPLAIN }')); ?>

		</div>

	<?php $this->_tpldata['DEFINE']['.']['SIG_EDIT'] = 1; $this->_tpl_include('posting_editor.html'); ?>


	</fieldset>
	
	<div class="space10"></div>
	
	<fieldset class="framed-ucp">
	
	<legend><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></legend>
	
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

        <input type="checkbox" name="disable_bbcode" id="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?>><label class="checkbox-inline" for="disable_bbcode"><?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?></label>
		<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

		<input type="checkbox" name="disable_smilies" id="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?>><label class="checkbox-inline" for="disable_smilies"><?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?></label>
		<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

		<input type="checkbox" name="disable_magic_url" id="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?>><label class="checkbox-inline" for="disable_magic_url"><?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?></label>
		<?php } ?>


	</fieldset>
	
</div>

	<div class="form-actions"> 
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	<button type="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" class="btn btn-default" ><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
	<button type="submit" class="btn btn-default" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_LOADING'])) ? $this->_rootref['L_LOADING'] : ((isset($user->lang['LOADING'])) ? $user->lang['LOADING'] : '{ LOADING }')); ?><i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?></button>
	<button type="submit" class="btn btn-default" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_LOADING'])) ? $this->_rootref['L_LOADING'] : ((isset($user->lang['LOADING'])) ? $user->lang['LOADING'] : '{ LOADING }')); ?><i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></button>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</div>


</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>