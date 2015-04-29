<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/packages");
        });

    });
</script>
<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="package_name">Status name</label>
                <div class="controls">
                    <input type="text" id="package_name" name="package_name" placeholder="Package name" value="<?= $model->package_name ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_price">Package price</label>
                <div class="controls">
                    <input type="text" id="package_price" name="package_price" placeholder="Package price" value="<?= $model->price ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_code">Product code</label>
                <div class="controls">
                    <input type="text" id="package_code" name="package_code" placeholder="Package code" value="<?= $model->product_number ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_category">Product category</label>
                <div class="controls">
                    <select id="type" name="type">
                        <option value="1" <?=($model->type==1)?'selected':''?>>Full package</option>
                        <option value="2" <?=($model->type==2)?'selected':''?>>Economy package</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_type">Product type</label>
                <div class="controls">
                    <select id="type" name="term">
                        <option value="1" <?=($model->term==1)?'selected':''?>>1 month</option>
                        <option value="2" <?=($model->term==2)?'selected':''?>>3 months</option>
                        <option value="3" <?=($model->term==3)?'selected':''?>>6 months</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_description">Product description</label>
                <div class="controls">
                    <textarea id="description" name="description" rows="10"><?= $model->description ?></textarea>
                </div>
            </div>
            <div class="control-group">
                    <input type="checkbox" id="package_enabled" name="package_enabled"  <?php echo ($model->enabled==1) ? 'checked="checked"' : '' ?>value="1"> Package enabled 

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