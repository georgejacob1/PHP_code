<?php

get_header();

?>

<section class="conten-wrapp conten-wrapp2">

    <div class="conten-row1">
        <div class="conten-bar1 treatin-wrapp common-style">

            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
            <?php if (!empty(get_field('treatment_faqs', $post->ID))) {

                $testi = get_field('treatment_faqs', $post->ID);

            ?>

                <h3 class="faq-style">FAQs</h3>

                <div class="accordion">

                    <?php

                    foreach ($testi as $vid) { ?>

                        <div class="faqs-col1">

                            <h3><?php echo $vid['faq_question']; ?></h3>

                            <div class="content">

                                <div class="faqs-row1">

                                    <?php echo apply_filters('the_content', $vid['faq_answer']); ?>

                                </div>

                            </div>

                        </div>

                    <?php
                    } ?>

                </div>

            <?php } ?>

            <?php if (!empty(get_field('treatment_video_link', $post->ID))) { ?>

                <div class="videoWrapper">

                    <?php if (get_field('treatment_video_link_type', $post->ID) == "youtube") {  ?>

                        <iframe loading="lazy" src="https://www.youtube.com/embed/<?php echo get_field('treatment_video_link', $post->ID); ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <?php       } else { ?>

                        <iframe loading="lazy" src="https://player.vimeo.com/video/<?php echo get_field('treatment_video_link', $post->ID); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <?php } ?>

                </div>

            <?php } ?>

            <div class="buttons">
                <?php if (!empty(get_field('treatment_caption', 'options'))) {
                    echo get_field('treatment_caption', 'options');
                } ?>

            </div>
            <?php $category = get_the_term_list($post->ID, 'treatmentcategory', '', ', ');

            $terms = wp_get_post_terms($post->ID, array(
                'treatmentcategory'
            ));

            if (!empty($terms[0]->taxonomy)) {

                $taxonomy = $terms[0]->taxonomy;

                $slug = $terms[0]->slug;

                $terms = wp_get_post_terms($post->ID, array(
                    'treatmentcategory'
                ));

                $postunder = $terms[0]->count;

                if ($postunder >= 2) {

                    $tr = $terms[0]->name;
                } else {

                    $tr = "Treatments";
                }
            } else {

                $tr = "Treatments";
            }

            if (!empty($terms[0]->taxonomy)) {

                if ($postunder >= 2) { ?>

                    <a href="<?php echo site_url('/' . $taxonomy . '/' . $slug . '/'); ?>" class="treatin-btn1 btn-gradient-mask2">Back to <?php echo $tr; ?></a>

                <?php } else { ?>

                    <a href="<?php echo get_permalink(32); ?>" class="treatin-btn1">Back to <?php echo $tr; ?> </a>

                <?php }
            } else { ?>

                <a href="<?php echo get_permalink(32); ?>" class="treatin-btn1">Back to <?php echo $tr; ?> </a>

            <?php } ?>


        </div>
    </div>

    <div class="conten-row2">
        <div class="conten-bar2 sidbar-wrapp">

            <?php include_once('include/sidbar-form.php'); ?>

            <?php include_once('include/sidbar-treatments.php'); ?>

            <?php include_once('include/sidbar-testimonials.php'); ?>

        </div>

    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>



<?php

get_footer();

?>