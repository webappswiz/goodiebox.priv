<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	
	<meta name="description" content="Meglepetés csomag kutyusodnak minden hónapban | Goodiebox is a box of quality treats and toys for your puppy every month"/>
	<meta name="keywords" content="goodiebox,dog treats, pet toys" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
    <!-- jQuery and Modernizr-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>

	<!-- Countdown timer and other animations -->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.plugin.js"></script> 
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.countdown.js"></script>
	
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.countdown-hu.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    

<script>
  $(document).ready(function(){


	/* ---- Countdown timer ---- */

	$('#counter').countdown({
		timestamp : (new Date("6 August 2014 18:00")).getTime() + 30*24*60*60*1000,
		
		/*language: <?php echo "'".(($_GET['lang'] == 'hu') ?  "hu" :  "eng")."'"; ?>*/
		language: 'eng'
	});
	
});
</script>
 <!-- Facebook Conversion Code for Goodiebox Prelaunch -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6014782475522', {'value':'0.00','currency':'GBP'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6014782475522&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>   


</head>

<body <?php body_class(); ?>>
<script>

window.fbAsyncInit = function(){
FB.init({
    appId: '764361780253904', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: 'http://goodiebox.hu', picture: 'http://goodiebox.hu/logo.jpg',name: 'Goodiebox',description: 'Monthly subscription box for your dog.'};
function callback(response){}
FB.ui(obj, callback);
}
</script>

<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
          <div class="header-left">
		    <h1 class="logo">
              <a href="http://blog.goodiebox.hu"></a>
            </h1>
            <h2 class="site-description">Monthly surprise box of quality treats 'n toys for your dog</h2>
          </div>
			
			<div class="header-right">
            
            <div class="flags">
            <ul>
						
						<li class="hu"><a href="/home/"></a></li>
                        <li class="eng"><a href="/home-en/"></a></li>
						
			</ul>
            </div>
                   
				<div class="socials">
                
                
					<ul>
						
							
						 <li class="twt"><a class="twitter popup" href="http://twitter.com/share">Tweet</a></li>
                      <!-- <li class="fb"><a href="https://twitter.com/goodieboxhu"></a></li> -->
                      <li class="fb"><a href="http://goodiebox.hu/home-eng/" data-title="Goodie" data-desc="Goodie" class="btnShare">Share</a></li>
						
					</ul>
                   
				</div>
                </div>


<script>                        
				$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});
</script>

<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>

		
	</header><!-- #masthead -->

	<div id="main" class="site-main">