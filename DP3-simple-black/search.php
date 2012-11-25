<?php include 'header.php'; ?>


	<h1>Search Results for '<?php echo htmlspecialchars( $criteria ); ?>'</h1>
	
	<?php foreach ( $posts as $post ) { ?>
	
	<h1><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
	
	<h2><?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?><br/><a href="<?php echo $post->permalink; ?>#comments" title="Comments to this post"><?php echo $post->comments->approved->count; ?>
				<?php echo _n( 'Comment', 'Comments', $post->comments->approved->count ); ?></a><br/>
				<?php if ( is_array( $post->tags ) ) { ?>tagged: <?php echo $post->tags_out; ?><?php } ?><br/>
				</h2>
	<?php echo $post->content_out; ?>
	<?php } ?>
		<p style="margin-top:20px;"><?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?></p>

<?php include 'footer.php'; ?>