<?php $theme->display( 'header'); ?>

			<div id="content">
			<p id="top">&nbsp;</p>
						
				<div id="entry-<?php echo $post->id; ?>" class="entry">

					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
												
						<?php echo $post->content_out; ?>
						
						
						
						<?php $theme->flickrfeed(); ?>
				</div>
						
			</div>

<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>