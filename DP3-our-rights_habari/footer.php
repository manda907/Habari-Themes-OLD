<div id="footer">
		<p>
			<?php Options::out('title'); _e(', powered by'); ?> <a href="http://www.habariproject.org/" title="Habari">Habari</a>. <br /><br />
			Design by <a href="http://kappachan.blogspot.com">Retno Nindya</a> | Theme Conversion by <a href="http://manda-moore.com">manda.moore</a>.	<br /><br />
			<a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"><?php _e('Atom Entries'); ?></a> <?php _e('and'); ?> <a href="<?php URL::out( 'atom_feed_comments' ); ?>"><?php _e('Atom Comments'); ?></a>
		</p>
	</div>
	
</div>

<?php $theme->footer(); ?>
</body>
</html>
