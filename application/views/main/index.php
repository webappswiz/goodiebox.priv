<?php
$menus = array();
//if ($auth->logged_in()) {
$menus = array(
    '/hogyan/' => array('Hogyan Mukodik', 'hogyan'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
    '/gyik' => array('GYIK', 'gyik'),
);
?>
<script type="text/javascript">
    $(document).ready(function(){
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
    });
</script>
<section id="counting-back" style="margin-top: 25px">
    <div class="count-image">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/quality.png" alt="Premium 100% Quality">
    </div> <!--End count image-->
    <div class="siess">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="count-text">
        <p>Add le a rendelésed október 28-ig, hogy megkapd az legelső dobozt!</p>
        <div class="counter">
            <p>Hátralévő idő: <span id="days" class="count-btn rounded">12</span> nap <span id="hours">15:37:55</span></p>
        </div> <!--End counter-->
        <div class="lock">
            <ul>
                <li><a href="#">Nyitva vagyunk!</a></li>
            </ul>
        </div> <!--End lock-->

    </div> <!--End count text-->
    <div class="dog-img">
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
        <a href="<?= URL::base(TRUE, FALSE) ?>order/?o">
            <button type="button" class="rounded">Megrendelem</button>
        </a>
        <p>a saját kutyusomnak</p>
    </div>
    <div class="center-arrows">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/arrows.png">
    </div>
    <div class="order-btnright">
        <a href="<?= URL::base(TRUE, FALSE) ?>order?g">
            <button type="button" class="rounded">Ajándékozom</button>
        </a>
        <p>barátom kutyusának</p>
    </div>
</section> <!--End order place-->
<section id="menu" style="margin-bottom: 0px;">
    <?php
    $i = 1;
    $active_menu = 'home';
    foreach ($menus as $uri => $data) {
        $class = ''; //active
        if (isset($active_menu) && $active_menu === $data[1]) {
            $class = 'class = "selected"';
        }
        echo HTML::anchor($uri, '', array('id' => 'menu-img' . $i)) . "\n";
        $i++;
    }
    ?>
</section>
<div class="container" style="padding: 0px;margin-top: 0px">
    <h2 style="font-family: La-Chata;padding-top: 10px;">Azt kérdezed, mit is találtok majd a dobozban?</h2><br/>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Havonta változó, 4-5 különböző izgalmat csempészünk bele (táp, snack, játék, kiegészítő, higiénés termék, vitamin)</strong>. A termékek válogatásánál figyelembe vesszük kutyusod méretét és életkorát, ennek megfelelően gondosan válogatott, prémium termékeket juttatunk el otthonodba.<br/>
        <span id="show_t1" style="color:green;cursor: pointer">Tovább olvasom</span>
    </p>
    <div id="tovab1" style="display:none">
        <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Az ár jelenleg egy dobozra 7990 Ft. Azon dolgozunk, hogy hamarosan 3, illetve 6 dobozt is tudjatok előrendelni, így jelentős megtakarításhoz juthattok majd!</p>
        <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Olyan dolgokat rejtünk a Goodiebox-ba, amit kedvenced garantáltan imádni fog! Kis szeretet-csomag, hogy érezze, mennyire fontos neked!</p>
        <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Jó szervezők vagyunk, ezért ha hosszabb távra maradsz, vagyis több dobozt is rendelsz tőlünk, sohasem kapod kétszer ugyanazt az összeállítást!</p>
    </div>
    <h2 style="font-family: La-Chata;padding-top: 10px;">Miért érdemes megrendelned?</h2><br/>
    <p style="padding-top: 5px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">
        <strong>Időt és pénzt spórolunk neked!</strong><br/>
        Minden egyes doboz kedvezményesen jut el hozzátok:
    <ul style="list-style: disc;padding-left: 30px;">
        <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Goodiebox ára < ugyanazon termékek együttes bolti ára</li>
        <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Dobozolás, csomagolás = 0 Ft</li>
        <li style="font-weight:600;line-height: 30px;font-family: 'franklin_gothic_bookregular'; font-size: 18px;">Házhozszállítás = 0 Ft</li>

    </ul><br/>
    <span id="show_t2" style="color:green;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;cursor: pointer">Tovább olvasom</span>
</p>
<div id="tovab2" style="display:none">
    <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Emellett nem kell havonta a boltokat járnod, hogy új és érdekes dolgokkal lepd meg kutyusod, erről mi gondoskodunk! Kreatívak vagyunk, imádjuk a kutyusokat és szeretünk csapatban dolgozni! Mi más sülhet ki egy ilyen együttállásból, mint csupa pozitív energia, boldogság és élet!</p>
    <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;"><strong>Nektek a kutyusoddal csak ki kell bontanotok a Goodiebox-ot és máris indulhat a móka!</strong></p>
    <p style="padding-top: 20px;font-family: 'franklin_gothic_bookregular'; font-size: 18px; line-height: 30px;">Ha van kedved hozzá, küldj be fényképet és videót, miközben bontjátok a csomagot, mutasd meg nekünk, mennyire boldog a kutyusod! Csatlakozz Facebook, Twitter, Instagram és Youtube oldalunkhoz és légy tagja egy szuper csapatnak!</p>
</div>
</div>

<div class="container">
    <div class="clear"></div>
    <section id="portfolio">
        <p>“Amíg meg nem tapasztaljuk, milyen érzés szeretni egy állatot, lelkünk egy része mélyen alszik.”</p>
        <i>Anatole France</i>
    </section> <!--End portfolio-->

