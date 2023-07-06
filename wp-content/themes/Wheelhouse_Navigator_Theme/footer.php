<?php

    // Footer
    $footer_logo = get_field( 'footer_logo', 'options');
    $footer_left_heading = get_field( 'footer_left_heading', 'options' );
    $footer_left_content = get_field( 'footer_left_content', 'options' );
    $footer_right_heading = get_field( 'footer_right_heading', 'options' );
    $footer_right_content = get_field( 'footer_right_content', 'options' );
    $footer_right_tel = get_field( 'footer_right_tel', 'options' );
    $copyright_content = get_field( 'copyright_content', 'options' );

?>

<footer class="footer padtop110 padbot110">
        <div class="footer_outer">
            <div class="wrapper">
                <div class="footer_inner">
                    <div class="up padbot60">
                        <img src="<?php echo $footer_logo; ?>" alt="Footer_logo">
                    </div>
                    <div class="down text_left flex align_center space_between gap40">
                        <div class="left">
                            <div>
                                <h3><?php echo $footer_left_heading; ?></h3>
                            </div>
                            <div>
                                <p><?php echo $footer_left_content; ?></p>
                            </div>
                        </div>
                        <div class="right">
                            <div>
                                <h3><?php echo $footer_right_heading; ?></h3>
                            </div>
                            <div>
                                <p><?php echo $footer_right_content; ?></p>
                                <span><a href="#"><?php echo $footer_right_tel; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="copyright padtop40 padbot40">
        <div class="copyright_outer">
            <div class="wrapper">
                <div class="copyright_inner light">
                    <p><?php echo $copyright_content; ?></p>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer(); ?>
</body>

</html>