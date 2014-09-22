<h2>Incoming messages</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Replied</th>
        </tr>
    </thead>
    <?php
    foreach ($data as $item) {
        ?>
        <tr>
            <td><?=$item->firstname?></td>
            <td><?=$item->lastname?></td>
            <td><?=$item->email?></td>
            <td><?=$item->subject?></td>
            <td><?=$item->date?></td>
            <td><?=($item->replied==1)?'Yes':'No'?></td>
        </tr>
        <?php
        echo '<tr><th colspan="6">Message body</th></tr>';
        echo '<tr><td colspan="6"><blockquote><p>'.$item->message.'</p></blockquote></td></tr>';
    }
echo '</table>';
// Show links
    echo $pagination;
