<div class="clear"></div>
<section class="contact" class="rounded">
    <h1>Írj nekünk!</h1>
    <div class="contact-text">
        <p>Mindig örülünk, ha üzenetet kapunk! </br>Van egy jó ötleted? Valami nem tetszett vagy nagyon is? </br>Vannak kérdéseid és a választ nem találod a GYIK menü pontban?</br>Ne rejtegesd a véleményed, oszd meg velünk és mi válaszolunk neked!</p>
    </div>
    <div class="contact-cont-left">
        <div class="contact-address">
            Kapcsolat információ:</br>
            <span>GOODIEBOX </br>
                Web Apps Consult Kft.</span></br>
            Web Apps Consult Kft. </br>
            <span>1053 Budapest </br>
                Kossuth Lajos utca 7-9.</span> </br>
            E-mail cím: </br>
            <span>info@goodiebox.hu</span>
        </div> <!--End cotact address-->

        <div class="contact-us-form">
            <form>
                <label for="customer_firstname">Vezetéknév*</label>
                <input type="text" name="customer_firstname" id="customer_firstname" class="rounded" value="<?=($current_user)?$current_user->customer_firstname:''?>">

                <label for="customer_lastname">Keresztnév*</label>
                <input type="text" name="customer_lastname" id="customer_lastname" class="rounded" value="<?=($current_user)?$current_user->customer_lastname:''?>">

                <label for="customer_email">E-mail cím*</label>
                <input type="text" name="customer_email" id="customer_email" class="rounded" value="<?=($current_user)?$current_user->email:''?>">

                <label for="subject">Tárgy</label>
                <input type="text" name="subject" id="subject" class="rounded" value="">

                <textarea name="message" id="message" placeholder="Kezdj egy gépelni..." class="rounded"></textarea>
            </form>
            *Kötelező mezők
            <input type="submit" value="ELKÜLDÖM" class="dark-btn rounded">
        </div>
    </div> <!--End contact-cont-left-->
    <div class="contact-cont-right">
        <ul>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img1.jpg"></li>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img2.jpg"></li>
            <li><img src="<?= URL::base(TRUE, FALSE) ?>/assets/img/contact-img3.jpg"></li>
        </ul>
    </div> <!--End contact-cont-right-->
</section>
