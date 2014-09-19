<script type="text/javascript">
    $(document).ready(function() {
        $('#submit_form').on('click', function() {
            div = $('.content').filter(':visible');
            $('form', div).submit();
        });
        $('.selected_size').val($('input:radio[id^="size"]:checked').val());
        $('input:radio').on('click', function() {
            $('.selected_size').val($(this).val());
        });
        $('#email').on('blur', function() {
            $.post('/api/check', {'email': $(this).val()}).done(function(data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('#email').val('');
                    $('#email').focus();
                    $('#email').css('background-color', 'rosybrown');
                    $('#email').after('<label id="email-error" class="error" for="email">Email is already registered. Please login in your account.</label>');
                }
            });
        });
        $('.alerg_yes').on('click', function() {
            $('#alerg_descr').attr('required', 'required');
        });
        $('.alerg_no').on('click', function() {
            $('#alerg_descr').removeAttr('required');
        });
    });
</script>

<nav style="text-align: right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
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
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><input type="radio" id="size" name="group1" value="1" class="" checked> Icipici</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"><input type="radio" id="size" name="group1" value="2" class=""> Éppen jó</li>
        <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"><input type="radio" id="size" name="group1" value="3" class=""> Igazi óriás</li>
    </ul>
    <div class="clear"></div>

    <h2>Kinek veszed a Goodiebox-ot?</h2>
    <div class="drop-down-form">
        <div id="collapse-content">
            <h3>Saját kutyusomnak</h3>
            <div>
                <div class="content">
                    <div class="claim-form2">
                        <form class="process-form" name="order" method="POST">
                            <label for="">E-mail cím*</label>
                            <input type="text" name="email" class="rounded" id="email" required <?= ($current_user) ? 'value="' . $current_user->email . '"' : ""; ?> >

                            <label for="">Kutyus neve</label>
                            <input type="text" name="puppy_name" class="rounded" id="" required>

                            <div class="radio-list">
                                <label for="last-name">Kutyus neme*</label>
                                <input type="radio" name="gender" value="0" class="" checked> Lány <input name="gender" value="1" type="radio" class=""> Fiú
                            </div>
                            <?php
                            for ($i = 1994; $i <= date('Y'); $i++)
                                $years[$i] = $i;

                            for ($i = 1; $i <= 12; $i++)
                                $months[$i] = $i;
                            ?>
                            <label for="last-name">Kutyus születésnapja*</label>
                            <div class="text-shor1 fl">
                                <?php
                                echo Form::select('years', $years, '', array('required', 'class' => 'rounded option-name'));
                                ?>
                            </div>
                            <div class="text-shor2">
                                <?php
                                echo Form::select('months', $months, '', array('required', 'class' => 'rounded option-name'));
                                ?>
                            </div>

                            <div class="radio-list">
                                <label for="Igen">Allergiás a kutyusod?*</label>
                                <input type="radio" class="alerg_yes" value="1" name="alerg"> Igen <input type="radio" value="0" name="alerg" class="alerg_no" checked> Nem
                            </div>

                            <label for="last-name">Ha igen, mire?</label>
                            <input type="text" name="alerg_descr" class="rounded" id="alerg_descr">

                            <p style="padding-top:20px;">*Kötelező adatok</p>
                            <input type="hidden" name="order1" value="1">
                            <input type="hidden" name="selected_size" class="selected_size">
                        </form>
                        <script>
                            $(".process-form").validate();
                        </script>
                    </div>
                </div>
            </div>


            <h3>Barátom kutyusának</h3>
            <div>
                <div class="content">
                    <div class="process-form-container2">
                        <form class="process-form1" name="order" method="POST">
                            <div>
                                <label for="last-name">Barátod neve*</label>
                                <input id="last-name" type="text" value="" name="first-name" class="rounded" required>
                            </div>

                            <div>
                                <label for="first-name">Barátod e-mail címe*</label>
                                <input id="" type="text" value="" name="email"  class="rounded" required>
                            </div>
                            <p style="padding-top:20px;">*Kötelező mezők adategyeztetés miatt</p>
                            <input type="hidden" name="order2" value="1">
                            <input type="hidden" name="selected_size" class="selected_size">
                        </form>
                        <script>
                            $(".process-form1").validate();
                        </script>
                    </div>
                </div>
            </div>

            <h3>Menhelyi kutyusnak</h3>
            <div>
                <div class="content">
                    <div class="process-form-container2">
                        <form class="process-form2" name="order" method="POST">
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
            <script>
                $("#collapse-content").collapse({
                    accordion: true,
                    open: function() {
                        this.addClass("open");
                        this.css({height: this.children().outerHeight()});
                    },
                    close: function() {
                        this.css({height: "0px"});
                        this.removeClass("open");
                    }
                });
            </script>
            <div class="claim-form-btn">
                <input type="submit" name="tovabb" value="TOVÁBB" id="submit_form" class="dark-btn claim-btn" style="margin-right:20px;">
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>
