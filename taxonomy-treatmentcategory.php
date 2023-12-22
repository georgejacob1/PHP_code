<?php

$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$args = array(

    'post_type' => 'treatment',

    'posts_per_page' => -1,

    'post_status' => 'publish',

    'tax_query' => array(

        array(

            'taxonomy' => 'treatmentcategory',

            'field'    => 'id',

            'terms'    => get_queried_object_id(),

        )

    )
);

query_posts($args);

$countingpost = 1;

while (have_posts()) : the_post();

    $countingpost++;

endwhile;

$countingpost;

if ($countingpost == '1') { ?>

    <script>
        window.location.replace("<?php echo get_permalink(33); ?>");
    </script>

    <?php   } else {

    if ($countingpost <= '2') {

        if ($prev_url == get_permalink($post->ID)) { ?>

            <script>
                window.location.replace("<?php echo get_permalink($post->ID); ?>");
            </script>

            <?php           } else {

            if (empty($post->ID)) {  ?>

                <script>
                    window.location.replace("<?php echo get_permalink(33); ?>");
                </script>

            <?php               } else {   ?>

                <script>
                    window.location.replace("<?php echo get_permalink($post->ID); ?>");
                </script>

<?php               }
        }
    }
} ?>

<?php

get_header();

?>
<?php $args = array(

    'post_type' => 'treatment',

    'posts_per_page' => -1,

    'post_status' => 'publish',

    'tax_query' =>  array(

        array(

            'taxonomy' => 'treatmentcategory',

            'field'    => 'id',

            'terms'    => get_queried_object_id(),

        )

    )
);

query_posts($args);

?>
<section class="conten-wrapp treat-wrapp">
    <div class="margin">

        <div class="treat-col1">
            <?php

            while (have_posts()) : the_post();

                $treat_cat_imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'large');

                $treat_img = aq_resize($treat_cat_imgurl, 697, 443, true, true, true);

                $cat_img_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

                if (empty($cat_img_alt)) {

                    $cat_img_alt = 'Treatment - Ashbourne Road Dental New';
                }

                $image_id = get_post_thumbnail_id($post->ID);

                if (!empty(get_the_title($image_id))) {

                    $image_title = get_the_title($image_id);
                } else {

                    $image_title = "Treatment - Ashbourne Road Dental New";
                }

                if ($post->ID == "617") {

                    $link = get_permalink(306);
                } else {
                    $link = get_permalink($post->ID);
                }

            ?>
                <div class="treat-col2 square-effect1">
                    <?php if (!empty($treat_cat_imgurl)) { ?>

                        <img loading="lazy" src="<?php echo $treat_img; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $image_title; ?>">

                    <?php   } else { ?>

                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatment-no-img.jpg" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $image_title; ?>">

                    <?php } ?>
                    <div class="treat-row1">
                        <h2><?php echo $post->post_title; ?></h2>
                        <a href="<?php echo $link; ?>" class="treat-btn1">LEARN MORE</a>
                    </div>
                    <a href="<?php echo $link; ?>" class="common-anchor"></a>
                </div>
            <?php endwhile; ?>
        </div>


    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>

<?php

get_footer();
