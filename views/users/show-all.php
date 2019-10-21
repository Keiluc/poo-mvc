<h1>List of users</h1>

<?php while($user = $all_users->fetch_object()) : ?>
	
	<?= $user->firstname ?> - <?= $user->email ?> <br/>

<?php endwhile; ?>