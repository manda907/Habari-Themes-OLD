<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<!--
~ jquery.mb.components
~ Copyright (c) 2001-2009. Matteo Bicocchi (Pupunzi); Open lab srl, Firenze - Italy
~ email: info@pupunzi.com
~ site: http://pupunzi.com
~ Licences: MIT, GPL
~ Ported for use as Habari theme by Amanda Moore
~ site: http://mandaj.com
-->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="generator" content="Habari">
		<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
		
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
		<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">

		<link href="<?php Site::out_url( 'theme' ); ?>/style.css" media="all" rel="stylesheet" type="text/css">

		<script type="text/javascript" src="http://jquery.com/src/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/inc/jquery.hoverIntent.min.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/inc/jquery.metadata.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/inc/jquery.mb.flipText.min.js"></script>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/inc/mbExtruder.js"></script>
		<script type="text/javascript">
		
			$(function(){
			
				$("#extruderTop").buildMbExtruder({
					positionFixed:false,
					width:350,
					flapDim:"100%",
					extruderOpacity:1,
					onClose:function(){},
					onContentLoad: function(){}
				});
				$("#extruderLeft").buildMbExtruder({
					position:"left",
					flapDim:140,
					width:300,
					extruderOpacity:.8,
					onClose:function(){},
					onContentLoad: function(){}
				});
				$("#extruderLeft1").buildMbExtruder({
					position:"left",
					width:300,
					flapDim:140,
					extruderOpacity:.8,
					onClose:function(){},
					onContentLoad: function(){}
				});
			});
			
		</script>
	</head>
	<body >

		<div class="wrapper">
			<h1><a href="<?php Site::out_url( 'habari' ); ?>"><?php Options::out( 'title' ); ?></a></h1>