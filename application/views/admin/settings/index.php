<?php 
$statuses = ORM::factory('OrderStatus')->find_all();
if(count($statuses)>0){
?>
<h2>Order Statuses</h2>
<table class="table table-stripped">
    <thead>
    <tr>
        <th>#</th>
        <th>Status name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
foreach ($statuses as $status){
    echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$status->status_name.'</td>';
    echo '<td><a href="/admin/settings/edit/'.$status->type.'" class="btn btn-primary">Edit</a> ';
    echo HTML::anchor(
                        '/admin/settings/delete/' . $status->type, 'Remove', array(
                    'data-title' => 'Delete a status',
                    'data-toggle' => 'confirm',
                    'data-content' => 'Do you really want to delete an order status ?',
                    'title' => 'Delete status',
                    'rel' => 'tooltip',
                    'class' => 'btn btn-danger'
                        )
                );
    echo '</td>';
    echo '</tr>';
    $i++;
}
    ?>
    </tbody>
</table>
<?php
}
?>
<?php
echo HTML::anchor('/admin/settings/add', 'Add a new order status', array('class' => 'btn btn-primary'));