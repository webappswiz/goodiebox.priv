<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<div class="tab-pane active">
<div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h3></div>
	<p><?php echo ((isset($this->_rootref['L_BOOKMARKS_EXPLAIN'])) ? $this->_rootref['L_BOOKMARKS_EXPLAIN'] : ((isset($user->lang['BOOKMARKS_EXPLAIN'])) ? $user->lang['BOOKMARKS_EXPLAIN'] : '{ BOOKMARKS_EXPLAIN }')); ?></p>

<?php if ($this->_rootref['S_NO_DISPLAY_BOOKMARKS']) {  ?>

	<div class="alert alert-info fade in">
        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>
        <?php echo ((isset($this->_rootref['L_BOOKMARKS_DISABLED'])) ? $this->_rootref['L_BOOKMARKS_DISABLED'] : ((isset($user->lang['BOOKMARKS_DISABLED'])) ? $user->lang['BOOKMARKS_DISABLED'] : '{ BOOKMARKS_DISABLED }')); ?>

    </div> 
<?php } else { if (sizeof($this->_tpldata['topicrow'])) {  ?>

<div class="panel panel-forum">
	<div class="panel-heading">
	 <i class="fa fa-bolt"></i> <?php echo ((isset($this->_rootref['L_BOOKMARKS'])) ? $this->_rootref['L_BOOKMARKS'] : ((isset($user->lang['BOOKMARKS'])) ? $user->lang['BOOKMARKS'] : '{ BOOKMARKS }')); ?>

	</div>
	<div class="panel-inner">
	<table class="footable table table-striped table-primary table-hover">
	<thead>
		<tr>
			<th data-class="expand"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
			<th data-hide="phone"><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></th>
			<th class="table-check"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
		</tr> 
	</thead>
	<tbody>
	<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>

		<tr>
			<?php if ($_topicrow_val['S_DELETED_TOPIC']) {  ?>

			<?php echo ((isset($this->_rootref['L_DELETED_TOPIC'])) ? $this->_rootref['L_DELETED_TOPIC'] : ((isset($user->lang['DELETED_TOPIC'])) ? $user->lang['DELETED_TOPIC'] : '{ DELETED_TOPIC }')); ?>

			<?php } else { ?>

			<td>
			   <span class="icon-wrapper">
				<i class="row-icon-font icon-moon-default2 <?php if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?>icon-moon-voice2<?php } if ($_topicrow_val['S_POST_GLOBAL']) {  ?>icon-moon-podcast2<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> icon-moon-pushpin2<?php } if ($_topicrow_val['S_HAS_POLL']) {  ?>icon-moon-bars2<?php } if ($_topicrow_val['S_TOPIC_MOVED']) {  ?>icon-moon-moved<?php } if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?> text-info<?php } else { ?> text-muted<?php } ?>" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>"></i>
				</span>
				<i class="row-icon-font-mini <?php if ($_topicrow_val['S_LOCKED']) {  ?>fa fa-lock forumview-lock<?php } ?>" title="<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; ?>"></i>
				<?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><i class="fa fa-asterisk"></i></a><?php } ?><a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle">&nbsp;<?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
				<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><i class="fa fa-question-circle" rel="tooltip" data-placement="right" data-original-title="<?php echo ((isset($this->_rootref['L_TOPICS_ROW_NOT_APPROVED'])) ? $this->_rootref['L_TOPICS_ROW_NOT_APPROVED'] : ((isset($user->lang['TOPICS_ROW_NOT_APPROVED'])) ? $user->lang['TOPICS_ROW_NOT_APPROVED'] : '{ TOPICS_ROW_NOT_APPROVED }')); ?>" title="<?php echo ((isset($this->_rootref['L_TOPICS_ROW_NOT_APPROVED'])) ? $this->_rootref['L_TOPICS_ROW_NOT_APPROVED'] : ((isset($user->lang['TOPICS_ROW_NOT_APPROVED'])) ? $user->lang['TOPICS_ROW_NOT_APPROVED'] : '{ TOPICS_ROW_NOT_APPROVED }')); ?>"></i></a><?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><i class="fa fa-exclamation-circle" rel="tooltip" data-placement="right" data-original-title="<?php echo ((isset($this->_rootref['L_TOPICS_ROW_REPORTED'])) ? $this->_rootref['L_TOPICS_ROW_REPORTED'] : ((isset($user->lang['TOPICS_ROW_REPORTED'])) ? $user->lang['TOPICS_ROW_REPORTED'] : '{ TOPICS_ROW_REPORTED }')); ?>" title="<?php echo ((isset($this->_rootref['L_TOPICS_ROW_REPORTED'])) ? $this->_rootref['L_TOPICS_ROW_REPORTED'] : ((isset($user->lang['TOPICS_ROW_REPORTED'])) ? $user->lang['TOPICS_ROW_REPORTED'] : '{ TOPICS_ROW_REPORTED }')); ?>"></i></a><?php } ?><br />
				<?php if ($_topicrow_val['PAGINATION']) {  ?><strong class="pagination"><span><?php echo $_topicrow_val['PAGINATION']; ?></span></strong><?php } if ($_topicrow_val['ATTACH_ICON_IMG']) {  ?><i class="fa fa-paper-clip fa-flip-horizontal" rel="tooltip" data-placement="top" data-original-title="<?php echo ((isset($this->_rootref['L_ATTACH_FORUM'])) ? $this->_rootref['L_ATTACH_FORUM'] : ((isset($user->lang['ATTACH_FORUM'])) ? $user->lang['ATTACH_FORUM'] : '{ ATTACH_FORUM }')); ?>"></i><?php } ?>

				<?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> <small><?php echo $_topicrow_val['FIRST_POST_TIME']; ?></small>
			</td>
			<td class="center">
			 <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?>&nbsp;<?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

			 <?php if (! $this->_rootref['S_IS_BOT']) {  ?><a rel="tooltip" data-placement="right" data-original-title="<?php echo ((isset($this->_rootref['L_FORUMLIST_LASTPOST'])) ? $this->_rootref['L_FORUMLIST_LASTPOST'] : ((isset($user->lang['FORUMLIST_LASTPOST'])) ? $user->lang['FORUMLIST_LASTPOST'] : '{ FORUMLIST_LASTPOST }')); ?>" href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><i class="fa fa-sign-out"></i></a><?php } ?>

			 <br /><small>&nbsp;<?php echo $_topicrow_val['LAST_POST_TIME']; ?></small>
			</td>
			<?php } ?>

			<td class="table-check"><div class="checker"><input type="checkbox" name="t[<?php echo $_topicrow_val['TOPIC_ID']; ?>]" id="t<?php echo $_topicrow_val['TOPIC_ID']; ?>"><label for="t<?php echo $_topicrow_val['TOPIC_ID']; ?>"></label></div></td>
		</tr>
	<?php }} ?>

	</tbody>
 </table>
 </div>
