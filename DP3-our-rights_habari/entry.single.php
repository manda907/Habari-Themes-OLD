<?php $theme->display( 'header'); ?>

	<div id="content">

			<div class="post" id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
				<p class="postdate"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></p>
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>

				<div class="entry">
					<?php echo $post->content_out; ?>
				</div>

				<p class="postmetadata">
				<?php if ( $loggedin ) { ?>
					<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a>
					<?php } ?>
					<span class="posttime"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></span> |
					<?php if ( is_array( $post->tags ) ) { ?><span class="postcat"> Tagged: <?php echo $post->tags_out; ?></span><?php } ?>
					<span><?php $theme->comments_link($post); ?></span>
				</p>
			</div>

		<div class="navigation">
		<?php if ( $previous = $post->descend() ): ?>
			<div class="alignleft"> &laquo; <a href="<?php echo $previous->permalink ?>" title="<?php echo $previous->slug ?>"><?php echo $previous->title ?></a></div>
			<?php endif; ?>
		<?php if ( $next = $post->ascend() ): ?>
			<div class="alignright"><a href="<?php echo $next->permalink ?>" title="<?php echo $next->slug ?>"><?php echo $next->title ?></a> &raquo;</div>
					<?php endif; ?>

		</div>
	
<?php $theme->display ('comments'); ?>

	</div>

<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>
