<script type="text/javascript">
    $(document).ready(function(){
        $('#enddate').datetimepicker({
            'minTime':0,
            'minDate':0,
            'step':30,
            'onSelectDate': function (selected) {
                var today = new Date();
                if(selected.getTime()/1000 > today.getTime()/1000){
                    $('#enddate').datetimepicker({
                        'minTime':'00:00'
                    });
                } else {
                    $('#enddate').datetimepicker({
                        'minTime':0
                    });
                }
            }
        });
    });
</script>
<div style="text-align: center">
    <form class="form-horizontal" style="display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="counting_text">Counting text</label>
                <div class="controls">
                    <input type="text" name="counting_text" value="<?=$model->text?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="counting_text">Counting text English</label>
                <div class="controls">
                    <input type="text" name="counting_text_eng" value="<?= $model->text_eng ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="enddate">End date</label>
                <div class="controls">
                    <input type="text" id="enddate" name="end_date" placeholder="00:00" value="<?=$model->end_date?>" required>
                </div>
            </div>


                <div class="controls">
                <label class="control-label" for="enddate">Enabled?</label>
                <input type="checkbox" id="status" name="status" <?=($model->status==1)?'checked':''?> value="1">
                </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn cancel">Cancel</button>
            </div>
        </fieldset>
		<?php	$total_subscribers = ORM::factory('Subscribers')->count_all();
				echo 'An email will be sent to all <span style="color:red;font-weight:bold;">' . $total_subscribers . '</span> subscribers!';
		?>
    </form>
</div>