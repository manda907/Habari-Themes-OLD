	<div id="sidebar">
<?php Plugins::act( 'theme_sidebar_top' ); ?>

<!-- pages menu -->
		<h2 class="widgettitle">{<span>Menu</span>}</h2>
		<ul>
		<li <?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>">Home</a></li>
<?php
// Menu tabs
foreach ( $pages as $tab ) {
?>
		<li<?php if(isset($post) && $post->slug == $tab->slug) { ?>
	class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
<?php
}
if ( $user instanceof User ) { ?>
		<li class="admintab"><a href="<?php Site::out_url( 'admin' ); ?>" title="<?php _e('Admin area'); ?>"><?php _e('Admin'); ?></a></li>
<?php } ?>
	</ul>
<!-- end pages menu -->

<!-- monthly archives plugin -->
<?php if( Plugins::is_loaded('RN Monthly Archives' ) ): ?>
		<h2 class="widgettitle">{<span>Archives</span>}</h2>
		<?php $theme->monthly_archives( '0', 'N' ); ?>
	<?php endif; ?>
<!-- end monthly archives plugin -->

<!-- search form -->
		<h2 class="widgettitle">{<span><?php _e('Search'); ?></span>}</h2>
<?php $theme->display ('searchform' ); ?>
<!-- end search form -->

<?php Plugins::act( 'theme_sidebar_bottom' ); ?>
	</div>



