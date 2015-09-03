<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Red8s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header_logos">
      <div class="row small-collapse medium-uncollapse">
        <div class="small-12 columns main-logo ">
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/red8s-logo.png" />
          </div>
        </div>
      </div>
    </div>
    <div class="header_navigation">
      <div class="row collapse header_style">
        <div class="small-12 large-12 small-centered columns">
          <ul class="menu">
            <li class="menu_item"><a href="#">Casino</a></li>
            <li class="menu_item"><a href="#">Live Dealer<i class="fa fa-caret-down"></i></a>
              <ul class="sub_menu">
                <li><a href="#">Sub Menu Item</a></li>
                <li><a href="#">Sub Menu Item</a></li>
                <li><a href="#">Sub Menu Item</a></li>
                <li><a href="#">Sub Menu Item</a></li>
              </ul>
            </li>
            <li class="menu_item"><a href="#">Bingo</a></li>
            <li class="menu_item"><a href="#">Poker</a></li>
            <li class="menu_item"><a href="#">Betting</a></li>
            <li class="menu_item"><a href="#">Mobile</a></li>
            <li class="menu_item"><a href="#">Top Sites</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

	<div id="content" class="site-content">
