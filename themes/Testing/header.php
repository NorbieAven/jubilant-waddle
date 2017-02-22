<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Commercial   
Description: A two-column, fixed-width design with simple color scheme.
Version    : 1.0
Released   : 20120520
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> <?php bloginfo('title'); ?> </title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>

<?php wp_head?>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#"><?php bloginfo('name');?></a></h1>
				<p><?php bloginfo('description');?></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<ul id="menu">
		<?php wp_nav_menu();?>
	</div>
	<!-- end #menu -->
	<div id="splash"><?php the_post_thumbnail('full');?></div>
	<div id="page">
		<div id="content">