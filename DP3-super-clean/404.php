<?php $theme->display( 'header'); ?>

		<div id="content">
				
			<div id="entry-<?php echo $post->slug; ?>" class="entry">
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>			
				
					<p>Looks like the page you were looking for has been deleted or moved.</p>
												
			</div>	
			
		</div>

<?php $theme->display ( 'footer' ); ?>