<?php
get_header();

?>
<?php

$before_img = get_field('before_image', $post->ID);

if (!empty($before_img)) {

    $before_img_url = $before_img['url'];

    $before_img_alt = $before_img['alt'];

    $before_img_title = $before_img['title'];
}

if (empty($before_img_alt)) {

    $before_img_alt = 'Before - Ashbourneroad Dental';
}

if (empty($before_img_title)) {

    $before_img_title = 'Before - Ashbourneroad Dental';
}

$after_img = get_field('after_image', $post->ID);

if (!empty($after_img)) {

    $after_img_url = $after_img['url'];

    $after_img_alt = $after_img['alt'];

    $after_img_title = $after_img['title'];
}

if (empty($after_img_alt)) {

    $after_img_alt = 'After - Ashbourneroad Dental';
}

if (empty($after_img_title)) {

    $after_img_title = 'After - Ashbourneroad Dental';
}
?>

<section class="conten-wrapp gallein-wrapp common-style">
    <div class="margin">

        <div class="gallein-col1">
            <div class="gallein-row1">
                <div class="gallein-bar1">
                    <?php if (!empty($before_img)) { ?>

                        <img loading="lazy" src="<?php echo aq_resize($before_img_url, 912, 589, true, true, true); ?>" alt="<?php echo $before_img_alt; ?>" title="<?php echo $before_img_title; ?>">

                    <?php   } else { ?>

                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gall-no-img.jpg" alt="<?php echo $before_img_alt; ?>" title="<?php echo $before_img_title; ?>">

                    <?php   } ?>
                    <span class="before">Before</span>
                </div>
                <div class="gallein-bar1">
                    <?php if (!empty($after_img)) { ?>

                        <img loading="lazy" src="<?php echo aq_resize($after_img_url, 912, 589, true, true, true); ?>" alt="<?php echo $after_img_alt; ?>" title="<?php echo $after_img_title; ?>">

                    <?php   } else { ?>

                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gall-no-img.jpg" alt="<?php echo $after_img_alt; ?>" title="<?php echo $after_img_title; ?>">

                    <?php   } ?>
                    <span class="after">After</span>
                </div>
            </div>
            <div class="gallein-row2">
                <h2><?php echo $post->post_title; ?></h2>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
                <?php if (!empty(get_field('gallery_common_content', 'options'))) { ?>

                    <div class="buttons">

                        <?php echo get_field('gallery_common_content', 'options'); ?>

                    </div>

                <?php } ?>
                <?php

                $category = wp_get_post_terms($post->ID, 'gallerycategory', array('orderby' => 'term_id'));

                $storesubcatoreder = "";

                $firstiteration = 0;

                foreach ($category as $catrow) {

                    if ($firstiteration == 0) {

                        if (!empty($catrow->parent)) {

                            $storesubcatoreder = 1;
                        } else {

                            $storesubcatoreder = 0;
                        }
                    }
                }

                $category = get_the_term_list($post->ID, 'gallerycategory', '', ', ');

                if (!empty($category)) {

                    $terms = wp_get_post_terms($post->ID, array('gallerycategory'));

                    $postunder = $terms[0]->count;

                    $taxonomy = $terms[$storesubcatoreder]->taxonomy;

                    $slug = $terms[$storesubcatoreder]->slug;

                    if ($taxonomy || $slug) {

                        if ($postunder >= 2) { ?>

                            <a href="<?php echo site_url('/' . $taxonomy . '/' . $slug . '/'); ?>" class="gallein-btn1">BACK TO SMILE GALLERY</a>

                        <?php           } else { ?>

                            <a href="<?php echo get_permalink(34); ?>" class="gallein-btn1">BACK TO SMILE GALLERY</a>

                        <?php           }
                    } else {

                        if (strpos($prev_url, 'wp-admin') !== false) { ?>


                            <a href="<?php echo get_permalink(34); ?>" class="gallein-btn1">BACK TO SMILE GALLERY</a>

                        <?php           } else { ?>

                            <a href="<?php echo $prev_url; ?>" class="gallein-btn1">BACK TO SMILE GALLERY</a>

                    <?php           }
                    }
                } else { ?>

                    <a href="<?php echo get_permalink(34); ?>" class="gallein-btn1">BACK TO SMILE GALLERY</a>

                <?php   } ?>

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
