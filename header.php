<!DOCTYPE html>
<html lang="pt" xml:lang="pt">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- INÍCIO DOS METAS -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="url" content="<?php bloginfo('url'); ?>">
<meta name="language" content="Portugues">
<meta name="description" content="<?php if(is_home() || is_page()){bloginfo('description');}else{the_excerpt();} ?>">
<meta name="keywords" content="<?php bloginfo('description'); ?>">
<meta name="reply-to" content="mario@alpacaweb.com.br">
<meta name="copyright" content="">
<meta name="category" content="Internet">
<meta name="Robots" content="Index,Follow">
<meta name="author" content="Alpaca Web">
<meta property="fb:admins" content="mario.mazen"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="og:type" content="blog"/>
<meta property="og:title" content="<?php if(is_home()){bloginfo('name');}else{the_title();} ?>"/>
<meta property="og:description" content="<?php if(is_home() || is_page()){bloginfo('description');}else{the_excerpt();} ?>"/>
<meta property="og:url" content="<?php if(is_home()){bloginfo('url');}else{the_permalink(); }?>"/>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/og-image.jpg"/>
<meta name="HandheldFriendly" content="True" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- FIM DOS METAS -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icon.png" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/less.css" type="text/css" media="all">
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=338319259613222";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FACEBOOK -->
<!-- GOOGLE - COLOCAR ANALYTICS -->
<!-- GOOGLE -->
</head>
<body <?php body_class(); ?>>