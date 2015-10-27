<?php if (!defined('IN_PHPBB')) exit; ?><form id="viewfolder" method="post" action="<?php echo (isset($this->_rootref['S_PM_ACTION'])) ? $this->_rootref['S_PM_ACTION'] : ''; ?>">
<fieldset class="framed-ucp">
<legend><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); if ($this->_rootref['CUR_FOLDER_NAME']) {  ?>: <?php echo (isset($this->_rootref['CUR_FOLDER_NAME'])) ? $this->_rootref['CUR_FOLDER_NAME'] : ''; } ?></legend>

<?php if ($this->_rootref['FOLDER_STATUS'] && $this->_rootref['FOLDER_MAX_MESSAGES'] != 0) {  ?><p><?php echo (isset($this->_rootref['FOLDER_STATUS'])) ? $this->_rootref['FOLDER_STATUS'] : ''; ?></p>
<div class="progress progress-striped<?php if ($this->_rootref['FOLDER_PERCENT'] == (100)) {  ?> active<?php } ?>">
  <div role="progressbar" aria-valuenow="<?php echo (isset($this->_rootref['FOLDER_PERCENT'])) ? $this->_rootref['FOLDER_PERCENT'] : ''; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (isset($this->_rootref['FOLDER_PERCENT'])) ? $this->_rootref['FOLDER_PERCENT'] : ''; ?>%;" class="progress-bar<?php if ($this->_rootref['FOLDER_PERCENT'] > (80)) {  ?> progress-bar-danger<?php } else { ?> progress-bar-info<?php } ?>"></div>
</div>
<?php } if ($this->_rootref['U_POST_REPLY_PM'] || $this->_rootref['U_POST_NEW_TOPIC'] || $this->_rootref['U_FORWARD_PM']) {  ?>

	<div class="pull-left">
		 <div class="btn-group">
			<?php if ($this->_rootref['U_POST_REPLY_PM']) {  ?><a class="btn btn-default" title="" href="<?php echo (isset($this->_rootref['U_POST_REPLY_PM'])) ? $this->_rootref['U_POST_REPLY_PM'] : ''; ?>"><i class="fa fa-reply"></i> <?php echo ((isset($this->_rootref['L_POST_REPLY_PM'])) ? $this->_rootref['L_POST_REPLY_PM'] : ((isset($user->lang['POST_REPLY_PM'])) ? $user->lang['POST_REPLY_PM'] : '{ POST_REPLY_PM }')); ?></a>
			<?php } else if ($this->_rootref['U_POST_NEW_TOPIC']) {  ?><a class="btn btn-default" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>" accesskey="n" title=""><i class="fa fa-plus"></i> <?php echo ((isset($this->_rootref['L_UCP_PM_COMPOSE'])) ? $this->_rootref['L_UCP_PM_COMPOSE'] : ((isset($user->lang['UCP_PM_COMPOSE'])) ? $user->lang['UCP_PM_COMPOSE'] : '{ UCP_PM_COMPOSE }')); ?></a><?php } if ($this->_rootref['U_FORWARD_PM']) {  ?><a class="btn btn-default" title="" href="<?php echo (isset($this->_rootref['U_FORWARD_PM'])) ? $this->_rootref['U_FORWARD_PM'] : ''; ?>"><i class="fa fa-forward"></i> <?php echo ((isset($this->_rootref['L_POST_FORWARD_PM'])) ? $this->_rootref['L_POST_FORWARD_PM'] : ((isset($user->lang['POST_FORWARD_PM'])) ? $user->lang['POST_FORWARD_PM'] : '{ POST_FORWARD_PM }')); ?></a><?php } if ($this->_rootref['U_POST_REPLY_PM'] && $this->_rootref['S_PM_RECIPIENTS'] > (1)) {  ?><a class="btn btn-default" title="" href="<?php echo (isset($this->_rootref['U_POST_REPLY_ALL'])) ? $this->_rootref['U_POST_REPLY_ALL'] : ''; ?>"><i class="fa fa-group"></i> <?php echo ((isset($this->_rootref['L_REPLY_TO_ALL'])) ? $this->_rootref['L_REPLY_TO_ALL'] : ((isset($user->lang['REPLY_TO_ALL'])) ? $user->lang['REPLY_TO_ALL'] : '{ REPLY_TO_ALL }')); ?></a><?php } ?>			
		 </div> 
	</div>
<?php } if ($this->_rootref['TOTAL_MESSAGES'] || $this->_rootref['S_VIEW_MESSAGE']) {  ?>

<div class="pull-right">
      <ul class="pagination pagination-sm">
	  <?php if ($this->_rootref['S_VIEW_MESSAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_CURRENT_FOLDER'])) ? $this->_rootref['U_CURRENT_FOLDER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['CUR_FOLDER_NAME'])) ? $this->_rootref['CUR_FOLDER_NAME'] : ''; ?></a></li><?php } if ($this->_rootref['PREVIOUS_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a></li><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?><a><li><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li><?php } } if ($this->_rootref['NEXT_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a></li><?php } ?>

	  </ul>
</div> 
<?php } ?>

<div class="space10"></div>