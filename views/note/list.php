

<h1>List of notes</h1>

<?php while($note = $notes->fetch_object()) : ?>
	
	<?= $note->title ?> - <?= $note->posted_at ?> <br/>

<?php endwhile; ?>