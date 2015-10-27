<?php
/**
 * Template Name: Full Width Page HU
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('home'); ?>

<div id="main-content" class="main-content">

	
    
    
    <!-- div class="counter-label"><?php _e( 'Hamarosan indulunk', 'twentyfourteen' ); ?></ -->
        
    <div id="counter">
    
    </div>
<?php add_thickbox(); ?>
    <div class="home-form">
      <div class="form-arrow"></div>
      
      <form action="//goodiebox.us8.list-manage.com/subscribe/post?u=0481e8979e818e1a5a8f138a7&amp;id=3ece715bed" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      
  <label><?php _e( 'Ha t&#246;bbet szeretn&#233;l tudni r&#243;la', 'twentyfourteen' ); ?></label>
  <input type="email" pattern="[^ @]*@[^ @]*" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php _e( '&#205;rd ide az e-mail c&#237;med...', 'twentyfourteen' ); ?>" required>
  
			<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_0481e8979e818e1a5a8f138a7_3ece715bed" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Feliratkozok" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			
 <a href="#TB_inline?width=600&height=100&inlineId=mce-responses" class="thickbox" id="th_link" style="display:none;">View my inline content!</a>
            
   </form>
    
    </div>


</div><!-- #main-content -->

<!--<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/mc-validate.js'></script>
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
 * Locale: HU
 */
$.extend($.validator.messages, {
	required: "K�telezo megadni.",
	maxlength: $.validator.format("Legfeljebb {0} karakter hossz� legyen."),
	minlength: $.validator.format("Legal�bb {0} karakter hossz� legyen."),
	rangelength: $.validator.format("Legal�bb {0} �s legfeljebb {1} karakter hossz� legyen."),
	email: "�rv�nyes e-mail c�mnek kell lennie.",
	url: "�rv�nyes URL-nek kell lennie.",
	date: "D�tumnak kell lennie.",
	number: "Sz�mnak kell lennie.",
	digits: "Csak sz�mjegyek lehetnek.",
	equalTo: "Meg kell egyeznie a k�t �rt�knek.",
	range: $.validator.format("{0} �s {1} k�z� kell esnie."),
	max: $.validator.format("Nem lehet nagyobb, mint {0}."),
	min: $.validator.format("Nem lehet kisebb, mint {0}."),
	creditcard: "�rv�nyes hitelk�rtyasz�mnak kell lennie.",
	remote: "K�rem jav�tsa ki ezt a mezot.",
	dateISO: "K�rem �rjon be egy �rv�nyes d�tumot (ISO)."
});

}(jQuery));
var $mcj = jQuery.noConflict(true);




</script>

<?php
get_footer('home');
?>
