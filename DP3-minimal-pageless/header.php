<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="Habari" />

		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
		
		<link rel="shortcut icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.ico"/>

		<link href="<?php Site::out_url( 'theme' ); ?>/style.css" type="text/css" rel="stylesheet" />
		<link href="<?php Site::out_url( 'theme' ); ?>/css/color.css" type="text/css" rel="stylesheet" />
				
		<!-- Lightview -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/lightview.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/css/lightview.css" />
		
		<!-- ProtoTip -->
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/js/prototip/prototip.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/css/prototip.css"/>
		
		<!-- Pushup -->
		<script type="text/javascript" src="<?php Site::out_url( 'theme'); ?>/js/pushup.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/css/pushup.css" />
		
		<!-- smoothscrolling anchor links -->
		<script src="<?php Site::out_url( 'theme' ); ?>/js/smoothscroll.js"></script>
		
		<!-- Twitter @Anywhere hover card -->
		<script src="http://platform.twitter.com/anywhere.js?id=Fz8FuWaLo01s7L3fyfrsw&amp;v=1"></script>
		<script type="text/javascript">
			twttr.anywhere(function(twitter) {
				twitter.hovercards();
			});
		</script>
		
		<?php $theme->header(); ?>
		
	</head>
	<body>
		<div id="wrap">
