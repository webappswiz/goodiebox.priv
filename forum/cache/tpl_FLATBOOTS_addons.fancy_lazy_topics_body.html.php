<?php if (!defined('IN_PHPBB')) exit; if (sizeof($this->_tpldata['rtrow'])) {  $_rtrow_count = (isset($this->_tpldata['rtrow'])) ? sizeof($this->_tpldata['rtrow']) : 0;if ($_rtrow_count) {for ($_rtrow_i = 0; $_rtrow_i < $_rtrow_count; ++$_rtrow_i){$_rtrow_val = &$this->_tpldata['rtrow'][$_rtrow_i]; if ($_rtrow_val['S_COUNT'] != 0 && $_rtrow_val['S_NEW_BLOCK']) {  ?></div><?php } if ($_rtrow_val['S_NEW_BLOCK']) {  ?><div id="rtblock_<?php echo $_rtrow_val['S_BLOCK']; ?>" class="rtrow row text-center<?php if ($_rtrow_val['S_COUNT'] == 0) {  ?> rtdisprow<?php } ?>"><?php } ?>
		<div class="col-md-3 col-sm-6">
			<div class="panel panel-post">
				<div class="blog-meta">
				 <time datetime="<?php echo $_rtrow_val['TOPIC_YEAR']; ?>-<?php echo $_rtrow_val['TOPIC_MONTH_DIGIT']; ?>-<?php echo $_rtrow_val['TOPIC_DAY_DIGIT']; ?>" class="entry-date">
					<span class="day"><?php echo $_rtrow_val['TOPIC_DAY_DIGIT']; ?></span>
					<span class="month"><?php echo $_rtrow_val['TOPIC_MONTH']; ?></span>
				 </time>
				</div>
				<div class="title">
				 <header class="entry-header">
				  <h6 class="inverse-font"><a href="<?php echo $_rtrow_val['U_TOPIC']; ?>"><?php echo $_rtrow_val['TOPIC_TITLE']; ?></a></h6>
					<div class="entry-meta">
					 <span class="jp-views">&nbsp;-&nbsp;<?php echo ((isset($this->_rootref['L_BY'])) ? $this->_rootref['L_BY'] : ((isset($user->lang['BY'])) ? $user->lang['BY'] : '{ BY }')); ?>&nbsp;<?php echo $_rtrow_val['TOPIC_AUTHOR']; ?></span>
					</div>
				 </header>
			    </div>
				<div class="content-post">
				  <p><?php echo $_rtrow_val['FP_EXCERPT']; ?></p>  
				</div>
				<div class="panel-bottom">
				 <a href="<?php echo $_rtrow_val['U_LAST_POST']; ?>" class="btn btn-xs btn-link" title=""><?php echo ((isset($this->_rootref['L_RT_READ_MORE'])) ? $this->_rootref['L_RT_READ_MORE'] : ((isset($user->lang['RT_READ_MORE'])) ? $user->lang['RT_READ_MORE'] : '{ RT_READ_MORE }')); ?></a>
				</div>               
			</div>
		</div>
	<?php }} ?>
	</div>
	<?php if (! $this->_rootref['S_ONE_ROW']) {  ?>
	<div id="rtbtnrow" class="row text-center">
	<div class="col-md-12">
      <button id="rtbutton" class="btn btn-default btn-block btn-lazy"><?php echo ((isset($this->_rootref['L_VIEW_MORE_TOPICS'])) ? $this->_rootref['L_VIEW_MORE_TOPICS'] : ((isset($user->lang['VIEW_MORE_TOPICS'])) ? $user->lang['VIEW_MORE_TOPICS'] : '{ VIEW_MORE_TOPICS }')); ?></button>
    </div>
	</div>
	<?php } } ?>