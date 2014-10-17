<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_form').on('click', function () {
            div = $('.content').filter(':visible');
            $('form', div).submit();
        });
        $('.selected_size').val($('input:radio[id^="size"]:checked').val());
        console.log($('input:radio[id^="size"]:checked').val());
        $('input:radio[id^="size"]').on('click', function () {
            $('.selected_size').val($(this).val());
            console.log($(this).val());
        });
        $('.email').on('blur', function () {
            $.post('/api/check', {'email': $(this).val()}).done(function (data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('.email').val('');
                    $('.email').focus();
                    $('.email').css('background-color', 'rosybrown');
                    $('.email').after('<label id="email-error" class="error" for="email">Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!</label>');
                }
            });
        });
        $('.email2').on('blur', function () {
            $.post('/api/check', {'email': $(this).val()}).done(function (data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('.email2').val('');
                    $('.email2').focus();
                    $('.email2').css('background-color', 'rosybrown');
                    $('.email2').after('<label id="email-error" class="error" for="email">Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!</label>');
                } else {
                    $('#email').css('background-color', 'white');
                }
            });
        });
        $('.email3').on('blur', function () {
            $.post('/api/check', {'email': $(this).val()}).done(function (data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('.email3').val('');
                    $('.email3').focus();
                    $('.email3').css('background-color', 'rosybrown');
                    $('.email3').after('<label id="email-error" class="error" for="email">Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!</label>');
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
<section class="process-1" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/shop.png" class="badge">
    <h1>Rendelés</h1>

    <div class="process-circles">
        <ul>
            <li>
                <div class="circle">1</div>
            </li>
            <li>
                <div class="circle-line c-grey"> . . . . . . . . . .</div>
            </li>
            <li>
                <div class="circle c-grey">2</div>
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
    <h2>Válaszd ki </br>mekkora a kutyus!*</h2>

    <ul class="claim-option-list">
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="1" class="" checked> Icipici<br/><br/> max 9kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="2" class=""> Éppen jó<br/><br/> 10-24kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="3" class=""> Igazi óriás<br/><br/> 25kg+</li>
    </ul>
    <div class="clear"></div>

    <h2>Kinek veszed a Goodiebox-ot?</h2>
    <div class="drop-down-form">
        <div id="collapse-content">
            <h3>Saját kutyusomnak</h3>
            <div>
                <div class="content">
                    <div class="claim-form2" style="height: 439px">
                        <form class="process-form" name="order" method="POST">
                            <label for="">E-mail címed*</label>
                            <input type="text" name="email" class="rounded email" required <?= ($current_user) ? 'value="' . $current_user->email . '"' : ""; ?> >

                            <label for="">Kutyus neve*</label>
                            <input type="text" name="puppy_name" class="rounded" id="" required>

                            <div class="radio-list">
                                <label for="last-name">Kutyus neme*</label>
                                <input style="cursor: pointer" type="radio" name="gender" value="0" class="" checked> Lány <input style="cursor: pointer" name="gender" value="1" type="radio" class=""> Fiú
                            </div>
                            <?php
                            for ($i = 1994; $i <= date('Y'); $i++)
                                $years[$i] = $i;

                            for ($i = 1; $i <= 12; $i++)
                                $months[$i] = $i;
                            ?>
                            <label for="last-name">Kutyus születésnapja*</label>
                            <div class="text-shor1 fl" style="margin-right: 10px">
                                <?php
                                echo Form::select('years', $years, '', array('required', 'class' => 'rounded option-name')) . ' ';
                                ?>
                            </div>

                            <div class="text-shor1 fl">
                                <?php
                                echo Form::select('months', $months, '', array('required', 'class' => 'rounded option-name'));
                                ?>
                            </div>
                            <div class="clear"></div>
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
                            $(".process-form").validate({
                                rules: {
                                    puppy_name: {
                                        required: true,
                                    },
                                    alerg_descr: {
                                        required: true,
                                    },
                                    email: {
                                        myCustomRule: true
                                    }
                                },
                                messages: {
                                    puppy_name: "ez az információ szükséges",
                                    alerg_descr: "ez az információ szükséges",
                                    email: "Helytelen e-mail cím!"
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>


            <h3>Barátom kutyusának</h3>
            <div>
                <div class="content">
                    <div class="process-form-container2">
                        <form class="process-form1" name="order" method="POST">

                            <label for="">E-mail címed*</label>
                            <input type="text" id="email" name="email" class="rounded email2" required <?= ($current_user) ? 'value="' . $current_user->email . '"' : ""; ?> >
                            <div>
                                <label for="last-name">Barátod vezetékneve*</label>
                                <input id="first-name" type="text" value="" name="firstname" class="rounded" required>
                            </div>
                            <div>
                                <label for="last-name">Barátod keresztneve*</label>
                                <input id="last-name" type="text" value="" name="lastname" class="rounded" required>
                            </div>
                            <div>
                                <label for="first-name">Barátod e-mail címe*</label>
                                <input id="friend_email" type="text" value="" name="friend_email"  class="rounded" required>
                            </div>
                            <div>
                                <input type="checkbox" value="1" name="delay" checked="checked"> A barátomnak ne küldd ki az ajándék kódot! Csak én kérem és majd később meglepem vele!
                            </div>
                            <p style="padding-top:20px;">*Kötelező mezők adategyeztetés miatt</p>
                            <input type="hidden" name="order2" value="1">
                            <input type="hidden" name="selected_size" class="selected_size">
                        </form>
                        <script>
                            $(".process-form1").validate({
                                rules: {
                                    'firstname': {
                                        required: true,
                                    },
                                    'lastname': {
                                        required: true,
                                    },
                                    'email': {
                                        myCustomRule: true
                                    },
                                    'friend_email': {
                                        myCustomRule: true
                                    }
                                },
                                messages: {
                                    'firstname': "ez az információ szükséges",
                                    'lastname': "ez az információ szükséges",
                                    'friend_email': "Helytelen e-mail cím!",
                                    'email': "Helytelen e-mail cím!"
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!--
                        <h3>Menhelyi kutyusnak</h3>
                        <div>
                            <div class="content">
                                <div class="process-form-container2">
                                    <form class="process-form2" name="order" method="POST">
                                        
                                        <label for="">E-mail cím*</label>
                                        <input type="text" name="email" class="rounded email3" required <?= ($current_user) ? 'value="' . $current_user->email . '"' : ""; ?> >
                                        
                                        <div>
                                            <label for="">Menhely neve*</label>
                                            <select name="option-name" class="rounded option-name" required>
            <?php
            $shelters = ORM::factory('Shelter')->find_all();
            foreach ($shelters as $shelter) {
                ?>
                                                            <option value="<?= $shelter->id ?>"><?= $shelter->shelter_name ?></option>
                <?php
            }
            ?>
                                            </select>
                                        </div>
                                        <label for="">Kutyus neve*</label>
                                        <input type="text" name="doggy_name" class="rounded" id="" required>
            
                                        <div class="radio-list">
                                            <label for="last-name">Kutyus neme*</label>
                                            <input type="radio" name="gender" value="0" class="" checked> Lány <input type="radio" name="gender" value="1" class=""> Fiú
                                        </div>
                                        <p style="padding-top:20px;">*Kötelező mezők adategyeztetés miatt</p>
                                        <input type="hidden" name="order3" value="1">
                                        <input type="hidden" name="selected_size" class="selected_size">
                                    </form>
                                    <script>
                                        $(".process-form2").validate();
                                    </script>
                                </div>
                            </div>
                        </div>
            -->
            <script>
                $("#collapse-content").collapse({
                    accordion: true,
                    open: function () {
                        this.addClass("open");
                        this.css({height: this.children().outerHeight()});
                    },
                    close: function () {
                        this.css({height: "0px"});
                        this.removeClass("open");
                    }
                });
            </script>
            <div class="claim-form-btn">
                <input type="submit" name="tovabb" value="TOVÁBB" id="submit_form" class="dark-btn claim-btn rounded" style="margin-right:20px;">
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>
