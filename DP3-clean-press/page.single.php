<!-- tell this page to include header.php before this content -->
<?php $theme->display( 'header'); ?>

	<div id="content" class="narrowcolumn">

			<!-- each div is defined by the pages' id so as it keep it from having non-repeating div id's -->
			<div id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
			
				<!-- display the page title & link to single post page-->
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
				
				<!-- display the time of the page -->
				<small><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></small>

				<!-- display the actual page content -->
				<div class="entry">
					<?php echo $post->content_out; ?>
				</div>

			</div>
		
		<!-- create navigation for to go to the previous or next entry -->
		<div class="navigation">
			<?php if ( $previous = $post->descend() ): ?>
		<div class="alignleft"> &laquo; <a href="<?php echo $previous->permalink ?>" title="<?php echo $previous->slug ?>"><?php echo $previous->title ?></a></div>
		<?php endif; ?>
		<?php if ( $next = $post->ascend() ): ?>
		<div class="alignright"><a href="<?php echo $next->permalink ?>" title="<?php echo $next->slug ?>"><?php echo $next->title ?></a> &raquo;</div>
		<?php endif; ?>
		</div>
		
	</div>
	<!-- end content -->

<!-- tell the theme to display sidebar.php -->
<?php $theme->display ( 'sidebar' ); ?>

<!-- tell the theme to display footer.php after sidebar.php -->
<?php $theme->display ( 'footer' ); ?>
