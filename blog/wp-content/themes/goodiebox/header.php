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

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
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
        window._fbq.push(['track', '6014782475522', {'value': '0.00', 'currency': 'GBP'}]);
    </script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6014782475522&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>

<script>

    window.fbAsyncInit = function() {
        FB.init({
            appId: '764361780253904', status: true, cookie: true, xfbml: true});
    };
    (function(d, debug) {
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
        ref.parentNode.insertBefore(js, ref);
    }(document, /*debug*/ false));
    function postToFeed(title, desc, url, image) {
        var obj = {method: 'feed', link: 'http://blog.goodiebox.hu', picture: 'http://blog.goodiebox.hu/logo.png', name: 'Goodiebox', description: 'Meglepet&#233;s csomag kutyusodnak minden h&oacute;napban'};
        function callback(response) {
        }
        FB.ui(obj, callback);
    }
</script>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"JajCk1a4eFf24B", domain:"goodiebox.hu",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=JajCk1a4eFf24B" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  

<?php wp_head(); ?>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="goodybox"></a>
            </div> <!--End logo-->
            <div class="social-right">
                <ul>
                    <li style="text-align:center">
                    <a href="<?php the_permalink(); ?>" class="btnShare" data-title="Goodie" data-desc="Goodie"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-btn.jpg" width="32" height="32" alt="facebook"></a>
                        <a class="popup"  href="http://twitter.com/share"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-btn.jpg" width="32" height="32" alt="twitter"></a>
                        <a href="https://instagram.com/goodieboxhu" data-title="Goodie" data-desc="Goodie" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.jpg" width="30" height="30" alt="facebook"></a>
                    </li>
                    <li><!-- a href="#">
                            <a href="#"><button type="button" class="top-btn rounded">Ajándékbeváltás</button></a>
                        </a -->
						<script src="https://apis.google.com/js/platform.js"></script>

<script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>

<div class="g-ytsubscribe" data-channelid="UCAnqUKt9dkY7Tw2kndO9JAA" data-layout="default" data-theme="dark" data-count="default" data-onytevent="onYtEvent"></div></li>
                </ul>
                <script>
                    $('.btnShare').click(function() {
                        elem = $(this);
                        postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

                        return false;
                    });
                </script>

                <script>
                    $('.popup').click(function(event) {
                        var width = 575,
                                height = 400,
                                left = ($(window).width() - width) / 2,
                                top = ($(window).height() - height) / 2,
                                url = this.href,
                                opts = 'status=1' +
                                ',width=' + width +
                                ',height=' + height +
                                ',top=' + top +
                                ',left=' + left;

                        window.open(url, 'twitter', opts);

                        return false;
                    });
                </script>
            </div> <!--End social-right-->
        </header>
        <div class="clear"></div>
        <nav class="nav-right">
            <ul>
                <li><a href="http://goodiebox.hu" >Főoldal</a></li>
                <li><a href="http://goodiebox.hu/hogyan/" >Hogyan működik?</a></li>
                <li><a href="http://goodiebox.hu/kutyusaink" >Kutyusaink</a></li>
                <li><a class="selected">Blog</a></li>
                <li><a href="http://goodiebox.hu/gyik" >GYIK</a></li>
                <li><a href="http://goodiebox.hu/kapcsolat" >Kapcsolat</a></li>
				<li><a href="http://goodiebox.hu/media" >Média</a></li>
				<li><a href="http://goodiebox.hu/partnerek" >Partnereink</a></li>
                <li><a href="http://goodiebox.hu/user_session/login" >Belépés</a></li>
            </ul>
        </nav>
        <div id="flash_message"></div><div class="clear"></div>
