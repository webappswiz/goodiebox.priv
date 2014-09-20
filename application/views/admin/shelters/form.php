<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/shelters");
        });

    });
</script>
<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="shelter_name">Shelter name</label>

                <div class="controls">
                    <input type="text" id="shelter_name" name="shelter_name" placeholder="Shelter's name" value="<?= $model->shelter_name ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="shelter_email">Shelter's email</label>

                <div class="controls">
                    <input type="text" id="shelter_email" name="shelter_email" placeholder="Shelter's email" value="<?= $model->email ?>">
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