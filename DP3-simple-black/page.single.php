<?php include 'header.php'; ?>


	
	<h1><a href="<?php echo $post->permalink; ?>" rel="bookmark" title="Permanent Link to <?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
	
	<?php echo $post->content_out; ?>
					
				<?php include 'comments.php'; ?>

<?php include 'footer.php'; ?>