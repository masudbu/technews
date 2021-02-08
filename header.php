<!doctype html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="manifest" href="site.webmanifest">
   <meta name="google-site-verification" content="NNYhJPEwSGtce_QFYX1IuNaQUMH1rGBF0bUXP-8VNAw" />
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154894401-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-154894401-1');
        </script>
	
  <?php 
      $favicon = cs_get_option('site-favicon');
    if ($favicon){
        $favicon_attachment = wp_get_attachment_image_src($favicon, 'full');
     }
    ?>
  <link type="image/x-icon" rel="shortcut icon" href="<?php echo $favicon_attachment[0]; ?>">
	<!-- Global site tag (gtag.js) - Google Analytics -->


  <?php wp_head(); ?> 
</head>
<body>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
  <div class="main-wrapper">
      <header>
      <div class="container">
        <div class="col-md-3 col-xs-12">
        <?php 
          $image_id = cs_get_option( 'logo' );
          $attachment = wp_get_attachment_image_src( $image_id, 'full' );
        ?>
          <a href="<?= home_url()?>">
            <?php if ($attachment) {?>
              <img alt="Logo" src="<?php echo $attachment[0]; ?>" style=" width: 100%; margin-top: 90px;">
            <?php }else{ ?>
              <img alt="Logo" src="<?php echo get_template_directory_uri();?>/assets/img/technews.png" style=" width: 100%; margin-top: 90px;">
            <?php } ?>
          </a>
        </div>
        <div class="col-md-9 col-xs-12 text-center">
         <small class="date">
            <?php 
			    date_default_timezone_set("Asia/Dhaka");
            ?>
             ঢাকা, <?php echo do_shortcode('[bangla_date]'); ?> 
          </small>
        </div>
      </div>
    
        <nav class="navbar navbar-default" id="menu">
			<!--<nav class="navbar navbar-default" id="menu" data-spy="affix" data-offset-top="197">-->
          <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>
          <!-- Collection of nav links, forms, and other content for toggling -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <?php
              wp_nav_menu(
                  array(
                      'theme_location' =>'header_menu' , 
                      'container' =>'div' , 
                      'container-class' =>'navbar-collapse collapse' , 
                      'menu_class' =>'nav navbar-nav' , 
                      'depth' =>'3',
                      'fallback_cb'=> 'WP_Bootstrap_Navwalker::fallback',
                      'walker'=> new WP_Bootstrap_Navwalker() 
                  )
              );
            ?>      
          </div>
       </nav> 
    </header>