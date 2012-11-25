			
			<?php foreach ( $posts as $post ) { ?>
			
				<div id="entry-<?php echo $post->id; ?>" class="hentry entry">

					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
						
						<p class="meta"><?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?> &middot; <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?> &middot; <?php $theme->comments_link($post); ?></p>
						
						<?php echo $post->content_out; ?>
				</div>
			
			<?php } ?>
			
