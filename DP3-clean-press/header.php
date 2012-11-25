<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="generator" content="Habari">
		
		<!-- set the title of the site to display in browser window -->
		<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
		
		<!-- define feed information -->
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
		
		<!-- define the stylesheet -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'theme' ); ?>/style.css">

		<?php $theme->header(); ?>
	</head>
	
	<!-- begin building the website -->
	<body>
		<div id="page">

			<div id="header">
				<div id="headerimg">

					<!-- display the site title on the page -->
					<h1><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>

				</div>
				<!-- /headerimg -->
			</div>
			<!-- /header -->
			
			<hr />

<!-- end header.php -->