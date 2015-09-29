<div class="clear"></div>
<section class="process-3" class="rounded">
    <div class="claim-form-container">
        <div class="claim-form">
            <form action="<?php echo URL::site('user_session/reset2/?hash='.$_GET['hash']); ?>" method="POST" class="reset">
                <div class="add" style="margin-bottom: 5px">
                    <input class="rounded" type="password" name="customer_password" id="customer_password" placeholder="<?php echo __('Jelszó'); ?>" required>
                </div>
                <div class="add" style="margin-bottom: 5px">
                    <input class="rounded" type="password" name="password_confirm" placeholder="<?php echo __('Jelszó megerősítése'); ?>" required>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="claim-form-btn"><button class="claim-btn rounded" type="submit"><?php echo __('Elfogad'); ?></button></div>
            </form>
            <script type="text/javascript">
                $.extend($.validator.messages, {
                    required: "<?php echo __('ez az információ szükséges'); ?>",
                    equalTo: "<?php echo __('A jelszó nem egyezik'); ?>"
                });
                $(".reset").validate({
                    rules: {
                        customer_password: {
                            required: true, minlength: 5
                        },
                        password_confirm: {
                            required: true, equalTo: "#customer_password", minlength: 5
                        },
                    },
                });
            </script>
        </div>
    </div>
    <div class="clear"></div>
</section>