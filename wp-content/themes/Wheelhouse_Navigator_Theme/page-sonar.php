<?php
get_header();

    // Declaring variables

    // Hero
    $hero_heading = get_field('hero_heading');
    $hero_content = get_field('hero_content');
    $hero_image = get_field('hero_image');
    
    // Visualization section
    $provides_heading = get_field('provides_heading');
    $provides_left_heading = get_field('provides_left_heading');
    $provides_left_repeater = get_field('provides_left_repeater');
    $provides_right_image = get_field('provides_right_image');

    // Interaction section
    $flow_heading = get_field('flow_heading');
    $flow_left_repeater = get_field('flow_left_repeater');
    $flow_image = get_field('flow_image');

    // Relative section
    $path_heading = get_field('path_heading');
    $path_left_repeater = get_field('path_left_repeater');
    $path_image = get_field('path_image');

    // Hold Out section
    $hold_out_heading = get_field('hold_out_heading');
    $hold_out_image = get_field('hold_out_image');

    // Working section
    $working_heading = get_field('working_heading');
    $working_left_image = get_field('working_left_image');
    $working_right_text_1 = get_field('working_right_text_1');
    $working_right_text_2 = get_field('working_right_text_2');

    // Form
    $form_heading = get_field( 'form_heading' );
    $form_content = get_field( 'form_content' );
    $form_form = get_field( 'form_form' );   
?>

    <section class="sonar_hero m_hero padbot75">
        <div class="sonar_hero_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="sonar_hero_inner m_hero_inner text_center">
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

    <section class="provides left_right padtop75 padbot75">
        <div class="provides_outer">
            <div class="wrapper">
                <div class="provides_inner align_center">
                    <div class="top text_center padbot70">
                        <h2><?php echo $provides_heading; ?></h2>
                    </div>
                    <div class="bottom flex align_center space_between gap75">
                        <div class="left">
                            <div class="text_center h7 padbot45">
                                <p><?php echo $provides_left_heading; ?></p>
                            </div>
                            <div class="listing listing1">
                                <ul>
                                <?php 
                                    if( $provides_left_repeater ) {
                                        foreach( $provides_left_repeater as $row ) {
                                            $image = $row['provides_left_in_image'];
                                            $text = $row['provides_left_in_text'];
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
                        <div class="right image">
                            <img src="<?php echo $provides_right_image ; ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="flow left_right padtop75 padbot75">
        <div class="flow_outer">
            <div class="wrapper">
                <div class="flow_inner align_center">
                    <div class="bottom flex align_center space_between gap75">
                        <div class="left">
                            <div class="h7 padbot45">
                                <p><?php echo $flow_heading ; ?></p>
                            </div>
                            <div class="listing listing1">
                                <ul>
                                <?php 
                                    if( $flow_left_repeater ) {
                                        foreach( $flow_left_repeater as $row ) {
                                            $image = $row['flow_left_in_image'];
                                            $text = $row['flow_left_in_text'];
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
                        <div class="right image">
                            <img src="<?php echo $flow_image ; ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="path left_right padtop75 padbot75">
        <div class="path_outer">
            <div class="wrapper">
                <div class="path_inner align_center">
                    <div class="bottom flex align_center space_between gap75">
                        <div class="left">
                            <div class="h7 padbot45">
                                <p><?php echo $path_heading ; ?></p>
                            </div>
                            <div class="listing listing1">
                                <ul>

                                <?php 
                                    if( $path_left_repeater ) {
                                        foreach( $path_left_repeater as $row ) {
                                            $image = $row['pathj_left_in_image'];
                                            $text = $row['path_left_in_text'];
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
                                    <!-- <li>
                                        <div>
                                            <img src="Assets/Images/icon2.svg" alt="#">
                                        </div>
                                        <div>
                                            <p>Monitor ecommerce checkout processes to proactively identify and resolve
                                                any issue that might get in the way of a completed transaction</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="Assets/Images/icon3.svg" alt="#">
                                        </div>
                                        <div>
                                            <p>Ensure technical glitches don’t impede lead generation and revenue by
                                                actively monitoring critical conversion paths.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="Assets/Images/icon4.svg" alt="#">
                                        </div>
                                        <div>
                                            <p>Conversion Path Monitoring can be used for:</p>
                                            <div class="unorderd_list">
                                                <ul>
                                                    <li>
                                                        <p>Checkout funnels</p>
                                                    </li>
                                                    <li>
                                                        <p>Lead generation flows</p>
                                                    </li>
                                                    <li>
                                                        <p>Subscription processes</p>
                                                    </li>
                                                    <li>
                                                        <p>Appointment setting functionality</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="right image">
                            <img src="<?php echo $path_image ; ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="hold_out m_hero padbot75">
        <div class="hold_out_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="hold_out_inner m_hero_inner text_center">
                    <div class="content">
                        <h2><?php echo $hold_out_heading ; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="image margin flex justify_center">
            <img src="<?php echo $hold_out_image ; ?>" alt="#">
        </div>
    </section>

    <section class="working_sonar working m_hero padbot75">
        <div class="working_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="working_inner m_hero_inner text_center">
                    <div class="heading text_center padbot70">
                        <h2><?php echo $working_heading ; ?></h2>
                    </div>
                    <div class="bottom flex align_center space_between gap55">
                        <div class="left">
                            <img src="<?php echo $working_left_image ; ?>" alt="#">
                        </div>
                        <div class="right h7 text_left">
                            <p><?php echo $working_right_text_1 ; ?></p>
                            <p><?php echo $working_right_text_2 ; ?></p>
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