</div>
	
	<div class="table_options">
            <div class="pull-left">
                <div class="btn-group">
				    <?php if (sizeof($this->_tpldata['topicrow']) && ! $this->_rootref['S_NO_DISPLAY_BOOKMARKS']) {  ?>

                    <div class="dropup">
                        <button href="#" data-toggle="dropdown" class="btn btn-default" data-original-title="" title=""><i class="fa fa-check-square-o"></i> <span class="caret"></span></button>
						 <ul class="dropdown-menu">
                            <li><a href="#" onclick="marklist('ucp', '', true); return false;" data-original-title="" title=""><i class="fa fa-check-square-o"></i><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a></li>
                            <li><a href="#" onclick="marklist('ucp', '', false); return false;" data-original-title="" title=""><i class="fa fa-square-o"></i><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></li>
                          </ul> 
				    <button class="btn btn-default" type="submit" name="unbookmark" data-original-title="<?php echo ((isset($this->_rootref['L_REMOVE_BOOKMARK_MARKED'])) ? $this->_rootref['L_REMOVE_BOOKMARK_MARKED'] : ((isset($user->lang['REMOVE_BOOKMARK_MARKED'])) ? $user->lang['REMOVE_BOOKMARK_MARKED'] : '{ REMOVE_BOOKMARK_MARKED }')); ?>" title="<?php echo ((isset($this->_rootref['L_REMOVE_BOOKMARK_MARKED'])) ? $this->_rootref['L_REMOVE_BOOKMARK_MARKED'] : ((isset($user->lang['REMOVE_BOOKMARK_MARKED'])) ? $user->lang['REMOVE_BOOKMARK_MARKED'] : '{ REMOVE_BOOKMARK_MARKED }')); ?>"><i class="fa fa-bookmark"></i></button>
				   </div>
                        <?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

                    <?php } ?>		  
		        </div> 
           </div>
          <div class="pull-right">
               <ul class="pagination pagination-sm">
	             <li class="active"><a><?php if ($this->_rootref['TOTAL_TOPICS']) {  ?> <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> <?php } ?></a></li>
	             <li><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li>
				 <?php if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?><a><li><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li><?php } } ?>

	           </ul>    
         </div>
    </div>
	
<?php } else { ?>

	<div class="alert alert-info fade in">
        <button data-dismiss="alert" class="close" type="button" aria-hidden="true"><i class="awe-remove-circle"></i></button>
        <?php echo ((isset($this->_rootref['L_NO_BOOKMARKS'])) ? $this->_rootref['L_NO_BOOKMARKS'] : ((isset($user->lang['NO_BOOKMARKS'])) ? $user->lang['NO_BOOKMARKS'] : '{ NO_BOOKMARKS }')); ?>

    </div> 
<?php } } ?>

</div>
</form>
<?php $this->_tpl_include('ucp_footer.html'); ?>