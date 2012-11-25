			<div id="sidebar">
			<div id="header">
				<h1><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>
				
			</div>
				<ul>
		     		<li ><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>" <?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><?php echo $home_tab; ?></a></li>
                	
                	<?php
		// List Pages
		foreach ( $pages as $page ) {
			echo '<li><a href="' . $page->permalink . '" title="' . $page->title . '">' . $page->title . '</a></li>' . "\n";
		}
		?>
                </ul>
                
			<div id="footer">
				<p><a href="<?php Site::out_url( 'habari' ); ?>"><?php echo $copyright; ?></a><br/><a href="http://habariproject.org" id="habari">Habari</a> &hearts; theme by <a href="http://manda-moore.com">manda.moore</a>
												
				<!--<script type="text/javascript" language="javascript">
					new Tip('habari', "Habari is next-generation blogging!", {						
						border: 3,
						radius: 3,
						stem: 'topLeft',
						hook: { tip: 'topLeft' },
						offset: { x: 15, y: 10 },
						width: 180
					});
				</script>-->
				</p>
			</div>
			</div>
