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
                <label class="control-label" for="package_price">Packages price</label>
                <div class="controls">
                    <input type="text" id="package_price" name="package_price" placeholder="Package price" value="<?= $model->price ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="package_price">Packages price</label>
                <div class="controls">
                    <input type="checkbox" id="package_enabled" name="package_enabled" value="1">
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn cancel">Cancel</button>
            </div>
        </fieldset>
        <?php
        echo Form::hidden('id', $model->type);
        ?>
    </form>
</div>