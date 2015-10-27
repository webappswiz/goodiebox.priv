<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

  <div class="side-segment"><h3><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></h3></div>
<form method="post" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">
 <div class="panel panel-forum">
	     <div class="panel-heading">
		  <i class="fa fa-group"></i> <?php echo ((isset($this->_rootref['L_MEMBERS'])) ? $this->_rootref['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ MEMBERS }')); ?>

		 </div>
		 <div class="panel-inner">
		<table class="footable table table-striped table-primary table-hover">
	<thead>
	<tr>
		<th data-class="expand"><?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?>&nbsp;<?php echo ((isset($this->_rootref['L_ADMINISTRATORS'])) ? $this->_rootref['L_ADMINISTRATORS'] : ((isset($user->lang['ADMINISTRATORS'])) ? $user->lang['ADMINISTRATORS'] : '{ ADMINISTRATORS }')); ?></th>
		<th class="large20" data-hide="phone"><?php echo ((isset($this->_rootref['L_PRIMARY_GROUP'])) ? $this->_rootref['L_PRIMARY_GROUP'] : ((isset($user->lang['PRIMARY_GROUP'])) ? $user->lang['PRIMARY_GROUP'] : '{ PRIMARY_GROUP }')); ?></th>
		<th class="large20" data-hide="phone"><?php echo ((isset($this->_rootref['L_FORUMS'])) ? $this->_rootref['L_FORUMS'] : ((isset($user->lang['FORUMS'])) ? $user->lang['FORUMS'] : '{ FORUMS }')); ?></th>
	</tr>
	</thead>
	<tbody>
<?php $_admin_count = (isset($this->_tpldata['admin'])) ? sizeof($this->_tpldata['admin']) : 0;if ($_admin_count) {for ($_admin_i = 0; $_admin_i < $_admin_count; ++$_admin_i){$_admin_val = &$this->_tpldata['admin'][$_admin_i]; ?>

	<tr>
		<td><?php echo $_admin_val['USERNAME_FULL']; ?> (<?php echo $_admin_val['RANK_TITLE']; ?>)</td>
		<td><?php if ($_admin_val['U_GROUP']) {  ?>

			<a<?php if ($_admin_val['GROUP_COLOR']) {  ?> style="font-weight: bold; color:#<?php echo $_admin_val['GROUP_COLOR']; ?>"<?php } ?> href="<?php echo $_admin_val['U_GROUP']; ?>"><?php echo $_admin_val['GROUP_NAME']; ?></a>
			<?php } else { ?>

				<?php echo $_admin_val['GROUP_NAME']; ?>

			<?php } ?>

		</td>
		<td>&#45;</td>
	</tr>
<?php }} else { ?>

	<tr>
		<td colspan="3"><strong><?php echo ((isset($this->_rootref['L_NO_ADMINISTRATORS'])) ? $this->_rootref['L_NO_ADMINISTRATORS'] : ((isset($user->lang['NO_ADMINISTRATORS'])) ? $user->lang['NO_ADMINISTRATORS'] : '{ NO_ADMINISTRATORS }')); ?></strong></td>
	</tr>
<?php } ?>

	</tbody>
	</table>
	</div>
  </div>
  
 <div class="panel panel-forum">
	     <div class="panel-heading">
		  <i class="fa fa-group"></i> <?php echo ((isset($this->_rootref['L_MEMBERS'])) ? $this->_rootref['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ MEMBERS }')); ?>

		 </div>
		 <div class="panel-inner">
		<table class="footable table table-striped table-primary table-hover">
	<thead>
	<tr>
		<th data-class="expand"><?php echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); ?></th>
		<th class="large20" data-hide="phone"><?php echo ((isset($this->_rootref['L_GROUPS'])) ? $this->_rootref['L_GROUPS'] : ((isset($user->lang['GROUPS'])) ? $user->lang['GROUPS'] : '{ GROUPS }')); ?></th>
		<th class="large20" data-hide="phone"><?php echo ((isset($this->_rootref['L_FORUMS'])) ? $this->_rootref['L_FORUMS'] : ((isset($user->lang['FORUMS'])) ? $user->lang['FORUMS'] : '{ FORUMS }')); ?></th>
	</tr>
	</thead>
	<tbody>
<?php $_mod_count = (isset($this->_tpldata['mod'])) ? sizeof($this->_tpldata['mod']) : 0;if ($_mod_count) {for ($_mod_i = 0; $_mod_i < $_mod_count; ++$_mod_i){$_mod_val = &$this->_tpldata['mod'][$_mod_i]; ?>

	<tr>
		<td><?php echo $_mod_val['USERNAME_FULL']; if ($_mod_val['RANK_IMG']) {  } else { ?>(<?php echo $_mod_val['RANK_TITLE']; ?>)<?php } ?></td>
		<td><?php if ($_mod_val['U_GROUP']) {  ?>

			<a<?php if ($_mod_val['GROUP_COLOR']) {  ?> style="font-weight: bold; color:#<?php echo $_mod_val['GROUP_COLOR']; ?>"<?php } ?> href="<?php echo $_mod_val['U_GROUP']; ?>"><?php echo $_mod_val['GROUP_NAME']; ?></a>
			<?php } else { ?>

				<?php echo $_mod_val['GROUP_NAME']; ?>

			<?php } ?>

		</td>
		<td><?php if (! $_mod_val['FORUMS']) {  echo ((isset($this->_rootref['L_ALL_FORUMS'])) ? $this->_rootref['L_ALL_FORUMS'] : ((isset($user->lang['ALL_FORUMS'])) ? $user->lang['ALL_FORUMS'] : '{ ALL_FORUMS }')); } else { ?><select class="selectpicker" data-container="body"><?php echo $_mod_val['FORUMS']; ?></select><?php } ?></td>
	</tr>
<?php }} else { ?>

	<tr>
		<td colspan="3"><strong><?php echo ((isset($this->_rootref['L_NO_MODERATORS'])) ? $this->_rootref['L_NO_MODERATORS'] : ((isset($user->lang['NO_MODERATORS'])) ? $user->lang['NO_MODERATORS'] : '{ NO_MODERATORS }')); ?></strong></td>
	</tr>
<?php } ?>

	</tbody>
	</table>
	 </div>
  </div>	
</form>
<div class="row">
<?php $this->_tpl_include('jumpbox.html'); ?>

</div>

<?php $this->_tpl_include('jump_links.html'); $this->_tpl_include('overall_footer.html'); ?>