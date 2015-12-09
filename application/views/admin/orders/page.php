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
    $st[0] = '- Please select a status';
    foreach ($statuses as $s) {
        $st[$s->type] = $s->status_name;
    }
    ?>
    <script>
        $('body').on('click', '#select_all', function () {
            var checkboxes = $(this).closest('form').find(':checkbox');
            if ($(this).is(':checked')) {
                checkboxes.prop('checked', true);
            } else {
                checkboxes.prop('checked', false);
            }
        });
    </script>
    <form action="" method="GET">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <td colspan="11">
                        <select name="action">
                            <option value="0">- Please select an action</option>
                            <option value="1">Print Label</option>
                            <option value="2">Cancel Order</option>
                            <option value="3">Change Status</option>
                            <option value="4">Print Invoices</option>
                        </select>
                        <input type="text" name="filter_by_fname" placeholder="First Name" value="<?php echo (isset($_REQUEST['filter_by_fname'])) ? $_REQUEST['filter_by_fname'] : ''; ?>">
                        
                        <input type="text" class="datef" name="date_from" placeholder="Date From" value="<?php echo (isset($_REQUEST['date_from'])) ? $_REQUEST['date_from'] : ''; ?>"><br/>
                        
                        <?php echo Form::select('status_name', $st, '', array('required', 'class' => 'rounded option-name')); ?>
                        <input type="text" name="filter_by_lname" placeholder="Last Name" value="<?php echo (isset($_REQUEST['filter_by_lname'])) ? $_REQUEST['filter_by_lname'] : ''; ?>">
                        <input type="text" class="datet" name="date_to" placeholder="Date To" value="<?php echo (isset($_REQUEST['date_to'])) ? $_REQUEST['date_to'] : ''; ?>"><br/>
                        <select name="payment_type">
                            <option value="0">- Please payment type</option>
                            <option value="1">Credit card</option>
                            <option value="5">Cash on delivery</option>
                        </select><br/>
                        <input type="submit" class="btn btn-primary" value="Go">
                    </td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="select_all"></th>
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
                    echo '<td>' . $order->id . '</td>';
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

