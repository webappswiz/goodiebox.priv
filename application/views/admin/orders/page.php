<?php
if (count($data) > 0) {
    ?>
    <script>
        $(document).ready(function () {
            $('.datef').datepicker();
            $('.datet').datepicker();
        });

    </script>
    <h2>Orders</h2>
    <?php echo $pagination; ?>
    <?php
    $statuses = ORM::factory('OrderStatus')->find_all();
    foreach ($statuses as $s) {
        $st[$s->type] = $s->status_name;
    }
    ?>
    <form action="" method="GET">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <td colspan="11">
                        <select name="action">
                            <option value="0">- Please select an action</option>
                            <option value="1">Print Label</option>
                            <option value="2">Cancel Order</option>
                        </select>
                        <input type="text" name="filter_by_fname" placeholder="First Name">
                        <input type="text" name="filter_by_lname" placeholder="Last Name">
                        <input type="text" class="datef" name="date_from" placeholder="Date From">
                        <input type="text" class="datet" name="date_to" placeholder="Date To">
                        <?php echo Form::select('status_name', $st, '', array('required', 'class' => 'rounded option-name'));?>
                        <input type="submit" class="btn btn-primary" value="Go">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Order type</th>
                    <th>Package</th>
                    <th>Order status</th>
                    <th>Coupon?</th>
                    <th>Date purchased</th>
                    <th>Payment Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $order) {
                    echo '<tr>';
                    echo '<td><input type="checkbox" name="orders[]" value="' . $order->id . '"></td>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $order->delivery_firstname . '</td>';
                    echo '<td>' . $order->delivery_lastname . '</td>';
                    if ($order->type == 1)
                        $type = 'Own puppy';
                    if ($order->type == 2)
                        $type = 'Gift order';
                    if ($order->type == 3)
                        $type = 'Shelter';
                    if ($order->type == 4)
                        $type = 'Manual order';

                    echo '<td>' . $type . '</td>';
                    if ($order->selected_box == 0) {
                        $pkg = $order->prod_name;
                    } else {
                        $pkg = $order->package->package_name;
                    }
                    echo '<td>' . $pkg . '</td>';
                    echo '<td>' . $order->status->status_name . '</td>';
                    $coupon = (!empty($order->coupon_code)) ? 'Yes' : 'No';
                    echo '<td>' . $coupon . '</td>';
                    echo '<td>' . $order->date_purchased . '</td>';
                    if ($order->payment_status == 1) {
                        $status = 'Paid';
                    } elseif ($order->payment_status == 0) {
                        $status = 'Payment pending';
                    } elseif ($order->payment_status == 2) {
                        $status = 'Payment declined';
                    } elseif ($order->payment_status == 3) {
                        $status = 'Free. Gift order';
                    } elseif ($order->payment_status == 5) {
                        $status = 'Cash on delivery';
                    }
                    echo '<td>' . $status . '</td>';
                    echo '<td><a href="/admin/orders/edit/' . $order->id . '" class="btn btn-primary">Edit</a></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </form>
    <?php echo $pagination; ?>
    <?php
}
?>

