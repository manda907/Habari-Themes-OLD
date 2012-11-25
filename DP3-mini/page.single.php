<?php $theme->display( 'header'); ?>

<div class="hr"></div>
<div id="content">
	
	<div id="post-<?php echo $post->id; ?>" class="post">
		<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
		<div class="meta">Posted <?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?> &middot; tagged: <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?> &middot; <?php $theme->comments_link($post); ?></div>
		
		<?php echo $post->content_out; ?>
		
	</div><!--end POST-->					
	
</div><!--end CONTENT-->

<?php $theme->display ( 'footer' ); ?>