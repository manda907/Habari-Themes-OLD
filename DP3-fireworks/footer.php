<div id="footer">
		<p>&copy; 2009 <?php Options::out('title'); _e(' is powered by'); ?> <a href="http://www.habariproject.org/" title="Habari">Habari</a> <?php _e('and a huge amount of'); ?>
<a href="http://en.wikipedia.org/wiki/Caffeine" title="<?php _e('Caffeine'); ?>" rel="nofollow">C<sub>8</sub>H<sub>10</sub>N<sub>4</sub>O<sub>2</sub></a> - based on design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | Theme Conversion by <a href="http://manda-moore.com">manda.moore</a>.</p>
<p><a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"><?php _e('Atom Entries'); ?></a> <?php _e('and'); ?> <a href="<?php URL::out( 'atom_feed_comments' ); ?>"><?php _e('Atom Comments'); ?></a></p>
	</div>
	<!-- end #footer -->
	
	<?php $theme->footer(); ?>
</body>
</html>