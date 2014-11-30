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
                <th>Date purchased</th>
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
                if ($order->type == 4)
                    $type = 'Manual orders';
                echo '<td>' . $type . '</td>';
                echo '<td>' . $order->package->package_name . '</td>';
                echo '<td>' . $order->date_purchased . '</td>';
                echo '<td><a href="/admin/orders/receipt/' . $order->id . '" class="btn btn-primary">View</a></td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
    <?php echo $pagination; ?>
    <?php
}
echo HTML::anchor('/admin/invoice/add', 'Add a new invoice', array('class' => 'btn btn-primary'));
?>
