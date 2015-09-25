<?php
$options = ORM::factory('Options', 1);
$text = $options->text;
$end_date = $options->end_date;
$status = $options->status;
$date_array = explode(' ', $end_date);
$date = explode('/', $date_array[0]);
$time = explode(':', $date_array[1]);
?>
<script>
    countIt('<?= $date[0] ?>', '<?= $date[1] ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
    function countIt(year, month, day, hours, minutes, seconds, status) {
        now = new Date();
        start_date = new Date(2014, 9, 28, 18, 00, 00);
        now = now.getTime() / 1000;
        start = start_date.getTime() / 1000;
        setTimeout(function () {
            endDate = new Date(year, month, day, hours, minutes, seconds, 00);
            thisDate = new Date();
            var daysLeft = parseInt((endDate - thisDate) / 86400000);
            var hoursLeft = parseInt((endDate - thisDate) / 3600000);
            var minutsLeft = parseInt((endDate - thisDate) / 60000);
            var secondsLeft = parseInt((endDate - thisDate) / 1000);

            seconds = minutsLeft * 60;
            seconds = secondsLeft - seconds;
            seconds = (seconds < 10) ? 0 + seconds : seconds;

            minutes = hoursLeft * 60;
            minutes = minutsLeft - minutes;

            hours = daysLeft * 24;
            hours = (hoursLeft - hours) < 0 ? 0 : hoursLeft - hours;
            days = daysLeft;
            startCount(days, hours, minutes, seconds, status);
        }, 100);
    }

    function startCount(days, hours, minutes, seconds, status) {
        $('#days').html(days);
        seconds = (seconds) < 10 ? '0' + seconds : seconds;
        minutes = (minutes) < 10 ? '0' + minutes : minutes;
        hours = (hours) < 10 ? '0' + hours : hours;
        if (status == 0) {
            $('li', '.lock').css('background', 'url("/assets/img/lock-close.png") no-repeat left center');
            $('li', '.lock').html('Hamarosan nyitunk!');
        } else {
            $('li', '.lock').css('background', 'url("/assets/img/lock-open.png") no-repeat left center');
            $('li', '.lock').html('Nyitva vagyunk!');
        }
        $('#hours').html(hours + ':' + minutes + ':' + seconds);
        countIt('<?= $date[0] ?>', '<?= $date[1] - 1 ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
    }
</script>
<?php
$menus = array();
//if ($auth->logged_in()) {
$menus = array(
    '/hogyan/' => array('Hogyan Mukodik', 'hogyan'),
    '/gyik' => array('GYIK', 'gyik'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
);
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#show_t1').on('click', function () {
            if ($('#tovab1').is(":visible")) {
                $('#tovab1').hide('slow');
            } else {
                $('#tovab1').show('slow');
            }
        });
        $('#show_t2').on('click', function () {
            if ($('#tovab2').is(":visible")) {
                $('#tovab2').hide('slow');
            } else {
                $('#tovab2').show('slow');
            }
        });
        $('#tab-container').easytabs();
        
        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#dialog-form1').fadeOut("slow");
            $("#container").css({// this is just for style
                "opacity": "1"
            });
        }

        function loadPopupBox() {    // To Load the Popupbox
            $('#dialog-form1').slideDown( "slow");
            
            $("#container").css({// this is just for style
                "opacity": "0.3"
            });
        }
        
        $('#popupBoxClose1').on('click', function(){
            unloadPopupBox();
        });
        
        $('#subscribe').on('click', function(){
            loadPopupBox();
        });
        
        
    });
</script>

<div id="dialog-form1" title="Add a new dog" style="display:none;">
    <script>
        $(".process-form").validate();
    </script>
    <div class="claim-form2">
        <a id="popupBoxClose1"><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/delete.png"></a>
        <form class="process-form" name="order" method="POST" action="/subscribe">
            <div>
                <label>Keresztneved:</label> <input type="text" name="name" value="" size="20" class="" required/>
            </div>
            <div>
                <label>Email címed:</label> <input type="email" name="email" value="" size="20" class="" required/>
            </div>
            <div style="text-align: center;">
                <input type="submit" value="Kérem az értesítést!" class="dark-btn dog-prof-btn rounded">
            </div>
        </form>
        
    </div>
