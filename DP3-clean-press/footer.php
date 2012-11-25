<!-- create footer information -->

<hr />
<div id="footer">
	<p>
		<!--site title & powered by Habari link--><?php Options::out('title'); _e(' is powered by'); ?> <a href="http://www.habariproject.org/" title="Habari">Habari</a><!--end--><br>
		<!--entry & comments feed links --><a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"><?php _e('Atom Entries'); ?></a> <?php _e('and'); ?> <a href="<?php URL::out( 'atom_feed_comments' ); ?>"><?php _e('Atom Comments'); ?></a><!--end feeds-->
	</p>
</div>
</div>

<!-- do not remove this or the world will end -->
<?php $theme->footer(); ?>
<!-- end warning -->

</body>
</html>

<!-- congratulations! this is the end of the theme and completes the web page -->