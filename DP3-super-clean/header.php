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
		
		<link type="text/css" rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/style.css"/>
		
		<!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
		
		<!-- Font Resizer -->
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/jquery.cookie.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/fontresize.js"></script>
		
		<!-- smoothscrolling anchor links -->
		<script src="<?php Site::out_url( 'theme' ); ?>/js/smoothscroll.js"></script>
		
		<!-- retweet link -->
        <script src="<?php Site::out_url( 'theme' ); ?>/js/retweet.js"></script>
		
		<!-- Fancybox -->
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/fancybox/jquery.fancybox-1.3.1.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
		<script type="text/javascript">
        	$(document).ready(function() {
        		$("a[href$=.jpg],a[href$=.png],a[href$=.gif]").fancybox({
        			'titlePosition' : 'over'
        		});
        	});
		</script>
		
		<?php $theme->header(); ?>
	
	</head>
	<body>
		<div id="header">
			<div class="title"><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></div>
			<div class="nav">
				<span class="pages"><ul><li>Pages: &nbsp;</li> <li><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>" <?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><?php echo $home_tab; ?></a></li>
					<?php
					foreach ( $pages as $tab ) {
					?>
					    <li<?php if(isset($post) && $post->slug == $tab->slug) { ?>
	class="current_page_item"<?php } ?>><a href="<?php echo $tab->permalink; ?>" title="<?php echo $tab->title; ?>"><?php echo $tab->title; ?></a></li>
					<?php
					}
					if ( $loggedin ) { ?>
					    <li><a href="<?php Site::out_url( 'admin' ); ?>" title="Admin area">Admin</a></li>
					<?php } ?>
					
	 					<li>&nbsp;&nbsp;&nbsp;&nbsp; <span class="fontresize" id="small"><a href="#">A</a></span></li>
						<li><span class="fontresize" id="large"><a href="#">A</a></li></span></ul></span>
			</div>
		</div>