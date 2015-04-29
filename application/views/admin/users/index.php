<?php
$users = ORM::factory('User')->find_all();
if (count($users) > 0) {
    ?>
    <h2>Users</h2>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer's firstname</th>
                <th>Customer's lastname</th>
                <th>Customer's email</th>
                <th>Customer's telephone</th>
                <th>Last login</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($users as $user) {
                if ($user->is_admin())
                    continue;
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $user->customer_firstname . '</td>';
                echo '<td>' . $user->customer_lastname . '</td>';
                echo '<td>' . $user->email . '</td>';
                echo '<td>' . $user->customer_telephone . '</td>';
                echo '<td>' . date('d-m-Y H:i', $user->last_login) . '</td>';
                echo '<td><a href="/admin/users/info/' . $user->id . '" class="btn btn-primary">Full info</a> ';

                echo HTML::anchor(
                        '/admin/users/delete/' . $user->id, 'Remove', array(
                    'data-title' => 'Delete user',
                    'data-toggle' => 'confirm',
                    'data-content' => 'Do you really want to delete a user ?',
                    'title' => 'Delete user',
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