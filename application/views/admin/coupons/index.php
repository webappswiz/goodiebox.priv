<?php
if (count($model) > 0) {
    
    ?>
    <h2>Orders</h2>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Coupon Codes</th>
                <th>Count</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($model as $coupon) {
                $user = ORM::factory('User',$coupon->user_id);
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $user->customer_firstname . '</td>';
                echo '<td>' . $user->customer_lastname . '</td>';
                echo '<td>' . $coupon->coupon_code . '</td>';
                echo '<td>' . $coupon->count . '</td>';
                echo '<td><a href="/admin/coupons/edit/' . $coupon->id . '" class="btn btn-primary">Edit</a></td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
}
echo '<td><a href="/admin/coupons/add/" class="btn btn-primary">Add new</a></td>';
