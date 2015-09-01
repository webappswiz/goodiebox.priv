        <div class="well">
            <h1>Hello, Admin!</h1>
            <p>
                Here is the interface for managing the orders, users, email templates, etc...
            </p>
			<p>
			<?php	$total_subscribers = ORM::factory('Subscribers')->count_all();
				echo 'We currently have <span style="color:red;font-weight:bold;">' . $total_subscribers . '</span> subscribers!';
		    ?>
			</p>
        </div>

<hr>