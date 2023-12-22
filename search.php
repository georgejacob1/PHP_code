<?php 

get_header();

?>

<section class="conten-wrapp blog-wrapp common-style blog-extra">
	<div class="margin">
        <header class="page-header">

            <?php if ( have_posts() ) : ?>

            <h1 class="page-title"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                    <?php else : ?>

            <h1 class="page-title"><?php _e( 'Nothing Found' ); ?></h1>

            <?php endif; ?>

        </header>

   
      
        <div class="blog-col1">
        
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-col2">
            	
                <div class="blog-row2">
                <h3><?php the_title();?></h3>

                <p><?php echo strip_shortcodes(wp_trim_words($post->post_content, 20 ));?></p>
                <a href="<?php echo get_permalink($post->ID); ?>" class="blog-btn1">READ MORE</a>

			
                </div>
            </div>
            <?php endwhile;?>
            
                 
            
        </div>
        
        <div class="paiger-wrapp">
			<div class="paiger-col1">
				<?php                                 

                        the_posts_pagination( array(

                            'prev_text' => '<span class="paiger-btn1 btn-gradient-mask2">' . __( '') . '</span>',

                            'next_text' => '<span class="paiger-btn2 btn-gradient-mask2">' . __( '') . '</span>',

                            'before_page_number' => '',

                            'screen_reader_text' => '&nbsp;',

                        ) ); ?>
			</div>
		</div>
        
    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
		<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1" >
	</div>
    <div class="conten-texture-grey-square-shape2">
		<img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/conten-shape1.svg" alt="conten texture grey square shape1" >
	</div>
</section>

<?php include_once('include/dentistry-wrapp.php'); ?>

<?php include_once('include/contact-wrapp.php'); ?>

<section class="reviews-wrapp reviews-wrapp2">
	<?php include_once('include/reviews-wrapp.php'); ?>
</section>
    
<?php 

get_footer();
