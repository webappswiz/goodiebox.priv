<h1>Manage users</h1>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Last login</th>
            <th>Actions</th>
        </tr>
    <?php
            $users = ORM::factory('User')->find_all();
            foreach($users as $user) {
                echo '<tr>';
                    echo '<td>'.$user->id.'</td>';
                    echo '<td>'.$user->username.'</td>';
                    echo '<td>'.$user->email.'</td>';
                    $date = new DateTime();
                    $date->setTimestamp($user->last_login);
                    echo ($user->logins!=0)?'<td>'.$date->format('Y-m-d H:i:s').'</td>':'<td>'.'Never'.'</td>';
                    echo '<td>';
                        echo HTML::anchor('/users/edit/'.$user->id, 'Edit');
                        if($user->id!=Auth::instance()->get_user()->id){
                        echo ' | ';
                        echo HTML::anchor(
                            '/users/delete/'.$user->id,
                            'Delete &nbsp;',
                              array(
                                  'data-title' => 'Delete User',
                                  'data-toggle'=>'confirm',
                                  'data-content' => 'Do you realy whant to delete '.$user->username.' ?',
                                  'title' => 'Delete user',
                                  'rel' => 'tooltip'
                              )
                      );
                        }
                    echo '</td>';
                echo '</tr>';
            }
    ?>
    </table>

<?php
    echo HTML::anchor('/users/new', 'Add new user');
?>
