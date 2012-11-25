<?php $theme->display( 'header'); ?>

	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		
		
		
			<div class="post"  id="post-<?php echo $post->id; ?>">
				<h2 class="title"><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
					
				<div class="entry">
					<?php echo $post->content_out; ?>
					
					<p class="links"><a href="#top">Return To Top</a> &uarr;</p>
				</div>
			</div>
			
			
						
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<?php $theme->display ( 'sidebar' ); ?>
		
		
		<?php $theme->display ( 'footer' ); ?>