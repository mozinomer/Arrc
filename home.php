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
                <h2>Arrc Led Whole Body LED Light Therapy Beds </h2>
            </div>
            <div class="whole-body-list">
                <ul>
                	<?php 	if( have_rows('happy_clients') ): while( have_rows('happy_clients') ) : the_row(); ?>
                    <li>
                        <a href="#.">
                            Dose Optimized Photobiomodulation
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="company">

        <div class="company-heading">

            <h2>

                <span>You’re in Good </span>

                Company!

            </h2>

        </div>

        <div class="company-slider">

            <div class="owl-carousel owl-theme company-owl">
                <div class="item">

                    <div class="slide-data">

                        <div class="star-img">

                            <img src="images/star.png" alt="">

                        </div>

                        <h3>

                            “I am addicted to the incredible ATP system! I’ve done over 20 sessions now and just like you said, I feel better and better after each session.”

                        </h3>

                        <h5>

                            - Jim Marks, Executive Tan – Denver CO

                        </h5>

                    </div>
                </div>
                <div class="item">

                    <div class="slide-data">

                        <div class="star-img">

                            <img src="images/star.png" alt="">

                        </div>

                        <h3>

                          “I am addicted to the light bed!”

                        </h3>

                        <h5>

                            - Ennia, Physical Therapist, United States Air Force

                        </h5>

                    </div>
                </div>
                <div class="item">

                    <div class="slide-data">

                        <div class="star-img">

                            <img src="images/star.png" alt="">

                        </div>

                        <h3>
                            “I couldn't be happier! We are doing 10-15 sessions a day really without even trying.”
                         </h3>

                        <h5>

                            - Mark, Body Centre, Newport Beach, CA

                        </h5>

                    </div>
                </div>
                <div class="item">

                    <div class="slide-data">

                        <div class="star-img">

                            <img src="images/star.png" alt="">

                        </div>

                        <h3>
                            “You come out with a Rife machine in a light bed and Game Over! I couldn’t be happier, We are running 10-15 sessions a day in the bed without even trying.”
                        </h3>

                        <h5>

                            - Marc Ainsworth, Body Centre – California

                        </h5>

                    </div>
                </div>
                <div class="item">

                    <div class="slide-data">

                        <div class="star-img">

                            <img src="images/star.png" alt="">

                        </div>

                        <h3>
                            “Game Over! If you can pulse multiple wavelengths within the same session and create preset pulse combinations, you have a Game Changer.”
                        </h3>

                        <h5>

                            - Dr. Penny, 100 Mile Center

                        </h5>

                    </div>
                </div>
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

                            <li>

                                Diagnosis Specific Podcasts with Dr Michael Hamblin. These are interviews with Dr

                                Hamblin about how PBMt works on specific diagnostics.

                            </li>

                            <li>

                                Owner Feedback on what owners are hearing from their clients.

                            </li>

                            <li>

                                Innovation Updates on how the ARRC LED’s new patent pending systems are performing in

                                tests and Latest inventory and pricing.

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