<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_form').on('click', function () {
            console.log($('#billing_form').validate());
            if ($('#billing_form').valid()) {
                if ($('#doggy_form').valid()) {
                    $.each($('#doggy_form input, #doggy_form select, #doggy_form textarea').serializeArray(), function (i, obj) {
                        $('<input type="hidden">').prop(obj).appendTo($('#billing_form'));
                    });
                    $('#billing_form').submit();
                }

            }
        });
        if (!$('#tos').prop(':checked')) {
            $('#submit_form').attr('disabled', 'disabled');
        }
        $('#tos').on('click', function () {
            if ($(this).is(':checked')) {
                $('#submit_form').removeAttr('disabled');
            } else {
                $('#submit_form').attr('disabled', 'disabled');
            }
        })
        $('.selected_size').val($('input:radio[id^="size"]:checked').val());
        $('input:radio').on('click', function () {
            $('.selected_size').val($(this).val());
        });
        $('#email').on('blur', function () {
            $.post('/api/check', {'email': $(this).val()}).done(function (data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('#email').val('');
                    $('#email').focus();
                    $('#email').css('background-color', '#eb99ad');
                    $('#email').after('<label id="email-error" class="error" for="email">Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!</label>');
                } else {
                    $('#email').css('background-color', 'white');
                }
            });
        });
        $('.alerg_yes').on('click', function () {
            $('#al_label').show();
            $('#alerg_descr').show();
            $('#alerg_descr').attr('required', 'required');
        });
        $('.alerg_no').on('click', function () {
            $('#al_label').hide();
            $('#alerg_descr').hide();
            $('#alerg_descr').removeAttr('required');
        });
        $("#customer_telephone").mask("+36 99 999-99-99");
        $.extend($.validator.messages, {
            required: "ez az információ szükséges",
            equalTo: "Kérjük, adja ugyanazt az értéket újra"
        });
        $.validator.addMethod("myCustomRule", function (value, element) {
            return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
        }, "Custom message for this rule");
    });
