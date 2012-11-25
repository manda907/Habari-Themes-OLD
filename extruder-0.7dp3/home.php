<?php $theme->display( 'header'); ?>

			<div class="post">
				
				<?php foreach ( $posts as $post ) { ?>
				
				<div id="post-<?php echo $post->id; ?>">

					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
						
						<div class="meta"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?> <?php $theme->comments_link($post); ?><br/>Tagged: <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?></div>
						
						<div class="postcontent">
							<?php echo $post->content_out; ?>
						
						</div><!--end .postcontent-->
				</div>
				<?php } ?>
				
				<div class="navigation">
					<?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?>
				</div>
		
			</div><!--end .post-->
			
<?php $theme->display ( 'footer' ); ?>