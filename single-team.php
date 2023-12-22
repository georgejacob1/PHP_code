<?php

get_header();

$img = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'large');

$imgalt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

if (empty($imgalt)) {

    $imgalt = 'Team- Ashbourne Road Dental';
}

$image_id = get_post_thumbnail_id($post->ID);

if (!empty(get_the_title($image_id))) {

    $image_title = get_the_title($image_id);
} else {

    $image_title = "Team- Ashbourne Road Dental";
}

$team_img = aq_resize($img, 650, 757, true, true, true);

?>

<section class="conten-wrapp teamin-wrapp common-style">
    <div class="margin">
        <div class="teamin-col1">
            <div class="teamin-row1">
                <?php if (!empty($img)) { ?>

                    <img loading="lazy" src="<?php echo $team_img; ?>" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                <?php   } else { ?>

                    <img loading="lazy" src="<?php echo TEMPLATE_URL . 'images/team-no-img.jpg'; ?>" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                <?php   } ?>
            </div>
            <?php

            $designation = get_field('designation', $post->ID);

            $gdc_number = get_field('gdc_number', $post->ID);

            $gdc_link = get_field('gdc_link', $post->ID);

            $qualification = get_field('qualification', $post->ID);

            ?>
            <div class="teamin-row2">
                <h2><?php echo $post->post_title; ?></h2>
                <?php
                if (!empty($designation)) { ?>

                    <h3><?php echo $designation; ?></h3>

                <?php } ?>

                <?php if (!empty($gdc_number)) { ?><?php if (!empty($gdc_link)) { ?>
                <h3>GDC Number: <a href="<?php echo $gdc_link; ?>" target="_blank"><?php echo $gdc_number; ?></a></h3>
            <?php } else { ?>
                <h3>GDC Number: <?php echo $gdc_number; ?>< /h3>
                <?php }
                                                } ?>

                <?php if (!empty($qualification)) {
                ?>

                    <h3><?php echo $qualification; ?></h3>

                <?php } ?>
            </div>
        </div>
        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>
        <a href="<?php echo get_permalink(30); ?>" class="teamin-btn1">BACK TO OUR TEAM</a>
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

?>