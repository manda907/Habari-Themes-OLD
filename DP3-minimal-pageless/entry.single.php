<?php $theme->display( 'header'); ?>

			<div id="content">
			<p id="top">&nbsp;</p>
						
				<div id="entry-<?php echo $post->id; ?>" class="entry <?php echo $post->statusname; foreach( $post->tags as $tag) { echo " $tag"; } ?>">

					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
						
						<p class="meta"><?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?> &middot; <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?> &middot; <?php $theme->comments_link($post); ?></p>
						
						<?php echo $post->content_out; ?>
				</div>
						
			<div class="entry">
				<?php $theme->display ('comments'); ?>
			</div>

			</div>

<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>