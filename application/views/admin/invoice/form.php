<script type="text/javascript">
    $(document).ready(function() {
        $(':button.cancel').on('click', function() {
            return window.location.replace("" + url_base + "admin/packages");
        });

    });
</script>
<?php $products = ORM::factory('Packages')->where('enabled','=',1)->find_all();?>
<div style="text-align: center">
    <form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="product">Product type</label>
                <div class="controls">
                    <select id="type" name="product">
                        <?php foreach ($products as $product):?>
                        <option value="<?=$product->id?>"><?=$product->package_name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="lastname">Last name</label>
                <div class="controls">
                    <input type="text" id="lastname" name="lastname" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="firstname">First name</label>
                <div class="controls">
                    <input type="text" id="firstname" name="firstname" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="address">Delivery address</label>
                <div class="controls">
                    <input type="text" id="address" name="address" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="city">Delivery city</label>
                <div class="controls">
                    <input type="text" id="city" name="city" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="postcode">Postcode</label>
                <div class="controls">
                    <input type="text" id="postcode" name="postcode" placeholder="" value="">
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="telephone">Telephone</label>
                <div class="controls">
                    <input type="text" id="telephone" name="telephone" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company_name">Company name</label>
                <div class="controls">
                    <input type="text" id="company_name" name="company_name" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company_address">Company address</label>
                <div class="controls">
                    <input type="text" id="company_address" name="company_address" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company_zip">Company postcode</label>
                <div class="controls">
                    <input type="text" id="company_zip" name="company_zip" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company_city">Company city</label>
                <div class="controls">
                    <input type="text" id="company_city" name="company_city" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="tax_code">Tax code</label>
                <div class="controls">
                    <input type="text" id="tax_code" name="tax_code" placeholder="" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="total_price">Total price</label>
                <div class="controls">
                    <input type="text" id="total_price" name="total_price" placeholder="" value="">
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