<?php 
$shelters = ORM::factory('Shelter')->find_all();
if(count($shelters)>0){
?>
<h2>Shelters</h2>
<table class="table table-stripped">
    <thead>
    <tr>
        <th>#</th>
        <th>Shelter's name</th>
        <th>Shelter's email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
foreach ($shelters as $shelter){
    echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$shelter->shelter_name.'</td>';
    echo '<td>'.$shelter->email.'</td>';
    echo '<td><a href="/admin/shelters/edit/'.$shelter->id.'" class="btn btn-primary">Edit</a> ';
    echo HTML::anchor(
                        '/admin/shelters/delete/' . $shelter->id, 'Remove', array(
                    'data-title' => 'Delete a shelter',
                    'data-toggle' => 'confirm',
                    'data-content' => 'Do you really want to delete a shelter ?',
                    'title' => 'Delete shelter',
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
echo HTML::anchor('/admin/shelters/add', 'Add a new shelter', array('class' => 'btn btn-primary'));