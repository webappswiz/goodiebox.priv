<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<script>
	onload_functions.push('document.getElementById("keywords").focus();');
</script>

  <div class="side-segment"><h3><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></h3></div>

<form class="" role="form" method="get" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
 <div class="well">
	<h3><?php echo ((isset($this->_rootref['L_SEARCH_QUERY'])) ? $this->_rootref['L_SEARCH_QUERY'] : ((isset($user->lang['SEARCH_QUERY'])) ? $user->lang['SEARCH_QUERY'] : '{ SEARCH_QUERY }')); ?></h3>
  <fieldset>
	<div class="form-group">
		 <label class="control-label" for="keywords"><?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS_EXPLAIN'])) ? $this->_rootref['L_SEARCH_KEYWORDS_EXPLAIN'] : ((isset($user->lang['SEARCH_KEYWORDS_EXPLAIN'])) ? $user->lang['SEARCH_KEYWORDS_EXPLAIN'] : '{ SEARCH_KEYWORDS_EXPLAIN }')); ?></span>
          <div class="input-group">
	        <span class="input-group-addon"><i class="fa fa-search"></i></span>
		    <input class="form-control input-sm" type="text" placeholder="Ex:attachment|inline" name="keywords" id="keywords" title="<?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>"/>
		  </div> 
	</div>
	<div class="form-group">
	  <input type="radio" checked="checked" name="terms" id="terms1" value="all"><label class="checkbox-inline" for="terms1"><?php echo ((isset($this->_rootref['L_SEARCH_ALL_TERMS'])) ? $this->_rootref['L_SEARCH_ALL_TERMS'] : ((isset($user->lang['SEARCH_ALL_TERMS'])) ? $user->lang['SEARCH_ALL_TERMS'] : '{ SEARCH_ALL_TERMS }')); ?></label>
	  <input type="radio" name="terms" id="terms2" value="any"><label class="checkbox-inline" for="terms2"><?php echo ((isset($this->_rootref['L_SEARCH_ANY_TERMS'])) ? $this->_rootref['L_SEARCH_ANY_TERMS'] : ((isset($user->lang['SEARCH_ANY_TERMS'])) ? $user->lang['SEARCH_ANY_TERMS'] : '{ SEARCH_ANY_TERMS }')); ?></label>
	 <div class="control-group"></div>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="author"><?php echo ((isset($this->_rootref['L_SEARCH_AUTHOR'])) ? $this->_rootref['L_SEARCH_AUTHOR'] : ((isset($user->lang['SEARCH_AUTHOR'])) ? $user->lang['SEARCH_AUTHOR'] : '{ SEARCH_AUTHOR }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_SEARCH_AUTHOR_EXPLAIN'])) ? $this->_rootref['L_SEARCH_AUTHOR_EXPLAIN'] : ((isset($user->lang['SEARCH_AUTHOR_EXPLAIN'])) ? $user->lang['SEARCH_AUTHOR_EXPLAIN'] : '{ SEARCH_AUTHOR_EXPLAIN }')); ?></span>
         <div class="input-group">
	       <span class="input-group-addon"><i class="fa fa-user"></i></span>
		   <input class="form-control input-sm" type="text" placeholder="Ex:sitesplat" name="author" id="author" title="<?php echo ((isset($this->_rootref['L_SEARCH_AUTHOR'])) ? $this->_rootref['L_SEARCH_AUTHOR'] : ((isset($user->lang['SEARCH_AUTHOR'])) ? $user->lang['SEARCH_AUTHOR'] : '{ SEARCH_AUTHOR }')); ?>"/>
		</div> 
	</div>
  </fieldset>
 </div>


