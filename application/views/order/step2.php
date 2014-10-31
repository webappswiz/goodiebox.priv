<script type="text/javascript">
    $(document).ready(function () {
        $('input:radio:first').attr('checked', 'checked');
        $('#selected_box').val($('#box').val());
        $('input:radio').on('click', function () {
            $('#selected_box').val($(this).val());
        });
        $('#next').on('click', function () {
            $('form').submit();
        });
        $('.tooltips').on('mouseover', function () {
            $('span', '.tooltips').show();
        });
        $('.tooltips').on('mouseout', function () {
            $('span', '.tooltips').hide();
        });
    });
</script>
<div class="clear"></div>
<section class="process-2" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/shop.png" class="badge">
    <h1>Rendelés</h1>

    <div class="process-circles">
        <ul>
            <li>
                <div class="circle">1</div>
            </li>
            <li>
                <div class="circle-line "> . . . . . . . . . .</div>
            </li>
            <li>
                <div class="circle" style="color:#ff0000;border-color:#ff0000;">2</div>
            </li>
            <li>
                <div class="circle-line c-grey">. . . . . . . . . .</div>
            </li>
            <li>
                <div class="circle c-grey">3</div>
            </li>
        </ul>

    </div>
    <div class="clear"></div>
    <h2>Válaszd ki </br>milyen periódust szeretnél!</h2>
    <br/><br/>
    <section style="margin-bottom: 0px;padding: 0px">
            <?php
            $products = ORM::factory('Packages')
                    ->where('type', '=', 1)
                    ->find_all();
            foreach ($products as $product) {
                $img = ($product->enabled == 1) ? 1 : 2;
                $price = ($product->price != 0 && $product->enabled == 1) ? $product->price . ' HUF' : '';
                $econ = ORM::factory('Packages')
                        ->where('type', '=', 2)
                        ->and_where('term', '=', $product->term)
                        ->find();
                echo '<div class="boxes">';
                echo '<img style="margin-left:30px;margin-bottom:10px;" width="120" height="68" src="' . URL::base(TRUE, FALSE) . 'assets/img/step2-img' . $img . '.jpg"><br/>';
                echo '<input style="cursor: pointer" type="radio" class="" name="box" id="box" value="' . $product->id . '" required>';
                echo '<label class="tooltip">' . $product->package_name . '<span>'.$product->description.'</span></label>';
                echo '<br/><br/>';
                echo '<span class="price" style="margin-left:50px;">' . $price . '</span>';
                if ($econ->loaded()) {
                    echo '<br/><br/><br/>';
                    echo '<input style="padding-left:0px;cursor: pointer" type="radio" class="" name="box" id="box" value="' . $econ->id . '" required>';
                    echo '<label class="tooltip">' . $econ->package_name . '<span>'.$econ->description.'</span></label>';
                    echo '<br/><br/>';
                    echo '<span class="price" style="margin-left:30px;">' . $econ->price . ' HUF</span>';
                }
                echo '</div>';
            }
            ?>
    </section>
    <div class="clear"></div>
    <div class="step2-text" style="text-align: justify">
        <h2>Jó tudni:</h2>
        <p>Rendeléskor automatikus regisztráció történik, létrejön a saját profilod a weboldalunkon. Később bármikor visszatérhetsz, hogy megnézhesd rendelésed aktuális állapotát, újabb rendelést adj le vagy meghívót küldhess a barátaidnak!</p>
        <p>Ha legközelebb is rendelnél ennek a kutyusnak, a profilodban már várni fog az adatlapja, így sokkal egyszerűbben és gyorsabban intézheted a dolgokat. Amennyiben több kutyád van, úgy lehetőséged van új kutyus hozzáadására is, így átláthatóan tudod kezelni a rendeléseidet! Ne feledd, egyszerre csak egy kutyusnak tudsz rendelni, de bármennyiszer visszatérhetsz új rendelés leadásához, amíg a bolt nyitva van!</p>
        <p>Kérjük, mielőtt tovább haladsz, olvasd el az Általános Szerződési Feltételeket és az Adatvédelemi Szabályzatot és csak ha mindennel egyetértesz, akkor kattints a Tovább gombra és add meg személyes adataid az online rendelés befejezéséhez.</p>
        <p>Köszönjük és jó rendelést!</p>
    </div>

    <div class="step2-btn-container">
        <form method="POST">
            <input type="hidden" name="order" value="1">
            <input type="hidden" name="selected_box" id="selected_box" value="">
            <input type="button" id="back" class="dark-btn claim-btn fl rounded"  onclick="history.go(-1);
                    return true;" value="VISSZA">
            <input type="submit" name="tovabb" id="next" value="TOVÁBB" class="dark-btn claim-btn fr rounded">
        </form>
    </div>
    <div class="clear"></div>
</section>
