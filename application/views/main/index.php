<?php
$menus = array();
//if ($auth->logged_in()) {
$menus = array(
    '/' => array('Fooldal', 'home'),
    '/hogyan/' => array('Hogyan Mukodik', 'hogyan'),
    '/tamogass' => array('Tamogass TE', 'tamogass'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
    '/gyik' => array('GYIK', 'gyik'),
    '/kapcsolat' => array('Kapcsolat', 'kapcsolat'),
);
?>
<section id="counting-back">
    <div class="count-image">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/quality.png" alt="Premium 100% Quality">
    </div> <!--End count image-->
    <div class="siess">
        
    </div>
    <div class="count-text">
        <p>Hamarosan...</p>
    </div> <!--End count text-->
    <div class="dog-img">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/dog.png" alt="Dog">
    </div>
</section> <!--End counting back-->
<div class="clear"></div>
<section id="order-place" class="rounded">
    <h2>Legyen kutyusodnak is <span>saját</span> doboza</h2>
    <div class="order-btnleft">
        <a href="<?= URL::base(TRUE, FALSE) ?>order">
        <button type="button" class="rounded">Megrendelem</button>
        </a>
        <p>a saját kutyusomnak</p>
    </div>
    <div class="center-arrows">
        <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/arrows.png">
    </div>
    <div class="order-btnright">
        <a href="<?= URL::base(TRUE, FALSE) ?>order">
        <button type="button" class="rounded">Ajándékozom</button>
        </a>
        <p>barátom kutyusának</p>
    </div>
</section> <!--End order place-->
</div> <!--End container-->
<section id="menu">
    <?php
    $i = 1;
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
<div class="clear"></div>
<div class="container">
    <nav style="text-align: center">
        <ul>
            <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
        </ul>
    </nav>
    <div class="clear"></div>
    <section id="portfolio">
        <p>“Amíg meg nem tapasztaljuk, milyen érzés szeretni egy állatot, lelkünk egy része mélyen alszik.”</p>
        <i>Anatole France</i>
    </section> <!--End portfolio-->

