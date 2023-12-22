<?php

/**
 * * Template Name: About Page
 *
 */

get_header();

?>


<section class="conten-wrapp abouts-wrapp common-style">
    <div class="margin">

        <div class="abouts-col1">
            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>


        </div>

    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>

<section class="cqc-wrapp">
    <div class="margin">

        <div class="cqc-col1">
            <?php if (!empty(get_field('about_content', $post->ID))) { ?>
                <div class="cqc-row1">
                    <?php echo get_field('about_content', $post->ID); ?>
                <?php } ?>

                <?php !empty(get_field('read_more_link', $post->ID)); { ?>

                    <a href="<?php echo get_field('read_more_link', $post->ID); ?>" class="cqc-btn1" target="_blank">READ MORE</a>

                <?php }
                ?>
                </div>
                <div class="cqc-col2">
                    <?php if (!empty(get_field('about_image', $post->ID))) {

                        $about_image = aq_resize(get_field('about_image', $post->ID)['url'], 1035, 745, true, true, true);

                        $alt = get_field('about_image', $post->ID)['alt'];

                        if (empty($alt)) {

                            $alt = "About Image";
                        }

                        $title = get_field('about_image', $post->ID)['title'];

                        if (empty($title)) {

                            $title = "About Image";
                        }

                    ?>
                        <div class="cqc-row2">
                            <img loading="lazy" src="<?php echo $about_image; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                        </div>
                    <?php } ?>




                    <?php if (!empty(get_field('about_image_logo', $post->ID))) { ?>
                        <div class="cqc-row3">


                            <?php echo get_field('about_image_logo', $post->ID); ?>



                        </div>
                    <?php } ?>
                </div>
        </div>

    </div>
</section>


<?php $args = get_posts(array('post_type' => 'team', 'orderby' => 'menu_order', 'post_status' => 'publish', 'posts_per_page' => -1));

if (!empty($args)) {

    $count = count($args);

?>
    <section class="team-slider">
        <div class="margin">
            <div class="team-col1">
                <div class="<?php if ($count > 3) {
                                echo "slider variable-width";
                            } else {
                                echo "non-slider";
                            } ?>">
                    <?php foreach ($args as $item) {

                        $img = wp_get_attachment_url(get_post_thumbnail_id($item->ID));

                        $imgalt = get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true);

                        if (empty($imgalt)) {

                            $imgalt = 'Team - Ashbourne Road Dental';
                        }

                        $image_id = get_post_thumbnail_id($item->ID);

                        if (!empty(get_the_title($image_id))) {

                            $image_title = get_the_title($image_id);
                        } else {


                            $image_title = 'Team - Ashbourne Road Dental';
                        }

                    ?>
                        <?php if ($count > 3) { ?>
                            <div>
                            <?php } ?>

                            <div class="team-col2">
                                <div class="team-row1 hovereffect2">
                                    <?php if (!empty($img)) {  ?>

                                        <img loading="lazy" src="<?php echo $img; ?>" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                                    <?php   } else { ?>

                                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images\no_image\team-no-img.png" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                                    <?php   } ?>

                                    <!-- <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/team-thumb/thumb1-dr-dawud-ahmad.jpg" alt="DR Dawud Ahmad thumb"> -->
                                    <div class="overlay2">

                                        <a href="<?php echo get_permalink($item->ID); ?>" class="team-btn1">READ BIO</a>
                                    </div>
                                </div>
                                <div class="team-row2">
                                    <h2><?php echo $item->post_title; ?></h2>
                                    <?php

                                    $designation = get_field('designation', $item->ID);

                                    if (!empty($designation)) { ?>
                                        <h3><?php echo $designation; ?></h3>
                                    <?php   }   ?>
                                    <!-- <h2>DR Dawud Ahmad</h2>
                            <h3>Principal Dentist</h3> -->
                                </div>
                            </div>
                            <?php if ($count > 3) { ?>
                            </div>
                    <?php }
                        } ?>



                </div>
            </div>
        </div>
        <div class="conten-texture-grey-square-shape2">
            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/conten-shape1.svg" alt="conten texture grey square shape1">
        </div>
    </section>
<?php } ?>


<?php include_once('include/dentistry-wrapp.php'); ?>

<?php include_once('include/contact-wrapp.php'); ?>

<section class="reviews-wrapp reviews-wrapp2">
    <?php include_once('include/reviews-wrapp.php'); ?>
</section>



<?php

get_footer();
?>