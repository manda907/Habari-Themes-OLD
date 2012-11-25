<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
<meta http-equiv="Content-Type" content="text/html">
<meta name="generator" content="Habari">

<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">

<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'theme' ); ?>/style.css">

<?php $theme->header(); ?>
</head>

<body>
	<div class="left">
		<h1 class="title"><?php Options::out( 'title' ); ?></h1>
		
		<ul>
			<li<?php if($request->display_home) { ?>
	class="current_page_item"<?php } ?>><a href="<?php Site::out_url( 'habari' ); ?>" title="<?php Options::out( 'title' ); ?>">Home</a></li>
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
		</ul>
		
		<?php $theme->switcher() ?>
		
		
	</div>
	
	<div class="right">