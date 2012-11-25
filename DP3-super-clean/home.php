<?php $theme->display( 'header'); ?>

		<div id="content">
		
			<?php foreach ( $posts as $post ) { ?>
		
			<div id="entry-<?php echo $post->slug; ?>" class="entry">
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
				<div class="meta"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?> &middot; <?php $theme->comments_link($post); ?> &middot; <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?> &middot; <a href="<?php echo $post->permalink; ?>" class="retweet">Retweet</a></div>
				
					<?php echo $post->content_out; ?>
												
			</div>	
			
			<?php } ?>
			
			<p class="navigation" style="font-size: 14px;"><?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?></p>							
			
		</div>

<?php $theme->display ( 'footer' ); ?>