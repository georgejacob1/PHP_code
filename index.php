<?php

get_header();

?>
<section class="conten-wrapp blog-wrapp">
    <div class="margin">
        <?php

        $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

        $terms = get_terms('category', array('hide_empty' => true));

        if (!empty($terms)) {
        ?>
            <div class="filter-col1">
                <div class="filter-row1 custom-select1">
                    <select name="redirectURL1" class="banner-fild1">
                    <option selected="">Filter by Categories</option>
                        <?php

                        $pages = get_posts(array(

                            'post_type' => 'post',

                            'numberposts' => -1,

                            'tax_query' => array(

                                array(

                                    'taxonomy' => 'category',

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

                        $query_args = get_posts(array(

                            'post_type' => 'post',

                            'tax_query' => array(

                                array(

                                    'taxonomy' => 'category',

                                    'field' => 'term_id',

                                    'terms' => $term->term_id,

                                )

                            ),

                        ));



                        foreach ($terms as $term) {

                        ?>

                            <option value="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></option>

                        <?php

                        } ?>
                    </select>
                </div>
            </div>
        <?php } ?>
        <?php if (have_posts()) : ?>
            <div class="blog-col1">

                <?php

                while (have_posts()) : the_post();

                    $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

                    $img_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

                    $image_id = get_post_thumbnail_id($post->ID);


                    if (!empty(get_the_title($image_id))) {

                        $image_title = get_the_title($image_id);
                    } else {

                        $image_title = "blog - Ashbourne Road Dental";
                    }

                    if (empty($img)) {

                        $img = TEMPLATE_URL . 'images/blog-no-img.jpg';
                    }

                    if (!$img_alt) {

                        $img_alt = 'blog - Ashbourne Road Dental';
                    }

                ?>
                    <div class="blog-col2">
                        <div class="blog-row1 square-effect1">
                            <a href="<?php echo get_permalink($post->ID); ?>">

                                <?php if ($img == TEMPLATE_URL . 'images/blog-no-img.jpg') { ?>

                                    <img loading="lazy" src="<?php echo $img; ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $image_title; ?>">

                                <?php   } else {  ?>

                                    <img loading="lazy" src="<?php echo aq_resize($img, 700, 449, true, true, true); ?>" alt="<?php echo $img_alt; ?>" title="<?php echo $image_title; ?>">

                                <?php   } ?>

                            </a>

                        </div>
                        <div class="blog-row2">
                            <h2><?php echo get_the_date('d / m / Y', $post->ID); ?></h2>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo strip_shortcodes(wp_trim_words($post->post_content, 20)); ?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="blog-btn1">READ MORE</a>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>


            <div class="paiger-wrapp">
                <div class="paiger-col1">
                    <?php

                    the_posts_pagination(array(

                        'prev_text' => '<span class="paiger-btn1 ">' . __('Back') . '</span>',

                        'next_text' => '<span class="paiger-btn2 ">' . __('next') . '</span>',

                        'before_page_number' => '',

                        'screen_reader_text' => '&nbsp;',

                    )); ?>

                </div>
            </div>
        <?php

        else :

            echo '<h2>No blog posts found.</h2>';

        endif; ?>

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

?>