<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/users");
        });

    });
</script>
<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="customer_firstname">Customer's firstname</label>
                <div class="controls">
                    <input type="text" id="customer_firstname" name="customer_firstname" placeholder="Customer's firstname" value="<?= $model->customer_firstname ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_lastname">Customer's lastname</label>
                <div class="controls">
                    <input type="text" id="customer_lastname" name="customer_lastname" placeholder="Customer's lastname" value="<?= $model->customer_lastname ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_email">Customer's email</label>
                <div class="controls">
                    <input type="text" id="customer_email" name="customer_email" placeholder="Customer's email" value="<?= $model->email ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_city">Customer's city</label>
                <div class="controls">
                    <input type="text" id="customer_city" name="customer_city" placeholder=">Customer's city" value="<?= $model->customer_city ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_address">Customer's address</label>
                <div class="controls">
                    <input type="text" id="customer_address" name="customer_address" placeholder="Customer's address" value="<?= $model->customer_address ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_address2">Customer's address2</label>
                <div class="controls">
                    <input type="text" id="customer_address2" name="customer_address2" placeholder="Customer's address2" value="<?= $model->customer_address2 ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_zip">Customer's zip</label>
                <div class="controls">
                    <input type="text" id="customer_zip" name="customer_zip" placeholder="Customer's zip" value="<?= $model->customer_zip ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_telephone">Customer's telephone</label>
                <div class="controls">
                    <input type="text" id="customer_telephone" name="customer_telephone" placeholder="Customer's telephone" value="<?= $model->customer_telephone ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_company">Customer's company</label>
                <div class="controls">
                    <input type="text" id="customer_company" name="customer_company" placeholder="Customer's company" value="<?= $model->customer_company ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="customer_taxcode">Customer's tax code</label>
                <div class="controls">
                    <input type="text" id="customer_taxcode" name="customer_taxcode" placeholder="Customer's tax code" value="<?= $model->customer_taxcode ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="discount">Customer's discount %</label>
                <div class="controls">
                    <input type="text" id="customer_taxcode" name="customer_discount" value="<?= $discount ?>">
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary cancel">Back</button>
            </div>
        </fieldset>
        <?php
        echo Form::hidden('id', $model->id);
        ?>
    </form>
</div>