<?php $theme->display( 'header'); ?>

			<div id="content">
			<p id="top">&nbsp;</p>
			
			<?php foreach ( $posts as $post ) { ?>
			
				<div id="entry-<?php echo $post->id; ?>" class="entry <?php echo $post->statusname; foreach( $post->tags as $tag) { echo " $tag"; } ?>">

					<h2 id="tagged <?php echo $post->id; ?>"><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
						
												
						<script type="text/javascript" language="javascript">
							new Tip('tagged <?php echo $post->id; ?>', '<?php echo $post->pubdate->text_format('{d} {M}, {Y}'); ?> <br/> <?php $theme->comments_link($post); ?> <br/> <?php if ( is_array( $post->tags ) ) { ?><?php echo $post->tags_out; ?><?php } ?>',
								{																		
									radius: 0,
									border: 0,
									//stem: 'rightMiddle',
									hook: { tip: 'rightMiddle', target: 'leftRight' },
									hideOn: false,
									hideAfter: .3,
									offset: { x: -10, y: 10 },
									width: 'auto'
								});
						</script>
						
						<?php echo $post->content_out; ?>
				</div>
			
			<?php } ?>
			
			<div class="entry">
				<?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#top" class="return">Return to top &uarr;</a>
			</div>
					

			</div>

<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>