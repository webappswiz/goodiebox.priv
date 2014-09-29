<div class="media-body" style="width: auto !important;table-layout: fixed;">
        <table>
            <tr>
                <td colspan="3"><h4 class="media-heading">Customer information</h4></td>
                <td colspan="2"><h4 class="media-heading">Delivery information</h4></td>
            </tr>
            <tr>
                <td><strong>Customer firstname</strong></td>
                <td><?=$current_user->customer_firstname?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery firstname</strong></td>
                <td><?=$model->delivery_firstname?></td>
            </tr>
            <tr>
                <td><strong>Customer lastname</strong></td>
                <td><?=$current_user->customer_lastname?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery lastname</strong></td>
                <td><?=$model->delivery_lastname?></td>
            </tr>
            <tr>
                <td><strong>Customer city</strong></td>
                <td><?=$current_user->customer_city?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery city</strong></td>
                <td><?=$model->delivery_city?></td>
            </tr>
            <tr>
                <td><strong>Customer address</strong></td>
                <td><?=$current_user->customer_address?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery address</strong></td>
                <td><?=$model->delivery_address?></td>
            </tr>
            <tr>
                <td><strong>Customer postcode</strong></td>
                <td><?=$current_user->customer_zip?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery postcode</strong></td>
                <td><?=$model->delivery_postcode?></td>
            </tr>
            <tr>
                <td><strong>Customer telephone</strong></td>
                <td><?=$current_user->customer_telephone?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><strong>Delivery telephone</strong></td>
                <td><?=$model->delivery_telephone?></td>
            </tr>
        </table>
    <hr/>
    <h4 class="media-heading">Order summary</h4>
    <?php
    if($model->type==1){
        $type = 'Own dog';
    }
    if($model->type==2){
        $type = 'Gift order';
    }
    if($model->type==3){
        $type = 'Shelter order';
    }
    ?>
    
    
    <table>
            <tr>
                <td><strong>Purchased package</strong></td>
                <td><?=$model->package->package_name?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <th>Modify order</th>
            </tr>
            <tr>
                <td><strong>Order type</strong></td>
                <td><?=$type?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <?php
                    $statuses = ORM::factory('OrderStatus')->find_all();
                    foreach ($statuses as $s){
                        $st[$s->type] = $s->status_name;
                    }
                    echo '<td rowspan="3" valign="top">';
                    echo '<form method="POST" action="">';
                    echo Form::select('status_name', $st, $model->orders_status, array('required', 'class' => 'rounded option-name')).'<br/>';
                    echo '<input type="submit" value="Change status" name="submit" class="btn btn-primary">';
                    echo '</form>';
                    echo '</td>';
                ?>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td><?=($model->type==1 && $model->coupon_code<>'')?'Gift order':$model->package->price?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td><?=$model->status->status_name?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
        </table>
    <br/>
    <?php

    echo HTML::anchor('/admin/orders/receipt/'.$model->id, 'See receipt');
?>
</div>