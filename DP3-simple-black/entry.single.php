<?php include 'header.php'; ?>


	
	<h1><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h1>
	<h2><?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?><br/><a href="<?php echo $post->permalink; ?>#comments" title="Comments to this post"><?php echo $post->comments->approved->count; ?>
				<?php echo _n( 'Comment', 'Comments', $post->comments->approved->count ); ?></a><br/>
				<?php if ( is_array( $post->tags ) ) { ?>tagged: <?php echo $post->tags_out; ?><?php } ?><br/>
				</h2>
	<?php echo $post->content_out; ?>
		<p style="margin-top:20px;"><?php if ( $previous= $post->descend() ): ?>
				&laquo; <a href="<?php echo $previous->permalink; ?>" title="<?php echo _t('View') . ' ' . $previous->title_out; ?>"><?php echo $previous->title_out; ?></a>
			<?php endif; ?>
			<?php if ( $next= $post->ascend() && $previous= $post->descend() ): ?>
				&nbsp;&mdash;&nbsp;
			<?php endif; ?>
			<?php if ( $next= $post->ascend() ): ?>
				<a href="<?php echo $next->permalink; ?>" title="<?php echo _t('View') . ' ' . $next->title_out; ?>"><?php echo $next->title_out; ?></a> &raquo;
			<?php endif; ?></p>
				
				<?php include 'comments.php'; ?>

<?php include 'footer.php'; ?>