<?php

get_header();

$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

?>

<section class="conten-wrapp blogin-wrapp common-style">
    <div class="margin">

        <div class="blogin-col1">
            <?php

            $img = get_field('blog_banner_image', $post->ID)['url'];

            $blogin_img = aq_resize($img, 1860, 723, true, true, true);

            if (!empty($img)) {

                $img_alt  = get_field('blog_banner_image', $post->ID)['alt'];

                if (!$img_alt) {

                    $img_alt = 'Blog inner thumb : Ashbourneroad Dental';
                }

                $img_title  = get_field('blog_banner_image', $post->ID)['title'];

                if (!$img_title) {

                    $img_title = 'Blog inner thumb : Ashbourneroad Dental';
                } ?>
                <div class="blogin-row1">
                    <img loading="lazy" src="<?php echo $blogin_img; ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $img_title; ?>" />
                </div>
            <?php } ?>
            <div class="blogin-row2">
                <h2><?php echo get_the_date('d / m / Y', $post->ID); ?></h2>
                <h3><?php the_title(); ?></h3>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>



                <?php
                if (empty($prev_url)) {

                    $category = get_the_term_list($post->ID, 'category', '', ', ');

                    $terms = wp_get_post_terms($post->ID, array('category'));

                    $taxonomy = $terms[0]->taxonomy;

                    $slug = $terms[0]->slug; ?>

                    <a href="<?php echo site_url('/' . $taxonomy . '/' . $slug . '/'); ?>" class="blogin-btn1 btn-gradient-mask2">Back to Blog</a>

                    <?php } else {

                    if (strpos($prev_url, 'wp-admin') !== false) {  ?>

                        <a href="<?php echo get_permalink(8); ?>" class="blogin-btn1">Back to Blog</a>

                    <?php } else { ?>

                        <a href="<?php echo $prev_url; ?>" class="blogin-btn1">Back to Blog</a>

                <?php }
                } ?>

                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
    <div class="conten-texture-grey-square-shape2">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/conten-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>



<?php

get_footer();
