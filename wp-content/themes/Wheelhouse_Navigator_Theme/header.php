<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global HTML</title>
    <?php wp_head();?>
</head>

<body>


    
    <?php 
        // ------------- Declaring Varibales -------------
        $header_logo = get_field( 'header_logo', 'options' ); 
        $contact_us_button = get_field( 'contact_us_button', 'options' ); 
    ?>    
   
    <header class="header sticky padtop30 padbot30 box_shadow1">
        <div class="header_outer">
            <div class="wrapper">
                <div class="header_inner flex space_between align_center">
                    <div class="logo left">
                        <a href="#">
                            <img src="<?php echo $header_logo; ?>" alt="#">
                        </a>
                    </div>
                    <div class="hamburger none">
                        <div class="line "></div>
                        <div class="line "></div>
                        <div class="line "></div>
                    </div>
                    <div class="right flex align_center gap55">

                        <!-- Header Menu -->                        
                        <?php
                            $header_menu = array(
                            'theme_location' => 'primary-menu',                
                            'container_class'=> 'navbar flex_child gap75_child align_center g_underline',
                            'container'      => 'nav',
                            );
                            wp_nav_menu( $header_menu );
                        ?>
                        
                        <div class="button1">
                            <a href="#"><?php echo $contact_us_button; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>