</div>

<section id="counting-back" style="margin-bottom: 5px;margin-top: 25px;vertical-align: middle;position: relative">
    <div class="count-image">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/quality.png" alt="Premium 100% Quality">
    </div> 
    <div class="siess">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="count-text">
        <p><?= $text ?></p>
        <div class="counter">
            <p>Hátralévő idő: <span id="days" class="count-btn rounded">12</span> nap <span id="hours" style="margin-right: 10px;">15:37:55</span></p>
        </div> 
        <div class="lock">
            <ul>
                <li><a href="#">Nyitva vagyunk!</a></li>
            </ul>
        </div> 
    </div> 
    <div class="dog-img">
        <img id="propose" style="position: absolute;right: 40px;bottom:-85px" src="<?= URL::base(TRUE, TRUE) ?>/assets/img/5990-2.png" alt="" width="100" height="100"><br/>
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/dog.png" alt="Dog">
    </div>
    
    
</section>
<div class="clear"></div>
<br/>
    <?php if($status==0):?><center><a id="subscribe" style="color:green;cursor: pointer;font-weight: bold" href="#">Szeretnél értesítést, amikor rendelhető a következő Goodiebox?</a></center><?php endif;?>
<div class="clear"></div>
<nav style="margin-top: 10px">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<section id="order-place" class="rounded">
    <h2>Legyen kutyusodnak is <span>saját</span> doboza</h2>
    <div class="order-btnleft">
        <a href="<?= ($status == 1) ? URL::base(TRUE, FALSE) . 'order/?smart' : '#' ?>">
            <button type="button" class="rounded" style="font-weight: bolder;width: 250px;">SMART</button>
        </a>
        <p>Haspók kutyusoknak<br/>
már 5990 Ft-tól!</p>
    </div>
    <div class="center-arrows">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/arrows.png">
    </div>
    <div class="order-btnright">
        <a href="<?= ($status == 1) ? URL::base(TRUE, FALSE) . 'order/?plus' : '#' ?>">
            <button type="button" class="rounded" style="font-weight: bolder;width: 250px;">PLUS</button>
        </a>
        <p>Kivételes kutyusoknak<br/>
már 7990 Ft-tól!</p>
    </div>
</section> <!--End order place-->

