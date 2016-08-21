<?php
/**
 *
 * Logan's theme header
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div style="height:100px; background-color: blue"></div>

  <div class="parent2">
  <div class="test1"><i class="fa fa-user fa-2x"></i></div>
  <div class="test2"><i class="fa fa-graduation-cap fa-2x"></i></div>
  <div class="test3"><i class="fa fa-code fa-2x"></i></div>
  <div class="test4"><i class="fa fa-envelope-o fa-2x"></i></div>
  <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
</div>
<div id="content" class="site-content">