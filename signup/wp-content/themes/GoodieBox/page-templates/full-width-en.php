<?php
/**
 * Template Name: Full Width Page EN
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('eng'); ?>

<div id="main-content" class="main-content">

	
    
    
    <!-- div class="counter-label"><?php _e( 'Coming soon', 'twentyfourteen' ); ?></div -->
        
    <div id="counter">
    
    </div>
<?php add_thickbox(); ?>
    <div class="home-form">
      <div class="form-arrow"></div>
      
      <form action="//goodiebox.us8.list-manage.com/subscribe/post?u=0481e8979e818e1a5a8f138a7&amp;id=9598ad60d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      
  <label><?php _e( 'If you would like to know more', 'twentyfourteen' ); ?></label>
  <input type="email" pattern="[^ @]*@[^ @]*" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php _e( 'type your email address here...', 'twentyfourteen' ); ?>" required>
  
			<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_0481e8979e818e1a5a8f138a7_9598ad60d9" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			
 <a href="#TB_inline?width=600&height=150&inlineId=mce-responses" class="thickbox" id="th_link" style="display:none;">View my inline content!</a>
            
   </form>
    
    </div>


</div><!-- #main-content -->

<!--<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/mc-validate-en.js'></script>

<script>
function my() { 
 $("#th_link").trigger('click');
 $(".form-arrow").hide();
 $(".home-form form").hide();
 
}

window.mc.ajaxOptions = { 
		url: mc.getAjaxSubmitUrl(), 
		type: 'GET', 
		dataType: 'json', 
		contentType: "application/json; charset=utf-8",
		// success: function(){ window.mc.mce_success_cb; $("#th_link").hide();}
		success: function(resp) {window.mc.mce_success_cb(resp); my(); }
	};

console.log(resp);
</script>

<script type='text/javascript'>
(function($) {
window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';
/*
 * Translated default messages for the $ validation plugin.
 * Locale: EN
 */
$.extend($.validator.messages, {
	required: "Required",
	maxlength: $.validator.format("No more than {0} characters long."),
	minlength: $.validator.format("At least {0} characters long."),
	rangelength: $.validator.format("At least no more than {0} and {1} characters long."),
	email: "Must be a valid email address.",
	url: "Must be a valid URL.",
	date: "Must be a date.",
	number: "Must be a number.",
	digits: "Can only be digits",
	equalTo: "These two values ??must be the same.",
	range: $.validator.format("Must be between {0} and {1} in Hungary."),
	max: $.validator.format("This can not be greater than {0}"),
	min: $.validator.format("Cannot be less than {0}."),
	creditcard: "Must have a valid credit card number."
});

}(jQuery));
var $mcj = jQuery.noConflict(true);




</script>

<?php
get_footer('home');
?>
