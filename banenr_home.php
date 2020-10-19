<section class="banner">
    <div class="main-slider owl-carousel owl-theme">
    	<?php 
			if( have_rows('banner_images') ): while( have_rows('banner_images') ) : the_row();?>
	            <div class="slides item">
	                <div class="banner-back background-position" style="background-image: url('<?php the_sub_field('imageBanner'); ?>'); "   >
	                    <div class="banner-data">
	                    </div>
	                </div>
	            </div>
			<?php endwhile; else : endif; 
		?>
    </div>
</section>