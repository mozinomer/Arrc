    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <img src="images/logo-new.png" alt="">
                </div>
                <div class="social">
                    <p>
                        Quisque suscipit ipsum est, eu venenatis leo ornare eget. Ut porta facilisis elementum. Sed
                        condimentum sed massa quis ullamcorper. Donec at scelerisque neque. Pellentesque sagittis, massa
                        sodales sodales finibus.
                    </p>
                    <ul>
                        <li>
                            <a href="<?php the_field('facebook_link', 'option'); ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('twitter_link', 'option'); ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('instagram', 'option'); ?>">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="location">
                    <div class="address flex">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p>806 E. Avenida Pico, Suite I-267 <br>
                            San Clemente, California, USA</p>
                    </div>
                    <div class="email flex">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <a href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a>
                    </div>
                    <div class="phn flex">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <a href="tel:1-855-502-2772">1-855-502-2772</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>
                    © ArrcLED 2020. All rights reserved.
                </p>
                <ul>
                    <li>
                        <a href="#.">Privacy Policy</a>
                    </li>
                    <li><a href="#.">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- jQuery Version 3.2.1 -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.js"></script>
    <!-- fancybox -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- owl slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <!-- swiper-slider -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
<?php wp_footer(); ?>
</html>