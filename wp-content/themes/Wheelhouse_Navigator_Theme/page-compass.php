<?php
    get_header();

    // Declaring variables

    // Hero
    $hero_heading = get_field('hero_heading');
    $hero_content = get_field('hero_content');
    $hero_image = get_field('hero_image');
    
    // Unifying section
    $unifying_heading = get_field('unifying_heading');
    $unifying_content = get_field('unifying_content');
    $unifying_image = get_field('unifying_image');

    // Integration section
    $integration_heading = get_field('integration_heading');
    $integration_content = get_field('integration_content');
    $integration_image = get_field('integration_image');

    // Unifying section
    $crm_heading = get_field('crm_heading');
    $crm_content = get_field('crm_content');
    $crm_image = get_field('crm_image');

    // Unifying section
    $optimization_heading = get_field('optimization_heading');
    $optimization_content = get_field('optimization_content');
    $optimization_image = get_field('optimization_image');

    // Unifying section
    $insights_heading = get_field('insights_heading');
    $insights_content = get_field('insights_content');
    $insights_image = get_field('insights_image');

    // Unifying section
    $working_heading = get_field('working_heading');
    $working_content = get_field('working_content');
    $working_listing_1 = get_field('working_listing_1');
    $working_images = get_field('working_images');
    $working_p = get_field('working_p');
    $working_listing_2 = get_field('working_listing_2');

    // Form
    $form_heading = get_field( 'form_heading' );
    $form_content = get_field( 'form_content' );
    $form_form = get_field( 'form_form' );   
    
?>
    
    
    
    <section class="compass_hero m_hero padbot75">
        <div class="compass_hero_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="compass_hero_inner m_hero_inner text_center">
                    <div class="content">
                        <h1><?php echo $hero_heading; ?></h1>
                        <p><?php echo $hero_content; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="image margin flex justify_center">
            <img src="<?php echo $hero_image; ?>" alt="#">
        </div>
    </section>

    <section class="unifying two_column padtop75 padbot75">
        <div class="unifying_outer two_column_outer">
            <div class="wrapper">
                <div class="unifying_inner two_column_inner flex space_between align_center">
                    <div class="content">
                        <div class="heading padbot30">
                            <h2><?php echo $unifying_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $unifying_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $unifying_content; ?></p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo $unifying_image; ?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="integration two_column padtop75 padbot75">
        <div class="integration_outer two_column_outer">
            <div class="wrapper">
                <div class="integration_inner two_column_inner flex space_between align_center">
                    <div class="image">
                        <img src="<?php echo $integration_image; ?>" alt="#">
                    </div>
                    <div class="content">
                        <div class="heading padbot30">
                            <h2><?php echo $integration_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $integration_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $integration_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="crm two_column padtop75 padbot75">
        <div class="crm_outer two_column_outer">
            <div class="wrapper">
                <div class="crm_inner two_column_inner flex space_between align_center">
                    <div class="content">
                        <div class="heading padbot30">
                            <h2><?php echo $crm_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $crm_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $crm_content; ?></p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo $crm_image; ?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="optimization two_column padtop75 padbot75">
        <div class="optimization_outer two_column_outer">
            <div class="wrapper">
                <div class="optimization_inner two_column_inner flex space_between align_center">
                    <div class="image">
                        <img src="<?php echo $optimization_image; ?>" alt="#">
                    </div>
                    <div class="content">
                        <div class="heading padbot30">
                            <h2><?php echo $optimization_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $optimization_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $optimization_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="insights two_column padtop75 padbot75">
        <div class="insights_outer two_column_outer">
            <div class="wrapper">
                <div class="insights_inner two_column_inner flex space_between align_center">
                    <div class="content">
                        <div class="heading padbot30">
                            <h2><?php echo $optimization_heading; ?></h2>
                        </div>
                        <div class="image_in none">
                            <img src="<?php echo $optimization_image; ?>" alt="#">
                        </div>
                        <div class="description">
                            <p><?php echo $optimization_content; ?></p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?php echo $optimization_image; ?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="working working_c">
        <div class="working_outer working_c_outer">
            <div class="wrapper">
                <div class="working_inner working_c_inner mywhite">
                    <div class="content text_center padbot65">
                        <div class="heading padbot30">
                            <h2><?php echo $working_heading; ?></h2>
                        </div>
                        <div class="description h7">
                            <p><?php echo $working_content; ?></p>
                        </div>
                    </div>
                    <div class="main_listing flex align_start space_between gap40">
                        <div class="listing listing1">
                            <ul>                        
                                <?php 
                                    if( $working_listing_1 ) {
                                        foreach( $working_listing_1 as $row ) {
                                            $image = $row['working_images'];
                                            $text = $row['working_p'];
                                            ?>                            
                                                <li>
                                                    <div>
                                                        <img src="<?php echo $image; ?>" alt="#">
                                                    </div>
                                                    <div>
                                                        <p><?php echo $text ; ?></p>
                                                    </div>
                                                </li>                  
                                        <?php                            
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="listing listing2">
                        <ul>                        
                                <?php 
                                    if( $working_listing_2 ) {
                                        foreach( $working_listing_2 as $row ) {
                                            $image = $row['working_images'];
                                            $text = $row['working_p'];
                                            ?>                            
                                                <li>
                                                    <div>
                                                        <img src="<?php echo $image; ?>" alt="#">
                                                    </div>
                                                    <div>
                                                        <p><?php echo $text ; ?></p>
                                                    </div>
                                                </li>                  
                                        <?php                            
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="form padtop100 padbot110"">
        <div class="form_outer">
            <div class="wrapper">
                <div class="form_inner text_center margin">
                    <div>
                        <h2><?php echo $form_heading; ?></h2>
                    </div>
                    <div class="padtop30 padbot60">
                        <p><?php echo $form_content; ?></p>
                    </div>
                    <div class="main_form">
                        <?php echo $form_form; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>