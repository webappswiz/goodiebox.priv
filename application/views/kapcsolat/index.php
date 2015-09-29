<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            if ($('#contact').valid()) {
                firstname = $('#customer_firstname').val();
                lastname = $('#customer_lastname').val();
                email = $('#customer_email').val();
                subject = $('#subject').val();
                message = $('#message').val();
                $.post('/kapcsolat/index', {'email': email, 'firstname': firstname, 'lastname': lastname, 'subject': subject, 'message': message}).done(function(data) {
                    if(data==1){
                        $('.contact-us-form').empty();
                        $('.contact-us-form').html('<h3>Köszönjük az üzenetedet!<br/>Hamarosan válaszolunk!<br/>Szép napot!</h3>');
                    }
                });
            }
        });
    });
</script>
<div class="clear"></div>
<section class="contact" class="rounded">
    <h1><?php echo __('Írj nekünk!'); ?></h1>
    <div class="contact-text">
        <p><?php echo __('Mindig örülünk, ha üzenetet kapunk! </br>Van egy jó ötleted? Valami nem tetszett vagy nagyon is? </br>Vannak kérdéseid és a választ nem találod a GYIK menü pontban?</br>Ne rejtegesd a véleményed, oszd meg velünk és mi válaszolunk neked!'); ?></p>
    </div>
    <div class="contact-cont-left">
        <div class="contact-address">
            <?php echo __('Kapcsolat információ:'); ?></br>
            <span>GOODIEBOX </br>
                Web Apps Consult Kft.</span></br>
            <span>1053 Budapest </br>
                Kossuth Lajos utca 7-9.</span> </br>
            <?php echo __('E-mail cím:'); ?> </br>
            <span>info@goodiebox.hu</span>
        </div> <!--End cotact address-->

        <div class="contact-us-form">
            <form action="" method="POST" id="contact">
                <div><label for="customer_firstname"><?php echo __('Vezetéknév*'); ?></label>
                    <input type="text" name="customer_firstname" id="customer_firstname" class="rounded" value="<?= ($current_user) ? $current_user->customer_firstname : '' ?>" required></div>
                <div><label for="customer_lastname"><?php echo __('Keresztnév*'); ?></label>
                    <input type="text" name="customer_lastname" id="customer_lastname" class="rounded" value="<?= ($current_user) ? $current_user->customer_lastname : '' ?>" required></div>
                <div><label for="customer_email"><?php echo __('E-mail cím*'); ?></label>
                    <input type="text" name="customer_email" id="customer_email" class="rounded" value="<?= ($current_user) ? $current_user->email : '' ?>" required></div>
                <div><label for="subject"><?php echo __('Tárgy'); ?></label>
                    <input type="text" name="subject" id="subject" class="rounded" value="" required></div>
                <div><textarea name="message" id="message" placeholder="<?php echo __('Kezdj egy gépelni...'); ?>" class="rounded" required></textarea></div>

            </form>
            <?php echo __('*Kötelező mezők'); ?>
            <input type="submit" id="submit" value="<?php echo __('ELKÜLDÖM'); ?>" class="dark-btn rounded">
            <script>
                $("#contact").validate({
                    rules: {
                        customer_email: {
                            required: true,
                            email: true
                        }
                    }

                });
            </script>
        </div>
    </div> <!--End contact-cont-left-->
    <div class="contact-cont-right">
        <ul>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img1.jpg"></li>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img2.jpg"></li>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img3.jpg"></li>
            <li style="text-align: center"><a href="http://goodiebox.hu/signup"><button type="button" class="top-btn rounded" style="width:175px;"><?php echo __('Feliratkozok<br>a hírlevélre!'); ?></button></a></li>
        </ul>
    </div> <!--End contact-cont-right-->
</section>
