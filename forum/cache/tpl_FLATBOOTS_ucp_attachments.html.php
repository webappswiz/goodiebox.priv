<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>

<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
<div class="tab-pane active">
<div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h3></div>
	<p><?php echo ((isset($this->_rootref['L_ATTACHMENTS_EXPLAIN'])) ? $this->_rootref['L_ATTACHMENTS_EXPLAIN'] : ((isset($user->lang['ATTACHMENTS_EXPLAIN'])) ? $user->lang['ATTACHMENTS_EXPLAIN'] : '{ ATTACHMENTS_EXPLAIN }')); ?></p>
	<?php if (sizeof($this->_tpldata['attachrow'])) {  ?>

		<div class="pull-right">
            <ul class="pagination pagination-sm">
	         <?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a></li><?php } if ($this->_rootref['TOTAL_ATTACHMENTS']) {  ?><li class="active"><a><?php echo (isset($this->_rootref['TOTAL_ATTACHMENTS'])) ? $this->_rootref['TOTAL_ATTACHMENTS'] : ''; ?> <?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></a></li><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?><li><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li> <?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?> <li><a><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li><?php } } if ($this->_rootref['NEXT_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a></li><?php } ?>

	        </ul>	
	    </div>
		
		<div class="space10"></div>
<div class="panel panel-forum">
	<div class="panel-heading">
	 <i class="fa fa-paperclip"></i> <?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>

	</div>
	<div class="panel-inner">
	<table class="footable table table-striped table-primary table-hover">
	<thead>
		<tr>
			<th data-class="expand"><i class="fa fa-sort-alpha-desc"></i><a href="<?php echo (isset($this->_rootref['U_SORT_FILENAME'])) ? $this->_rootref['U_SORT_FILENAME'] : ''; ?>"> <?php echo ((isset($this->_rootref['L_FILENAME'])) ? $this->_rootref['L_FILENAME'] : ((isset($user->lang['FILENAME'])) ? $user->lang['FILENAME'] : '{ FILENAME }')); ?></a></th>
			<th data-hide="phone"><i class="fa fa-sort-alpha-desc"></i><a href="<?php echo (isset($this->_rootref['U_SORT_DOWNLOADS'])) ? $this->_rootref['U_SORT_DOWNLOADS'] : ''; ?>"> <?php echo ((isset($this->_rootref['L_DOWNLOADS'])) ? $this->_rootref['L_DOWNLOADS'] : ((isset($user->lang['DOWNLOADS'])) ? $user->lang['DOWNLOADS'] : '{ DOWNLOADS }')); ?></a></th>
			<th class="large26" data-hide="phone"><i class="fa fa-sort-alpha-desc"></i><a href="<?php echo (isset($this->_rootref['U_SORT_POST_TIME'])) ? $this->_rootref['U_SORT_POST_TIME'] : ''; ?>"> <?php echo ((isset($this->_rootref['L_POST_TIME'])) ? $this->_rootref['L_POST_TIME'] : ((isset($user->lang['POST_TIME'])) ? $user->lang['POST_TIME'] : '{ POST_TIME }')); ?></a></th>
		    <th class="table-check"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th>
		</tr> 
	</thead>
	 <tbody>
		<?php $_attachrow_count = (isset($this->_tpldata['attachrow'])) ? sizeof($this->_tpldata['attachrow']) : 0;if ($_attachrow_count) {for ($_attachrow_i = 0; $_attachrow_i < $_attachrow_count; ++$_attachrow_i){$_attachrow_val = &$this->_tpldata['attachrow'][$_attachrow_i]; ?>

	    <tr>
		   <td>
	       <i class="fa fa-paperclip"></i> <a href="<?php echo $_attachrow_val['U_VIEW_ATTACHMENT']; ?>" class="topictitle"><?php echo $_attachrow_val['FILENAME']; ?></a> (<?php echo $_attachrow_val['SIZE']; ?>)<br />
		   <?php if ($_attachrow_val['S_IN_MESSAGE']) {  ?><i class="fa fa-envelope"></i> <?php echo ((isset($this->_rootref['L_PM'])) ? $this->_rootref['L_PM'] : ((isset($user->lang['PM'])) ? $user->lang['PM'] : '{ PM }')); ?>: <?php } else { echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>: <?php } ?> <a href="<?php echo $_attachrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_attachrow_val['TOPIC_TITLE']; ?></a>
		   </td>
		   <td class="center"><?php echo $_attachrow_val['DOWNLOAD_COUNT']; ?></td>
		   <td class="center"><small> <?php echo $_attachrow_val['POST_TIME']; ?></small> </td>
		   <td class="table-check"><div class="checker"><input type="checkbox" name="attachment[<?php echo $_attachrow_val['ATTACH_ID']; ?>]" id="attachment[<?php echo $_attachrow_val['ATTACH_ID']; ?>]"><label for="attachment[<?php echo $_attachrow_val['ATTACH_ID']; ?>]"></label></div></td>
		</tr>
		<?php }} ?>

	 </tbody>
	</table>
	</div>
</div>

	<?php } else { ?>

	<div class="alert alert-info fade in">
	  <button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>
	 <?php echo ((isset($this->_rootref['L_UCP_NO_ATTACHMENTS'])) ? $this->_rootref['L_UCP_NO_ATTACHMENTS'] : ((isset($user->lang['UCP_NO_ATTACHMENTS'])) ? $user->lang['UCP_NO_ATTACHMENTS'] : '{ UCP_NO_ATTACHMENTS }')); ?>

	</div>
	<?php } ?>

</div>

	<div class="clearfix">
            <div class="pull-left">
                <div class="btn-group">
				    <?php if ($this->_rootref['S_ATTACHMENT_ROWS']) {  ?>

                    <div class="dropup">
                        <button href="#" data-toggle="dropdown" class="btn btn-default" title=""><i class="fa fa-check-square-o"></i> <span class="caret"></span></button>
						 <ul class="dropdown-menu">
                            <li><a href="#" onclick="marklist('ucp', 'attachment', true); return false;" title=""><i class="fa fa-check-square-o"></i><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a></li>
                            <li><a href="#" onclick="marklist('ucp', 'attachment', false); return false;" title=""><i class="fa fa-square-o"></i><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></li>
                          </ul> 
				    <button class="btn btn-default" type="submit" name="delete" data-original-title="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>"><i class="fa fa-trash-o"></i></button>
				   </div>		       
                       <?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

                    <?php } ?>		  
		        </div> 
           </div>
   
        <div class="pull-right">
            <ul class="pagination pagination-sm">
			<li><a title="" data-original-title="" href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></a></li>
	         <?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a></li><?php } if ($this->_rootref['TOTAL_ATTACHMENTS']) {  ?><li class="active"><a><?php echo (isset($this->_rootref['TOTAL_ATTACHMENTS'])) ? $this->_rootref['TOTAL_ATTACHMENTS'] : ''; ?> <?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></a></li><?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?><li><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li> <?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; } else { ?> <li><a><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a></li><?php } } if ($this->_rootref['NEXT_PAGE']) {  ?><li><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a></li><?php } ?>

	        </ul>
	    </div>
   </div>
   
  <div class="space10"></div> 
  
  
  
