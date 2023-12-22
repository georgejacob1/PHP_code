<?php

/**
 * * Template Name: Team Page
 *
 */

get_header();

?>


<section class="conten-wrapp teamer-wrapp">
    <div class="margin">
        <?php $terms = get_terms('teamcategory', array('hide_empty' => true,));
        ?>
        <div class="filter-col1 ">
            <div class="filter-row1 custom-select1">
                <select name="redirectURL1" class="banner-fild1">
                    <option value="your-dental-concern" selected="">FILTER BY POSITION</option>
                    <?php $terms = get_terms('teamcategory', array('hide_empty' => true,));

                    if (!empty($terms)) {

                        foreach ($terms as $tms) {
                    ?>

                            <option value="<?php echo get_term_link($tms->term_id); ?>"><?php echo $tms->name; ?></option>

                    <?php        }
                    } ?>
                </select>
            </div>
        </div>

        <div class="teamer-col1">
            <?php $terms = get_terms('teamcategory', array('hide_empty' => true,));

            if (!empty($terms)) {

                foreach ($terms as $tms) {

                    $posts_array = get_posts(array(

                        'posts_per_page' => -1,

                        'post_type' => 'team',

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'teamcategory',

                                'field' => 'term_id',

                                'terms' => $tms->term_id,

                            )

                        )

                    ));

                    if (!empty($posts_array)) {

                        foreach ($posts_array as $item) {

                            $img = wp_get_attachment_url(get_post_thumbnail_id($item->ID));

                            $imgalt = get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true);

                            if (empty($imgalt)) {

                                $imgalt = 'Team-Image';
                            }

                            $image_id = get_post_thumbnail_id($item->ID);

                            if (!empty(get_the_title($image_id))) {

                                $image_title = get_the_title($image_id);
                            } else {

                                $image_title = "Team-Image";
                            }

                            $team_list_image = aq_resize($img, 758, 883, true, true, true);

            ?>

                            <div class="teamer-col2">
                                <div class="teamer-row1 hovereffect2">
                                    <a href="<?php echo get_permalink($item->ID); ?>">
                                        <?php if (!empty($img)) { ?>

                                            <img loading="lazy" src="<?php echo $team_list_image; ?>" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                                        <?php   } else { ?>

                                            <img loading="lazy" src="<?php echo TEMPLATE_URL . 'images/team-no.jpg'; ?>" alt="<?php echo $imgalt; ?>" title="<?php echo $image_title; ?>">

                                        <?php   } ?>
                                    </a>
                                    <div class="overlay2">
                                        <a href="<?php echo get_permalink($item->ID); ?>" class="team-btn1">READ BIO</a>
                                    </div>
                                </div>
                                <div class="teamer-row2">
                                    <h2><?php echo $item->post_title; ?></h2>
                                    <?php $designation = get_field('designation', $item->ID);

                                    if (!empty($designation)) { ?>
                                        <h3><?php echo $designation; ?></h3>
                                    <?php } ?>
                                </div>
                            </div>

            <?php        }
                    }
                }
            } ?>

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
