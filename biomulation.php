<section class="biomulation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="biomodule-text">
                    <div class="biomodule-heading">
                        <h2><?php the_field('headingPhotobiomodulation'); ?></h2>
                        <p>
                            <?php the_field('contentPhotobiomodulation'); ?>
                        </p>
                    </div>
                    <div class="bio-mobdule-list">
                        <ul>
                        	<?php 	if( have_rows('list_itemsPhotobiomodulation') ): while( have_rows('list_itemsPhotobiomodulation') ) : the_row(); ?>
					            <li>
					               <?php the_sub_field('item_listPhotobiomodulation'); ?>
					            </li>
						    <?php endwhile; else : endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="biomodule-img">
                    <img src="<?php the_field('image_Photobiomodulation'); ?>" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
