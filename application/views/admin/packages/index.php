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
foreach ($packages as $package){
    echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$package->package_name.'</td>';
    echo '<td>'.$package->price.'</td>';
    echo '<td>'.$package->enabled.'</td>';
    echo '<td><a href="/admin/packages/edit/'.$package->id.'" class="btn btn-primary">Edit</a> ';
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