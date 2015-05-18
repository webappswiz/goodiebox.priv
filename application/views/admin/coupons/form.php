<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="status_name">Username</label>

                <div class="controls">
                    <?php echo Form::select('user_id', $users, $model->user_id, array('required', 'class' => 'rounded option-name')); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="coupon_code">Coupon Code</label>

                <div class="controls">
                    <input type="text" name="coupon_code" value="<?php echo $model->coupon_code?>">
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn cancel">Cancel</button>
            </div>
        </fieldset>
        <?php
        echo Form::hidden('id', $model->id);
        ?>
    </form>
</div>