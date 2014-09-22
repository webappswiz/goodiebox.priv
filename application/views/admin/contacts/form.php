<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/contacts");
        });

    });
</script>
<script type="text/javascript" src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
});
</script>
<h2>Reply to <?=$message->firstname?></h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Date</th>
        </tr>
    </thead>
    <tr>
        <td><?= $message->firstname ?></td>
        <td><?= $message->lastname ?></td>
        <td><?= $message->email ?></td>
        <td><?= $message->subject ?></td>
        <td><?= $message->date ?></td>
    </tr>
    <?php
    echo '<tr><th colspan="8">Message body</th></tr>';
    echo '<tr><td colspan="8"><blockquote><p>' . $message->message . '</p></blockquote></td></tr>';
    ?>
</table>
<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <div class="controls">
                    <textarea class ="input-xxlarge" rows="10" id="reply" name="message"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn cancel">Cancel</button>
            </div>
        </fieldset>
        <?php
        echo Form::hidden('id', $message->id);
        ?>
    </form>
</div>