<?php
if (count($data) > 0) {
    ?>
    <h2>Orders</h2>
    <?php echo $pagination; ?>
    <table class="table table-stripped">
        <thead>
            <tr>
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
                echo '<td>' . $order->package->package_name . '</td>';
                echo '<td>' . $order->status->status_name . '</td>';
                $coupon = (!empty($order->coupon_code)) ? 'Yes' : 'No';
                echo '<td>' . $coupon . '</td>';
                echo '<td>' . $order->date_purchased . '</td>';
                if ($order->payment_status == 1) {
                    $status = 'Paid';
                } elseif ($order->payment_status == 0) {
                    $status = 'Payment pending';
                } elseif($order->payment_status == 2) {
                    $status = 'Payment declined';
                } elseif($order->payment_status == 3) {
                    $status = 'Free. Gift order';
                } elseif($order->payment_status == 5) {
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
    <?php echo $pagination; ?>
    <?php
}
?>

