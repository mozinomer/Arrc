<?php /* Template Name: Front Page */ get_header(); ?>



	<div class="sliderHomepage">
	    <?php do_shortcode('[BannerHome]');?>
    </div>
	<div class="ClientHappy">
	    <?php do_shortcode('[ClientHappy]');?>
    </div>

	<div class="biomulation">
	    <?php do_shortcode('[biomulation]');?>
    </div>
	<div class="bio-slider">
	    <?php do_shortcode('[bio-slider]');?>
    </div>



    <section class="video-section background-position" style="background-image: url(images/vid-bg.png);">
        <div class="vid-container">

            <div class="latest-vid">

                <h2>

                    Side Effects of

                    Photobiomodulation

                </h2>

                <div class="latest-vid-btn">

                    <div class="play-btn">

                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                            <i class="fa fa-play"></i>

                        </a>

                    </div>

                    <h4>Watch Video</h4>

                </div>

            </div>

            <div class="video-slider" >

                <div class="swiper-container video-swiper cursor-p">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid1.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid2.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>



                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid3.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>



                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid1.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>



                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid2.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>



                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="vid-slide background-position" style="background-image: url(images/vid3.png);">

                                <div class="vid-slide-data">

                                    <div class="play-btn">

                                        <a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8">

                                            <i class="fa fa-play"></i>

                                        </a>

                                    </div>

                                    <p>Watch Video</p>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="machine-imgs">
        <div class="character">
            <img src="<?php echo get_template_directory_uri(); ?>/images/atp.png" alt="">
        </div>
        <div class="character">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Elysium-Device.png" alt="">
        </div>
        <div class="character-blackbar">
        	<div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Live Better</h3>

                    </div>
                    <div class="col-lg-6">
                        <h3>Live Longer</h3>
                    </div>
                </div>
        	</div>
        </div>
        <div class="machine-main">

            <img src="<?php echo get_template_directory_uri(); ?>/images/white-machine.png" alt="">

        </div>
    </section>


    <section class="whole-body">
        <div class="container">
            <div class="whole-body-heading">
                <h2><?php the_field('headingwhole-body'); ?> </h2>
            </div>
            <div class="whole-body-list">
                <ul>
                	<?php 	if( have_rows('list_itemwhole-body') ): while( have_rows('list_itemwhole-body') ) : the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('itemwhole-bodylink'); ?>">
                            <?php the_sub_field('itemwhole-body'); ?>
                        </a>
                    </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>

        </div>
    </section>

    <section class="company">
        <div class="company-heading">
            <h2>
                <?php the_field('hedingcompany'); ?>
            </h2>
        </div>
        <div class="company-slider">
            <div class="owl-carousel owl-theme company-owl">
            	<?php 	if( have_rows('slider_company') ): while( have_rows('slider_company') ) : the_row(); ?>
                <div class="item">
                    <div class="slide-data">
                        <div class="star-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="">
                        </div>
                        <h3>
                            <?php the_sub_field('contentcompany'); ?>
                        </h3>
                        <h5>
                            <?php the_sub_field('headingcompany'); ?>
                        </h5>
                    </div>
                </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>


    <section class="join-us">
        <div class="side-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-arrc">
                        <div class="join-arrc-heading">
                            <h2>
                                JOIN ARRC’S PHOTOBIOMODULATION
                                RESEARCH COMMUNITY
                            </h2>
                            <h4>
                                Joining our community means you will receive in addition to Manufacturer Direct Pricing
                                Quotes
                            </h4>
                        </div>
                        <ul>
                            <li>
                                Research Updates from the latest Clinical Trials on PBMt.
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="join-us-form">

                        <div class="join-us-form-heading">

                            <h3>

                                Join our community!<br>

                                Please fill the form below

                            </h3>

                        </div>

                        <div class="form">

                            <form>

                                <div class="form-group">

                                    <label for="">Name</label>

                                    <input type="text" class="form-control">

                                </div>

                                <div class="form-group">

                                    <label for="">Email Address</label>

                                    <input type="email" class="form-control">

                                </div>

                                <div class="form-group">

                                    <label for="">Phone*</label>

                                    <input type="tel" class="form-control">

                                </div>

                                <div class="form-group">

                                    <label for="">subject</label>

                                    <input type="text" class="form-control">

                                </div>

                                <div class="form-group">

                                    <label for="">Message</label>

                                    <textarea rows="5" class="form-control"> </textarea>

                                </div>

                                <div class="join-form-btn">

                                    <input type="submit" value="JOIN NOW!">

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

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