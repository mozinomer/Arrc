<section class="bio-slider">
    <div class="side-container">
        <div class="swiper-container bio-swiper cursor-p">
            <div class="swiper-wrapper">
            	<?php 	if( have_rows('slider_itemsBio') ): while( have_rows('slider_itemsBio') ) : the_row(); ?>
	                <div class="swiper-slide">
	                    <div class="bio-slide-img">
	                        <img src="<?php the_sub_field('imageBio'); ?>" alt="">
	                    </div>
	                    <div class="bio-slide-text">
	                        <p><?php the_sub_field('contentBio'); ?></p>
	                        <h3><?php the_sub_field('headingBio'); ?></h3>
	                    </div>
	                </div>
			    <?php endwhile; else : endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="game-slider" >
    <div class="side-container">
        <div class="game-slider-heading">
            <h2> You Just Get Better</h2>
        </div>
        <div class="swiper-container game-swiper cursor-p">
            <div class="swiper-wrapper">
            	<?php 	if( have_rows('slider_game') ): while( have_rows('slider_game') ) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="comma-img">
                        <img class="comma-red" src="<?php echo get_template_directory_uri(); ?>/images/comma.png" alt="">
                        <img class="comma-lite" src="<?php echo get_template_directory_uri(); ?>/images/comma-lite.png" alt="">
                    </div>
                    <div class="gamer-slide-text">
                        <div class="star-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="">
                        </div>
                        <p>
                        	<?php the_sub_field('contentgame'); ?>
                        </p>
                        <h6>
                        	- <?php the_sub_field('headinggame'); ?>
                        </h6>
                    </div>
                </div>
			    <?php endwhile; else : endif; ?>
            </div>
            <div class="swiper-pagination"></div>

        </div>

    </div>
</section>

