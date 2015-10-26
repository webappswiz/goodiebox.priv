<section id="faq" class="rounded">
    <h1><?php echo __('Speciális ajánlatok'); ?></h1>
    <br/><br/>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">
        <?php echo __('Ha Goodiebox meglepidobozt vásárolsz, akkor ezentúl extra kedvezménnyel jutalmazunk! Összegyűjtöttük azokat a partnereinket, akik speciális ajánlatokkal csábítanak, hogy kipróbáljátok őket! A lista folyamatosan bővül, így érdemes gyakran visszalátogatni erre az oldalra!'); ?>
    </p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('HOGYAN MŰKÖDIK?'); ?></p>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('Minden megrendelt Goodiebox tartalmaz egy direkt erre a célra gyártott kedvezmény kártyát. Ha kinézted a listából, hogy melyik szolgáltató ajánlata a legszimpatikusabb az adott hónapban, nincs más dolog, mint kezedbe venni a kedvezmény kártyát, öledbe kapni a kutyusodat és már indulhattok is beváltani! Mivel a kártyát le kell adnod az általad választott szolgáltatónál, így minden megrendelt Goodiebox meglepidobozzal csak egy szolgáltatás vehető kedvezményesen igénybe egy adott hónapban. De ne aggódjatok, mindig lesz újabb hónap, újabb Goodiebox és újabb speciális ajánlatokra beváltható kedvezmény kártya is! :)'); ?></p>
    <center><img style="margin: 0 auto;width:600px" src="<?= URL::base(TRUE, FALSE) ?>assets/img/ok-main-page-pink.jpg"></center>
    <div id="collapse-content">
        <h2><?php echo __('NEKED') ?></h2>
        <br/>
        <h3><?php echo __('1. Kávézók'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('2. Éttermek'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('3. Sütizők'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('4. Boltok'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>


        <h2><?php echo __('NEKI'); ?></h2>
        <br/>
        <h3><?php echo __('1. Sütizők'); ?></h3>
        <div>
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
        <h3><?php echo __('2. Kozmetikák'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('3. Doktorbácsik/nénik'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('4. Panziók'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
        <h3><?php echo __('4. Egyéb szolgáltatások'); ?></h3>
        <div>
            <div class="content" style="text-align:justify;">

            </div>
        </div>
    </div>






    <script>
        $("#collapse-content").collapse({
            accordion: true,
            open: function () {
                this.addClass("open");
                this.css({height: this.children().outerHeight()});
            },
            close: function () {
                this.css({height: "0px"});
                this.removeClass("open");
            }
        });
    </script>
</section>