<div class='clear'></div>
<div id="tab-container" class="tab-container">
    <ul class='etabs'>
        <li class='tab'><a href="#miert" style="font-family: 'La-chata'">Miért jó a Goodiebox?</a></li>
        <li class='tab'><a href="#fotok" style="font-family: 'La-chata'">Goodiebox fotók</a></li>
        <li class='tab'><a href="#videok" style="font-family: 'La-chata'">Goodiebox videók</a></li>
    </ul>
    <div id="miert">
        <div class="container" id="text" style="padding: 0 30px 0 30px;margin-top: 0px;">
            <h2 style="font-family: La-Chata;padding-top: 10px;">Mit is találtok majd a dobozban?</h2><br/>
            <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Havonta változó, 3-6 különböző izgalmat csempészünk bele (táp, snack, játék, kiegészítő, higiénés termék, vitamin)</strong>. A termékek válogatásánál figyelembe vesszük kutyusod méretét és életkorát, ennek megfelelően gondosan válogatott, prémium termékeket juttatunk el otthonodba.<br/>
                <span id="show_t1" style="color:green;cursor: pointer;font-weight: bold">Tovább olvasom</span>
            </p>
            <div id="tovab1" style="display:none;">
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Jelenleg kétféle dobozunk elérhető:
                    <br /><br />
                    <strong>Goodiebox Smart 5990 Ft</strong><br />
                    Havonta változó, 3-5 különböző, gondosan válogatott termék (táp, snack, játék, kiegészítő, vitamin) egy dobozban.
                    <br /><br />
                    <strong>Goodiebox Plus 7990 Ft</strong><br />
                    Havonta változó, 4-6 különböző, gondosan válogatott, prémium minőségi termék (táp, snack, játék, kiegészítő, higiéniás termék, vitamin) egy dobozban.</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Olyan dolgokat rejtünk a Goodiebox-ba, amit kedvenced garantáltan imádni fog! Kis szeretet-csomag, hogy érezze, mennyire fontos neked!</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><?php echo __('Jó szervezők vagyunk, ezért ha hosszabb távra maradsz, vagyis több dobozt is rendelsz tőlünk, sohasem kapod kétszer ugyanazt <span style="color:#D931F7;font-weight:bold;">az</span> összeállítást egy éven belül!');?></p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;display:none;">Gyere és rendelj elő 3, vagy akár 6 dobozt is, így nem kell online lenned és figyelni nehogy kifuss a időből amikor nyitva vagyunk! Így amellett, hogy még több pénzt tudsz megtakarítani, mi a megrendelt dobozokat elkészítjük nektek és ingyenesen kiszállítjuk a megfelelő időben (3 vagy 6 egymást követő hónapban)! Bizony, kényelmesek és megbízhatóan is vagyunk! Tegyél egy próbát! :-)</p><br /><br />
            </div>
            <h2 style="font-family: La-Chata;padding-top: 10px;">Miért érdemes megrendelned?</h2><br/>
            <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">
            <p style="font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Időt és pénzt spórolunk neked!</strong></p><br/>
            <p style="font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Minden egyes doboz kedvezményesen jut el hozzátok:</p>
            <ul style="list-style: disc;padding-left: 30px;">
                <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Goodiebox ára < ugyanazon termékek együttes bolti ára</li>
                <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Dobozolás, csomagolás = 0 Ft</li>
                <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Házhozszállítás = 0 Ft</li>

            </ul><br/>
            <span id="show_t2" style="font-weight: bold;color:green;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;cursor: pointer">Tovább olvasom</span>
            </p>
            <div id="tovab2" style="display:none">
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Emellett nem kell havonta a boltokat járnod, hogy új és érdekes dolgokkal lepd meg kutyusod, erről mi gondoskodunk! Kreatívak vagyunk, imádjuk a kutyusokat és szeretünk csapatban dolgozni! Mi más sülhet ki egy ilyen együttállásból, mint csupa pozitív energia, boldogság és élet!</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Nektek a kutyusoddal csak ki kell bontanotok a Goodiebox-ot és máris indulhat a móka!</strong></p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Ha van kedved hozzá, küldj be fényképet és videót, miközben bontjátok a csomagot, mutasd meg nekünk, mennyire boldog a kutyusod! Csatlakozz Facebook, Twitter, Instagram és Youtube oldalunkhoz és légy tagja egy szuper csapatnak!</p>
            </div>
        </div>
    </div>

    <div id="fotok">
        <div class="image-row" style="text-align: center;" id="jan_photos">
            <div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-207.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!"><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-207.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-208.jpg"data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-208.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-209.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-209.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-210.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-210.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-211.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-211.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-212.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-212.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-213.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-213.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-214.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-214.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-215.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-215.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-216.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-216.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-217.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-217.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-219.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-219.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-221.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-221.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-222.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-222.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-223.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-223.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-224.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-224.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-225.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-225.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-226.jpg" data-lightbox="example-set3" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-226.jpg" alt=""/></a>
            </div>
            <br/>
            <a href="<?= URL::base(TRUE, FALSE) ?>kutyusaink" style="color:green;cursor: pointer;font-weight: bold">Klikkelj a többi kutyusért!</a>
            
        </div>
        <div style="margin:30px;"></div>

    </div>
    <div id="videok" style="text-align: center">
        <?php
        /*$xml_data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=3');
        $xml = simplexml_load_string($xml_data) or die("Error: Cannot create object");
        foreach ($xml->entry as $entry) {
            $link = $entry->id;
            $link_array = explode('/', $link);
            $video_id = array_pop($link_array);
            echo '<iframe width="315" height="315" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe> ';
        }*/
		echo '<iframe width="315" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4ZnDVm3eIp0fjo7W2dGCdirkuboJ_kzt&loop=1" frameborder="0" allowfullscreen></iframe> ';
        ?>
		<br/><br/>
            <a href="https://www.youtube.com/channel/UCAnqUKt9dkY7Tw2kndO9JAA/videos" style="color:green;cursor: pointer;font-weight: bold">Klikkelj a többi videóért!</a>


    </div>
	<div style="margin:30px;"></div>
</div>

<div class='clear'></div>

