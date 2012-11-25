		
			<!--side menu-->
			<div id="extruderLeft" class="{title:'Menu'}">
				<div class="content">
				
				<h1 <?php if($request->display_home) { ?>
				class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>"><?php echo $home_tab; ?></a></h1>
<?php
			// Menu tabs
			foreach ( $pages as $tab ) {
			?>
					<!-- create all single pages in this manner: -->
					<h1<?php if(isset($post) && $post->slug == $tab->slug) { ?>
				class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></h1>
				
			<!-- create link to admin area if logged in -->
			<?php
			}
			if ( $user instanceof User ) { ?>
					<h1 class="admintab"><a href="<?php Site::out_url( 'admin' ); ?>" title="<?php _e('Admin area'); ?>"><?php _e('Admin'); ?></a></h1>
			<?php } ?>

<p class="foot"><small><?php Options::out('title'); _e(' is powered by'); ?> <a href="http://www.habariproject.org/" title="Habari">Habari</a></small><br/><small>Theme by <a href="http://manda-moore.com">manda.moore</a></small></p>


<script type="text/javascript">

</script>
				
				</div>
			</div>
		
		</div><!--end .wrapper-->
		
		<?php $theme->footer(); ?>
	</body>
</html>
