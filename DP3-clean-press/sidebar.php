	<div id="sidebar">

		<div class="about">
			Here is the theme we created! You can edit this space in the sidebar.php page or delete it if you don't want to display it at all.
		</div>
		
		<!-- we'll list the site's menu here, generally all single pages created make up the site's menu -->
		<ul>
		
			<li><h2>Pages</h2></li>
			<!-- create link to the home page -->
			<li <?php if($request->display_home) { ?>
				class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>"><?php echo $home_tab; ?></a></li>

			<!-- begin building links to all other single pages created -->
			<?php
			// Menu tabs
			foreach ( $pages as $tab ) {
			?>
					<!-- create all single pages in this manner: -->
					<li<?php if(isset($post) && $post->slug == $tab->slug) { ?>
				class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
				
			<!-- create link to admin area if logged in -->
			<?php
			}
			if ( $user instanceof User ) { ?>
					<li class="admintab"><a href="<?php Site::out_url( 'admin' ); ?>" title="<?php _e('Admin area'); ?>"><?php _e('Admin'); ?></a></li>
			<?php } ?>
		</ul>
	</div>

<?php $theme->sidebar(); ?>