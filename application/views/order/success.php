        <nav>
            <ul>
                <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
            </ul>
        </nav>
        <div class="clear"></div>
        <section class="thanku" class="rounded">
            <h1>Köszönjük a rendelését!</h1>
            <h2>E-mail címére visszaigazolást küldtünk.</h2>
            <img src="<?= URL::base(TRUE, FALSE) ?>assets/img/bark.jpg" alt="Thank you">
        </section>