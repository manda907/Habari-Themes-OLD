<?php include 'header.php'; ?>


	
	<h1>Links</h1>
	<div id="entries">
		<ul>
			<?php get_links(-1, '<li>', '</li>', '<br>', FALSE, 'id', TRUE, TRUE, -1, TRUE); ?>
		</ul>
	</div>

<?php include 'footer.php'; ?>