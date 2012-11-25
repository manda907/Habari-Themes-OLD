<hr/>
<div class="secondary">

	<div class="sb-module"><h2>Main Pages</h2>
		<ul>
			<li<?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>">Home</a></li>
					<?php
					foreach ( $pages as $tab ) {
					?>
					    <li<?php if(isset($post) && $post->slug == $tab->slug) { ?>
	class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
					<?php
					}
					if ( $loggedin ) { ?>
					    <li><a href="<?php Site::out_url( 'admin' ); ?>" title="Admin area">Admin</a></li>
					<?php } ?>
		</ul>
	</div>

	
	
	
	
	
	
	<?php if( Plugins::is_loaded('RN Monthly Archives' ) ): ?>
		<div class="sb-module"><h2>Archives</h2><?php $theme->monthly_archives( '0', 'N' ); ?>
	<?php endif; ?>
	</div>
		
	<div class="sb-module"><h2>Feeds</h2>
		<ul>
			<li><a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>">Blog Entries</a></li>
			<li><a href="<?php URL::out( 'atom_feed_comments' ); ?>">Comments</a></li>
		</ul>
	</div>

</div>