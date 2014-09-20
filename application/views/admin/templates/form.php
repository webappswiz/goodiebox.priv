<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/templates");
        });

    });
</script>
<div class="row-fluid">
    <div class="span2 pull-left">
        <div class="well sidebar-nav">
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Navigation</li>
                <li <?=($model->type==1)?'class="active"':""?>><a href="/admin/templates/edit/1">Registration email template</a></li>
                <li <?=($model->type==2)?'class="active"':""?>><a href="/admin/templates/edit/2">Order email template</a></li>
                <li <?=($model->type==3)?'class="active"':""?>><a href="/admin/templates/edit/3">Gift email template</a></li>
        </div>
    </div>

    <div class="span10 pull-left">

        <div class="well">
            <h2>Email template</h2>

            <form class="form-horizontal" style="display:inline-block;" method="POST" autocomplete='off'>
                <fieldset>
                    <div class="control-group">
                        <textarea class ="input-xxlarge" rows="10" id="template_text" name="template_text"><?= $model->template_text ?></textarea>
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

    </div>
</div>

