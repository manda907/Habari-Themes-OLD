<!-- searchform -->
<?php Plugins::act( 'theme_searchform_before' ); ?>

<form method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
      <p><input type="text" id="s" onfocus="if (this.value == 'search here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search here';}" name="criteria" value="<?php if ( isset( $criteria ) ) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8'); } ?>" /><input type="submit" id="searchsubmit" value="Go" /></p></form>
<?php Plugins::act( 'theme_searchform_after' ); ?>
<!-- /searchform -->
