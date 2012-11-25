<?php $theme->display( 'header'); ?>

			<div class="post">
				
				
				
				<div id="post-<?php echo $post->id; ?>">

					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
						
						<div class="meta"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?> <?php $theme->comments_link($post); ?><br>Tagged: <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?></div>
						
						<div class="postcontent">
							<?php echo $post->content_out; ?>
						
						</div><!--end .postcontent-->
				</div>
				
				
				<div class="navigation">
						<?php if ( $previous = $post->descend() ): ?>
		<a href="<?php echo $previous->permalink ?>" title="<?php echo $previous->slug ?>">&laquo;  <?php echo $previous->title ?></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php endif; ?>
		<?php if ( $next = $post->ascend() ): ?>
		<a href="<?php echo $next->permalink ?>" title="<?php echo $next->slug ?>"><?php echo $next->title ?> &raquo;</a>
		<?php endif; ?>

				</div>
				
				<div class="comments">
<?php $theme->display ('comments'); ?>
</div>

		
			</div><!--end .post-->
			
<?php $theme->display ( 'footer' ); ?>