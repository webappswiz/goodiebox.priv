<?php 
$packages = ORM::factory('Packages')->find_all();
if(count($packages)>0){
?>
<h2>Edit packages</h2>
<table class="table table-stripped">
    <thead>
    <tr>
        <th>#</th>
        <th>Package name</th>
        <th>Package price</th>
        <th>Enabled</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
foreach ($statuses as $status){
    echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$packages->package_name.'</td>';
    echo '<td>'.$packages->price.'</td>';
    echo '<td>'.$packages->enabled.'</td>';
    echo '<td><a href="/admin/settings/edit/'.$status->type.'" class="btn btn-primary">Edit</a> ';
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