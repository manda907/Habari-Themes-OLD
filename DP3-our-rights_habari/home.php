<?php $theme->display( 'header'); ?>

	<div id="content">

	<?php foreach ( $posts as $post ) { ?>


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
		<?php } ?>


		<div class="navigation">
			<?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?>
		</div>

	</div>

<?php $theme->display ( 'sidebar' ); ?>
<?php $theme->display ('footer'); ?>
