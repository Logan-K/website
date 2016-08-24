<?php
/**
 *
 * Logan's theme header
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="margin-top: 0 !important">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div class="parent2 nav-menu-item">
  <div class="test1"><a class="nav-menu-item" href="/?page_id=10"><i class="fa fa-user fa-2x"></i></a></div>
  <div class="test2"><a class="nav-menu-item" href="#"><i class="fa fa-graduation-cap fa-2x"></i></a></div>
  <div class="test3"><a class="nav-menu-item" href="#"><i class="fa fa-code fa-2x"></i></a></div>
  <div class="test4"><a class="nav-menu-item" href="#"><i class="fa fa-envelope-o fa-2x"></i></a></div>
  <div class="mask2"><a class="nav-menu-item" href="#"><i class="fa fa-home fa-3x"></i></a></div>
</div>
<div id="content" class="site-content">
