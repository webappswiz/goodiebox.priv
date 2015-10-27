<style type="text/css">
    #dialog-form{
        display:none; /* Hide the DIV */
        position:fixed;
        _position:absolute; /* hack for internet explorer 6 */
        height:550px;
        width:350px;
        background:#FFFFFF;
        margin: 0 auto;
        z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
        left: 50%;
        top: 50%;
        margin-left: -125px;
        margin-top: -275px;

        /* additional features, can be omitted */
        border:2px solid #ff0000;
        padding:15px;
        font-size:15px;
        -moz-box-shadow: 0 0 5px #ff0000;
        -webkit-box-shadow: 0 0 5px #ff0000;
        box-shadow: 0 0 5px #ff0000;
    }
    #popupBoxClose {
        font-size:20px;
        line-height:15px;
        right:5px;
        top:5px;
        position:absolute;
        color:#6fa5e2;
        font-weight:500;
        cursor: pointer;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_form').on('click', function () {
            $('.process-form1').submit();
        });
        $('#submit_form_shelt').on('click', function () {
            $('.process-form2').submit();
        });
        $('#submit_form_f').on('click', function () {
            $('#gift').submit();
        });
        $('#submit_form_invite').on('click', function () {
            $('.process-form3').submit();
        });

        $('.selected_size').val($('input:radio[class^="size"]:checked').val());
        console.log($('.selected_size').val());
        $('.size').on('click', function () {
            $('.selected_size').val($(this).val());
        });
        // When site loaded, load the Popupbox First
        $('#create-dog').on('click', function () {
            loadPopupBox();
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
        $('#popupBoxClose').click(function () {
            unloadPopupBox();
        });
        $('#submit_shelter').on('click', function () {
            $('#shelter').submit();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#dialog-form').fadeOut("slow");
            $("#container").css({// this is just for style
                "opacity": "1"
            });
        }

        function loadPopupBox() {    // To Load the Popupbox
            $('#dialog-form').fadeIn("slow");
            $("#container").css({// this is just for style
                "opacity": "0.3"
            });
        }
        $('.delete-btn').on('click', function () {
            $(this).closest('.dog-profile').find('.delete-dog').show('slow');
        });
        $('.cancel').on('click', function () {
            $(this).closest('.dog-profile').find('.delete-dog').slideUp();
        });
        $("#telephone").mask("+36 99 999-99-99");
        $.extend($.validator.messages, {
            required: "<?php echo __('ez az információ szükséges'); ?>",
            equalTo: "<?php echo __('Kérjük, adja ugyanazt az értéket újra'); ?>"
        });
        $.validator.addMethod("myCustomRule", function (value, element) {
            return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
        }, "Custom message for this rule");
    });
</script>
<div id="dialog-form" title="Add a new dog">
    <script>
        $(".process-form").validate();
    </script>
    <div class="claim-form2">
        <form class="process-form" name="order" method="POST" action="/user_account/addDog">
            <label for=""><?php echo __('Kutyus neve'); ?></label>
            <input type="text" name="puppy_name" class="rounded" id="" required>
            <div class="radio-list">
                <label for="last-name"><?php echo __('Válaszd ki mekkora a kutyus!*'); ?></label>
                <input type="radio" name="size" value="1" class="" checked> <?php echo __('Icipici (max 9kg)'); ?> <input name="size" value="2" type="radio" class=""> <?php echo __('Éppen jó(10-24kg)'); ?>
                <input name="size" value="3" type="radio" class=""> <?php echo __('Igazi óriás(25kg+)'); ?>
            </div>
            <div class="radio-list">
                <label for="last-name"><?php echo __('Kutyus neme*'); ?></label>
                <input type="radio" name="gender" value="0" class="" checked> <?php echo __('Lány'); ?> <input name="gender" value="1" type="radio" class=""> <?php echo __('Fiú'); ?>
            </div>
            <?php
            for ($i = 1994; $i <= date('Y'); $i++)
                $years[$i] = $i;

            for ($i = 1; $i <= 12; $i++)
                $months[$i] = $i;
            ?>
            <label for="last-name"><?php echo __('Kutyus születésnapja*'); ?></label>
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
                <label for="Igen"><?php echo __('Allergiás a kutyusod?*'); ?></label>
                <input type="radio" class="alerg_yes" value="1" name="alerg"> <?php echo __('Igen'); ?> <input type="radio" value="0" name="alerg" class="alerg_no" checked> <?php echo __('Nem'); ?>
            </div>

            <label style="display:none" for="last-name" id="al_label"><?php echo __('Ha igen, mire?'); ?></label>
            <input style="display:none" type="text" name="alerg_descr" class="rounded" id="alerg_descr">

            <p style="padding-top:20px;"><?php echo __('*Kötelező adatok'); ?></p>
            <input type="hidden" name="order1" value="1">
            <input type="hidden" name="selected_size" class="selected_size">
            <div>
                <input type="submit" value="<?php echo __('GYERÜNK'); ?>" class="dark-btn dog-prof-btn rounded">
            </div>
        </form>
        <a id="popupBoxClose"><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/delete.png"></a>
    </div>
</div>
<?php
$options = ORM::factory('Options', 1);
$text = $options->text;
$end_date = $options->end_date;
$status = $options->status;
$date_array = explode(' ', $end_date);
$date = explode('/', $date_array[0]);
$time = explode(':', $date_array[1]);
?>
<script type="text/javascript">

</script>
<div class="clear"></div>
<section class="claim-gift" class="rounded" id="container">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/profile-icon.png" class="badge" style="top:-65px;">
    <h1><?php echo __('Saját profilom'); ?></h1>
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
    } else
        $g_discount = 0;
    $discount = $invites * 5 + $g_discount . '%';
    ?>
    <style type="text/css">
        #progressbar {
            background-color:  #ff6699;
            border-radius: 13px; /* (height of inner div) / 2 + padding */
            padding: 3px;
        }

        #progressbar > div {
            background-color: #330000;
            width: <?= $discount ?>; /* Adjust with JavaScript */
            height: 20px;
            border-radius: 10px;
            text-align:center;
            color: white;
        }

    </style>

    <div id="progressbar">
        <div><?= $discount ?></div>
    </div>
    <div id="collapse-content">

        <h3><?php echo __('Személyes adataim<p class="sub-heading">Amennyiben szeretnéd, bármikor megváltoztathatod az adataidat.</p><p class="sub-heading">Új rendelés előtt kérjük mindig ellenőrizd a számlázási és a szállítási címet is!</p>'); ?></h3>
        <div>
            <div class="content">
                <div class="claim-form-container">
                    <div class="claim-form">
                        <h2><?php echo __('Szállítási adatok'); ?></h2>
                        <p><?php echo __('Ország'); ?></p>
                        <h4><?php echo __('Magyarország'); ?></h4>


                        <form method="POST" action="/user_account/editShipping" id="shipping">
                            <div style="margin-right:6px;" class="fl">
                                <label for="last-name"><?php echo __('Vezetéknév*'); ?></label>
                                <input id="last-name" type="text" name="last-name" class="rounded" value="<?= ($shipping) ? $shipping->customer_lastname : $current_user->customer_lastname ?>" required>
                            </div>

                            <div style="overflow:hidden;">
                                <label for="first-name"><?php echo __('Keresztnév*'); ?></label>
                                <input id="" type="text" name="first-name" class="rounded" value="<?= ($shipping) ? $shipping->customer_firstname : $current_user->customer_firstname ?>" required>
                            </div>
                            <div class="clear"></div>
                            <div class="add">
                                <label for="address"><?php echo __('Cím*'); ?></label>
                                <input type="text" name="address" class="rounded" id="" value="<?= ($shipping) ? $shipping->customer_address : $current_user->customer_address ?>" placeholder="Utca, házszám, ajtó, emelet" required>
                                <input type="text" name="address2" class="rounded" id="">
                            </div>

                            <div>
                                <label for="zip"><?php echo __('Irányítószám*'); ?></label>
                                <input type="text" name="zip" class="rounded" id="" value="<?= ($shipping) ? $shipping->customer_zip : $current_user->customer_zip ?>" required>
                            </div>
                            <div class="add">
                                <label for=""><?php echo __('Város*'); ?></label>
                                <input type="text" name="city" value="<?= ($shipping) ? $shipping->customer_city : $current_user->customer_city ?>" class="rounded" id="" required>
                            </div>
                            <div>
                                <label for="message"><?php echo __('Megjegyzés'); ?></label>
                                <textarea name="message" class="rounded client-acct-msg"></textarea>
                            </div>
                    </div> <!--End claim form-->
                    <div class="clear"></div>
                    <div class="bottom-text-field">
                        <div>
                            <label for=""><?php echo __('E-mail cím*'); ?></label>
                            <input type="text" name="email" class="rounded" id="" value="<?= $current_user->email ?>" readonly>
                        </div>
                        <div>
                            <label for="last-name"><?php echo __('Jelszó*'); ?></label>
                            <input type="password" name="password" class="rounded" id="password">
                        </div>
                        <div style="margin-right:0;">
                            <label for=""><?php echo __('Telefonszám*'); ?></label>
                            <input type="text" name="telephone" class="rounded" id="telephone" value="<?= ($shipping) ? $shipping->customer_telephone : $current_user->customer_telephone ?>" required>
                        </div>
                        <div style="margin-top:50px;">
                            <input type="submit" name="edit_shipping" value="<?php echo __('ADATAIM MENTÉSE'); ?>" class="dark-btn Szemelyes-btn rounded">
                        </div>
                    </div>
                    </form>
                    <script>
                        $("#shipping").validate({
                            rules: {
                                email: {
                                    myCustomRule: true
                                },
                                messages: {
                                    email: "<?php echo __('Helytelen e-mail cím!'); ?>",
                                }
                            }
                        });
                    </script>
                </div><!--End claim orm container-->
            </div>
        </div>

        <h3 class="<?php echo (isset($_GET['new']))?'open':''?>"><?php echo __('Kutyusaim<p class="sub-heading">Kuponbeváltás</p>
            <p class="sub-heading">Ajándékbeváltás</p>'); ?></h3>
        <div>
            <div class="content" style="overflow:hidden;">
                <?php
                $puppies = ORM::factory('Puppy')
                        ->where('user_id', '=', $current_user->id)
                        ->find_all();
                if (count($puppies) > 0):
                    $i = 0;
                    foreach ($puppies as $puppy):
                        ?>
                        <div class="dog-profile-container" <?php
                        if ($i == 2) {
                            echo 'style="margin-right:0;"';
                            $i = 0;
                        }
                        ?>>
                            <div class="dog-profile rounded">
                                <a class="delete-btn" style="cursor: pointer;">
                                    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/delete.png"></a>
                                <h2><?= $puppy->puppy_name ?></h2>
                                <div class="dog-prof-img">
                                    <?php
                                    if ($puppy->selected_size == 1)
                                        echo '<img src="' . URL::base(TRUE, FALSE) . '/assets/img/claim-dogs1.jpg">';
                                    if ($puppy->selected_size == 2)
                                        echo '<img src="' . URL::base(TRUE, FALSE) . '/assets/img/claim-dogs2.jpg">';
                                    if ($puppy->selected_size == 3)
                                        echo '<img src="' . URL::base(TRUE, FALSE) . '/assets/img/claim-dogs3.jpg">';
                                    ?>

                                </div>
                                <p>
                                    <?php
                                    if ($puppy->selected_size == 1)
                                        echo __('Icipici');
                                    if ($puppy->selected_size == 2)
                                        echo __('Éppen jó');
                                    if ($puppy->selected_size == 3)
                                        echo __('Igazi óriás');
                                    ?>
                                </p>
                                <p><?= ($puppy->gender == 0) ? __('Lány') : __('Fiú') ?></p>
                                <p><?= $puppy->years . '.' . $puppy->months ?></p>
                                <?php if ($puppy->alerg == 1) { ?>
                                    <p><?php echo __('Allergiás:'); ?></p>
                                    <p><?= $puppy->alerg_descr ?></p>
                                <?php } ?>
                                <div class="delete-dog" style="display: none">
                                    <div class="delete-box1 rounded"><?php echo __('Törölni szeretnéda kutyus profilját?'); ?></div>
                                    <div class="delete-box2 rounded"><a href="<?= URL::base(TRUE, FALSE) ?>user_account/removeDog/<?= $puppy->id ?>"><?php echo __('Igen'); ?></a></div>
                                    <div class="delete-box3 rounded"><a class="cancel" style="cursor:pointer"><?php echo __('Mégse'); ?></a></div>
                                </div>
                            </div> <!--End dog profile-->

                            <!-- <div>
                                 <label for="">Kuponbeváltás</label>
                                 <input type="text" name="" class="rounded" id="">
                             </div> -->
                            <form action="/user_account/order" method="POST">
                                <div>
                                    <label for=""><?php echo __('Ajándékbeváltás'); ?></label>
                                    <input type="text" name="gift" class="rounded" id="">
                                </div>
                                <input type="hidden" name="puppy_id" value="<?= $puppy->id ?>">
                                <div>
                                    <input type="submit" name="submit" value="<?php echo __('GYERÜNK'); ?>" class="dark-btn dog-prof-btn rounded" <?= ($status == 0) ? 'disabled' : '' ?>>
                                </div>
                            </form>
                        </div>  <!--End dog profile container-->
                        <?php
                        $i++;
                    endforeach;
                endif;
                ?>
                <div class="dog-profile-container" style="margin-right:0;">
                    <a href="#" id="create-dog" class="rounded dog-btn dark-btn"><?php echo __('Van egy új kutyusom!<p>Új kutyus profil létrehozása</p>'); ?></a>
                </div>
            </div>
        </div>

       <!-- <h3><?php echo __('Ajándékozok egy barátnak<p class="sub-heading">Ha korábban már ajándékoztam, itt megismételhetem!</p>'); ?></h3>
        <div>
            <div class="content">
                <div class="support">
                    <?php
                    $friends = ORM::factory('Friend')
                            ->where('user_id', '=', $current_user->id)
                            ->find_all();
                    if (count($friends) > 0):
                        ?>
                        <form action="/user_account/gift" method="POST" id="gift">
                            <?php
                            foreach ($friends as $friend):
                                ?>

                                <div class="support-row">
                                    <ul>
                                        <li><input type="radio" name="gift" value="<?= $friend->id ?>"></li>
                                        <li class="option-text1"><?= $friend->friends_lastname . ' ' . $friend->friends_firstname; ?></li>
                                        <li class="option-text2"><?= $friend->friends_email; ?></li>
                                        <li class="option-text3"><input type="radio" value="1" name="delay"><?php echo __('A barátomnak ne küldd ki az ajándék kódot! Csak én kérem és majd később meglepem vele!'); ?></li>
                                    </ul>
                                </div>
                                <?php
                            endforeach;
                            ?>
                            <div style="margin-top:35px; float:none;">
                                <input <?= ($status == 0) ? 'disabled' : '' ?> type="button" name="submit_form" id="submit_form_f" value="<?php echo __('MEGRENDELEM');?>" class="dark-btn claim-btn rounded">
                            </div>
                        </form>
                        <hr/>
                        <?php
                    endif;
                    ?>
                    <div class="clear"></div>
                    <div>
                        <div class="content">
                            <div class="process-form-container2">
                                <form class="process-form1" name="order" action="/order/index" method="POST">
                                    <div>
                                        <label for="last-name"><?php echo __('Barátod vezetéknév*'); ?></label>
                                        <input id="lastname" type="text" value="" name="lastname" class="rounded" required>
                                    </div>
                                    <div>
                                        <label for="last-name"><?php echo __('Barátod keresztnév*'); ?></label>
                                        <input id="firstname" type="text" value="" name="firstname" class="rounded" required>
                                    </div>
                                    <div>
                                        <label for="first-name"><?php echo __('Barátod e-mail címe*'); ?></label>
                                        <input id="" type="text" value="" name="friend_email"  class="rounded" required>
                                    </div>
                                    <div>
                                        <input type="checkbox" value="1" name="delay" checked> <?php echo __('A barátomnak ne küldd ki az ajándék kódot! Csak én kérem és majd később meglepem vele!'); ?>
                                    </div>
                                    <p style="padding-top:20px;"><?php echo __('*Kötelező mezők adategyeztetés miatt'); ?></p>
                                    <input type="hidden" name="order2" value="1">
                                    <input type="hidden" name="selected_size" class="selected_size">
                                </form>
                                <script>
                                    $.extend($.validator.messages, {
                                        required: "<?php echo __('ez az információ szükséges'); ?>",
                                        equalTo: "<?php echo __('A jelszó nem egyezik'); ?>"
                                    });
                                    $(".process-form1").validate({
                                        rules: {
                                            friend_email: {
                                                myCustomRule: true
                                            }
                                        },
                                        messages: {
                                            'friend_email': "<?php echo __('Helytelen e-mail cím!'); ?>"
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="claim-form-btn">
                            <input <?= ($status == 0) ? 'disabled' : '' ?> type="submit" name="tovabb" value="<?php echo __('TOVÁBB'); ?>" id="submit_form" class="dark-btn claim-btn rounded" style="margin-right:20px;">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div> 
            </div>
        </div> <!--End support-->
        <!--
                <h3>Támogatok menhelyi kutyust<p class="sub-heading">Ha korábban már támogattam, itt megismételhetem!</p></h3>
                <div>
                    <div class="content">
                        <div class="support">
        <?php
        $shelters = ORM::factory('ShelterDog')->with('shelter')
                ->where('user_id', '=', $current_user->id)
                ->find_all();
        if (count($shelters) > 0):
            ?>
                                                                                    <form action="/user_account/shelter" id="shelter" method="POST" >
            <?php
            foreach ($shelters as $shelter):
                ?>
                                                                                                                                                <div class="support-row">
                                                                                                                                                    <ul>
                                                                                                                                                        <li><input type="radio" name="shelter" value="<?= $shelter->shelter_id ?>"></li>
                                                                                                                                                        <li class="option-text1"><?= $shelter->shelter->shelter_name ?></li>
                                                                                                                                                        <li class="option-text2"><?= $shelter->doggy_name ?></li>
                                                                                                                                                    </ul>
                                                                                                                                                </div>
                <?php
            endforeach;
            ?>
                                                            
                                                                                        <div style="margin-top:35px; float:none;">
                                                                                            <input type="submit" id="submit_shelter" name="submit_shelter" value="MEGRENDELEM" class="dark-btn claim-btn rounded">
                                                                                        </div>
                                                                                    </form>
                                                                                    <hr/>
        <?php endif; ?>
                            <div class="process-form-container2">
                                <div class="clear"></div>
                                <ul class="claim-option-list">
                                    <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg"><input style="cursor: pointer" type="radio" class="size" name="group1" value="1"  checked> Icipici</li>
                                    <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg"><input style="cursor: pointer" type="radio" class="size" name="group1" value="2" > Éppen jó</li>
                                    <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"><input style="cursor: pointer" type="radio" class="size" name="group1" value="3" > Igazi óriás</li>
                                </ul>
                                <div class="clear"></div>
                                <form class="process-form2" name="order" method="POST" action="/order/index">
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
                            <div class="claim-form-btn">
                                <input type="submit" name="tovabb" value="TOVÁBB" id="submit_form_shelt" class="dark-btn claim-btn" style="margin-right:20px;">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                </div>
        -->
        <h3><?php echo __('Hívj meg egy barátot!<p class="sub-heading">Szerezz 5% kedvezményt!</p>'); ?></h3>
        <div>
            <div class="content">
                <div class="support">
                    <div class="process-form-container2">
                        <form class="process-form3" name="invite" method="POST" action="/user_account/invite">
                            <label for=""><?php echo __('Barátod e-mail címe*'); ?></label>
                            <input type="text" name="friend_email" class="rounded" id="friend_email" required>
                        </form>
                        <script>
                            $(".process-form3").validate({
                                rules: {
                                    friend_email: {
                                        myCustomRule: true
                                    }
                                },
                                messages: {
                                    'friend_email': "<?php echo __('Helytelen e-mail cím!'); ?>"
                                }
                            });
                        </script>
                    </div>
                    <div class="claim-form-btn">
                        <input type="submit" name="tovabb" value="<?php echo __('TOVÁBB'); ?>" id="submit_form_invite" class="dark-btn claim-btn rounded" style="margin-right:20px;">
                    </div>
                    <div class="clear"></div>
                </div> <!--End support-->
            </div>
        </div>
        <h3><?php echo __('Megrendelés<p class="sub-heading">Rendelési adataid</p>'); ?></h3>
        <div>
            <div class="content">
                <div class="support">
                    <div class="process-form-container2">
                        <?php
                        $orders = ORM::factory('Order')
                                ->where('user_id', '=', $current_user->id)
                                ->find_all();
                        if (count($orders) > 0):
                            ?>
                            <?php
                            foreach ($orders as $order) {
                                if ($order->orders_status == 1) {
                                    $status = __('Függőben');
                                } elseif ($order->orders_status == 2) {
                                    $status = __('Feldolgozva');
                                } elseif ($order->orders_status == 3) {
                                    $status = __('Szállítva');
                                } elseif ($order->orders_status == 4) {
                                    $status = __('Kész');
                                } elseif ($order->orders_status == 6) {
                                    $status = __('Elutasított');
                                }
                                echo __('Rendelés száma:') . $order->id . '<br/><br/>'.__('Rendelés dátuma:') . $order->date_purchased . '<br/><br/>'.__('Rendelés állapota:') . $status.'<br/><hr>';
                            }

                        endif;
                        ?>
                        <div class="clear"></div>
                    </div> <!--End support-->
                </div>
            </div>

        </div>
        <h3><?php echo __('Kupon használat követése'); ?></h3>
        <div>
            <div class="content">
                <div class="support">
                    <div class="process-form-container2">
                        <?php
                        $discounts = ORM::factory('CouponCodes')
                                ->where('user_id', '=', $current_user->id)
                                ->find_all();
                        if (count($discounts) > 0):
                            ?>
                            <?php
                            foreach ($discounts as $discount) {
                                echo __('Kupon kód: ') . $discount->coupon_code . ' <br/>'.__('Megrendelések a kupon kóddal:').$discount->count;
                            }

                        endif;
                        ?>
                        <div class="clear"></div>
                    </div> <!--End support-->
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
    </div>
</section>