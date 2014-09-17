<nav>
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="claim-gift" class="rounded">
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
                        <?php
                        $ab = ORM::factory('AddressBook')
                                ->where('user_id', '=', $current_user->id)
                                ->find();
                        ?>
                        <form method="POST" action="/user_account/editShipping" id="shipping">
                            <div style="margin-right:6px;" class="fl">
                                <label for="last-name">Vezetéknév*</label>
                                <input id="last-name" type="text" name="first-name" class="rounded" value="<?= ($ab->loaded()) ? $ab->customer_firstname : $current_user->customer_firstname ?>" required>
                            </div>

                            <div style="overflow:hidden;">
                                <label for="first-name">Keresztnév*</label>
                                <input id="" type="text" name="last-name" class="rounded" value="<?= ($ab->loaded()) ? $ab->customer_lastname : $current_user->customer_lastname ?>" required>
                            </div>
                            <div class="clear"></div>
                            <div class="add">
                                <label for="address">Cím*</label>
                                <input type="text" name="address" class="rounded" id="" value="<?= ($ab->loaded()) ? $ab->customer_address : $current_user->customer_address ?>" placeholder="Utca, házszám, ajtó, emelet" required>
                                <input type="text" name="address2" class="rounded" id="">
                            </div>

                            <div>
                                <label for="zip">Irányítószám*</label>
                                <input type="text" name="zip" class="rounded" id="" value="<?= ($ab->loaded()) ? $ab->customer_zip : $current_user->customer_zip ?>" required>
                            </div>
                            <div class="add">
                                <label for="">Város*</label>
                                <input type="text" name="city" value="<?= ($ab->loaded()) ? $ab->customer_city : $current_user->customer_city ?>" class="rounded" id="" required>
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
                            <input type="text" name="telephone" class="rounded" id="" value="<?= ($ab->loaded()) ? $ab->customer_telephone : $current_user->customer_telephone ?>" required>
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
                                <a href="<?= URL::base(TRUE, FALSE) ?>user_account/removeDog/<?=$puppy->id?>" class="delete-btn" style="cursor: pointer;" onclick="return confirm('Do you really want to remove the puppy?')?true:false;">
                                    <img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/delete.png"></a>
                                <h2>PÖTYI</h2>
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
                                <p><?= $puppy->puppy_name ?></p>
                                <p><?= ($puppy->gender == 0) ? 'Lány' : 'Fiú' ?></p>
                                <p><?= $puppy->years . '.' . $puppy->months ?></p>
                                <?php if ($puppy->alerg == 1) { ?>
                                    <p>Allergiás:</p>
                                    <p><?= $puppy->alerg_descr ?></p>
                                <?php } ?>
                            </div> <!--End dog profile-->

                            <div>
                                <label for="">Kuponbeváltás</label>
                                <input type="text" name="" class="rounded" id="">
                            </div>
                            <div>
                                <label for="">Ajándékbeváltás</label>
                                <input type="text" name="" class="rounded" id="">
                            </div>
                            <div>
                                <input type="submit" value="GYERÜNK" class="dark-btn dog-prof-btn rounded">
                            </div>

                        </div>  <!--End dog profile container-->
                        <?php
                        $i++;
                    endforeach;
                endif;
                ?>
            </div>
        </div>

        <h3>Ajándékozok egy barátnak<p class="sub-heading">Ha korábban már ajándékoztam, itt megismételhetem!</p></h3>
        <div>
            <div class="content">
                <div class="support">
                    <?php
                    $friends = ORM::factory('Friend')
                            ->where('user_id', '=', $current_user->id)
                            ->find_all();
                    foreach ($friends as $friend):
                        ?>

                        <div class="support-row">
                            <ul>
                                <li><input type="radio"></li>
                                <li class="option-text1"><?= $friend->friends_name; ?></li>
                                <li class="option-text2"><?= $friend->friends_email; ?></li>
                            </ul>
                        </div>
                        <?php
                    endforeach;
                    ?>
                    <div style="margin-top:35px; float:none;">
                        <input type="submit" value="MEGRENDELEM" class="dark-btn claim-btn rounded">
                    </div>
                </div> <!--End support-->
            </div>
        </div>

        <h3>Támogatok menhelyi kutyust<p class="sub-heading">Ha korábban már támogattam, itt megismételhetem!</p></h3>
        <div>
            <div class="content">
                <div class="support">
                    <?php
                    $shelters = ORM::factory('User_Shelter')->with('shelter')
                            ->where('user_id', '=', $current_user->id)
                            ->find_all();
                    foreach ($shelters as $shelter):
                        ?>
                        <div class="support-row">
                            <ul>
                                <li><input type="radio"></li>
                                <li class="option-text1"><?= $shelter->shelter->shelter_name ?></li>
                                <li class="option-text2"><?= $shelter->doggy_name ?></li>
                            </ul>
                        </div>
                        <?php
                    endforeach;
                    ?>

                    <div style="margin-top:35px; float:none;">
                        <input type="submit" value="MEGRENDELEM" class="dark-btn claim-btn rounded">
                    </div>
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