<div class="well">
	<h3><?php echo ((isset($this->_rootref['L_SEARCH_OPTIONS'])) ? $this->_rootref['L_SEARCH_OPTIONS'] : ((isset($user->lang['SEARCH_OPTIONS'])) ? $user->lang['SEARCH_OPTIONS'] : '{ SEARCH_OPTIONS }')); ?></h3>

	<fieldset>
	<div class="form-group">
	   <label class="control-label" for="search_forum"><?php echo ((isset($this->_rootref['L_SEARCH_FORUMS'])) ? $this->_rootref['L_SEARCH_FORUMS'] : ((isset($user->lang['SEARCH_FORUMS'])) ? $user->lang['SEARCH_FORUMS'] : '{ SEARCH_FORUMS }')); ?>:</label><span class="help-block"><?php echo ((isset($this->_rootref['L_SEARCH_FORUMS_EXPLAIN'])) ? $this->_rootref['L_SEARCH_FORUMS_EXPLAIN'] : ((isset($user->lang['SEARCH_FORUMS_EXPLAIN'])) ? $user->lang['SEARCH_FORUMS_EXPLAIN'] : '{ SEARCH_FORUMS_EXPLAIN }')); ?></span>
       <select class="selectpicker" data-container="body" data-selected-text-format="count" name="fid[]" id="search_forum" multiple="multiple" size="8" title="<?php echo ((isset($this->_rootref['L_SEARCH_FORUMS'])) ? $this->_rootref['L_SEARCH_FORUMS'] : ((isset($user->lang['SEARCH_FORUMS'])) ? $user->lang['SEARCH_FORUMS'] : '{ SEARCH_FORUMS }')); ?>"><?php echo (isset($this->_rootref['S_FORUM_OPTIONS'])) ? $this->_rootref['S_FORUM_OPTIONS'] : ''; ?></select>
     <div class="control-group"></div>
	</div>
	
	<div class="form-group">
	 <label class="control-label" for="search_child1"><?php echo ((isset($this->_rootref['L_SEARCH_SUBFORUMS'])) ? $this->_rootref['L_SEARCH_SUBFORUMS'] : ((isset($user->lang['SEARCH_SUBFORUMS'])) ? $user->lang['SEARCH_SUBFORUMS'] : '{ SEARCH_SUBFORUMS }')); ?>:</label>
      <input type="radio" checked="checked" name="sc" id="search_child1" value="1"><label class="radio-inline" for="search_child1"><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
	  <input type="radio" name="sc" id="search_child2" value="0"><label class="radio-inline" for="search_child2"><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
	<div class="control-group"></div>
	</div>
	
	<div class="form-group">
	   <label class="control-label" for="sf1"><?php echo ((isset($this->_rootref['L_SEARCH_WITHIN'])) ? $this->_rootref['L_SEARCH_WITHIN'] : ((isset($user->lang['SEARCH_WITHIN'])) ? $user->lang['SEARCH_WITHIN'] : '{ SEARCH_WITHIN }')); ?>:</label>
     <input type="radio" checked="checked" name="sf" id="sf1" value="all"><label class="radio-inline" for="sf1"><?php echo ((isset($this->_rootref['L_SEARCH_TITLE_MSG'])) ? $this->_rootref['L_SEARCH_TITLE_MSG'] : ((isset($user->lang['SEARCH_TITLE_MSG'])) ? $user->lang['SEARCH_TITLE_MSG'] : '{ SEARCH_TITLE_MSG }')); ?></label>
	 <input type="radio" name="sf" id="sf2" value="msgonly"><label class="radio-inline" for="sf2"><?php echo ((isset($this->_rootref['L_SEARCH_MSG_ONLY'])) ? $this->_rootref['L_SEARCH_MSG_ONLY'] : ((isset($user->lang['SEARCH_MSG_ONLY'])) ? $user->lang['SEARCH_MSG_ONLY'] : '{ SEARCH_MSG_ONLY }')); ?></label>
	 <input type="radio" name="sf" id="sf3" value="titleonly"><label class="radio-inline" for="sf3"><?php echo ((isset($this->_rootref['L_SEARCH_TITLE_ONLY'])) ? $this->_rootref['L_SEARCH_TITLE_ONLY'] : ((isset($user->lang['SEARCH_TITLE_ONLY'])) ? $user->lang['SEARCH_TITLE_ONLY'] : '{ SEARCH_TITLE_ONLY }')); ?></label>
	 <input type="radio" name="sf" id="sf4" value="firstpost"><label class="radio-inline" for="sf4"><?php echo ((isset($this->_rootref['L_SEARCH_FIRST_POST'])) ? $this->_rootref['L_SEARCH_FIRST_POST'] : ((isset($user->lang['SEARCH_FIRST_POST'])) ? $user->lang['SEARCH_FIRST_POST'] : '{ SEARCH_FIRST_POST }')); ?></label>
	<div class="control-group"></div>
	</div>
	
	<div class="form-group"> 
	   <label class="control-label" for="show_results1"><?php echo ((isset($this->_rootref['L_DISPLAY_RESULTS'])) ? $this->_rootref['L_DISPLAY_RESULTS'] : ((isset($user->lang['DISPLAY_RESULTS'])) ? $user->lang['DISPLAY_RESULTS'] : '{ DISPLAY_RESULTS }')); ?>:</label>
    <input type="radio" checked="checked" name="sr" id="show_results1" value="posts"><label class="radio-inline" for="show_results1"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></label>
	<input type="radio" name="sr" id="show_results2" value="topics"><label class="radio-inline" for="show_results2"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></label>
	<div class="control-group"></div>
	</div>
	
	<div class="form-group">
	   <label class="control-label" for="sort_result2"><?php echo ((isset($this->_rootref['L_RESULT_SORT'])) ? $this->_rootref['L_RESULT_SORT'] : ((isset($user->lang['RESULT_SORT'])) ? $user->lang['RESULT_SORT'] : '{ RESULT_SORT }')); ?>:</label>
	<div><?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></div> 
	 <div class="space10"></div>
	<input type="radio" name="sd" id="sa" value="a"> <label class="radio-inline" for="sa"><?php echo ((isset($this->_rootref['L_SORT_ASCENDING'])) ? $this->_rootref['L_SORT_ASCENDING'] : ((isset($user->lang['SORT_ASCENDING'])) ? $user->lang['SORT_ASCENDING'] : '{ SORT_ASCENDING }')); ?></label>
	<input type="radio" name="sd" id="sd" value="d" checked="checked"> <label class="radio-inline" for="sd"><?php echo ((isset($this->_rootref['L_SORT_DESCENDING'])) ? $this->_rootref['L_SORT_DESCENDING'] : ((isset($user->lang['SORT_DESCENDING'])) ? $user->lang['SORT_DESCENDING'] : '{ SORT_DESCENDING }')); ?></label>
	<div class="control-group"></div>
	</div>
	
	<div class="form-group">
	   <label class="control-label" for=""><?php echo ((isset($this->_rootref['L_RESULT_DAYS'])) ? $this->_rootref['L_RESULT_DAYS'] : ((isset($user->lang['RESULT_DAYS'])) ? $user->lang['RESULT_DAYS'] : '{ RESULT_DAYS }')); ?>:</label>
	<div><?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></div>
	<div class="control-group"></div>
	</div>
   
   
   <div class="form-group">
   <div class="row">
   <div class="col-md-3 col-sm-5 col-xs-6">
   <label class="control-label" for=""><?php echo ((isset($this->_rootref['L_RETURN_FIRST'])) ? $this->_rootref['L_RETURN_FIRST'] : ((isset($user->lang['RETURN_FIRST'])) ? $user->lang['RETURN_FIRST'] : '{ RETURN_FIRST }')); ?>:</label>
  <div class="input-group">
     <select class="selectpicker input-group-btn" data-container="body" data-width="120px" name="ch" title="<?php echo ((isset($this->_rootref['L_RETURN_FIRST'])) ? $this->_rootref['L_RETURN_FIRST'] : ((isset($user->lang['RETURN_FIRST'])) ? $user->lang['RETURN_FIRST'] : '{ RETURN_FIRST }')); ?>"><?php echo (isset($this->_rootref['S_CHARACTER_OPTIONS'])) ? $this->_rootref['S_CHARACTER_OPTIONS'] : ''; ?></select>
     <span class="input-group-addon"><?php echo ((isset($this->_rootref['L_POST_CHARACTERS'])) ? $this->_rootref['L_POST_CHARACTERS'] : ((isset($user->lang['POST_CHARACTERS'])) ? $user->lang['POST_CHARACTERS'] : '{ POST_CHARACTERS }')); ?></span>
   </div>
   </div>
   </div>
   </div>
   
  </fieldset>

