<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="Habari" />
		
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
		
		<link rel="shortcut icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.ico"/>
		
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/css/style.css"/>				
		
		<!--Lightview-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/lightview.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/css/lightview.css" />
		
		<?php $theme->header(); ?>
		
	</head>
	<body>
		<div class="spacer"></div>
		<div id="page">
			
			<div id="top">
				<h1 class="logo"><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>
				<div class="menu">
					<ul>
						<li ><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>" <?php if($request->display_home) { ?>
						class="current_page_item"<?php } ?>><?php echo $home_tab; ?></a></li>
						<?php
						// Menu tabs
						foreach ( $pages as $tab ) {
						?>
								<!-- create all single pages in this manner: -->
								<li<?php if(isset($post) && $post->slug == $tab->slug) { ?>
							class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
							
						<!-- create link to admin area if logged in -->
						<?php
						}
						if ( $user instanceof User ) { ?>
								<li class="admintab"><a href="<?php Site::out_url( 'admin' ); ?>" title="<?php _e('Admin area'); ?>"><?php _e('Admin'); ?></a></li>
						<?php } ?>
						
						<!--Optional Social links, float to right side of menu bar-->
						<!--<li class="social"><a href="">Twitter</a></li>
						<li class="social"><a href="">Flickr</a></li>
						<li class="social"><a href="">Picasa</a></li>
						<li class="social"><a href="">Last.fm</a></li>
						<li class="social"><a href="">Tumblr</a></li>-->
					</ul>
				</div>
			</div><!--end TOP-->