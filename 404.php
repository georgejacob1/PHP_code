<?php
get_header();
?>
<section class="conten-wrapp abouts-wrapp common-style">
	<div class="margin">
    
		<div class="abouts-col1">
        	<h1>404</h1>

            <h2><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h2>
                    
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
                    
            <?php get_search_form(); ?>
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