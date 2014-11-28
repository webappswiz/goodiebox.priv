<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= URL::title($title); ?></title>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<meta name="p:domain_verify" content="b74aa75479f58d13024eabfe1419c0aa"/>
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
        <script>(function () {
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

        window.fbAsyncInit = function () {
            FB.init({
                appId: '764361780253904', status: true, cookie: true, xfbml: true});
        };
        (function (d, debug) {
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
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-53180118-1', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<script src="//load.sumome.com/" data-sumo-site-id="13f38ebb1d7ae2e9b0cf60d4e0fdd9eca282dd8682115a92cfe65269a474d136" async></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="<?= URL::base(TRUE, FALSE) ?>"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/logo.png" width="374" height="102" alt="goodybox"></a>
            </div> <!--End logo-->
            <div class="social-right">
                <ul>
                    <li style="text-align: center"><a href="<?= URL::base(TRUE, FALSE) ?>" class="btnShare" data-title="Goodie" data-desc="Goodie"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/facebook-btn.jpg" width="32" height="32" alt="facebook"></a>
                        <a class="popup"  href="http://twitter.com/share"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/twitter-btn.jpg" width="32" height="32" alt="twitter"></a>
                        <a href="https://instagram.com/goodieboxhu" data-title="Goodie" data-desc="Goodie" target="blank"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/instagram.jpg" width="30" height="30" alt="facebook"></a>
                    </li>
                    <li><a href="#">
                            <!-- <a href="<?= URL::base(TRUE, FALSE) ?>order/gift"> --> <a href="/order/?g"><button type="button" class="top-btn rounded">Ajándékbeváltás</button></a>
                        </a></li>
                </ul>
                <script>
                    $('.btnShare').click(function () {
                        elem = $(this);
                        postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

                        return false;
                    });
                </script>

               <script>
                    $('.popup').click(function (event) {
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
                <script type="text/javascript">
                $(document).ready(function(){
                    $('.greenbutton').on('mouseover',function(){
                        $('.greenbutton').stop();
                        $('.greenbutton').animate({left:'0px'},500);
                    });
                    $('.greenbutton').on('mouseout',function(){
                        $('.greenbutton').stop();
                        $('.greenbutton').animate({left:'-35px'},500);
                        
                    });
                });
                </script>
            </div> <!--End social-right-->
        </header>
        <div class="clear"></div>
        <?php
        if ($active_menu != 'home') {
            ?>
            <nav class="nav-right">
                <ul>
                    <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
                </ul>
            </nav>
            <?php
        }
        ?>
        <style type="text/css">
            .greenbutton {
                position: fixed;
                width: 70px;
                height: 190px;
                background-color:#009966;
                -moz-border-radius:0px 5px;
                -webkit-border-radius:0px 5px;
                border-radius:0px 5px 5px 0px;
                border:1px solid #18ab29;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                left:-35px;
                top:50%;
                font-family: 'FranklinGothic-Heavy';
                font-size:14px;
                line-height: 17px;
                text-decoration:none;
                text-align: left;
                padding-left: 20px;
                font-weight: 100;
                margin-top: -75px;
                margin-left: 0px;
            }
            .greenbutton:hover {
                background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #24c58f), color-stop(1, #44c767));
                background:-moz-linear-gradient(top, #24c58f 5%, #44c767 100%);
                background:-webkit-linear-gradient(top, #24c58f 5%, #44c767 100%);
                background:-o-linear-gradient(top, #24c58f 5%, #44c767 100%);
                background:-ms-linear-gradient(top, #24c58f 5%, #44c767 100%);
                background: linear-gradient(to bottom, #24c58f 5%, #44c767 100%);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
                background-color:#24c58f;
            }
            .label_button {
                color: #ffffff;
                font-family: 'FranklinGothic-Heavy';
                font-size:14px;
                line-height: 14px;
                text-decoration:none;
                text-align: left;
            }
        </style>
        <?php
        if ($active_menu != 'home' && $active_menu != 'arcél' && $active_menu != 'order') {
            ?>
            <div>
                <a href="#">
                    <button type="button" class="greenbutton"><span class="label_button">M<br/> E<br/> G<br/> R&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M<br/> E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O<br/> N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S<br/> D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T<br/> E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!<br/> L<br/> E<br/> M</span>
                    </button>
                </a>
            </div>
        <?php
        }?>