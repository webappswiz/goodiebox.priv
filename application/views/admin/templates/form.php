<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/templates");
        });

    });
</script>
<script type="text/javascript" src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        plugins : "pagebreak,layer,table,save,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
        theme : "modern",
        extended_valid_elements : "div[align|class|style|id|title]",
        extended_valid_elements : "iframe[name|src|framespacing|border|frameborder|scrolling|title|height|width],object[declare|classid|codebase|data|type|codetype|archive|standby|height|width|usemap|name|tabindex|align|border|hspace|vspace]",
        theme_advanced_buttons1 : "bold,italic,underline,emotions,strikethrough,blockquote,forecolor,formatselect,fontselect,fontsizeselect,link,unlink,|,image,media,|,code,preview,fullscreen",
        theme_advanced_buttons2 : "charmap,insertdate,inserttime,|,outdent,indent,|,table,justifyleft,justifycenter,justifyright,bullist,numlist,|,undo,redo,|,pagebreak,print",
        theme_advanced_toolbar_align : "left",
        relative_urls : false
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