<div class="hidden-xs">
<div class="row">
	<fieldset class="controls-row">
                    <div class="sorting collapse">
					 <div class="panel panel-default">
					  <div class="panel-body">
                        <div class="col-md-12 col-sm-12">
				
						<div class="col-md-4 col-sm-4"> 
                         <label for="bday_day"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?>:</label>
                            <div class="control-row">
                              <select class="selectpicker" data-container="body" data-width="auto" name="sk" id="sk"><?php echo (isset($this->_rootref['S_SORT_OPTIONS'])) ? $this->_rootref['S_SORT_OPTIONS'] : ''; ?></select>
                            </div>
						</div>
	 			
						<div class="col-md-4 col-sm-4"> 
                           <label for="bday_day"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?>:</label>
                            <div class="control-row">
							<div class="input-group">
                              <select class="selectpicker" data-container="body" data-width="auto" data-style="btn btn-default form-control" name="sd" id="sd"><?php echo (isset($this->_rootref['S_ORDER_SELECT'])) ? $this->_rootref['S_ORDER_SELECT'] : ''; ?></select>
							 <span class="input-group-btn">
                              <button type="submit" name="sort" class="btn btn-default"><?php echo ((isset($this->_rootref['L_SORT'])) ? $this->_rootref['L_SORT'] : ((isset($user->lang['SORT'])) ? $user->lang['SORT'] : '{ SORT }')); ?></button>
							</span>
							</div>
						    </div>   
						</div>
	              
                        </div>
                      </div>
					 </div>
					</div>
            <!-- // Widget --> 
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</fieldset> 
</div>
</div>

</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>