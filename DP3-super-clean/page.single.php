<?php $theme->display( 'header'); ?>

		<div id="content">
				
			<div id="entry-<?php echo $post->slug; ?>" class="entry">
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
				<div class="meta"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?> &middot; <?php $theme->comments_link($post); ?> &middot; <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?> &middot; <a href="<?php echo $post->permalink; ?>" class="retweet">Retweet</a></div>
				
					<?php echo $post->content_out; ?>
												
			</div>
			
			<?php $theme->display ('comments'); ?>	
			
		</div>

<?php $theme->display ( 'footer' ); ?>