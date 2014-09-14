<nav>
    <ul>
        <?php echo View::factory('template/menu', get_defined_vars())->render(); ?>
    </ul>
</nav>
<div class="clear"></div>
<section class="process-3" class="rounded">
    <div class="claim-form-container">
        <div class="claim-form">
            <form action="<?php echo URL::site('user_session/login'); ?>" method="POST" class="login">
                <div class="add">
                    <input class="rounded" type="text" name="username" placeholder="Email address">
                    <input class="rounded" type="password" name="password" placeholder="Password">
                </div>
                <div class="clear"></div>
                <div class="claim-form-btn"><button class="claim-btn" type="submit">Sign in</button></div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</section>