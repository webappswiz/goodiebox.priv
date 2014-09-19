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

<nav style="text-align: right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="process-2" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/shop.png" class="badge">
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
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/step2-img1.jpg"><p> 1 hónap<input type="radio" class="" name="box" id="box" value="1" checked="checked" required></p></li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/step2-img2.jpg"> 3 hónap<input type="radio" name="box" id="box" value="2" class="" required disabled></li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/step2-img2.jpg"> 6 hónap<input type="radio" name="box" id="box" value="3" class="" required disabled></li>
    </ul>
    <div class="clear"></div>

    <div class="step2-text">
        <h2>Jó tudni:</h2>
        <p>Rendeléskor lehetőséged van regisztrálni, így később bármikor visszatérhetsz az oldalra, hogy megnézhesd rendelésed aktuális állapotát, újabb rendelést adj le vagy módosítsd a már meglévőt.</p>
        <p>Kérjük mielőtt tovább haladsz, olvasd el az ÁSZF és az Adatvédelem menüpont alatt található szabályozásokat és csak ha mindennel egyetértesz, akkor kattints a Tovább gomra és add meg személyes adataid az online rendeléshez.</p>
        <p>Köszönjük és jó rendelést!</p>
    </div>

    <div class="step2-btn-container">
        <form method="POST">
            <input type="hidden" name="order" value="1">
            <input type="hidden" name="selected_box" id="selected_box" value="">
            <input type="button" id="back" class="dark-btn claim-btn fl"  onclick="history.go(-1);return true;" value="VISSZA">
            <input type="submit" name="tovabb" id="next" value="TOVÁBB" class="dark-btn claim-btn fr">
        </form>
    </div>
    <div class="clear"></div>
</section>
