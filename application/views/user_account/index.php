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
                        <form>
                            <div style="margin-right:6px;" class="fl">
                                <label for="last-name">Vezetéknév*</label>
                                <input id="last-name" type="text" value="" name="first-name" class="rounded">
                            </div>

                            <div style="overflow:hidden;">
                                <label for="first-name">Keresztnév*</label>
                                <input id="" type="text" value="" name="last-name" class="rounded">
                            </div>
                            <div class="clear"></div>
                            <div class="add">
                                <label for="address">Cím*</label>
                                <input type="text" name="address" class="rounded" id="" placeholder="Utca, házszám, ajtó, emelet">
                                <input type="text" name="" class="rounded" id="">
                            </div>

                            <div>
                                <label for="zip">Irányítószám*</label>
                                <input type="text" name="zip" class="rounded" id="">
                            </div>
                            <div class="add">
                                <label for="">Város*</label>
                                <input type="text" name="" class="rounded" id="">
                            </div>
                            <div>
                                <label for="message">Megjegyzés</label>
                                <textarea name="message" class="rounded client-acct-msg"></textarea>
                            </div>
                        </form>
                    </div> <!--End claim form-->
                    <div class="clear"></div>
                    <div class="bottom-text-field">
                        <div>
                            <label for="">E-mail cím*</label>
                            <input type="text" name="" class="rounded" id="">
                        </div>
                        <div>
                            <label for="last-name">Jelszó*</label>
                            <input type="text" name="last-name" class="rounded" id="">
                        </div>
                        <div style="margin-right:0;">
                            <label for="">Telefonszám*</label>
                            <input type="text" name="" class="rounded" id="">
                        </div>
                        <div style="margin-top:50px;">
                            <input type="submit" value="ADATAIM MENTÉSE" class="dark-btn Szemelyes-btn rounded">
                        </div>
                    </div>
                </div><!--End claim orm container-->
            </div>
        </div>

        <h3>Kutyusaim<p class="sub-heading">Kuponbeváltás</p>
            <p class="sub-heading">Ajándékbeváltás</p></h3>
        <div>
            <div class="content" style="overflow:hidden;">
                <div class="dog-profile-container">
                    <div class="dog-profile rounded">
                        <a href="#" class="delete-btn"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/delete.png"></a>
                        <h2>PÖTYI</h2>
                        <div class="dog-prof-img"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs1.jpg" style="margin-left:10px;"></div>
                        <p>Icipici</p>
                        <p>Lány</p>
                        <p>2001. 04.</p>
                        <p>Allergiás:</p>
                        <p>csirkehús, tej</p>
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

                <div class="dog-profile-container">
                    <div class="dog-profile rounded">
                        <a href="#" class="delete-btn"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/delete.png" ></a>
                        <h2>PÖTYI</h2>
                        <div class="dog-prof-img"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs2.jpg" style="margin-left:5px;"></div>
                        <p>Icipici</p>
                        <p>Lány</p>
                        <p>2001. 04.</p>

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

                <div class="dog-profile-container" style="margin-right:0;">
                    <div class="dog-profile rounded">
                        <a href="#" class="delete-btn"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/delete.png"></a>
                        <h2>PÖTYI</h2>
                        <div class="dog-prof-img"><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/claim-dogs3.jpg"></div>
                        <p>Icipici</p>
                        <p>Lány</p>
                        <p>2001. 04.</p>

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
            </div>
        </div>

        <h3>Ajándékozok egy barátnak<p class="sub-heading">Ha korábban már ajándékoztam, itt megismételhetem!</p></h3>
        <div>
            <div class="content">
                <div class="support">
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Kovácsovits Helga</li>
                            <li class="option-text2">kovacsovits.helga@gmail.com</li>
                        </ul>
                    </div>
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Magyaros Eszter</li>
                            <li class="option-text2">esztermagyarosi@freemail.hu</li>
                        </ul>
                    </div>
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Zentai Kornélia</li>
                            <li class="option-text2">kisrigo2001@t-online.hu</li>
                        </ul>
                    </div>
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
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Noé Állatotthon Alapítvány</li>
                            <li class="option-text2">Marcika</li>
                        </ul>
                    </div>
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Noé Állatotthon Alapítvány</li>
                            <li class="option-text2">Marcika</li>
                        </ul>
                    </div>
                    <div class="support-row">
                        <ul>
                            <li><input type="radio"></li>
                            <li class="option-text1">Noé Állatotthon Alapítvány</li>
                            <li class="option-text2">Marcika</li>
                        </ul>
                    </div>
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