<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thank you</title>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <link href="<?= URL::base(TRUE, FALSE) ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script type="text/javascript" src="<?= URL::base(TRUE, FALSE) ?>assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?= URL::base(TRUE, FALSE) ?>assets/js/jquery.faq.js"></script>
        <script type="text/javascript" src="<?= URL::base(TRUE, FALSE) ?>assets/js/jquery.quicksilver.js"></script>
        <script type="text/javascript" src="<?= URL::base(TRUE, FALSE) ?>assets/js/ui_lib.js"></script>
        <script type="text/javascript" src="<?= URL::base(TRUE, FALSE) ?>assets/js/jquery.validate.min.js"></script>
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
            var obj = {method: 'feed', link: 'http://blog.goodiebox.hu', picture: 'http://blog.goodiebox.hu/logo.jpg', name: 'Goodiebox', description: 'Meglepet&#233;s csomag kutyusodnak minden h&oacute;napban'};
            function callback(response) {
            }
            FB.ui(obj, callback);
        }
    </script>
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
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/logo.png" alt="goodybox">
            </div> <!--End logo-->
            <div class="social-right">
                <ul>
                    <li><a href="<?= URL::base(TRUE, FALSE) ?>" class="btnShare" data-title="Goodie" data-desc="Goodie"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/facebook-btn.jpg" alt="facebook"></a></li>
                    <li><a class="popup"  href="http://twitter.com/share"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/twitter-btn.jpg" alt="twitter"></a></li>
                    <li><a href="#">
                            <a href="<?= URL::base(TRUE, FALSE) ?>order/gift"><button type="button" class="top-btn rounded">Ajándékbeváltás</button></a>
                        </a></li>
                </ul>
            </div> <!--End social-right-->
        </header>
        <div class="clear"></div>

        <nav>
            <ul>
                <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
            </ul>
        </nav>
        <div class="clear"></div>
        <section class="thanku" class="rounded">
            <h1>Köszönjük a rendelését!</h1>
            <h2>E-mail címére visszaigazolást küldtünk.</h2>
            <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/bark.jpg" alt="Thank you">
        </section>
    </div> <!--End container-->
    <div class="clear"></div>
    <div id="footer-wrapper" class="rounded">
        <footer>
            <ul>
                <li id="post"><a href="#">1053 Budapest </br>Kossuth L. u. 7-9.</a></li>
                <li id="telephone"><a href="#">+36 30 500 6785</a></li>
                <li id="email"><a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></li>
                <li id="rss"><a href="#">RSS</a></li>
                <li id="fb"><a href="http://facebook.com/goodieboxhu">facebook.com/goodieboxhu</a></li>
                <li id="twt"><a href="http://twitter.com/godieboxhu">twitter.com/godieboxhu</a></li>
                <li id="aszf"><a href="#">ÁSZF</a></li>
                <li id="adat"><a href="#">Adatvédelem</a></li>
            </ul>
            <div class="clear"></div>
            <div class="copy-write">
                <p>Copyright 2014 | www.goodiebox.hu</p>
                <p>Design by eszteradejuwondesign</p>
            </div>
        </footer>
    </div> <!--End footer wrapper-->
</body>
</html>