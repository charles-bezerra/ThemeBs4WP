<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
		
        <!-- Required meta tags -->
        <meta <?php bloginfo('charset');?>>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">

		 <!--Icones Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

		
		<?php wp_head();?>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="http://fenixveiculoscaico.com.br/wp-content/uploads/2018/12/WhatsApp-Image-2018-12-20-at-09.56.40.jpeg" class="img-fluid" width="60px" height="60px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-end',
                'container_id'      => 'meuNavbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            <?php //get_search_form(); ?>
        </div>
        </nav>


		
					


			

			
