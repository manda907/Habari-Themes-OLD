		<div id="footer">
			<?php echo $copyright; ?> <a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out('title'); ?></a> &hearts; <a href="http://habariproject.org" title="Habari">Habari</a> <a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"><img src="<?php Site::out_url( 'theme' ); ?>/images/rss.gif"/> Atom Feed</a> &middot; theme by <a href="http://manda-moore.com">manda.moore</a>
		</div>
		
		<?php $theme->footer(); ?>
		
	</body>
</html>
