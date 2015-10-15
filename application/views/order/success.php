<!-- Facebook Conversion Code for goodiebox checkout -->
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
window._fbq.push(['track', '6015691752322', {'value':'0.00','currency':'GBP'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015691752322&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
<script src='http://connect.facebook.net/en_US/all.js'></script>
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
            var obj = {method: 'feed', link: 'http://goodiebox.hu', picture: 'http://goodiebox.hu/assets/img/bark.jpg', name: 'Goodiebox', description: 'Hurrá, megrendeltem a legújabb Goodiebox-ot a kutyámnak! Ha Te is szeretnéd megajándékozni kis kedvencedet a legszuperebb meglepidobozzal, akkor kattints a weboldalukra http://goodiebox.hu'};
            function callback(response) {
            }
            FB.ui(obj, callback);
        }
    </script>
    
<div class="clear"></div>
        <section class="thanku" class="rounded">
            <h1><?php echo __('Köszönjük a rendelésedet!'); ?></h1>
            <h2><?php echo __('E-mail címedre visszaigazolást küldtünk.'); ?></h2>
            <br/><br/>
            <a href="<?php echo URL::base(TRUE, FALSE) . 'user_account/?new' ?>"><?php echo __('Make another order');?></a>
            <br/>
            <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/bark.jpg" alt="Thank you"><br/><br/><br/>
            <a href="<?= URL::base(TRUE, FALSE) ?>order/success" class="btnShare" data-title="goodiebox" data-desc="Hurrá, megrendeltem a legújabb Goodiebox-ot a kutyámnak! Ha Te is szeretnéd megajándékozni kis kedvencedet a legszuperebb meglepidobozzal, akkor kattints a weboldalukra http://goodiebox.hu"><img style="margin-top: 0px;padding: 0px;margin-right:5px;" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/share_fb.png" width="64" height="64" alt="facebook"></a>
            <a class="popup"  href="https://twitter.com/intent/tweet?text=Hurrá, megrendeltem a legújabb Goodiebox-ot a kutyámnak! Ha Te is szeretnéd megajándékozni kis kedvencedet a legszuperebb meglepidobozzal, akkor kattints a weboldalukra http://goodiebox.hu"><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/share_tw.png" style="margin-top: 0px;padding: 0px;" width="64" height="" alt="twitter"></a>
            
            
            
        </section>
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