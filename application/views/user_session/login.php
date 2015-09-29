<div class="clear"></div>
<section class="process-3" class="rounded">
    <div class="claim-form-container">
        <div class="claim-form">
            <form action="<?php echo URL::site('user_session/login'); ?>" method="POST" class="login">
                <div class="add" style="margin-bottom: 5px">
                    <input class="rounded" type="text" name="username" placeholder="<?php echo __('E-mail cím'); ?>">
                </div>
                <div class="add" style="margin-bottom: 5px">
                    <input class="rounded" type="password" name="password" placeholder="<?php echo __('Jelszó'); ?>">
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="claim-form-btn"><button class="claim-btn rounded" type="submit"><?php echo __('Belépés'); ?></button></div>
            </form>
            <div class="add" style="margin-left:20px;"><a style="color:#cc0033" href="/user_session/reset"><?php echo __('Elfelejtetted a jelszavadat?'); ?></a></div>
            
        </div>
    </div>
    <div class="clear"></div>
</section>