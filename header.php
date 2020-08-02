<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      
	<!-- custom stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css"/>
    
    <!-- Fancy Box -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/jquery.fancybox.min.css" />
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="200">
    
    <!-- Slider Starts Here -->
    <div class="mx-auto logo1">
        <?php the_custom_logo(); ?>
    </div>
    
    <a href="#firstsec"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="mt-3 slide_down"><path fill="#fff" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg></a>
      
    
    <?php $slider = get_field('slider_area');?>
    <div class="firstslider text-white" id="Home">
        
        <div class="first_slide text-center py-5" style="background-image: url(<?php echo $slider['first_slide_image']; ?>);">
          <h3><?php echo $slider['first_slide_text']; ?></h3>
        </div>
        <div class="second_slide text-center py-5" style="background-image: url(<?php echo $slider['second_slide_image']; ?>);">
          <h3><?php echo $slider['second_slide_text']; ?></h3>
        </div>
    </div>

	<header id="masthead" class="site-header">
	
		<nav class="navbar navbar-expand-lg px-5" id="myHeader">
          <div class="container-fluid">
            <?php echo get_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>

            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'navbar-nav ml-auto text-center',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
        		));
            ?>
                    
          </div>
        </nav>
	</header>