</script>
<div class="clear"></div>
<section class="claim-gift" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/gift-mark.png" class="badge">
    <h1>Ajándékom van!</h1>
    <h2>Kérlek, add meg az adataid!</h2>
    <div class="claim-form-container">
        <div class="claim-form">
            <h2>Szállítási adatok</h2>
            <p>Ország</p>
            <h4>Magyarország</h4>
            <form id="billing_form" method="POST" autocomplete="off">
                <div style="margin-right:5px;" class="fl">
                    <label for="customer_firstname">Vezetéknév*</label>
                    <input id="customer_firstname" type="text" value="" name="customer_firstname" class="rounded" required>
                </div>

                <div style="overflow:hidden;">
                    <label for="customer_lastname">Keresztnév*</label>
                    <input id="customer_lastname" type="text" value="" name="customer_lastname" class="rounded" required>
                </div>
                <div class="clear"></div>
                <div class="add">
                    <label for="customer_address">Cím*</label>
                    <input type="text" name="customer_address" class="rounded" id="" placeholder="Utca, házszám, ajtó, emelet" required>
                    <input type="text" name="customer_address2" class="rounded" id="customer_address2">
                </div>

                <div>
                    <label for="customer_zip">Irányítószám*</label>
                    <input type="text" name="customer_zip" class="rounded" id="customer_zip" required>
                </div>
                <div class="add">
                    <label for="customer_city">Város*</label>
                    <input type="text" name="customer_city" class="rounded" id="customer_city" required>
                </div>
                <div class="fl" style="margin-right:5px;">
                    <label for="customer_email">E-mail cím*</label>
                    <input type="text" name="customer_email" class="rounded" id="email" required>
                </div>
                <div>
                    <label for="customer_telephone">Telefonszám*</label>
                    <input type="text" name="customer_telephone" class="rounded" id="customer_telephone" required>
                </div>
                <p style="margin-top:15px;">E-mail cím és jelszó megadása szükséges ahhoz, hogy később bejelentkezhess a Goodiebox fiókodba, követhesd aktuális rendelésed, módosíthasd a már meglévő adataidat vagy ha nincs rá szükséged, törölhesd.</p>
                <div>
                    <label for="customer_password">Jelszó*</label>
                    <input type="password" name="customer_password" class="rounded" id="customer_password" required>
                    <label for="password_confirm">Jelszó megerősítése*</label>
                    <input type="password" name="password_confirm" class="rounded" id="password_confirm" required>
                </div>
                <div class="claim-message">
                    <label for="message">Megjegyzés</label>
                    <textarea name="message" class="rounded"></textarea>
                </div>
                <p style="padding-top:20px;">*Az adatok megadása kötelező!</p>
                <input type="hidden" name="submit_form" value="1">
            </form>

        </div> <!--End claim form-->
        <script>
            $("#billing_form").validate({
                rules: {
                    customer_password: {
                        minlength: 5
                    },
                    password_confirm: {
                        equalTo: "#customer_password", minlength: 5
                    },
                    customer_email: {
                      myCustomRule: true
                    },
                    customer_zip: {
                        digits: true,
                        maxlength: 4,
                        minlength: 4
                    }
                },
                messages: {
                    customer_email: "Helytelen e-mail cím!",
                }
            });
        </script>
    </div><!--End claim orm container-->
    <div class="clear"></div>
    <h2>Válaszd ki </br>mekkora a kutyus!*</h2>
    <ul class="claim-option-list">
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><p> Icipici<input type="radio" id="size" name="group1" value="1" class="" checked></p><br/><br/> max 9kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"> Éppen jó<input type="radio" id="size" name="group1" value="2" class="" ><br/><br/> 10-24kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"> Igazi óriás<input type="radio" id="size" name="group1" value="3" class="" ><br/><br/> 25kg+</li>
    </ul>
    <div class="clear"></div>
    <div class="claim-form2">
        <form id="doggy_form" method="POST">
            <label for="">Kutyus neve</label>
            <input type="text" name="puppy_name" class="rounded" id="" required>

            <div class="radio-list">
                <label for="last-name">Kutyus neme*</label>
                <input type="radio" name="gender" class="" value="0" checked="checked"> Lány <input name="gender" value="1" type="radio" class=""> Fiú
            </div>

            <?php
            for ($i = 1994; $i <= date('Y'); $i++)
                $years[$i] = $i;

            for ($i = 1; $i <= 12; $i++)
                $months[$i] = $i;
            ?>
            <label for="last-name">Kutyus születésnapja*</label>
            <div class="text-shor1 fl" style="margin-right:10px">
                <?php
                echo Form::select('years', $years, '', array('required', 'class' => 'rounded option-name'));
                ?>
            </div>
            <div class="text-shor1 fl">
                <?php
                echo Form::select('months', $months, '', array('required', 'class' => 'rounded option-name'));
                ?>
            </div>
            <br/>
            <br/>

            <div class="radio-list">
                <label for="Igen">Allergiás a kutyusod?*</label>
                <input style="cursor: pointer" type="radio" class="alerg_yes" value="1" name="alerg"> Igen <input style="cursor: pointer" type="radio" value="0" name="alerg" class="alerg_no" checked> Nem
            </div>

            <label style="display:none" for="last-name" id="al_label">Ha igen, mire?</label>
            <input style="display:none" type="text" name="alerg_descr" class="rounded" id="alerg_descr">

            <p style="padding-top:20px;">*Kötelező adatok</p>
            <input type="hidden" name="order1" value="1">
            <input type="hidden" name="selected_size" class="selected_size">
        </form>
        <script>
            $("#doggy_form").validate();
        </script>
    </div>
    <div class="claim-form-btn">
        <span>Elolvastam és megértettem az ÁSZF-et</span><input type="checkbox" id="tos">
        <input type="submit" id="submit_form" name="submit_form" value="KÉREM MOST" class="dark-btn claim-btn">
    </div>
    <div class="clear"></div>
</section>