</div>

	<fieldset class="form-actions">
		<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<button type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btn btn-default"><?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?></button>
		<button type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" class="btn btn-default" autocomplete="off" data-loading-text="<?php echo ((isset($this->_rootref['L_SEARCHING'])) ? $this->_rootref['L_SEARCHING'] : ((isset($user->lang['SEARCHING'])) ? $user->lang['SEARCHING'] : '{ SEARCHING }')); ?><i class='fa fa-spin fa-spinner fa-lg icon-white'></i>"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></button>
	</fieldset>
</form>
<div class="space10"></div>

<?php if (sizeof($this->_tpldata['recentsearch'])) {  ?>

<div class="panel panel-default">
	<table class="footable table table-striped table-bordered table-white table-primary table-hover">
	<thead>
	<tr>
		<th colspan="2" class="name"><?php echo ((isset($this->_rootref['L_RECENT_SEARCHES'])) ? $this->_rootref['L_RECENT_SEARCHES'] : ((isset($user->lang['RECENT_SEARCHES'])) ? $user->lang['RECENT_SEARCHES'] : '{ RECENT_SEARCHES }')); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $_recentsearch_count = (isset($this->_tpldata['recentsearch'])) ? sizeof($this->_tpldata['recentsearch']) : 0;if ($_recentsearch_count) {for ($_recentsearch_i = 0; $_recentsearch_i < $_recentsearch_count; ++$_recentsearch_i){$_recentsearch_val = &$this->_tpldata['recentsearch'][$_recentsearch_i]; ?>

		<tr>
			<td><a href="<?php echo $_recentsearch_val['U_KEYWORDS']; ?>"><?php echo $_recentsearch_val['KEYWORDS']; ?></a></td>
			<td class="active"><span>&nbsp;<?php echo $_recentsearch_val['TIME']; ?></span></td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td colspan="2"><?php echo ((isset($this->_rootref['L_NO_RECENT_SEARCHES'])) ? $this->_rootref['L_NO_RECENT_SEARCHES'] : ((isset($user->lang['NO_RECENT_SEARCHES'])) ? $user->lang['NO_RECENT_SEARCHES'] : '{ NO_RECENT_SEARCHES }')); ?></td>
		</tr>
	<?php } ?>

	</tbody>
	</table>
	</div>
<?php } $this->_tpl_include('overall_footer.html'); ?>