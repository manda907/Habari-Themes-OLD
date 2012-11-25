<?php Plugins::act( 'theme_sidebar_top' ); ?>

<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					
					<?php $theme->display ('searchform' ); ?>
					
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				
				<!-- monthly archives plugin -->
		<?php if( Plugins::is_loaded('RN Monthly Archives' ) ): ?>
				<li>
				<h2>Archives</h2>
					<ul>
				<?php $theme->monthly_archives( '0', 'N' ); ?>
				<?php endif; ?>
					</ul>
				</li>		
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>

<?php Plugins::act( 'theme_sidebar_bottom' ); ?>




