<?php
/**
 * The template for displaying the footer.
 *
*/

?>
    
    <!-- BACK TO TOP BUTTON -->
    <a class="back-to-top consulter-is-visible consulter-fade-out" href="<?php echo esc_url('#0'); ?>">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>


    <!-- FOOTER -->
    <footer class="footer2">

        <!-- FOOTER TOP -->
        <div class="row footer-top">
            <div class="container">
            <?php          
                //FOOTER ROW #1
                echo wp_kses_post(consulter_footer_row1());
             ?>
            </div>
        </div>

        <!-- FOOTER BOTTOM -->
        <div class="footer-div-parent">
            <div class="container footer">
                <div class="row">
                    <div class="col-md-12">
                    	<p class="copyright text-center">
                            <?php $footer_copyright = get_theme_mod( 'footer_copyright' ); ?>
                            <?php if(!empty($footer_copyright)) { ?>
                                <?php echo esc_html($footer_copyright); ?>
                                <?php echo '
                                <a target="_blank" href="'.esc_url('http://media-advertising.co.uk/consulter/').'">'.esc_html__('Consulter', 'consulter').'</a>'. 
                                esc_html__(' developed by Media Advertising', 'consulter'); ?>
                            <?php } else { ?>
                                <?php echo esc_html__('Consulter developed by Media Advertising', 'consulter'); ?>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<?php wp_footer(); ?>
</body>
</html>