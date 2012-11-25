<!-- tell this page to include header.php before this content -->
<?php $theme->display( 'header'); ?>

	<div id="content" class="narrowcolumn">

	<!-- this tells the theme that for each post to display, use the following: -->
	<?php foreach ( $posts as $post ) { ?>

			<!-- each div is defined by the posts' id so as it keep it from having non-repeating div id's -->
			<div id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
			
				<!-- display the post title & link to single post page-->
				<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
				
				<!-- display the time of the post -->
				<small><?php echo $post->pubdate->text_format('<span>{M}</span> <span>{d}</span>, <span>{Y}</span>'); ?></small>

				<!-- display the actual entry content -->
				<div class="entry">
					<?php echo $post->content_out; ?>
				</div>

				<!-- display tags post is tagged under, edit link if logged in, & comment count -->
				
				<p class="postmetadata"><!--start tags--><?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?><!--end tags--> <!--start edit--><?php if ( $loggedin ) { ?><a href="<?php echo $post->editlink; ?>" title="<?php _e('Edit post'); ?>"><?php _e('Edit'); ?></a><?php } ?><!--end edit--> <!--start comment count--><?php $theme->comments_link($post); ?><!--end comment count--></p>
			</div>

		<?php } ?>
		<!-- this tells habari where to stop in the theme for each post -->
		
		<!-- create navigation for entries pages; will create a pagination system with 2 pages older & newer on either side of current page -->
		<div class="navigation">
			<div class="alignleft"><?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?></div>
		</div>
		

	</div>
	<!-- end content -->

<!-- tell the theme to display sidebar.php -->
<?php $theme->display ( 'sidebar' ); ?>

<!-- tell the theme to display footer.php after sidebar.php -->
<?php $theme->display ( 'footer' ); ?>
