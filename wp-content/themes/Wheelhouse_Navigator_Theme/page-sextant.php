<?php
    get_header();

    // Declaring variables

    // Hero
    $hero_heading = get_field('hero_heading');
    $hero_content = get_field('hero_content');
    $hero_image = get_field('hero_image');
    
    // Visualization section
    $visualization_heading = get_field('visualization_heading');
    $visualization_content = get_field('unifying_content');
    $visualization_slider = get_field('visualization_slider');

    // Interaction section
    $interaction_heading = get_field('interaction_heading');
    $interaction_image = get_field('interaction_image');

    // Relative section
    $relative_section_heading = get_field('relative_section_heading');
    $relative_section_repeater = get_field('relative_section_repeater');

    // Credit section
    $credit_heading = get_field('credit_heading');
    $credit_image = get_field('credit_image');

    // Relationship section
    $relationship_heading = get_field('relationship_heading');
    $relationship_image = get_field('relationship_image');

    // Hold Out section
    $hold_out_heading = get_field('hold_out_heading');
    $hold_out_image = get_field('hold_out_image');
    
    // Working section
    $working_heading = get_field('working_heading');
    $working_left_image = get_field('working_left_image');
    $working_right_text_1 = get_field('working_right_text_1');
    $working_right_text_2 = get_field('working_right_text_2');
    
    
?>
    
    <section class="sextant_hero m_hero padbot75">
        <div class="sextant_hero_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="sextant_hero_inner m_hero_inner text_center">
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

    <section class="visualization text_center padtop75 padbot75">
        <div class="visualization_outer">
            <div class="wrapper">
                <div class="visualization_inner flex_column_center">
                    <div class="content">
                        <div class="heading padbot30 h8">
                            <h2><?php echo $visualization_heading ?></h2>
                            <p><?php echo $visualization_content ?></p>
                        </div>
                    </div>
                    <div class="sextant_image_slider">

                    <!-- ============== -->

                    <?php 
                        if( $visualization_slider ) {
                            foreach( $visualization_slider as $row ) {
                                $image = $row['visualization_image'];
                                ?>                            
                                <img src="<?php echo $image;?>" alt="Image Gallery">                   
                            <?php                            
                            }
                        }
                    ?> 

                    <!-- ============== -->
                        <!-- <img src="Assets/Images/slider1.png" alt="#">
                        <img src="Assets/Images/slider1.png" alt="#">
                        <img src="Assets/Images/slider1.png" alt="#">
                        <img src="Assets/Images/slider1.png" alt="#">
                        <img src="Assets/Images/slider1.png" alt="#"> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="interaction two_rows padtop75 padbot75">
        <div class="interaction_outer two_rows_outer">
            <div class="wrapper">
                <div class="interaction_inner flex_column_center text_center two_rows_inner">
                    <div class="content">
                        <div class="description h8 padbot50">
                            <p><?php echo $interaction_heading ?></p>
                        </div>
                        <div class="box_shadow image">
                            <img src="<?php echo $interaction_image ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative_section padtop75 padbot75">
        <div class="relative_section_outer">
            <div class="wrapper">
                <div class="relative_section_inner flex_column_center text_center">
                    <div class="content flex_column_center width100">
                        <div class="heading padbot40 h8">
                            <p><?php echo $relative_section_heading ?></p>
                        </div>
                        <div class="counter_div flex space_between align_center text_center gap20">
                            <?php 
                            if( $relative_section_repeater ) {
                                foreach( $relative_section_repeater as $rows ) {
                                        $number = $rows['relative_section_number'];
                                        $content = $rows['relative_section_below_text'];
                                        ?>       
                                            <div class="box box1">
                                                <div class="number number1 h9">
                                                    <p><?php echo $number;?></p>
                                                </div>
                                                <div class="description h10">
                                                    <p><?php echo $content;?></p>
                                                </div>
                                            </div>                                       
                                    <?php                            
                                    }
                                }
                            ?>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="credit  two_rows padtop75 padbot75">
        <div class="credit_outer two_rows_outer">
            <div class="wrapper">
                <div class="credit_inner margin flex_column_center text_center two_rows_inner">
                    <div class="content margin">
                        <div class="description h8 padbot50">
                            <p><?php echo $credit_heading; ?></p>
                        </div>
                        <div class="box_shadow image">
                            <img src="<?php echo $credit_image; ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relationship  two_rows padtop75 padbot75">
        <div class="relationship_outer two_rows_outer">
            <div class="wrapper">
                <div class="relationship_inner margin flex_column_center text_center two_rows_inner">
                    <div class="content margin">
                        <div class="description h8 padbot50">
                            <p><?php echo $relationship_heading; ?></p>
                        </div>
                        <div class="box_shadow image">
                            <img src="<?php echo $relationship_image; ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hold_out_sextant m_hero padbot75">
        <div class="hold_out_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="hold_out_inner m_hero_inner text_center">
                    <div class="content">
                        <h2><?php echo $hold_out_heading; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="image margin flex justify_center">
            <img src="<?php echo $hold_out_image; ?>" alt="#">
        </div>
    </section>

    <section class="working_sextant working m_hero padbot75">
        <div class="working_outer m_hero_outer text_center">
            <div class="wrapper">
                <div class="working_inner m_hero_inner text_center">
                    <div class="heading text_center padbot70">
                        <h2><?php echo $working_heading; ?></h2>
                    </div>
                    <div class="bottom flex align_center space_between gap55">
                        <div class="left">
                            <img src="<?php echo $working_left_image; ?>" alt="#">
                        </div>
                        <div class="right h7 text_left">
                            <p><?php echo $working_right_text_1; ?></p>
                            <p><?php echo $working_right_text_2; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    


<?php
    get_footer();
?>