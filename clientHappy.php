<section class="happy-client">
    <div class="client-data">
        <div class="client-heading">
            <h6>
                <?php the_field('headingHappyClients'); ?>
            </h6>
        </div>
        <div class="client">
            <ul>
            	<?php 	if( have_rows('happy_clients') ): while( have_rows('happy_clients') ) : the_row(); ?>
		            <li>
		                <img src="<?php the_sub_field('clients_logo'); ?>" alt="">
		            </li>
			    <?php endwhile; else : endif; ?>
            </ul>
        </div>
    </div>
    <div class="client-blackbar">
        <div class="coontainer">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?php the_field('cta_heading_1'); ?></h3>
                </div>
                <div class="col-lg-6">
                    <h3><?php the_field('cta_heading_2'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>