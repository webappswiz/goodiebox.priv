<nav class="nav-right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="claim-gift" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/gift-mark.png" class="badge">
    <h1>Ajándékom van!</h1>
    <h2>Kérlek, add meg az adataid!</h2>
    <div class="claim-box1">
        <div class="box rounded">
            <p>Ha már van regisztrált Goodiebox felhasználói fiókod, jelentkezz be! <span>KLIKK ide!</span></p>
            <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-i.png">
        </div>
        <div class="login">
            <form method="POST">
                E-mail cím <input type="text" name="customer_email" class="rounded" id="">
                Jelszó <input type="password" name="customer_password" class="rounded" id="">
                <input type="submit" value="OK" class="box-btn rounded">
            </form>
        </div>
    </div> <!--End claim box1-->
    <div class="claim-box2">
        <div class="box rounded">
            <p>Ha már van regisztrált Goodiebox felhasználói fiókod, jelentkezz be! <span>KLIKK ide!</span></p>
            <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-i.png">
        </div>
        <div class="login">
            <form action="/order/gift" method="POST">
                Ajándékkupon kódom <input type="text" name="coupon_code" class="rounded" id="">
                <input type="submit" id="coupon" value="OK" class="box-btn rounded">
            </form>
        </div>
    </div> <!--End claim box2-->
</section>
