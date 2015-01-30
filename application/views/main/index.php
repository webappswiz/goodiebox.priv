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
        $('#nov').on('click', function () {
            $('#dec').removeClass('active');
            $(this).addClass('active');
            $('#dec_photos').hide();
            $('#nov_photos').show();
        });
        $('#dec').on('click', function () {
            $('#nov').removeClass('active');
            $(this).addClass('active');
            $('#nov_photos').hide();    
            $('#dec_photos').show();
        });
        $('#tab-container').easytabs();
    });
</script>
<section id="counting-back" style="margin-top: 25px;vertical-align: middle;position: relative">
    <div class="count-image">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/quality.png" alt="Premium 100% Quality">
    </div> <!--End count image-->
    <div class="siess">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="count-text" style="min-width: 400px;">
        <p><?= $text ?></p>
        <div class="counter">
            <p>Hátralévő idő: <span id="days" class="count-btn rounded">12</span> nap <span id="hours" style="margin-right: 10px;">15:37:55</span></p>
        </div> <!--End counter-->
        <div class="lock">
            <ul>
                <li><a href="#">Nyitva vagyunk!</a></li>
            </ul>
        </div> <!--End lock-->

    </div> <!--End count text-->
    <div class="dog-img">
        <img id="propose" style="position: absolute;right: 40px;bottom:-85px" src="<?= URL::base(TRUE, TRUE) ?>/assets/img/4890-2.png" alt="" width="100" height="100"><br/>
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/dog.png" alt="Dog">
    </div>
</section> <!--End counting back-->
<div class="clear"></div>
<nav style="margin-top: 10px">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<section id="order-place" class="rounded">
    <h2>Legyen kutyusodnak is <span>saját</span> doboza</h2>
    <div class="order-btnleft">
        <a href="<?= ($status == 1) ? URL::base(TRUE, FALSE) . 'order/?o' : '#' ?>">
            <button type="button" class="rounded">Megrendelem</button>
        </a>
        <p>a saját kutyusomnak</p>
    </div>
    <div class="center-arrows">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/arrows.png">
    </div>
    <div class="order-btnright">
        <a href="<?= ($status == 1) ? URL::base(TRUE, FALSE) . 'order/?g' : '#' ?>">
            <button type="button" class="rounded">Ajándékozom</button>
        </a>
        <p>barátom kutyusának</p>
    </div>
</section> <!--End order place-->

<div class='clear'></div>
<script type="text/javascript">

