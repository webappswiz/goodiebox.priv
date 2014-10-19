<?php
$auth = Auth::instance();
$session = Session::instance();
if ($auth->logged_in())
    $current_user = $auth->get_user();
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#customer_email').on('blur', function () {
            $.post('/api/check', {'email': $(this).val()}).done(function (data) {
                var i = $.parseJSON(data);
                if (i.msg == 1) {
                    $('#customer_email').val('');
                    $('#customer_email').focus();
                    $('#customer_email').css('background-color', 'rosybrown');
                    $('#customer_email').after('<label id="email-error" class="error" for="email">Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!</label>');
                } else {
                    $('#email').css('background-color', 'white');
                }
            });
        });

        if (!$('#tos').prop(':checked')) {
            $('#submit').attr('disabled', 'disabled');
        }

        $('#discount_box').on('click', function () {
            if ($(this).is(':checked')) {
                $('#discount').val('1');
                $('#discount1').html(discount + ' HUF');
                var final_price = total_price - discount;
                $('#total_price').html(final_price + ' HUF');
            } else {
                $('#discount1').html('0000 HUF');
                $('#total_price').html(total_price + ' HUF');
                $('#discount').val('0');
            }
        });

        $('#tos').on('click', function () {
            if ($(this).is(':checked')) {
                $('#submit').removeAttr('disabled');
            } else {
                $('#submit').attr('disabled', 'disabled');
            }
        });
        $('#shipping').on('click', function () {
            if ($('#shipping_form').is(':visible')) {
                $('#shipping_form').slideUp();
            } else {
                $('#shipping_form').show('slow');
            }
        });
        $('#company').on('click', function () {
            if ($('#company').is(':checked')) {
                $('#tax').show();
                $('#company_name').attr('required', 'required');
                $('#tax_code').attr('required', 'required');
            } else {
                $('#tax').hide();
                $('#company_name').removeAttr('required');
                $('#tax_code').removeAttr('required');
            }
        });
        $('#submit').on('click', function () {
            if ($('#shipping').is(':checked')) {
                if ($('#shipping_form').valid()) {
                    $.each($('#shipping_form input, #shipping_form select, #shipping_form textarea').serializeArray(), function (i, obj) {
                        $('<input type="hidden">').prop(obj).appendTo($('#billing_form'));
                    });
                    $('#msg').val($('#message').val());
                    $('#submit').attr('disabled', 'disabled');
                    $('#billing_form').submit();
                }

            } else {
                $('#msg').val($('#message').val());
                $('#submit').attr('disabled', 'disabled');
                $('#billing_form').submit();
            }
        });

        $('#apply_coupon').on('click', function () {
            if ($('#coupon_id').val() != '') {
                $('#coupon_code').val($('#coupon_id').val());
                $('.box.rounded').hide();
            }
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
<?php
$session = Session::instance()->as_array();
if (isset($session['step1'])) {
    $size = $session['step1']['selected_size'];
}
if (isset($session['step2'])) {
    $box = $session['step2']['selected_box'];
}
?>
<div class="clear"></div>
<section class="process-3" class="rounded">
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
                <div class="circle-line ">. . . . . . . . . .</div>
            </li>
            <li>
                <div class="circle " style="color:#cc0000;border-color:#cc0000;">3</div>
            </li>
        </ul>

    </div>
    <div class="clear"></div>
    <h2>Válaszd ki </br>milyen periódust szeretnél!</h2>
    <div class="claim-box1">
        <div class="box rounded">
            <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/claim-i.png">
            <div id="collapse-content">
                <h3>Ha van kuponod, itt beválthatod.  <span>KLIKK ide!</span></h3>
                <div>
                    <div class="content">
                        <div class="login">
                            <form class="coupon">
                                Ajándékkupon kódom <input type="text" id="coupon_id" name="coupon" class="rounded" id="">
                                <input type="button" id="apply_coupon" value="OK" class="box-btn rounded">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>	<!--End claim box1-->
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
        <div class="claim-form-container">
            <div class="claim-form">
                <h2>Számlázási adatok</h2>
                <p>Ország</p>
                <h4>Magyarország</h4>
                <form name="billing_form" id="billing_form" method="POST">
                    <input type="hidden" name="form" value="1">
                    <div style="margin-right:5px;" class="fl">
                        <label for="customer_lastname">Vezetéknév*</label>
                        <input type="text" value="<?= ($current_user) ? $current_user->customer_lastname : ''; ?>" name="customer_lastname" id="customer_lastname" class="rounded" required>
                    </div>

                    <div style="overflow:hidden;">
                        <label for="customer_firstname">Keresztnév*</label>
                        <input type="text" value="<?= ($current_user) ? $current_user->customer_firstname : ''; ?>" name="customer_firstname" id="customer_firstname" class="rounded" required>
                    </div>
                    <div class="clear"></div>
                    <div class="add">
                        <label for="customer_address">Cím*</label>
                        <input type="text" name="customer_address" value="<?= ($current_user) ? $current_user->customer_address : ''; ?>" class="rounded" id="customer_address" placeholder="Utca, házszám, ajtó, emelet" required>
                        <input type="text" name="customer_address2" value="<?= ($current_user) ? $current_user->customer_address2 : ''; ?>" class="rounded" id="customer_address2">
                    </div>

                    <div>
                        <label for="customer_zip">Irányítószám*</label>
                        <input type="text" name="customer_zip" class="rounded" id="customer_zip" value="<?= ($current_user) ? $current_user->customer_zip : ''; ?>" required>
                    </div>
                    <div class="add">
                        <label for="customer_city">Város*</label>
                        <input type="text" name="customer_city" class="rounded" id="customer_city" value="<?= ($current_user) ? $current_user->customer_city : ''; ?>" required>
                    </div>
                    <?php
                    if (!$auth->logged_in()):
                        $email = $session['step1']['email'];
                        ?>
                        <div class="fl" style="margin-right:5px;">
                            <label for="customer_email">E-mail cím*</label>
                            <input type="text" name="customer_email" class="rounded" value="<?= $email ?>" id="customer_email" required>
                        </div>
                    <?php endif; ?>
                    <div>
                        <label for="customer_telephone">Telefonszám*</label>
                        <input type="text" name="customer_telephone" class="rounded" id="customer_telephone" value="<?= ($current_user) ? $current_user->customer_telephone : ''; ?>" required>
                    </div>
                    <?php if (!$auth->logged_in()): ?>
                        <p style="margin-top:15px;">E-mail cím és jelszó megadása szükséges ahhoz, hogy később bejelentkezhess a Goodiebox fiókodba, követhesd aktuális rendelésed, módosíthasd a már meglévő adataidat vagy ha nincs rá szükséged, törölhesd.</p>

                        <div>
                            <label for="customer_password">Jelszó*</label>
                            <input type="password" name="customer_password" class="rounded" id="customer_password" required>
                            <label for="password_confirm">Jelszó megerősítése*</label>
                            <input type="password" name="password_confirm" class="rounded" id="password_confirm" required>
                        </div>
                    <?php endif; ?>
                    <input type="hidden" name="coupon_code" id="coupon_code" value="">
                    <input type="hidden" name="discount" id="discount" value="">
                    <div style="margin-top:20px;">
                        <span>ÁFÁS számlát szeretnék</span><input type="checkbox" name="company" id="company">
                    </div>
                    <div id="tax" style="display:none">
                        <div>
                            <label for="company_name">Cégnév</label>
                            <input type="text" name="company_name" class="rounded" id="company_name" value="<?= ($current_user) ? $current_user->customer_company : ''; ?>">
                        </div>
                        <div>
                            <label for="tax_code">Adószám</label>
                            <input type="text" name="tax_code" class="rounded" id="tax_code" value="<?= ($current_user) ? $current_user->customer_company : ''; ?>">
                        </div>
                    </div>
                    <input type="hidden" name="msg" value="" id="msg">
                </form>
                <script>
                    $.extend($.validator.messages, {
                        required: "ez az információ szükséges",
                        equalTo: "A jelszó nem egyezik"
                    });
                    $("#billing_form").validate({
                        rules: {
                            customer_password: {
                                required: true, minlength: 5
                            },
                            password_confirm: {
                                required: true, equalTo: "#customer_password", minlength: 5
                            },
                            customer_email: {
                                myCustomRule: true
                            },
                            customer_zip: {
                                required: true,
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
            </div> <!--End claim form-->

            <div class="claim-form claim-form-right">
                <span>A szállítási cím nem egyezik?</span><input type="checkbox" id="shipping">
                <form name="shipping_form" id="shipping_form" method="POST" style="display: none;">
                    <p>Ország</p>
                    <input type="hidden" name="shipping" value="1">
                    <h4>Magyarország</h4>
                    <div style="margin-right:5px;" class="fl">
                        <label for="delivery_lastname">Vezetéknév*</label>
                        <input id="delivery_lastname" type="text" value="" name="delivery_lastname" class="rounded" required>
                    </div>

                    <div style="overflow:hidden;">
                        <label for="delivery_firstname">Keresztnév*</label>
                        <input id="delivery_firstname" type="text" value="" name="delivery_firstname" class="rounded" required>
                    </div>
                    <div class="clear"></div>
                    <div class="add">
                        <label for="delivery_address">Cím*</label>
                        <input type="text" name="delivery_address" class="rounded" id="delivery_address" value="" placeholder="Utca, házszám, ajtó, emelet" required>
                        <input type="text" name="delivery_address2" class="rounded" id="delivery_address2" value="">
                    </div>

                    <div>
                        <label for="delivery_zip">Irányítószám*</label>
                        <input type="text" name="delivery_zip" class="rounded" id="delivery_zip" value="" required>
                    </div>
                    <div class="add">
                        <label for="delivery_city">Város*</label>
                        <input type="text" name="delivery_city" class="rounded" id="delivery_city" value="" required>
                    </div>

                </form>
                <div style="margin-top:80px;" class="add">
                    <label for="message">Megjegyzés</label>
                    <textarea style="margin-top: 5px;border: 3px solid #330000; padding: 5px; outline: none;" name="message" id="message" class="rounded"></textarea>
                </div>
                <script>

                </script>
            </div> <!--End claim form-->
        </div><!--End claim form container-->
        <div class="order-form">
            <h2>Rendelésem</h2>
            <div class="order-container rounded">
                <div class="inner">
                    <div class="order-content-left">
                        <div class="order-heading-left">
                            <h3>Termék</h3>
                        </div>
                        <div class="order-text-left">
                            <?php
                            $step1 = $session['step1'];
                            $step2 = $session['step2'];
                            if ($step1['selected_size'] == 1)
                                $size = 'Icipici';
                            if ($step1['selected_size'] == 2)
                                $size = 'Éppen jó';
                            if ($step1['selected_size'] == 3)
                                $size = 'Igazi óriás';
                            ?>
                            <span>GOODIEBOX <?php echo $step2['selected_box'] ?> </span>hónapra</br>Választott kutyus méret: <?php echo $size ?>
                            <p>Házhozszállítás</p>
                            <p>Kedvezmény</p>
                        </div>
                        <div class="order-heading-leftbottom">
                            <h3>Összesen</h3>
                        </div>

                    </div>

                    <div class="order-content-right">
                        <div class="order-heading-right">
                            <h3>Összeg</h3>
                        </div>
                        <div class="order-text-right">
                            <span><?= $price->price ?> HUF</span><br>&nbsp;
                            <p>Ingyenes</p>
                            <p></p>
                            <p id="discount1">0000 HUF</p>
                        </div>
                        <div class="order-heading-rightbottom">
                            <h3 id="total_price"><?= round($price->price) ?> HUF</h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($current_user): ?>
                <br/><br/>
                <?php
                $invites = ORM::factory('Invites')
                        ->where('user_id', '=', $current_user->id)
                        ->and_where('is_registered', '=', 1)
                        ->and_where('is_paid', '=', 1)
                        ->and_where('is_used', '=', 0)
                        ->count_all();
                $global_discount = ORM::factory('Discounts')
                        ->where('user_id', '=', $current_user->id)
                        ->find();
                if ($global_discount->loaded()) {
                    $g_discount = $global_discount->discount;
                } else {
                    $g_discount = 0;
                }
                if ($invites > 0 || $g_discount > 0):
                    ?>
                    <div><strong>Jelenlegi kedvezményed: <?= $invites * 5 + $global_discount->discount ?> %</strong><br/><br/>
                        Szeretnéd most felhasználni?
                        <input type="checkbox" name="discount_box" id="discount_box">
                    </div>
                    <?php
                endif;
            endif;
            ?>
        </div>
        <div class="claim-form-btn">
            <span style="font-size: 18px;font-weight: 300;margin-right: 0px;vertical-align: middle">Elolvastam és megértettem az <a style="color:#cc0033" href="<?=URL::base(TRUE, FALSE)?>aszf.pdf">ÁSZF-et</a></span> <input type="checkbox" id="tos">
            <input type="submit" id="submit" name="submit" value="MEGRENDELEM" class="dark-btn claim-btn rounded">
        </div>
        <div class="clear"></div>
</section>
