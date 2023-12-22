<?php

/**
 * * Template Name: Fees Page
 *
 */

get_header();

?>





<section class="conten-wrapp fees-wrapp">
    <div class="margin">
        <div class="fees-col1">

            <?php if (!empty(get_field('fee_image', $post->ID)['url'])) {

                $fee_image = get_field('fee_image', $post->ID)['url'];

                $alt = get_field('fee_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "fee Image";
                }


                $title = get_field('fee_image', $post->ID)['title'];


                if (empty($title)) {

                    $title = "fee Image";
                }

                $fee = aq_resize($fee_image, 912, 1063, true, true, true);

            ?>
                <div class="fees-row1"> <img loading="lazy" src="<?php echo $fee; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></div>
            <?php } ?>
            <div class="fees-row2">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>
        </div>

        <div class="fees-col3">
            <div class="accordion">
                <?php

                $args = get_posts(array('post_type' => 'feedata', 'post_status' => 'publish', 'posts_per_page' => -1));

                if (!empty($args)) { ?>

                    <div class="accordion">

                        <?php

                        foreach ($args as $item) { ?>
                            <div class="feeser-col1">

                                <h3><?php echo $item->post_title; ?></h3>
                                <div class="content">

                                    <?php if (have_rows('treatment_fees', $item->ID)) :

                                        while (have_rows('treatment_fees', $item->ID)) : the_row(); ?>
                                            <div class="feeser-col2">
                                                <?php

                                                if (!empty(get_sub_field('treatment_name'))) { ?>
                                                    <div class="feeser-row1">
                                                        <?php echo get_sub_field('treatment_name'); ?>
                                                    </div>
                                                <?php   }

                                                if (!empty(get_sub_field('treatment_price'))) { ?>
                                                    <div class="feeser-row2">
                                                        <?php echo get_sub_field('treatment_price'); ?>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                    <?php endwhile;

                                    endif; ?>
                                </div>


                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

        </div>
        <!--conten-texture-grey-square-shape-->
        <div class="conten-texture-grey-square-shape1">
            <img loading="lazy" src="<?php echo TEMPLATE_URL ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
        </div>
        <div class="conten-texture-grey-square-shape2">
            <img loading="lazy" src="<?php echo TEMPLATE_URL ?>images/conten-shape1.svg" alt="conten texture grey square shape1">
        </div>
</section>




<?php

get_footer();