<h2 style="font-family: La-Chata;padding-top: 10px;padding-bottom: 25px;">Megrendelőink véleménye a Goodiebox-ról...</h2>

<div class="bxslider">
    <div class="slide">
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/IMG_0061.JPG" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                Szuper ötlet, szuperül kivitelezve! :)
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Zsófia, Szigetmonostor</div>    
        </div>
        <div class="slide-item">
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Kedves Goodiebox-os Csapat, Megszeretném mégegyszer köszönni a kedvességetek, mind a többszöri egyeztetés, mind amiatt, hogy tényleg minden szempontból odafigyeltetek a kutyusom gyomorbetegségére. A játékok pedig egyszerűen fantasztikusak, nagy volt az öröm. Továbbra is maradunk hű vásárlótok :-)"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Zsanett, Kozármisleny</div>    
        </div>
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/IMG_0065.JPG" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Ismét nagyon tetszett a doboz tartalma. Ez a száraztáp igazi újdonság volt számomra, mert ezt a márkát eddig még nem ismertem, de Rustynak nagyon ízlik, ahogy természetesen a jutalomfalatok is."
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Nikolett, Budapest</div>    
        </div>
    </div>

    <div class="slide">
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/1460135_911183998914557_5797755493820555406_n.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Nagyszerű dolognak tartom, és hihetetlen nagy meglepetést okozott Tóbiásnak, minden nagyszerű a csomagban! Ami nagyon tetszett, hogy szinte személyre szóló <span style="color:#D931F7;font-weight:900;">volt</span> benne minden, főleg, hogy mi allergiások vagyunk! A játék nagy kedvenc, a táp szuper, a takarót imádjuk, a névre szóló biléta és a csomagolás pazar! KÖSZÖNJÜK"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Ancsa, Sümeg</div>    
        </div>
        <div class="slide-item">
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 30px">
                Mindig is imádtam az ilyen meglepetés dobozokat, és örülök hogy a kutyusomat is meglephetem vele! :)
				Szerintem az áprilisi doboz lesz a következő amit megrendelek, remélem az valami Húsvéti témájú lesz! :) Nagyon cuki volt a Goodiebox kártya, meg mellé a kis muffinos üdvözlőkártya vagy micsoda ♥ Külön imádtam hogy kézzel írtátok rá! :)
				A kutyapékséges jutalomfalat is nagyon tetszik, meg a szórólapnak is örültem, lehet meglepem a kutyusom egy szülinapi tortával majd! :P
				További sok sikert kívánok nektek, remélem ilyenek maradtok!!! :)
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;margin-top:5px;">Bernadett, Székesfehérvár</div>    
        </div>
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/20141224_173208.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Nagyon jónak tartom. Tényleg személyre szabott odafigyeléssel állítottátok össze a csomagot, még telefonon is egyeztettetek, hogy a táp megfelel­e Oszkárnak. A rénszarvast azonnal kivette és azóta is cipeli. Köszönjük!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Rita, Budapest</div>    
        </div>
    </div>

    <div class="slide">
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/2015-01-31_0146.png" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Nagy örömmel vettük át és bontottuk ki az általatok küldött csomagot. Izgatottan fedtük fel a titkot rejtő dobozt. "
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Viktória, Tiszaszentimre</div>    
        </div>
        <div class="slide-item">
			<img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-76.jpg" alt="" style="float: right;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Továbbra is odavagyunk a Goodiebox-ért, a Valentin-napi csomagolásért pedig még egy piros pont Nektek :-)"
            </div>
            <div style="position: absolute;bottom: 0;left: 2px;padding: 5px;">Anita, Budapest</div>    
        </div>
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/10155858_561404270661711_1556163618799603132_n.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Kedves Goodiebox! Nagyon szépen köszönjük a sok kedves és hasznos ajándékot. Büfikénk a sipolós játékokat imádja és a rénszarvas rögtön a kedvence lett. Én a névreszóló bilétának örülök a legjobban. Persze ez nem az én ajándékom. Gyönyörűségünk végig izgatottan nézte mit is varázsolunk elő a neki szánt dobozból. Csak egy kis jutifalattal tudtuk lekenyerezni, hogy legalább egy fotó készülhessen róla és az ajándékairól. Igazán nagyon örültünk mindennek és mégegyszer nagyon szépen köszönjük!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Erzsébet, Budapest</div>
        </div>
    </div>

    <div class="slide">
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/charlie3.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Sziasztok! Megkaptuk a dobozunkat, nagyon szépen köszönjük, mindketten imádjuk a tartalmát :) Küldök pár képet! (A rénszarvas szerelem volt első látásra, rögtön kikapta a dobozból :D) Boldog Karácsonyt Kívánunk Nektek!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Ági, Szeged</div>    
        </div>
        <div class="slide-item">
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 25px">
                "Most rendeltünk először, de biztos, hogy nem utoljára! A csomagolás nagyon szimpatikus volt. Kicsomagolásnál talán mi izgatottabbak voltunk, mint a kutyusaink. Elsőre csak egy dobozt mertünk rendelni a két kutyának, de legközelebb Pimasznak és Pötyinek is jár a saját doboz! Kutyáink nagyon örültek, nagyon édesek voltak, ahogy izgatottan körbeszimatolták a dobozt. Mindkét kutyának jutott meglepetés, Pimasz a mosolyra csapott le azonnal, Pötyi inkább a hasára gondolt és egyből kiszúrta a Valentin napi kekszet! :) Végül mindenen megosztoztak. Pötyi azóta is lelkesen őrzi az üres dobozt! :) Mindent köszönünk, ami a dobozban volt, nagyon boldoggá tettétek a kutyusainkat és minket is!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Tibor, Somberek</div>    
        </div>
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/mr-smith.png" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Köszönjük szépen a csomagot, nagyon nagy az öröm nálunk! 
                Mr. Smith nem bírta kivárni a Szentestét és kibontotta az ajándékot! Órák óta kizárólag az új kis plüss barátjával hajlandó közlekedni a házban - nem ereszti - imádja! :)"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Szilvia, Vámosszabadi</div>
        </div>
    </div>

    <div class="slide">
        <div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/10863758_840033542685952_1741040682_n.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Sziasztok! Először is szeretném nektek megköszönni, hogy örömtelivé varázsoltátok Nudlika első karácsonyát! :) Telitalálat volt a box, a plüss bárányt azóta sem lehet kiimádkozni a szájából! A takarót pedig párnának használta éjszaka. :) A kis bilétáért pedig külön köszönet, nagyon aranyos volt tőletek a gravírozás! A folttisztító pedig telitalálat, már ki is szedte a kocsiból a hányásfoltot! Már most alig várom, hogy rendelhessem tőletek Nudlus szülinapi dobozát! :) Nagyon Boldog Karácsonyt kívánunk az egész csapatnak!!!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Lilla, Tata</div>    
        </div>
        <div class="slide-item">
            <div class="customer_quote_text" style="padding: 2px;">
                "Imádom! :-) A hozzám hasonló "őrült" gazdiknak kiváló, a kutyusokról nem is beszélve! :­) Csak így tovább, mi biztos Veletek maradunk!"
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;"></div>    
        </div>
		<div class="slide-item bordered rounded">
            <img border="2" width="100" height="100" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-68.jpg" alt="" style="float: left;margin: 10px;"/>
            <div class="customer_quote_text" style="padding: 2px;padding-bottom: 10px">
                "Nagyon nagy örömöt okozott a meglepetés doboz nekem is és a kutyusomnak, Hercegnek is. Nagyon ízlett neki a Valentin napi keksz, a halas rizses táp pedig egyenesen telitalálat volt, mivel nagyon szereti a halas tápot.
				A csomagolás nagyon ízléses volt."
            </div>
            <div style="position: absolute;bottom: 0;right: 2px;padding: 5px;">Erika, Budapest</div>    
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.bxslider').bxSlider({
        minSlides: 1,
        slideMargin: 10,
        pause: 10000,
        adaptiveHeight: true,
        controls: false,
        speed: 1000
    });
</script>

<div class='clear'></div>


<div class="clear"></div>
<section id="portfolio">
    <p>“Amíg meg nem tapasztaljuk, milyen érzés szeretni egy állatot, lelkünk egy része mélyen alszik.”</p>
    <i>Anatole France</i>
</section> <!--End portfolio-->