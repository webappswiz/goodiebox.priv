<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= URL::title($title); ?></title>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <?php
        foreach (Media::styles() as $file => $type) {
            echo HTML::style($file, array('media' => $type)), PHP_EOL;
        }
        echo Media::inline_style();
        ?>
        <script>
            var url_base = '<?php echo URL::base(true, true) ?>';
        </script>
        <?php
        foreach (Media::scripts() as $file) {
            echo HTML::script($file), PHP_EOL;
        }
        echo Media::inline_script();
        ?>
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
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="<?= URL::base(TRUE, FALSE) ?>"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/logo.png" alt="goodybox"></a>
            </div> <!--End logo-->
            <div class="social-right">
                <ul>
                    <li><a href="<?= URL::base(TRUE, FALSE) ?>" class="btnShare" data-title="Goodie" data-desc="Goodie"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/facebook-btn.jpg" alt="facebook"></a></li>
                    <li><a class="popup"  href="http://twitter.com/share"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/twitter-btn.jpg" alt="twitter"></a></li>
                    <li><a href="#">
                            <a href="<?= URL::base(TRUE, FALSE) ?>order/gift"><button type="button" class="top-btn rounded">Ajándékbeváltás</button></a>
                        </a></li>
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