</script>
<div id="tab-container" class="tab-container">
    <ul class='etabs'>
        <li class='tab'><a href="#miert" style="font-family: 'La-chata'">Miért jó a Goodiebox?</a></li>
        <li class='tab'><a href="#fotok" style="font-family: 'La-chata'">Goodiebox fotók</a></li>
        <li class='tab'><a href="#videok" style="font-family: 'La-chata'">Goodiebox videók</a></li>
    </ul>
    <div id="miert">
        <div class="container" id="text" style="padding: 0 30px 0 30px;margin-top: 0px;">
            <h2 style="font-family: La-Chata;padding-top: 10px;">Mit is találtok majd a dobozban?</h2><br/>
            <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Havonta változó, 3-5 különböző izgalmat csempészünk bele (táp, snack, játék, kiegészítő, higiénés termék, vitamin)</strong>. A termékek válogatásánál figyelembe vesszük kutyusod méretét és életkorát, ennek megfelelően gondosan válogatott, prémium termékeket juttatunk el otthonodba.<br/>
                <span id="show_t1" style="color:green;cursor: pointer;font-weight: bold">Tovább olvasom</span>
            </p>
            <div id="tovab1" style="display:none;">
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Jelenleg kétféle dobozunk elérhető:
                    <br /><br />
                    <strong>Goodiebox Smart 4890 Ft</strong><br />
                    Havonta változó, 3-4 különböző, gondosan válogatott termék (táp, snack, játék, kiegészítő, vitamin) egy dobozban.
                    <br /><br />
                    <strong>Goodiebox Plus 7990 Ft</strong><br />
                    Havonta változó, 4-5 különböző, gondosan válogatott, prémium minőségi termék (táp, snack, játék, kiegészítő, higiéniás termék, vitamin) egy dobozban.</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Olyan dolgokat rejtünk a Goodiebox-ba, amit kedvenced garantáltan imádni fog! Kis szeretet-csomag, hogy érezze, mennyire fontos neked!</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Jó szervezők vagyunk, ezért ha hosszabb távra maradsz, vagyis több dobozt is rendelsz tőlünk, sohasem kapod kétszer ugyanazt az összeállítást egy éven belül!</p>
                <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Gyere és rendelj elő 3, vagy akár 6 dobozt is, így nem kell online lenned és figyelni nehogy kifuss a időből amikor nyitva vagyunk! Így amellett, hogy még több pénzt tudsz megtakarítani, mi a megrendelt dobozokat elkészítjük nektek és ingyenesen kiszállítjuk a megfelelő időben (3 vagy 6 egymást követő hónapban)! Bizony, kényelmesek és megbízhatóan is vagyunk! Tegyél egy próbát! :-)</p><br /><br />
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
        <a style="cursor: pointer" id="dec" class="active" style="font-family: 'La-chata';font-size: 18px">2014 December</a>
        &nbsp;&nbsp;&nbsp;
        <a style="cursor: pointer" id="nov" style="font-family: 'La-chata';font-size: 18px">2014 November</a>
        <div class="image-row" style="text-align: center;display: none" id="nov_photos">
            <h2>November fotók</h2><br/>
            <div class="image-set">
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-0.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-0.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-1.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-1.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-2.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-2.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-3.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-3.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-4.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-4.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-5.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-5.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-6.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-6.jpg" alt=""/></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-7.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-7.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-8.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-8.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-9.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-9.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-10.png" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-10.jpg" alt="" /></a>
                <a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/img-11.png" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/photos/thumb_img-11.jpg" alt="" /></a>
            </div>
        </div>
        <div class="image-row" style="text-align: center;" id="dec_photos">
            <h2>December fotók</h2><br/>
            <div class="image-set">
                				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-12.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-12.jpg" alt=""/></a>
				<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-13.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-13.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-14.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-14.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-15.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-15.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-16.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-16.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-17.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-17.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-18.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-18.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-19.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-19.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-20.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-20.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-21.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-21.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-22.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-22.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-23.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-23.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-24.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-24.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-25.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-25.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-26.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-26.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-27.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-27.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-28.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-28.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-29.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-29.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-30.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-30.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-31.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-31.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-32.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-32.jpg" alt=""/></a>
<a class="example-image-link" href="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/img-33.jpg" data-lightbox="example-set" data-title="Bezáráshoz kattints bárhova a fotón kívülre vagy az x gombra!
                   "><img class="example-image" src="<?= URL::base(TRUE, FALSE) ?>assets/img/photos/thumb_img-33.jpg" alt=""/></a>
            </div>
        </div>
    </div>
    <div id="videok" style="text-align: center">
    <?php
    $xml_data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4');
    $xml=simplexml_load_string($xml_data) or die("Error: Cannot create object");
    foreach($xml->entry as $entry){
        $link = $entry->id;
        $link_array = explode('/',$link);
        $video_id = array_pop($link_array);
        echo '<iframe width="315" height="315" src="//www.youtube.com/embed/'.$video_id.'" frameborder="0" allowfullscreen></iframe> ';
    }
    ?>
    
       

    </div>
</div>

<div class='clear'></div>

<section style="text-align: center;margin-bottom: 0px;padding: 0px">
    <h2 style="font-family: La-Chata;padding-bottom: 10px;line-height:35px">Kíváncsi vagy, merre laknak a Goodiebox tulajdonos kutyusaink?
        Szerezz egy meglepi dobozt és kerüljetek fel ti is a térképre!</h2>
    <img id="map" src="<?= URL::base(TRUE, FALSE) ?>/assets/img/hungary-map-website.png" alt="Kíváncsi vagy, merre laknak a Goodiebox tulajdonos kutyusaink? Szerezz egy meglepi dobozt és kerüljetek fel ti is a térképre!" title="Kíváncsi vagy, merre laknak a Goodiebox tulajdonos kutyusaink? Szerezz egy meglepi dobozt és kerüljetek fel ti is a térképre!">
</section>

<div class='clear'></div>

<div class="container">
    <div class="clear"></div>
    <section id="portfolio">
        <p>“Amíg meg nem tapasztaljuk, milyen érzés szeretni egy állatot, lelkünk egy része mélyen alszik.”</p>
        <i>Anatole France</i>
    </section> <!--End portfolio-->

