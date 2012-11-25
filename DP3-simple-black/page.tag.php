<?php include 'header.php'; ?>
	
	<h1><a href="<?php echo $post->permalink; ?>" rel="bookmark" title="Permanent Link to <?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
	
	<?php echo $post->content_out; ?>
					
	<ul>
		<?php 
			foreach(Tags::get() as $tag) {
			echo '<li><a href="' . URL::get('display_entries_by_tag', array('tag'=>$tag->slug)) . '">' . $tag->tag . '</a> ('. $tag->count . ')</li>';
			}
		?>
	</ul>

<?php include 'footer.php'; ?>