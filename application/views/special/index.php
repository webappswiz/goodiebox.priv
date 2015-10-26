<section id="faq" class="rounded">
    <h1><?php echo __('Speciális ajánlatok'); ?></h1>
    <br/><br/>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">
        <?php echo __('Ha <span style="color:#ec2366">Goodiebox meglepidobozt</span> vásárolsz, akkor ezentúl extra kedvezménnyel jutalmazunk! Összegyűjtöttük azokat a partnereinket, akik speciális ajánlatokkal csábítanak, hogy kipróbáljátok őket! A lista folyamatosan bővül, így érdemes gyakran visszalátogatni erre az oldalra!'); ?>
    </p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('HOGYAN MŰKÖDIK?'); ?></p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('Minden megrendelt Goodiebox tartalmaz egy direkt erre a célra gyártott <span style="color:#ec2366">kedvezmény kártyát</span>. Ha kinézted a listából, hogy melyik szolgáltató ajánlata a legszimpatikusabb az adott hónapban, nincs más dolog, mint kezedbe venni a kedvezmény kártyát, öledbe kapni a kutyusodat és már indulhattok is beváltani! Mivel a kártyát le kell adnod az általad választott szolgáltatónál, így minden megrendelt Goodiebox meglepidobozzal csak egy szolgáltatás vehető kedvezményesen igénybe egy adott hónapban. De ne aggódjatok, mindig lesz újabb hónap, újabb Goodiebox és újabb speciális ajánlatokra beváltható kedvezmény kártya is! :)'); ?></p>
    <div style="width: 100%"><center><h1 id="neked" style="cursor:pointer;position: relative;display: inline;top:-60px;"><?php echo __('NEKED') ?></h1><img style="margin: 0 auto;width:250px;display: inline" src="<?= URL::base(TRUE, FALSE) ?>assets/img/<?php echo __('ok-main-page-pink.jpg'); ?>"><h1 id="neki" style="cursor:pointer;display: inline;position: relative;display: inline;top:-60px;"><?php echo __('NEKI'); ?></h1></center></div>
    <div id="collapse-content">
        <div class="main-collapse1" style="display: none">
            <div class="content" style="text-align:justify;">
                <div class="collapse_content1">
                    <h3 class="collapse_content2"><?php echo __('+ Kávézók'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">
                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('+ Éttermek'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('+ Sütizők'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                    <h3 class="collapse_content2"><?php echo __('+ Boltok'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-collapse" style="display: none">
            <div class="content" style="text-align:justify;">
                <div class="collapse_content1">
                    <h3 class="collapse_content"><?php echo __('+ Sütizők'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">
                            <table>
                                <tr>
                                    <td>Flash kutyapékség<br/>
                                        1094 Budapest Páva utca 17.<br/>
                                        +36 70 328 0870<br/>
                                        info@flashkutyapekseg.hu
                                    </td>
                                    <td>
                                        <img style="margin: 0px 0px 0px 45px;" width="72" height="72" src="<?= URL::base(TRUE, FALSE) ?>assets/img/5-icon.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('+ Kozmetikák'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('+ Doktorbácsik/nénik'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('+ Panziók'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                    <h3 class="collapse_content"><?php echo __('+ Egyéb szolgáltatások'); ?></h3>
                    <div class="cnt">
                        <div class="content" style="text-align:justify;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#neked').on('click',function(){
            $('.main-collapse1').toggle();
            $('.main-collapse').hide();
            $('#neked').css('color','#ec2366');
            $('#neki').css('color','#330000');
        });
        $('#neki').on('click',function(){
            $('.main-collapse').toggle();
            $('.main-collapse1').hide();
            $('#neki').css('color','#ec2366');
            $('#neked').css('color','#330000');
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