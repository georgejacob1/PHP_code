<?php

$terms = get_terms('treatmentcategory', array('hide_empty' => true));

if (!empty($terms)) {

    $count = 0;

    foreach ($terms as $term) {

        if (!empty(get_field('show_on_home_page', $term))) {

            $count = $count + 1;
        }
    }

    if ($count != 0) { ?>

        <section class="dentistry-wrapp">

            <div class="margin">

                <div class="dentistry-col1">

                    <?php if (!empty(get_field('treatment_content', 'options'))) { ?>

                        <div class="dentistry-row1">

                            <?php $treat = get_field('treatment_content', 'options'); ?>

                            <?php echo apply_filters('the_content', $treat); ?>

                        </div>

                    <?php } ?>

                </div>

                <div class="dentistry-col2 desk">

                    <div class="<?php if ($count > 3) {
                                    echo "slider autoplay";
                                } else {
                                    echo "non-slider";
                                } ?>">

                        <?php

                        foreach ($terms as $term) {

                            if (!empty(get_field('show_on_home_page', $term))) {

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

                                $count1 = count($pages); //print_r($pages);
                                if ($count1 == 1) {

                                    $id = $pages[0]->ID;

                                    $link = get_permalink($id);
                                } else {

                                    $link = get_term_link($term->term_id);
                                }

                                $treatment_category_icon = get_field('icon_image', $term);

                                if (!empty(get_field('icon_image', $term))) {

                                    $treatmentcat_img = get_field('icon_image', $term);

                                    $treat_cat_imgurl = $treatmentcat_img['url'];

                                    $cat_img_alt = $treatmentcat_img['alt'];

                                    $cat_img_title = $treatmentcat_img['title'];
                                }

                                if (empty($cat_img_alt)) {

                                    $cat_img_alt = 'Treatment -  Ashbourneroad ';
                                }

                                if (empty($cat_img_title)) {

                                    $cat_img_title = 'Treatment -  Ashbourneroad';
                                }

                                $treatment_category_hover_icon = get_field('hover_icon', $term);

                                if (!empty(get_field('hover_icon', $term))) {

                                    $treatmentcat_hover_img = get_field('hover_icon', $term);

                                    $treat_cat_imgurl1 = $treatmentcat_hover_img['url'];

                                    $cat_img_alt = $treatmentcat_hover_img['alt'];

                                    $cat_img_title = $treatmentcat_hover_img['title'];
                                }

                                if (empty($cat_img_alt)) {

                                    $cat_img_alt = 'Treatment -  Ashbourneroad';
                                }

                                if (empty($cat_img_title)) {

                                    $cat_img_title = 'Treatment - Ashbourneroad';
                                } ?>

                                <?php if ($count > 3) { ?>

                                    <div>

                                    <?php   } ?>

                                    <div class="dentistry-col3">

                                        <div class="dentistry-row2 circle-effects1">

                                            <a href="<?php echo $link; ?>">

                                                <?php if (!empty($treat_cat_imgurl)) { ?>

                                                    <img loading="lazy" src="<?php echo $treat_cat_imgurl; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>" />

                                                <?php } ?>

                                                <?php if (!empty($treat_cat_imgurl1)) {   ?>

                                                    <span class="circle-row1">

                                                        <img loading="lazy" src="<?php echo $treat_cat_imgurl1; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>" />

                                                    </span>

                                                <?php } ?>
                                            </a>

                                        </div>

                                        <div class="dentistry-row3">

                                            <h4><?php echo $term->name; ?></h4>

                                            <p><?php echo $term->description; ?></p>

                                            <a href="<?php echo $link; ?>" class="dentistry-btn1">LEARN MORE</a>

                                        </div>

                                    </div>

                                    <?php if ($count > 3) { ?>

                                    </div>

                                <?php   } ?>

                        <?php
                            }
                        } ?>

                    </div>

                </div>

                <div class="dentistry-col2 mob">

                    <div class="<?php if ($count > 1) {
                                    echo "slider autoplay";
                                } else {
                                    echo "non-slider";
                                } ?>">

                        <?php

                        foreach ($terms as $term) {

                            if (!empty(get_field('show_on_home_page', $term))) {

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

                                $treatment_category_icon = get_field('icon_image', $term);

                                if (!empty(get_field('icon_image', $term))) {

                                    $treatmentcat_img = get_field('icon_image', $term);

                                    $treat_cat_imgurl = $treatmentcat_img['url'];

                                    $cat_img_alt = $treatmentcat_img['alt'];

                                    $cat_img_title = $treatmentcat_img['title'];
                                }

                                if (empty($cat_img_alt)) {

                                    $cat_img_alt = 'Treatment -  Dental';
                                }

                                if (empty($cat_img_title)) {

                                    $cat_img_title = 'Treatment -  Dental';
                                }

                                $treatment_category_hover_icon = get_field('hover_icon', $term);

                                if (!empty(get_field('hover_icon', $term))) {

                                    $treatmentcat_hover_img = get_field('hover_icon', $term);

                                    $treat_cat_imgurl1 = $treatmentcat_hover_img['url'];

                                    $cat_img_alt = $treatmentcat_hover_img['alt'];

                                    $cat_img_title = $treatmentcat_hover_img['title'];
                                }

                                if (empty($cat_img_alt)) {

                                    $cat_img_alt = 'Treatment -  Ashbourneroad';
                                }

                                if (empty($cat_img_title)) {

                                    $cat_img_title = 'Treatment -  Ashbourneroad';
                                } ?>

                                <?php if ($count > 1) { ?>

                                    <div>

                                    <?php   } ?>

                                    <div class="dentistry-col3">

                                        <div class="dentistry-row2 circle-effects1">

                                            <a href="<?php echo $link; ?>">

                                                <?php if (!empty($treat_cat_imgurl)) { ?>

                                                    <img loading="lazy" src="<?php echo $treat_cat_imgurl; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>" />

                                                <?php } ?>

                                                <?php if (!empty($treat_cat_imgurl1)) {   ?>

                                                    <span class="circle-row1">

                                                        <img loading="lazy" src="<?php echo $treat_cat_imgurl1; ?>" alt="<?php echo $cat_img_alt; ?>" title="<?php echo $cat_img_title; ?>" />

                                                    </span>

                                                <?php } ?>
                                            </a>

                                        </div>

                                        <div class="dentistry-row3">

                                            <h4><?php echo $term->name; ?></h4>

                                            <p><?php echo $term->description; ?></p>

                                            <a href="<?php echo $link; ?>" class="dentistry-btn1">LEARN MORE</a>

                                        </div>

                                    </div>

                                    <?php if ($count > 1) { ?>

                                    </div>

                                <?php   } ?>

                        <?php
                            }
                        } ?>

                    </div>

                </div>

            </div>

            <!--dentistry-texture-grey-square-shape-->

            <div class="dentistry-texture-grey-square-shape1">

                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/dentistry-texture-grey-square-shape1.svg" alt="dentistry texture grey square shape1">

            </div>

        </section>

<?php }
}     ?>