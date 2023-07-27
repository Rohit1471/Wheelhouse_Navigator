<?php get_header(); ?>

<section class="section blog listing_page padtop80 padbot80">
        <div class="section_outer">
            <div class="wrapper">
                <div class="section_inner margin">
                    <div class="heading text_center padbot50">
                        <h1>Our Blogs</h1>
                    </div>
                    
                    <?php
                            // Specify the category slug or ID for which you want to retrieve pages

                            // Query pages based on the specified category
                            $query = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 10, // Set to -1 to retrieve all pages in the category
                            ));

                            // Check if there are any pages found
                            if ($query->have_posts()) {
                                // Loop through the pages and display their titles
                                ?>
                                
                                <div class="repeater">
                                    <?php
                                while ($query->have_posts()){
                                    $query->the_post();

                                    $content = get_the_content(); // Get the content of the current WordPress post or page
                                    $stripped_content = wp_strip_all_tags( $content ); // Remove HTML tags from the content
                                    $words = explode( ' ', $stripped_content ); // Split the content into an array of words
                                    $trimmed_content = implode( ' ', array_slice( $words , 0, 15 ) );
                    ?>

                        <div class="flex gap20">
                            <div class="left text flex_column align_start justify_center gap25">
                                <div class="title">
                                    <p><?php the_title();?></p>
                                </div>
                                <div class="content">
                                <?php echo $trimmed_content ;?>
                                </div>
                                <div class="author">
                                    <p><?php the_author();?></p>
                                </div>
                            </div>
                            <div class="right flex_center">
                                <div class="image">
                                    <img src="<?php echo get_the_post_thumbnail_url()?>" alt="Image1">
                                </div>
                            </div>
                        </div>
                        <?php }?></div>
                        <?php }
                        else {
                            esc_html_e( 'Sorry, no posts matched your criteria.' );
                        }
                        ?>
                        
                                
                </div>
            </div>
        </div>
    </section>


    <section class="gravity_contact_form padtop80 padbot80">
        <div class="gravity_contact_form_outer">
            <div class="wrapper">
                <div class="heading text_center padbot30">
                    <h2>Contact Form</h2>
                </div>
                <div class="gravity_contact_form_inner">
                    <?php
                        // Assuming you have already created a shortcode named 'my_shortcode' in the WordPress editor.

                        // Use do_shortcode() to execute the shortcode and display its output.
                        echo do_shortcode(' [gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"] ');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>