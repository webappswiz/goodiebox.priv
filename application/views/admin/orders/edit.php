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
    if($model->type==4){
        $type = 'Manual order';
    }
    ?>
    
    
    <table>
            <tr>
                <td><strong>Purchased package</strong></td>
                <?php
                if($model->selected_box==0){
                    $pkg = $model->prod_name;
                } else {
                    $pkg = $model->package->package_name;
                }
                ?>
                <td><?=$pkg?></td>
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
                    echo 'Free shipping <input type="checkbox" value="1" name="freeshipping"><br/><br/>';
                    echo '<input type="submit" value="Change status" name="submit" class="btn btn-primary">';
                    echo '</form>';
                    echo '</td>';
                ?>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td><?=($model->type==1 && $model->coupon_code<>'')?'Gift order':round($model->total_price)?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td><?=$model->status->status_name?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <th colspan="3">Details</th>
            </tr>
            <tr>
                <td><strong>Client email address</strong></td>
                <td><?=$current_user->email?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <?php
            
            if($model->puppy_id!=0){
                $size = '----';
                if($model->puppy->selected_size==1)
                    $size = 'Icipici';
                if($model->puppy->selected_size==2)
                    $size = 'Éppen jó';
                if($model->puppy->selected_size==3)
                    $size = 'Igazi óriás';
            }
            ?>
            <tr>
                <td><strong>Dog size</strong></td>
                <td><?=($model->puppy_id!=0 && $size)?$size:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Dog name</strong></td>
                <td><?=($model->puppy_id!=0)?$model->puppy->puppy_name:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Dog's gender</strong></td>
                <?php 
                    if($model->puppy_id!=0){
                        $gender = ($model->puppy->gender==0)?'Lány':'Fiú';
                    }
                ?>
                <td><?=($model->puppy_id!=0)?$gender:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Year of birth</strong></td>
                <td><?=($model->puppy_id!=0)?$model->puppy->years:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Month of birth</strong></td>
                <td><?=($model->puppy_id!=0)?$model->puppy->months:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Allergie</strong></td>
                <td><?=($model->puppy_id!=0 && $model->puppy->alerg==1)?'Yes':'No' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Allergie description</strong></td>
                <td><?=($model->puppy_id!=0 && $model->puppy->alerg==1)?$model->puppy->alerg_descr:'----' ?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Order comments</strong></td>
                <td><?=$model->message?></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            
        </table>
    <br/>
    <?php

    echo HTML::anchor('/admin/orders/receipt/'.$model->id, 'See receipt');
    echo ' | ';
    echo HTML::anchor('/admin/orders/shipping/'.$model->id, 'Print label');
?>
</div>