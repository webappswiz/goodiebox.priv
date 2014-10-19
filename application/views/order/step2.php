<script type="text/javascript">
    $(document).ready(function() {
        $('#selected_box').val($('#box').val());
        $('input:radio').on('click',function(){
            $('#selected_box').val($(this).val());
        });
        $('#next').on('click',function(){
            $('form').submit();
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
    <ul class="claim-option-list step2-list">
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/step2-img1.jpg"><p> 1 hónap<input style="cursor: pointer" type="radio" class="" name="box" id="box" value="1" checked="checked" required></p><br/><?php
        $product = ORM::factory('Packages',1);
        echo $product->price.' HUF';
        ?></li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/step2-img2.jpg"> 3 hónap<input style="cursor: pointer" type="radio" name="box" id="box" value="2" class="" required disabled><br/>&nbsp;</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/step2-img2.jpg"> 6 hónap<input style="cursor: pointer" type="radio" name="box" id="box" value="3" class="" required disabled><br/>&nbsp;</li>
    </ul>    
    <div class="step2-text">
        <h2>Jó tudni:</h2>
        <p>Rendeléskor automatikus regisztráció történik, létrejön a saját profilod a weboldalunkon. Később bármikor visszatérhetsz, hogy megnézhesd rendelésed aktuális állapotát, újabb rendelést adj le vagy meghívót küldhess a barátaidnak!</p>
        <p>Ha legközelebb is rendelnél ennek a kutyusnak, a profilodban már várni fog az adatlapja, így sokkal egyszerűbben és gyorsabban intézheted a dolgokat. Amennyiben több kutyád van, úgy lehetőséged van új kutyus hozzáadására is, így átláthatóan tudod kezelni a rendeléseidet! Ne feledd, egyszerre csak egy kutyusnak tudsz rendelni, de bármennyiszer visszatérhetsz új rendelés leadásához, amíg a bolt nyitva van!</p>
        <p>Kérjük, mielőtt tovább haladsz, olvasd el az Általános Szerződési Feltételeket és az Adatvédelemi Szabályzatot és csak ha mindennel egyetértesz, akkor kattints a Tovább gomra és add meg személyes adataid az online rendelés befejezéséhez.</p>
        <p>Köszönjük és jó rendelést!</p>
    </div>

    <div class="step2-btn-container">
        <form method="POST">
            <input type="hidden" name="order" value="1">
            <input type="hidden" name="selected_box" id="selected_box" value="">
            <input type="button" id="back" class="dark-btn claim-btn fl rounded"  onclick="history.go(-1);return true;" value="VISSZA">
            <input type="submit" name="tovabb" id="next" value="TOVÁBB" class="dark-btn claim-btn fr rounded">
        </form>
    </div>
    <div class="clear"></div>
</section>
