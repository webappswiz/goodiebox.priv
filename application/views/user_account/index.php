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

    $(document).ready(function() {

        // When site loaded, load the Popupbox First
        $('#create-dog').on('click', function() {
            loadPopupBox();
        });

        $('.alerg_yes').on('click', function() {
            $('#alerg_descr').attr('required', 'required');
        });
        $('.alerg_no').on('click', function() {
            $('#alerg_descr').removeAttr('required');
        });
        $('#popupBoxClose').click(function() {
            unloadPopupBox();
        });

        $('#submit_form').on('click', function() {
            $('#gift').submit();
        });
        $('#submit_shelter').on('click', function() {
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
        $('.delete-btn').on('click', function() {
            $(this).closest('.dog-profile').find('.delete-dog').show('slow');
        });
        $('.cancel').on('click', function() {
            $(this).closest('.dog-profile').find('.delete-dog').slideUp();
        });
    });
</script>
<div id="dialog-form" title="Add a new dog">
    <script>
        $(".process-form").validate();
    </script>
    <div class="claim-form2">
        <form class="process-form" name="order" method="POST" action="/user_account/addDog">
            <label for="">Kutyus neve</label>
            <input type="text" name="puppy_name" class="rounded" id="" required>
            <div class="radio-list">
                <label for="last-name">Válaszd ki mekkora a kutyus!*</label>
                <input type="radio" name="size" value="1" class="" checked> Icipici <input name="size" value="2" type="radio" class=""> Éppen jó
                <input name="size" value="3" type="radio" class=""> Igazi óriás
            </div>
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
                <input type="radio" class="alerg_yes" value="0" name="alerg"> Igen <input type="radio" value="1" name="alerg" class="alerg_no" checked> Nem
            </div>

            <label for="last-name">Ha igen, mire?</label>
            <input type="text" name="alerg_descr" class="rounded" id="alerg_descr">

            <p style="padding-top:20px;">*Kötelező adatok</p>
            <input type="hidden" name="order1" value="1">
            <input type="hidden" name="selected_size" class="selected_size">
            <div>
                <input type="submit" value="GYERÜNK" class="dark-btn dog-prof-btn rounded">
            </div>
        </form>
        <a id="popupBoxClose"><strong>X</strong></a>
    </div>
</div>

<script type="text/javascript">

</script>
<nav style="text-align: right">
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="claim-gift" class="rounded" id="container">
    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/profile-icon.png" class="badge" style="top:-65px;">
    <h1>Saját profilom</h1>
    <div id="collapse-content">
        <h3>Személyes adataim<p class="sub-heading">Amennyiben szeretnéd, bármikor megváltoztathatod az adataidat.</p><p class="sub-heading">Új rendelés előtt kérjük mindig ellenőrizd a számlázási és a szállítási címet is!</p></h3>
        <div>
            <div class="content">
                <div class="claim-form-container">
                    <div class="claim-form">
                        <h2>Szállítási adatok</h2>
                        <p>Ország</p>
                        <h4>Magyarország</h4>


                        <form method="POST" action="/user_account/editShipping" id="shipping">
                            <div style="margin-right:6px;" class="fl">
                                <label for="last-name">Vezetéknév*</label>
                                <input id="last-name" type="text" name="first-name" class="rounded" value="<?= $current_user->customer_firstname ?>" required>
                            </div>

                            <div style="overflow:hidden;">
                                <label for="first-name">Keresztnév*</label>
                                <input id="" type="text" name="last-name" class="rounded" value="<?= $current_user->customer_lastname ?>" required>
                            </div>
                            <div class="clear"></div>
                            <div class="add">
                                <label for="address">Cím*</label>
                                <input type="text" name="address" class="rounded" id="" value="<?= $current_user->customer_address ?>" placeholder="Utca, házszám, ajtó, emelet" required>
                                <input type="text" name="address2" class="rounded" id="">
                            </div>

                            <div>
                                <label for="zip">Irányítószám*</label>
                                <input type="text" name="zip" class="rounded" id="" value="<?= $current_user->customer_zip ?>" required>
                            </div>
                            <div class="add">
                                <label for="">Város*</label>
                                <input type="text" name="city" value="<?= $current_user->customer_city ?>" class="rounded" id="" required>
                            </div>
                            <div>
                                <label for="message">Megjegyzés</label>
                                <textarea name="message" class="rounded client-acct-msg"></textarea>
                            </div>
                    </div> <!--End claim form-->
                    <div class="clear"></div>
                    <div class="bottom-text-field">
                        <div>
                            <label for="">E-mail cím*</label>
                            <input type="text" name="email" class="rounded" id="" value="<?= $current_user->email ?>" readonly>
                        </div>
                        <div>
                            <label for="last-name">Jelszó*</label>
                            <input type="password" name="password" class="rounded" id="password">
                        </div>
                        <div style="margin-right:0;">
                            <label for="">Telefonszám*</label>
                            <input type="text" name="telephone" class="rounded" id="" value="<?= $current_user->customer_telephone ?>" required>
                        </div>
                        <div style="margin-top:50px;">
                            <input type="submit" name="edit_shipping" value="ADATAIM MENTÉSE" class="dark-btn Szemelyes-btn rounded">
                        </div>
                    </div>
                    </form>
                    <script>
                        $("#shipping").validate();
                    </script>
                </div><!--End claim orm container-->
            </div>
        </div>

        <h3>Kutyusaim<p class="sub-heading">Kuponbeváltás</p>
            <p class="sub-heading">Ajándékbeváltás</p></h3>
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
                                        echo 'Icipici';
                                    if ($puppy->selected_size == 2)
                                        echo 'Éppen jó';
                                    if ($puppy->selected_size == 3)
                                        echo 'Igazi óriás';
                                    ?>
                                </p>
                                <p><?= ($puppy->gender == 0) ? 'Lány' : 'Fiú' ?></p>
                                <p><?= $puppy->years . '.' . $puppy->months ?></p>
                                <?php if ($puppy->alerg == 1) { ?>
                                    <p>Allergiás:</p>
                                    <p><?= $puppy->alerg_descr ?></p>
                                <?php } ?>
                                <div class="delete-dog" style="display: none">
                                    <div class="delete-box1 rounded">Törölni szeretnéda kutyus profilját?</div>
                                    <div class="delete-box2 rounded"><a href="<?= URL::base(TRUE, FALSE) ?>user_account/removeDog/<?= $puppy->id ?>">Igen</a></div>
                                    <div class="delete-box3 rounded"><a class="cancel" style="cursor:pointer">Mégse</a></div>
                                </div>
                            </div> <!--End dog profile-->

                            <!-- <div>
                                 <label for="">Kuponbeváltás</label>
                                 <input type="text" name="" class="rounded" id="">
                             </div> -->
                            <form action="/user_account/order" method="POST">
                                <div>
                                    <label for="">Ajándékbeváltás</label>
                                    <input type="text" name="gift" class="rounded" id="">
                                </div>
                                <input type="hidden" name="puppy_id" value="<?= $puppy->id ?>">
                                <div>
                                    <input type="submit" name="submit" value="GYERÜNK" class="dark-btn dog-prof-btn rounded">
                                </div>
                            </form>
                        </div>  <!--End dog profile container-->
                        <?php
                        $i++;
                    endforeach;
                endif;
                ?>
                <div class="dog-profile-container" style="margin-right:0;">
                    <a href="#" id="create-dog" class="rounded dog-btn dark-btn">Van egy új kutyusom!<p>Új kutyus profil létrehozása</p></a>
                </div>
            </div>
        </div>

        <h3>Ajándékozok egy barátnak<p class="sub-heading">Ha korábban már ajándékoztam, itt megismételhetem!</p></h3>
        <div>
            <div class="content">
                <div class="support">
                    <form action="/user_account/gift" method="POST" id="gift">
                        <?php
                        $friends = ORM::factory('Friend')
                                ->where('user_id', '=', $current_user->id)
                                ->find_all();
                        foreach ($friends as $friend):
                            ?>

                            <div class="support-row">
                                <ul>
                                    <li><input type="radio" name="gift" value="<?= $friend->id ?>"></li>
                                    <li class="option-text1"><?= $friend->friends_name; ?></li>
                                    <li class="option-text2"><?= $friend->friends_email; ?></li>
                                </ul>
                            </div>
                            <?php
                        endforeach;
                        ?>
                        <div style="margin-top:35px; float:none;">
                            <input type="submit" name="submit_form" id="submit_form" value="MEGRENDELEM" class="dark-btn claim-btn rounded">
                        </div>
                    </form>
                </div> <!--End support-->
            </div>
        </div>

        <h3>Támogatok menhelyi kutyust<p class="sub-heading">Ha korábban már támogattam, itt megismételhetem!</p></h3>
        <div>
            <div class="content">
                <div class="support">
                    <form action="/user_account/shelter" id="shelter" method="POST">
                        <?php
                        $shelters = ORM::factory('User_Shelter')->with('shelter')
                                ->distinct('shelter_id')
                                ->where('user_id', '=', $current_user->id)
                                ->find_all();
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
                </div> <!--End support-->
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






    <ul id="faqList">
        <li>
            <div class="answer">

            </div>
        </li>
        <li>
            <p class="question"> </p>
            <div class="answer" style="overflow:hidden;">

            </div>
        </li>

        <li>
            <p class="question"></p>
            <div class="answer">

            </div>
        </li>

        <li>
            <p class="question"></p>
            <div class="answer">

            </div>
        </li>

    </ul>

</div>
</section>