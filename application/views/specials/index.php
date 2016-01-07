<section id="faq" class="rounded">
    <h1><?php echo __('Speciális ajánlatok'); ?></h1>
    <br/><br/>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">
        <?php echo __('Ha <span style="color:#ec2366">Goodiebox meglepidobozt</span> vásárolsz, akkor ezentúl extra kedvezménnyel jutalmazunk! Összegyűjtöttük azokat a partnereinket, akik speciális ajánlatokkal csábítanak, hogy kipróbáljátok őket! A lista folyamatosan bővül, így érdemes gyakran visszalátogatni erre az oldalra!'); ?>
    </p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;margin-top:10px;font-weight:bold;"><?php echo __('HOGYAN MŰKÖDIK?'); ?></p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('Minden megrendelt Goodiebox tartalmaz egy direkt erre a célra gyártott <span style="color:#ec2366">kedvezmény kártyát</span>. Ha kinézted a listából, hogy melyik szolgáltató ajánlata a legszimpatikusabb az adott hónapban, nincs más dolog, mint kezedbe venni a kedvezmény kártyát, öledbe kapni a kutyusodat és már indulhattok is beváltani! Mivel a kártyát le kell adnod az általad választott szolgáltatónál, így minden megrendelt Goodiebox meglepidobozzal csak egy szolgáltatás vehető kedvezményesen igénybe egy adott hónapban. De ne aggódjatok, mindig lesz újabb hónap, újabb Goodiebox és újabb speciális ajánlatokra beváltható kedvezmény kártya is! :)<br/><br/>Kattints a "<strong>Neked</strong>"-re, hogy láthatóvá váljanak a kedvezményeid, a "<strong>Neki</strong>" alatt pedig a kutyusodnak találhatsz szuper engedményes szolgáltatásokat!'); ?></p>
    <div class="neki-neked_container"><center><h1 id="neked" class="neked"><?php echo __('NEKED') ?></h1><img class="specials-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/<?php echo __('ok-main-page-pink.jpg'); ?>"><h1 id="neki" class="neki"><?php echo __('NEKI'); ?></h1></center></div>
    <div id="collapse-content" class="specials-cats">
        <div class="main-collapse1" style="display: none">
            <div class="content" style="text-align:justify;">
                <div class="collapse_content1">
                    <h3 class="collapse_content2"><?php echo __('Kávézók'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:5px!important;">
                        <table>
                                <tr>
                                    <td><a href="http://alapcafe.hu/" target="_blank">ALAP Café</a><br/>
                                        <a href="https://goo.gl/maps/BmYbZYikFuQ2" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1065 Budapest, Bajcsy-Zsilinszky út 35.<br/>
                                        <a href="tel:+36309553319"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 30 955 3319</a><br/>
                                        alapcafe@gmail.com<br/>
                                        <span class="kedvezmeny">10% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/10-icon.jpg">
                                    </td>
                                </tr>
								<tr>
                                    <td style="padding-top:20px;"><a href="https://www.facebook.com/Java-Caff%C3%A9-108834405864383/" target="_blank">Java Kávézó</a><br/>
                                        <a href="https://goo.gl/maps/Tqqz62cm6at" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1054 Budapest, Aulich u. 7<br/>
                                        <a href="tel:+36309553319"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 1 311 2251</a><br/>
                                        javacaffe@gmail.com<br/>
                                        <span class="kedvezmeny">10% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/10-icon.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('Éttermek'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:5px!important;">

                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('Sütizők'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:5px!important;">

                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('Boltok'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:5px!important;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-collapse" style="display: none">
            <div class="content" style="text-align:justify;">
                <div class="collapse_content1">
                    <h3 class="collapse_content"><?php echo __('Sütizők'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:0!important;">
                            <table>
                                <tr>
                                    <td><a href="www.flashkutyapekseg.hu" target="_blank">Flash kutyapékség</a><br/>
                                        <a href="https://goo.gl/maps/eMiThgPtKwk" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1094 Budapest Páva utca 17.<br/>
                                        <a href="tel:+36703280870"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 70 328 0870</a><br/>
                                        info@flashkutyapekseg.hu<br/>
                                        <span class="kedvezmeny">5% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/5-icon.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('Kozmetikák'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:0!important;">
                            <table>
                                <tr>
                                    <td>
                                        <a href="http://www.dogmopolite.hu" target="_blank">Dogmopolite Kutyakozmetika (Buda és Pest)</a><br/>
                                        <a href="https://goo.gl/maps/saU8LKQfJEv" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a><span style="dispaly:block;">1116 Budapest Mesterházi utca 6-8.</span><br/>
                                        <a href="https://goo.gl/maps/zd9WnvY1xXz" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1103 Budapest Cserkesz utca 49.<br/>
                                        <a href="https://goo.gl/maps/gv9666h9oY42" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1024 Budapest Fillér utca 16.<br/>
                                        <a href="https://goo.gl/maps/v9BvnhEfxrK2" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1064 Budapest Rózsa utca 94/B.<br/>
                                        <a href="tel:+3612462306"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 1 246 2306</a><br/>
                                        info@dogmopolite.hu<br/>
                                        <span class="kedvezmeny">5% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/5-icon.jpg">
                                    </td>
                                </tr>
								<tr>
								<td style="padding-top:20px;"><a href="http://ohmydogspa.hu" target="_blank">ohmyDOG Boutique & Spa</a><br/>
								<a href="https://goo.gl/maps/wunTmNzN2JE2" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a><span style="dispaly:block;">1146 Budapest, Dózsa György út 15.</span><br/>
								<a href="tel:+36301990711"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 30 199 0711</a><br/>
								info@ohmydogspa.hu<br/>
								<span class="kedvezmeny">8% <?php echo __('kedvezmény'); ?></span></td>
								<td> <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/8-icon.jpg"></td>
								</tr>
								<tr>
								<td style="padding-top:20px;"><a href="http://www.mancsolo-kutyakozmetika.hu" target="_blank">Mancsoló kutyakozmetika</a><br/>
								<a href="https://goo.gl/maps/EHiQXhbMqhS2" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a><span style="dispaly:block;">8200 Veszprém, Liliom utca 10.</span><br/>
								<a href="tel:+36301990711"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 70 560 5543</a><br/>
								<span class="kedvezmeny">6% <?php echo __('kedvezmény'); ?></span></td>
								<td> <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/6-icon.jpg"></td>
								</tr>
                            </table>
                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('Doktorbácsik/nénik'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:0!important;">

                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('Panziók'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:5px!important;">
                            <table>
                                <tr>
                                    <td>
                                        <a href="http://www.dogmopolite.hu" target="_blank">Dogmopolite Kutyapanzió és Kutyanapközi (Buda és Pest)</a><br/>
                                       <a href="https://goo.gl/maps/saU8LKQfJEv" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1116 Budapest Mesterházi utca 6-8.<br/>
                                        <a href="https://goo.gl/maps/zd9WnvY1xXz" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1103 Budapest Cserkesz utca 49.<br/>
                                        <a href="https://goo.gl/maps/gv9666h9oY42" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1024 Budapest Fillér utca 16.<br/>
                                        <a href="https://goo.gl/maps/v9BvnhEfxrK2" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1064 Budapest Rózsa utca 94/B.<br/>
                                        <a href="tel:+3612462306"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 1 246 2306</a><br/>
                                        info@dogmopolite.hu<br/>
                                        <span class="kedvezmeny">5% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/5-icon.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('Egyéb szolgáltatások'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;margin-left:0!important;padding-left:0!important;">
                            <table>
                                <tr>
                                    <td>
                                        <a href="http://ebfizio.hu/" target="_blank">Ebfizio</a><br/>
                                        Kisállat-fizioterápia és hidroterápia, kutya-fitness<br/>
                                        <a href="https://goo.gl/maps/tuiH8qPNub62" target="_blank"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/pin.png"></a>1048 Budapest Falemez utca 18.<br/>
                                        <a href="tel:+36703866285"><img width="16" style="margin-top:0;margin-right:5px;display:inline-block;vertical-align:top;" src="<?= URL::base(TRUE, FALSE) ?>assets/img/phone.png"/>+36 70 386 6285</a><br/>
                                        info@ebfizio.hu<br/>
                                        <span class="kedvezmeny">20% <?php echo __('kedvezmény'); ?></span>
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/20-icon.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#neked').on('click', function () {
            $('.main-collapse1').toggle();
            $('.main-collapse').hide();
            $('#neked').css('color', '#ec2366');
            $('#neki').css('color', '#330000');
        });
        $('#neki').on('click', function () {
            $('.main-collapse').toggle();
            $('.main-collapse1').hide();
            $('#neki').css('color', '#ec2366');
            $('#neked').css('color', '#330000');
        });
        $('.collapse_content').on('click', function () {
            if ($(this).next().hasClass('open')) {
                $('.main-collapse.open').outerHeight($('.main-collapse.open').outerHeight() - $('.cnt.open').outerHeight());
                $('.cnt.open').outerHeight(0);
                $('.cnt.open').removeClass('open');
            } else if ($('.cnt.open').outerHeight() > 0) {
                $('.main-collapse.open').outerHeight($('.main-collapse.open').outerHeight() - $('.cnt.open').outerHeight());
                $('.cnt.open').outerHeight(0);
                $('.cnt.open').removeClass('open');
                $(this).next().addClass("open");
                $(this).next().outerHeight($(this).next().children().outerHeight());
                $('.main-collapse.open').outerHeight($('.main-collapse.open').outerHeight() + $(this).next().outerHeight());
            } else {
                $(this).next().addClass("open");
                $(this).next().outerHeight($(this).next().children().outerHeight());
                $('.main-collapse.open').outerHeight($('.main-collapse.open').outerHeight() + $(this).next().children().outerHeight());
            }
        });
        $('.collapse_content2').on('click', function () {
            if ($(this).next().hasClass('open')) {
                $('.main-collapse1.open').outerHeight($('.main-collapse1.open').outerHeight() - $('.cnt.open').outerHeight());
                $('.cnt.open').outerHeight(0);
                $('.cnt.open').removeClass('open');
            } else if ($('.cnt.open').outerHeight() > 0) {
                $('.main-collapse1.open').outerHeight($('.main-collapse1.open').outerHeight() - $('.cnt.open').outerHeight());
                $('.cnt.open').outerHeight(0);
                $('.cnt.open').removeClass('open');
                $(this).next().addClass("open");
                $(this).next().outerHeight($(this).next().children().outerHeight());
                $('.main-collapse1.open').outerHeight($('.main-collapse1.open').outerHeight() + $(this).next().outerHeight());
            } else {
                $(this).next().addClass("open");
                $(this).next().outerHeight($(this).next().children().outerHeight());
                $('.main-collapse1.open').outerHeight($('.main-collapse1.open').outerHeight() + $(this).next().children().outerHeight());
            }
        });
    </script>
</section>
