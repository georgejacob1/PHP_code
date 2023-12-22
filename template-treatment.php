<?php

/**

 * * Template Name: Treatment Page

 * */

get_header();

?>

<section class="conten-wrapp treat-wrapp">
    <div class="margin">
        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>

        <?php $terms = get_terms('treatmentcategory', array('hide_empty' => true));

        if (!empty($terms)) { ?>
            <div class="treat-col1">
                <?php

                $count_displayed = 1;

                $open = 0;

                $total_items = count($terms);

                foreach ($terms as $term) {

                    $pages = get_posts(array(

                        'post_type' => 'treatment',

                        'numberposts' => -1,

                        'tax_query' => array(

                            array(

                                'taxonomy' => 'treatmentcategory',

                                'field' => 'id',

                                'terms' => $term->term_id, // Where term_id of Term 1 is "1".

                                'include_children' => false

                            )

                        )

                    ));

                    $count = count($pages); //print_r($pages);

                    if ($count == 1) {

                        $id = $pages[0]->ID;

                        $link = get_permalink($id);
                    } else {

                        $link = get_term_link($term->term_id);
                    }

                    if ($term->term_id == "20") {

                        $link = get_permalink(18);
                    }

                    $treatmentcat_img = get_field('treatment_category_image', $term);

                    if (!empty(get_field('treatment_category_image', $term))) {

                        $treatmentcat_img = get_field('treatment_category_image', $term);

                        $treat_cat_imgurl = $treatmentcat_img['url'];

                        $cat_img_alt = $treatmentcat_img['alt'];

                        $cat_img_title = $treatmentcat_img['title'];

                        $treat = aq_resize($treat_cat_imgurl, 697, 443, true, true, true);
                    }

                    if (empty($cat_img_alt)) {


                        $cat_img_alt = 'Treatment - Ashbourne Road Dental';
                    }

                    if (empty($cat_img_title)) {


                        $cat_img_title = 'Treatment - Ashbourne Road Dental';
                    } ?>
                    <div class="treat-col2 square-effect1">
                        <?php if (!empty($treatmentcat_img)) {   ?>

                            <img loading="lazy" src="<?php echo $treat; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>">

                        <?php   } else { ?>

                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatment-no-img.jpg" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>">

                        <?php } ?>

                        <div class="treat-row1">
                            <h2><?php echo $term->name; ?></h2>
                            <a href="<?php echo $link; ?>" class="treat-btn1">LEARN MORE</a>
                        </div>
                        <a href="<?php echo $link; ?>" class="common-anchor"></a>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>

    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>

<?php

get_footer();
