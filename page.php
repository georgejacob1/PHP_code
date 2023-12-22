<?php

get_header();

?>

<section class="conten-wrapp abouts-wrapp common-style about-extra">
	<div class="margin">
    
		<div class="abouts-col1">
        <?php while(have_posts()):the_post();?>

        <?php the_content(); ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>

        </div>
        
    </div>
    
    
</section>



<?php include_once('include/dentistry-wrapp.php'); ?>

<?php include_once('include/contact-wrapp.php'); ?>

<section class="reviews-wrapp reviews-wrapp2">
	<?php include_once('include/reviews-wrapp.php'); ?>
</section>

<?php

get_footer();

