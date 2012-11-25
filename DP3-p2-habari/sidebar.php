<aside>
<ul>
		<li <?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>"><?php echo $home_tab; ?></a></li>
<?php
// Menu tabs
$theme->menu('mainmenu');
if ( $user instanceof User ) { ?>
		<li class="admintab"><a href="<?php Site::out_url( 'admin' ); ?>" title="<?php _e('Admin area'); ?>"><?php _e('Admin'); ?></a></li>
<?php } ?>
	
	</ul>
	<form method="get" id="search" action="<?php URL::out('display_search'); ?>">
  <p><input type="text" id="searchfield" name="criteria" value="search + hit enter" onfocus="this.value=''">
  <input type="hidden" id="searchsubmit" value="<?php _e('Search'); ?>"></p>
</form>
		
<div style="clear: both;"></div>
</aside> <!-- // sidebar -->