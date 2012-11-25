	<div style="clear: both;"></div>
</div> <!-- // wrapper -->

<footer>
	<p><small><?php Options::out('title'); ?> &middot; Powered by <a href="http://habariproject.org">Habari</a> &middot; Theme conversion by <a href="http://manda-moore.com">manda.moore</a> | <a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"><?php _e('Atom Entries'); ?></a> <?php _e('and'); ?> <a href="<?php URL::out( 'atom_feed_comments' ); ?>"><?php _e('Atom Comments'); ?></a></small></p>
</footer>
<?php $theme->footer(); ?>
</body>
</html>