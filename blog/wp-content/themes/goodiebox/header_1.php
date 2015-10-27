<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Goodiebox
 * @since Goodiebox 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php echo get_bloginfo('name'); ?></title>
	<meta charset="utf-8">
	 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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

<script>

window.fbAsyncInit = function(){
FB.init({
    appId: '764361780253904', status: true, cookie: true, xfbml: true });
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: 'http://blog.goodiebox.hu', picture: 'http://goodiebox.hu/logo.jpg',name: 'Goodiebox',description: 'Monthly subscription box for your dog.'};
function callback(response){}
FB.ui(obj, callback);
}
</script>

<?php wp_head(); ?>
</head>
<body>
		<div class="container">
			<header>
				<div class="logo">
                                    <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="goodybox"></a>
				</div> <!--End logo-->
				<div class="social-right">
					<ul>
                                            <li><a href="<?php the_permalink();?>" class="btnShare" data-title="Goodie" data-desc="Goodie"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-btn.jpg" alt="facebook"></a></li>
						<li><a class="popup"  href="http://twitter.com/share"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-btn.jpg" alt="twitter"></a></li>
						<li><a href="#">
							<button type="button" class="top-btn rounded">Ajándékbeváltás</button>
						</a></li>
					</ul>
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
				</div> <!--End social-right-->
			</header>
				<div class="clear"></div>
			<nav class="nav-right">
				<ul>
					<li><a href="/">Főoldal</a></li>
					<li><a href="/">Hogyan működik</a></li>
					<li><a href="/">Támogass TE is</a></li>
					<li><a class="selected">Blog</a></li>
					<li><a href="/">GYIK</a></li>
					<li><a href="/">Kapcsolat</a></li>
				</ul>
			</nav>
			<div class="clear"></div>