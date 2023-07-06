<?php 
    get_header();



    // Declaring variables to store function

    // Buttons
    $learn_more_button = get_field( 'learn_more_button' );
    $learn_more_button = str_replace(array('http://', 'https://'), '', $learn_more_button);
    $learn_more_button = rtrim($learn_more_button, '/');
    $learn_more2_button = get_field( 'learn_more2_button' );
    $learn_more2_button = str_replace(array('http://', 'https://'), '', $learn_more2_button);
    $learn_more2_button = rtrim($learn_more2_button, '/');
    
    // Hero
    $hero_heading = get_field( 'hero_heading' );
    $hero_content = get_field( 'hero_content' );
    $hero_background_svg = get_field( 'hero_background_svg' );
    
    // Compass
    $compass_heading = get_field( 'compass_heading' );
    $compass_content = get_field( 'compass_content' );
    $compass_image = get_field( 'compass_image' );
    
    // Sextant
    $sextant_heading = get_field( 'sextant_heading' );
    $sextant_content = get_field( 'sextant_content' );
    $sextant_image = get_field( 'sextant_image' );
    
    // Sonar
    $sonar_heading = get_field( 'sonar_heading' );
    $sonar_content = get_field( 'sonar_content' );
    $sonar_image = get_field( 'sonar_image' );
    
    // Captain
    $captain_content = get_field( 'captain_content' );
    $captain_content2 = get_field( 'captain_content2' );
    $captain_bg = get_field( 'captain_bg' );   

?>


    <section class="hero" style="background:url(<?php echo $hero_background_svg; ?>)">
        <div class="hero_outer">
            <div class="wrapper">
                <div class="hero_inner">
                    <div class="content text_center flex_column_center justify_center padbot60">
                        <div class="top">
                            <h1><?php echo $hero_heading; ?></h1>
                        </div>
                        <div class="bottom">
                            <p><?php echo $hero_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="compass two_column padtop115 padbot100">
        <div class="compass_outer two_column_outer">
            <div class="wrapper">
                <div class="compass_inner two_column_inner flex align_center gap140">
                    <div class="content flex_column align_start gap30">
                        <div class="heading">
                            <h2><?php echo $compass_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $compass_image ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $compass_content ?></p>
                        </div>
                        <div class="button2">
                            <a href="#"><?php echo $learn_more_button; ?></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo $compass_image ?>" alt="#">                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sextant two_column padtop100 padbot100">
        <div class="sextant_outer two_column_outer">
            <div class="wrapper">
                <div class="sextant_inner two_column_inner flex align_center gap140">
                    <div class="image">
                    <img src="<?php echo $sextant_image ?>" alt="#">
                    </div>
                    <div class="content flex_column align_start gap30">
                        <div class="heading">
                            <h2><?php echo $sextant_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                        <img src="<?php echo $sextant_image ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $sextant_content; ?></p>
                        </div>
                        <div class="button2">
                            <a href="#"><?php echo $learn_more_button; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sonar two_column padtop100 padbot100">
        <div class="sonar_outer two_column_outer">
            <div class="wrapper">
                <div class="sonar_inner two_column_inner flex align_center gap140">
                    <div class="content flex_column align_start gap30">
                        <div class="heading">
                            <h2><?php echo $sonar_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $sonar_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $sonar_content; ?></p>
                        </div>
                        <div class="button2">
                            <a href="#"><?php echo $learn_more_button; ?></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo $sonar_image; ?>" alt="#">                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="captain padtop115 padbot110" style="background: url(<?php echo $captain_bg; ?>);">
        <div class="captain_outer">
            <div class="wrapper">
                <div class="captain_inner text_center margin">
                    <div>
                        <h2><?php echo $captain_content; ?></h2>
                    </div>
                    <div class="padtop50 padbot70">
                        <h6><?php echo $captain_content2; ?></h6>
                    </div>
                    <div class="button3">
                        <a href="#"><?php echo $learn_more2_button; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    get_footer();
?>