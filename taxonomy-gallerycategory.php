<?php


get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(

    'post_type' => 'galleries',

    'posts_per_page' => get_option('posts_per_page'),

    'orderby' => 'menu_order',

    'post_status' => 'publish',

    'paged' => $paged,

    'tax_query' => array(

        array(

            'taxonomy' => 'gallerycategory',

            'field' => 'id',

            'terms' => get_queried_object_id(),

        )
    )

);

query_posts($args); ?>


<section class="conten-wrapp galler-wrapp">
    <div class="margin">

        <div class="filter-col1">
            <div class="filter-row1 custom-select1">
                <select name="redirectURL1" class="banner-fild1">
                    <?php $terms = get_terms('gallerycategory', array('hide_empty' => true,));
                    $selected = 0;

                    if (!empty($terms)) {
                    ?>

                        <?php
                        foreach ($terms as $tms) {
                            if (get_queried_object_id() == $tms->term_id) {

                                $selected = $tms->term_id;
                        ?>

                                <option value="<?php echo get_term_link($tms->term_id); ?>" selected="selected"><?php echo $tms->name; ?></option>

                        <?php     }
                        }  ?>

                        <?php
                        foreach ($terms as $tms) {

                            if ($selected == $tms->term_id) {
                            } else {

                        ?>

                                <option value="<?php echo get_term_link($tms->term_id); ?>"><?php echo $tms->name; ?></option>

                        <?php     }
                        }  ?>


                    <?php

                    } ?>
                </select>
            </div>
        </div>
        <?php if (have_posts()) : ?>
            <div class="galler-col1">
                <?php while (have_posts()) : the_post();

                    $before_img = get_field('before_image', $post->ID);

                    if (!empty($before_img)) {

                        $before_img_url = $before_img['url'];

                        $before_img_alt = $before_img['alt'];

                        $before_img_title = $before_img['title'];
                    }

                    if (empty($before_img_alt)) {

                        $before_img_alt = 'Before - Ashbourne Road Dental';
                    }

                    if (empty($before_img_title)) {

                        $before_img_title = 'Before - Ashbourne Road Dental';
                    }

                    $after_img = get_field('after_image', $post->ID);

                    if (!empty($after_img)) {

                        $after_img_url = $after_img['url'];

                        $after_img_alt = $after_img['alt'];

                        $after_img_title = $after_img['title'];
                    }

                    if (empty($after_img_alt)) {

                        $after_img_alt = 'After -Ashbourne Road Dental';
                    }

                    if (empty($after_img_title)) {

                        $after_img_title = 'After - Ashbourne Road Dental';
                    } ?>

                    <div class="galler-col2">
                        <div class="galler-row1">
                            <div class="galler-bar1 square-effect1">
                                <a href="<?php echo get_permalink($post->ID); ?>">

                                    <?php if (!empty($before_img)) { ?>

                                        <img loading="lazy" src="<?php echo aq_resize($before_img_url,  915, 589, true, true, true); ?>" alt="<?php echo $before_img_alt; ?>" title="<?php echo $before_img_title; ?>">

                                    <?php   } else { ?>

                                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gall-no-img.jpg" alt="<?php echo $before_img_alt; ?>" title="<?php echo $before_img_title; ?>">

                                    <?php   } ?>
                                </a>
                                <span class="before">Before</span>
                            </div>
                            <div class="galler-bar1 square-effect1">
                                <a href="<?php echo get_permalink($post->ID); ?>">

                                    <?php if (!empty($after_img)) { ?>

                                        <img loading="lazy" src="<?php echo aq_resize($after_img_url, 915, 589, true, true, true); ?>" alt="<?php echo $after_img_alt; ?>" title="<?php echo $after_img_title; ?>">

                                    <?php   } else { ?>

                                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/smile-gall-no-img.jpg" alt="<?php echo $after_img_alt; ?>" title="<?php echo $after_img_title; ?>">

                                    <?php } ?>
                                </a>
                                <span class="after">After</span>
                            </div>
                        </div>
                        <div class="galler-row2">
                            <h2><?php echo $post->post_title; ?></h2>

                            <p><?php echo strip_shortcodes(wp_trim_words($post->post_content, 25)); ?></p>

                            <a href="<?php echo get_permalink($post->ID); ?>" class="galler-btn1">LEARN MORE</a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="paiger-wrapp">
                <div class="paiger-col1">
                    <?php

                    the_posts_pagination(array(

                        'prev_text' => '<span class="paiger-btn1">' . __('') . '</span>',

                        'next_text' => '<span class="paiger-btn2">' . __('') . '</span>',

                        'before_page_number' => '',

                        'screen_reader_text' => '&nbsp;',

                    )); ?>
                </div>
            </div>
           

        <?php

        else :

            echo '<h2>No Gallery posts found.</h2>';

            $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; ?>

        <?php

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
