<?php

/**
 * * Template Name: Facial Aesthetics Page
 *
 */

get_header();

?>


<section class="conten-wrapp facial-wrapp">
    <div class="margin">

        <div class="facial-col1">
            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
        </div>
        <?php if (!empty(get_field('treatments', $post->ID))) {

            $count = count(get_field('treatments', $post->ID)); ?>

            <div class="facial-col2">
                <?php foreach (get_field('treatments', $post->ID) as $row) { ?>
                    <?php

                    $img = wp_get_attachment_url(get_post_thumbnail_id($row->ID));

                    $imgalt = get_post_meta(get_post_thumbnail_id($row->ID), '_wp_attachment_image_alt', true);

                    if (empty($imgalt)) {

                        $imgalt = 'Treatment - Ashbourne Road Dental';
                    }

                    $image_id = get_post_thumbnail_id($row->ID);

                    if (!empty(get_the_title($image_id))) {

                        $image_title = get_the_title($image_id);
                    } else {

                        $image_title = 'Treatment - Ashbourne Road Dental';
                    } ?>


                    <div class="facial-col3 square-effect1">
                        <?php if (!empty($img)) {  ?>

                            <img loading="lazy" src="<?php echo aq_resize($img, 697, 443, true, true, true); ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

                        <?php } else { ?>

                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/thumb1-dr-nick-baker-810x1292-noimage.png" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

                        <?php } ?>

                        <div class="facial-row1">
                            <h4><?php echo $row->post_title; ?></h4>
                            <a href="<?php echo get_permalink($row->ID); ?>" class="facial-btn1">LEARN MORE</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        <?php } ?>

        <div class="facial-col4">
            <?php if (!empty(get_field('facial_heading', $post->ID))) { ?>
                <h5>
                    <?php echo (get_field('facial_heading', $post->ID)); ?>
                <?php } ?></h5>
        </div>

    </div>

    <div class="facial-col5">

        <div class="margin">
            <?php if (!empty(get_field('facial_benefits', $post->ID))) {
                echo (get_field('facial_benefits', $post->ID));
            } ?>
            <?php if (!empty(get_field('benefits_button_label', $post->ID))) { ?>
                <?php if (!empty(get_field('benefits_button_link_type', $post->ID)) == "External") { ?>
                    <a href="<?php echo get_field('benefits_button_link', $post->ID); ?>" target="_blank" class="facial-btn1"><?php echo get_field('benefits_button_label', $post->ID); ?></a>
                <?php } else { ?>
                    <a href="<?php echo site_url("/") . get_field('benefits_button_link', $post->ID); ?>" class="facial-btn1"><?php echo get_field('benefits_button_label', $post->ID); ?></a>
            <?php }
            } ?>

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
