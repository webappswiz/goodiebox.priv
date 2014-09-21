<nav class="nav-right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="donations" class="rounded">
    <h1>Támogass menhelyi kutyust!</h1>
    <p>Magyarországon nagyon sok olyan kutyus van, akik menhelyen kénytelenek várakozni, amíg szerető gazdi érkezik és befogadja őket. Minden évben akciók és programok sokasága várja a kicsiket és nagyokat, hogy legjobb barátra találjanak.</p>
    <p>Mi abban szeretnénk segíteni ezeknek az árva kutyusoknak, hogy a menhelyen töltött idejüket boldogabbá varázsoljuk veletek. Ha <span style="color: #cc0033">GOODIEBOX</span>-ot rendeltek kedvenceteknek, egyúttal jótékony célra is jut az összegből, hiszen minden hónapban a profitunk bizonyos százalékát átutaljuk a négy legnagyobb hazai menhely egyikének.</p>
    <div class="circles">
        <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/donations-dogs.png">
        <p>Lehetőséged van csomagot küldeni menhelyi kutyusnak is:</p>
        <ul>
            <li>Válaszd az <span style="color: #cc0033">Ajándékozom</span> opciót!</li>
            <li>Válaszd ki a menhelyet, ahol a kutyus van*!</li>
            <li>Írd be a megjegyzésbe, hogy mi a kutyus neve és neme!</li>
            <li>Rendeld meg a csomagot, őrizd meg a rendelést visszaigazoló e-mail üzenetünket és várd a visszajelzést a menhelyről, ha a kutyushoz 
                megérkezett a dobozod!</li>
        </ul>

    </div>
    <div class="clear"></div>
    <p>Azok a menhelyek, ahol nézelődhetsz:</p>
    <div class="donations-btn">
        <p>Illatos út </br>Noé Állatotthon Alapítvány</br>Rex Kutyaotthon Alapítvány</br>HEROSZ Budapesti Állatotthona</p>
        <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/arrow-dn.jpg">
        <a href="<?= URL::base(TRUE, FALSE) ?>order/gift"><button type="button" class="top-btn rounded">Ajándékozom</button></a>
        <p class="donation-bottom-p">menhelyi kutyusnak</p>
    </div>
    <div class="donations-bottom-text">
        <p>*Amennyiben <span style="color: #cc0033">GOODIEBOX</span>-ot szeretnél küldeni egy menhelyi kutyusnak, kérlek olvasd el az <span style="color: #cc0033">Általános Szerződési Feltételek</span> rendelési információját ide vonatkozólag.</p>
    </div>
</section>

