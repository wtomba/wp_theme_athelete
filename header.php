<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until after the header tag.
 *
 * @package WordPress
 * @subpackage CGI
 * @since CGI 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="container">

      <!-- Site header -->
      <header class="site-header">
        <div class="title row">
          <div class="large-12 columns">
            <h1><a href="<?php echo home_url() ?>"><?php echo get_bloginfo("name"); ?></a></h1>
          </div>
        </div>
        <?php if (is_page("hem")) { ?>
          <div class="slider-container">
            <?php echo do_shortcode("[metaslider id=22]"); ?>   
          </div>
          
<!--           <div class="slider-form-container clearfix">
            <div class="row">
              <div class="large-12 columns">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>   -->
        <?php } else { ?>
          <div class="search-container">
            <div class="form-container clearfix">
              <div class="row">
                <div class="large-12 columns">
                  <?php //get_search_form(); ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="main-nav-container">
          <div class="main-nav">
            <div class="row">
              <div class="clearfix mobile-container">
                <div class="small-12 columns menu-toggle">
                  <span><i class="fi-align-justify"></i>MENY</span>
                </div>
          <!--       <div class="small-4 columns search-toggle">                
                  <span><i class="fi-magnifying-glass"></i>SÖK</span>
                </div> -->
              </div>
              <nav class="clearfix nav-menu">
                <?php wp_nav_menu( array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                ) ); ?>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- /Site header -->
      <?php if (is_page("hem")) { ?>
        <div style="min-height: 19.8rem;" class="row">
      <?php } else { ?>
        <div style="padding-top: 2rem;  min-height: 19.8rem;" class="row">
      <?php } ?>
 <!--        <div class="large-12 columns">
          <?php //if (function_exists('cgi_breadcrumbs')) cgi_breadcrumbs(); ?>
        </div> -->

