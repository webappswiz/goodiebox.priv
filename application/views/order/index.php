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
                    $('.email').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
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
                    $('.email2').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
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
                    $('.email3').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
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
            required: "<?php echo __('ez az információ szükséges'); ?>",
            equalTo: "<?php echo __('Kérjük, adja ugyanazt az értéket újra'); ?>"
        });
        $.validator.addMethod("myCustomRule", function (value, element) {
            return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
        }, "Custom message for this rule");
    });
</script>
<div class="clear"></div>
<section class="process-1" class="rounded">
    <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/shop.png" class="badge">
    <h1><?php echo __('Rendelés'); ?></h1>

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
    <h2 style="margin-bottom: 40px;"><?php echo __('Válaszd ki </br>mekkora a kutyus!*'); ?></h2>

    <ul class="claim-option-list">
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/claim-dogs1.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="1" class="" checked><?php echo __('Icipici'); ?><br/><br/> max 9kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/claim-dogs2.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="2" class=""><?php echo __('Éppen jó'); ?><br/><br/> 10-24kg</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/claim-dogs3.jpg"><input style="cursor: pointer" type="radio" id="size" name="group1" value="3" class=""><?php echo __('Igazi óriás'); ?><br/><br/> 25kg+</li>
    </ul>
    <div class="clear"></div>

    <h2><?php echo __('Kinek veszed a Goodiebox-ot?'); ?></h2>
    <div class="drop-down-form">
            <div>
                <div class="content">
                    <div class="claim-form2">
                        <form class="process-form" name="order" method="POST">
                            <label for=""><?php echo __('E-mail címed*'); ?></label>
                            <input type="text" name="email" class="rounded email" required <?= ($current_user) ? 'value="' . $current_user->email . '"' : ""; ?> >

                            <label for=""><?php echo __('Kutyus neve*'); ?></label>
                            <input type="text" name="puppy_name" class="rounded" id="" required>

                            <div class="radio-list">
                                <label for="last-name"><?php echo __('Kutyus neme*'); ?></label>
                                <input style="cursor: pointer" type="radio" name="gender" value="0" class="" checked><?php echo __('Lány'); ?>  <input style="cursor: pointer" name="gender" value="1" type="radio" class=""><?php echo __('Fiú'); ?> 
                            </div>
                            <?php
                            for ($i = 1994; $i <= date('Y'); $i++)
                                $years[$i] = $i;

                            for ($i = 1; $i <= 12; $i++)
                                $months[$i] = $i;
                            ?>
                            <label for="last-name"><?php echo __('Kutyus születésnapja*'); ?></label>
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
                                <label for="Igen"><?php echo __('Allergiás a kutyusod?*'); ?></label>
                                <input style="cursor: pointer" type="radio" class="alerg_yes" value="1" name="alerg"><?php echo __('Igen'); ?>  <input style="cursor: pointer" type="radio" value="0" name="alerg" class="alerg_no" checked><?php echo __('Nem'); ?> 
                            </div>

                            <label style="display:none" for="last-name" id="al_label"><?php echo __('Ha igen, mire?'); ?></label>
                            <input style="display:none" type="text" name="alerg_descr" class="rounded" id="alerg_descr">

                            <p style="padding-top:20px;"><?php echo __('*Kötelező adatok'); ?></p>
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
                                    puppy_name: "<?php echo __('ez az információ szükséges'); ?>",
                                    alerg_descr: "<?php echo __('ez az információ szükséges'); ?>",
                                    email: "<?php echo __('Helytelen e-mail cím!'); ?>"
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
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
                <input type="submit" name="tovabb" value="<?php echo __('TOVÁBB'); ?>" id="submit_form" class="dark-btn claim-btn rounded" style="margin-right:20px;">
            </div>
            <div class="clear"></div>
        
    </div>
</section>
