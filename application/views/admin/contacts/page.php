<h2>Incoming messages</h2>
    <?php echo $pagination; ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Replied</th>
            <th></th>
        </tr>
    </thead>
    <?php
    $i=1;
    foreach ($data as $item) {
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$item->firstname?></td>
            <td><?=$item->lastname?></td>
            <td><?=$item->email?></td>
            <td><?=$item->subject?></td>
            <td><?=$item->date?></td>
            <td><?=($item->replied==1)?'Yes':'No'?></td>
            <td><?=($item->replied==1)?'':'<a href="/admin/contacts/reply/'.$item->id.'" class="btn btn-primary">Reply</a>'?></td>
        </tr>
        <?php
        echo '<tr><th colspan="8">Message body</th></tr>';
        echo '<tr><td colspan="8"><blockquote><p>'.$item->message.'</p></blockquote></td></tr>';
        $i++;
    }
echo '</table>';
    echo $pagination;
