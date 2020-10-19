<?php /* Template Name: Location */ get_header(); ?>
  <section class="location-contact">
        <div class="container">
               <div class="heading">
                <h2>Location Of Edge And ATP</h2>
            </div>
            <div class="location-data">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="location-form">
                            <h4>
                                Enter your current location and find us nearby you.
                            </h4>
                            <form>
                                <div class="form-group">
                                    <label for="">Enter Your Loaction</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">searching Radius</label>
                                    <select class="form-control">
                                        <option selected value="">10mil</option>
                                        <option value="">20 mi</option>
                                        <option value="">30 mi</option>
                                        <option value="">40 mi</option>
                                        <option value="">50 mi</option>
                                        <option value="">60 mi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Number of results</label>
                                    <select class="form-control">
                                        <option selected value="">25</option>
                                        <option value="">30</option>
                                        <option value="">35</option>
                                        <option value="">40</option>
                                        <option value="">45</option>
                                    
                                    </select>
                                </div>
                                <div class="submit-btn">
                                    <input type="submit" value="SEARCH NOW!">
                                </div>
                            </form>
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="results-found">
                            <div class="heading">
                                <h4>
                                <?php $couter = 0; if( have_rows('office_locations', 'option') ): while( have_rows('office_locations', 'option') ) : the_row(); ?>

								<?php $couter ++; endwhile; else : endif; ?>
                                    <?php echo $couter; ?> Results Found
                                </h4>
                            </div>
                            <div class="result-slider owl-carousel owl-theme">
                            	<?php if( have_rows('office_locations', 'option') ): while( have_rows('office_locations', 'option') ) : the_row(); ?>
	                                <div class="item">
	                                    <div class="result-box">
	                                        <h3>Quick Chill Recovery</h3>
	                                        <div class="address-area">
	                                            <div class="address-flex">
	                                                <div class="icon">
	                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/address.png" alt="">
	                                                </div>
	                                                <div class="address-text">
	                                                    <p><?php the_sub_field('location', 'option'); ?></p>
	                                                </div>
	                                            </div>
	                                        	<?php if(get_sub_field('mi_value', 'option')) { ?>
	                                            <div class="address-flex">
	                                                <div class="icon">
	                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mil.png" alt="">
	                                                </div>
	                                                <div class="address-text">
	                                                    	<p><?php the_sub_field('mi_value'); ?></p>
	                                                </div>
	                                            </div>
	                                            <?php }  ?>
	                                            <div class="address-flex">
	                                                <div class="icon">
	                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phn.png" alt="">
	                                                </div>
	                                                <div class="address-text">
	                                                    <a href="tel:<?php the_sub_field('phone_number_', 'option'); ?>"><?php the_sub_field('phone_number_', 'option'); ?></a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="clock">
	                                            <div class="hours">
	                                                <div class="icon">
	                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png" alt="">
	                                                </div>
	                                                <div class="hours-text">
	                                                    <p>Working Hours</p>
	                                                </div>
	                                            </div>
	                                            <div class="timing">
	                                            	<?php
														if( have_rows('working_hours', 'option') ):
														    while( have_rows('working_hours', 'option') ) : the_row(); ?>
				                                                <div class="time-data">
				                                                    <p><?php the_sub_field('working_day', 'option') ?></p>
				                                                    <p><?php the_sub_field('working_hours', 'option'); ?></p>
				                                                </div>
														    <?php endwhile;
														else :
														endif;
													?>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
							    <?php endwhile; else : endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        </section>
        <section class="map-area">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830926684!2d-74.1197636697327!3d40.69766374854729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1601487419464!5m2!1sen!2s" width="100%" height="750" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </section>

    <section class="call-us">
        <div class="container">
            <div class="call-us-heading">
                <h2>Call Us Anytime </h2>
                <p>If you’re feeling lost or confused, feel free to call and speak
                    with our customer care service</p>
            </div>
            <div class="call-us-btn">
                <a href="tel:855.502.2772">855.502.2772</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>