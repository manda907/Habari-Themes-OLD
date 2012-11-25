<?php $theme->display( 'header'); ?>

	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		
		<?php foreach ( $posts as $post ) { ?>
		
			<div class="post"  id="post-<?php echo $post->id; ?>">
				<h2 class="title"><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
				<p class="meta"><abbr class="published"><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></abbr> <?php if ( $show_author ) { _e( 'by %s', array( $post->author->displayname ) ); } ?>
					
										
					<?php if ( $loggedin ) { ?>
						<a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a>
					<?php } ?>

					<?php if ( is_array( $post->tags ) ) { ?>
						<?php echo $post->tags_out; ?>
					<?php } ?></p>
					
				<div class="entry">
					<?php echo $post->content_out; ?>
					
					<p class="links"><a href="<?php echo $post->permalink; ?>">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<?php $theme->comments_link($post); ?></p>
				</div>
			</div>
			<?php } ?>
			
			<div id="page-selector">
				<?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?>
			</div>
			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<?php $theme->display ( 'sidebar' ); ?>
		
		
		<?php $theme->display ( 'footer' ); ?>