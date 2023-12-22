<?php

get_header();

?>

<section class="banner-wrapp">
    <!--jarallax-video-div-->

    <?php

    if (!empty(get_field('home_video', $post->ID))) {

        if ((get_field('home_video_type', $post->ID) == 'vimeo')) { ?>

            <div class="jarallax jarallax-video" data-speed="1.2" data-video-src="https://vimeo.com/<?php echo get_field('home_video', $post->ID); ?>">

            <?php } else { ?>

                <div class="jarallax jarallax-video" data-speed="1.2" data-video-src="https://www.youtube.com/embed/<?php echo get_field('jarallax_video', $post->ID); ?>">

            <?php }
    } ?>
            <?php

            if (!empty(get_field('home_slider', $post->ID))) {


                $countbanner = count(get_field('home_slider', $post->ID)); ?>


                <?php if ($countbanner > 1) {
                    $sliderdeskteam = "welcome-slides owl-carousel";
                } else {

                    $sliderdeskteam = "non-slider";
                } ?>


                <div class="<?php echo $sliderdeskteam;  ?>">

                    <?php foreach (get_field('home_slider', $post->ID) as $row) { ?>

                        <div class="single-welcome-slide">

                            <div class="banner-col1">


                                <?php if ($countbanner > 1) { ?>
                                    <div class="banner-row1">
                                    <?php } ?>

                                    <?php if (!empty($row['home_slider_title'])) {  ?>
                                        <h2 data-animation="fadeInUp" data-delay="200ms"><?php echo $row['home_slider_title']; ?></h2>

                                    <?php }

                                    if (!empty($row['home_slider_subtitle'])) {  ?>

                                        <h3 data-animation="fadeInUp" data-delay="400ms"><?php echo $row['home_slider_subtitle']; ?></h3>

                                    <?php }

                                    if (!empty($row['home_slider_caption'])) {  ?>

                                        <p data-animation="fadeInUp" data-delay="600ms"><?php echo $row['home_slider_caption']; ?> </p>

                                    <?php }

                                    if (!empty($row['_learn_more_button_'])) {  ?>

                                        <a href="<?php echo $row['_learn_more_button_']; ?>" class="banner-btn1"  data-animation="fadeInUp" data-delay="800ms">LEARN MORE</a>

                                    <?php } ?>


                                    <?php if (!empty($row['watch_our_animation'])) { ?>

                                        <?php if ($row['watch_our_animation_type'] == 'youtube') {  ?>

                                            <button class="js-video-button banner-btn2" data-animation="fadeInUp" data-delay="800ms" data-video-id="<?php echo $row['watch_our_animation']; ?>" data-channel="<?php echo $row['watch_our_animation_type']; ?>">
                                                <span class="video-play-button">
                                                    <span></span>
                                                </span>
                                                WATCH OUR ANIMATION
                                            </button>
                                        <?php } else { ?>
                                            <button class="js-video-button banner-btn2" data-animation="fadeInUp" data-delay="800ms" data-video-id="<?php echo $row['watch_our_animation']; ?>" data-channel="<?php echo $row['watch_our_animation_type']; ?>">
                                                <span class="video-play-button">
                                                    <span></span>
                                                </span>
                                                WATCH OUR ANIMATION
                                            </button>
                                    <?php }
                                    } ?>

                                    <?php if ($countbanner > 1) { ?>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>

                    <?php } ?>
                </div>
            <?php } ?>
                </div>

                <div class="banner-col2">

                    <div class="banner-row2 custom-select1">
                        <select name="redirectURL1" class="banner-fild1">
                            <option value="i-would-like-to" selected="">I Would Like To</option>

                            <?php $links = get_field('i_would_like_to', 'options');

                            if (!empty($links)) {

                                foreach ($links as $link) {

                                    if (!empty($link['link_title'])) {

                                        if ($link['link_type'] == 'External') { ?>
                                            <option value="<?php echo $link['link']; ?>" target="_new"><?php echo $link['link_title']; ?></option>
                                        <?php } else { ?>

                                            <option value="<?php echo site_url('/') . $link['link']; ?>"><?php echo $link['link_title']; ?></option>
                            <?php }
                                    }
                                }
                            } ?>
                        </select>
                    </div>

                </div>

                <div class="banner-col3">

                    <?php if (!empty(get_field('emergency', 'options'))) {

                        if (get_field('emergency_link_type', 'options') == "External") {  ?>

                            <a href="<?php echo get_field('emergency', 'options'); ?>" target="_blank" class="banner-row3">
                                <span class="banner-box1">
                                    <h4>EMERGENCIES</h4>
                                </span>
                            </a>

                        <?php } else { ?>

                            <a href="<?php echo site_url('/') . get_field('emergency', 'options'); ?>" class="banner-row3">
                                <span class="banner-box1">
                                    <h4>EMERGENCIES</h4>
                                </span>
                            </a>

                    <?php }
                    } ?>

                </div>
</section>


<section class="about-wrapp">
    <div class="margin">

        <div class="about-col1">
            <div class="about-row1">

                <?php if (!empty(get_field('rafferal_content', $post->ID))) { ?>
                    <?php echo get_field('rafferal_content', $post->ID); ?>
                <?php } ?>

                <a href="<?php echo get_permalink(28); ?>" class="about-btn1">READ MORE</a>

                <?php if (!empty(get_field('referral_button', $post->ID))) { ?>
                    <?php if (get_field('referral_link_type',  $post->ID) == "External") { ?>
                        <a href="<?php echo get_field('referral_button', $post->ID) ?>" target="_blank" class="about-btn1">REFERRALS</a>
                    <?php } else { ?>
                        <a href="<?php echo site_url("/") . get_field('referral_button', $post->ID) ?>" class="about-btn1">REFERRALS</a>
                <?php }
                } ?>
            </div>


            <div class="about-col2">

                <?php if (!empty(get_field('referrals_image', $post->ID))) {

                    $referral = aq_resize(get_field('referrals_image', $post->ID)['url'], 1035, 805, true, true, true);

                    $alt = get_field('referrals_image', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "ashbourneroad Image";
                    }

                    $title = get_field('referrals_image', $post->ID)['title'];

                    if (empty($title)) {

                        $title = "ashbourneroad Image";
                    }

                ?>

                    <div class="about-row2 square-effect1">

                        <a href="<?php echo get_permalink(28); ?>"><img loading="lazy" src="<?php echo $referral; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
                    </div>

                <?php } else { ?>

                    <a href="<?php echo get_permalink(28); ?>">
                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/thumb1-invisalign-1048x807-noimage.jpg" alt="<?php echo $before_img_alt; ?>" title="<?php echo $before_img_title; ?>" /></a>

                <?php } ?>


            </div>
        </div>

    </div>

    <!--about-texture-grey-square-shape-->
    <div class="about-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="about texture grey square shape1">
    </div>
</section>



<section class="treatments-wrapp">
    <div class="margin">

        <div class="treatments-col1 square-effect1">


            <div class="mob-hide1">

                <?php if (!empty(get_field('invisalign_background_image', $post->ID))) {

                    $invisalign = aq_resize(get_field('invisalign_background_image', $post->ID)['url'], 3720, 1632, true, true, true);

                    $alt = get_field('invisalign_background_image', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "ashbourneroad Image";
                    }

                    $title = get_field('invisalign_background_image', $post->ID)['title'];

                    if (empty($title)) {

                        $title = "ashbourneroad Image";
                    }

                ?>

                    <?php if (!empty(get_field('invisalign_learnmore', $post->ID))) { ?><a href="<?php echo get_field('invisalign_learnmore', $post->ID); ?>">
                            <img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
                    <?php } else { ?>
                        <img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                    <?php } ?>

                <?php } ?>
            </div>



            <div class="mob-show1">

                <?php if (!empty(get_field('invisalign_image', $post->ID))) {

                    $invisalign = aq_resize(get_field('invisalign_image', $post->ID)['url'], 1824, 2394, true, true, true);

                    $alt = get_field('invisalign_image', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "ashbourneroad Image";
                    }

                    $title = get_field('invisalign_image', $post->ID)['title'];

                    if (empty($title)) {

                        $title = "ashbourneroad Image";
                    }

                ?>
                    <img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                <?php } ?>
            </div>



            <div class="treatments-row1">

                <?php if (!empty(get_field('invisalign_content', $post->ID))) { ?>
                    <?php echo get_field('invisalign_content', $post->ID); ?>
                <?php } ?>

                <?php if (!empty(get_field('invisalign_learnmore', $post->ID))) { ?>
                    <a href="<?php echo get_field('invisalign_learnmore', $post->ID); ?>" class="treatments-btn1">LEARN MORE</a>
                <?php } ?>


                <div class="treatments-box1">
                    <?php if (!empty(get_field('invisalign__offers', $post->ID))) { ?>
                        <?php
                        foreach (get_field('invisalign__offers', $post->ID) as $row) { ?>
                            <?php if (!empty($row['label'] && $row['link'])) { ?>
                                <?php if (!empty($row['link_type']) == "External") { ?>

                                    <a href="<?php echo $row['link']; ?>" class="treatments-btn2" target="_blank">
                                        <?php echo $row['label']; ?>
                                    </a>

                                <?php } else { ?>
                                    <a href="<?php echo site_url("/") . $row['link']; ?>" class="treatments-btn2">
                                        <?php echo $row['label']; ?>
                                    </a>
                    <?php }
                            }
                        }
                    } ?>

                    <?php if (!empty(get_field('invisalign_logo', $post->ID))) {

                        $invisalignlogo = get_field('invisalign_logo', $post->ID)['url'];

                        $alt1 = get_field('invisalign_logo', $post->ID)['alt'];

                        if (empty($alt1)) {

                            $alt1 = "ashbourneroad Image";
                        }

                        $title1 = get_field('invisalign_logo', $post->ID)['title'];

                        if (empty($title)) {

                            $title1 = "ashbourneroad Image";
                        }

                    ?>
                        <div class="treatments-logo1">
                            <?php if (!empty(get_field('invisalign_logo_link', $post->ID))) { ?>
                                <a href="<?php echo get_field('invisalign_logo_link', $post->ID); ?>" target="_blank"><img loading="lazy" src="<?php echo $invisalignlogo; ?>" alt="<?php echo $alt1; ?>" title="<?php echo $title1; ?>"></a>
                            <?php } else { ?>
                                <img loading="lazy" src="<?php echo $invisalignlogo; ?>" alt="<?php echo $alt1; ?>" title="<?php echo $title1; ?>">
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="treatments-col2 square-effect1">

            <?php if (!empty(get_field('home_dental_implants_image', $post->ID))) {

                $invisalign = aq_resize(get_field('home_dental_implants_image', $post->ID)['url'], 810, 1063, true, true, true);

                $alt = get_field('home_dental_implants_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "ashbourneroad Image";
                }

                $title = get_field('home_dental_implants_image', $post->ID)['title'];

                if (empty($title)) {

                    $title = "ashbourneroad Image";
                }

            ?>
                <a href="<?php echo get_field('home_dental_implants_learnmore', $post->ID); ?>"><img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>

            <?php } else { ?>
                <a href="<?php echo get_field('home_dental_implants_learnmore', $post->ID); ?>"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/home-treat-no-img.jpg" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
            <?php } ?>

            <div class="treatments-row2">

                <?php if (!empty(get_field('home_dental_implants_content', $post->ID))) { ?>
                    <?php echo get_field('home_dental_implants_content', $post->ID); ?>
                <?php } ?>

                <a href="<?php echo get_field('home_dental_implants_learnmore', $post->ID); ?>" class="treatments-btn1">LEARN MORE</a>
            </div>
        </div>




        <div class="treatments-col3 square-effect1">


            <?php if (!empty(get_field('hometeeth_wihitening_image', $post->ID))) {

                $invisalign = aq_resize(get_field('hometeeth_wihitening_image', $post->ID)['url'], 810, 515, true, true, true);

                $alt = get_field('hometeeth_wihitening_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "ashbourneroad Image";
                }

                $title = get_field('hometeeth_wihitening_image', $post->ID)['title'];

                if (empty($title)) {

                    $title = "ashbourneroad Image";
                }

            ?>

                <a href="<?php echo get_field('hometeeth_wihitening_button', $post->ID); ?>"><img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
            <?php } else { ?>
                <a href="<?php echo get_field('hometeeth_wihitening_button', $post->ID); ?>"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatment-no-img.jpg" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
            <?php } ?>




            <div class="treatments-row3">
                <?php if (!empty(get_field('home_teeth_wihitening_content', $post->ID))) { ?>
                    <?php echo get_field('home_teeth_wihitening_content', $post->ID); ?>
                <?php } ?>
                <a href="<?php echo get_field('hometeeth_wihitening_button', $post->ID); ?>" class="treatments-btn1">LEARN MORE</a>
            </div>
        </div>


        <div class="treatments-col4 square-effect1">
            <?php if (!empty(get_field('teeth_white_feelings_image', $post->ID))) {

                $invisalign = aq_resize(get_field('teeth_white_feelings_image', $post->ID)['url'], 810, 515, true, true, true);

                $alt = get_field('teeth_white_feelings_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "ashbourneroad Image";
                }

                $title = get_field('teeth_white_feelings_image', $post->ID)['title'];

                if (empty($title)) {

                    $title = "ashbourneroad Image";
                }

            ?>

                <a href="<?php echo get_field('teeth_white_feelings_button', $post->ID); ?>"><img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
            <?php } else { ?>
                <a href="<?php echo get_field('teeth_white_feelings_button', $post->ID); ?>"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatment-no-img.jpg" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
            <?php } ?>

            <div class="treatments-row4">

                <?php if (!empty(get_field('teeth_white_feelings_content', $post->ID))) { ?>
                    <?php echo get_field('teeth_white_feelings_content', $post->ID); ?>
                <?php } ?>

                <a href="<?php echo get_field('teeth_white_feelings_button', $post->ID); ?>" class="treatments-btn1">LEARN MORE</a>
            </div>
        </div>

    </div>

    <!--treatments-texture-grey-square-shape-->

    <div class="treatments-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/treatments-texture-grey-square-shape1.svg" alt="treatments texture grey square shape1">
    </div>
</section>



<?php include_once('include/dentistry-wrapp.php'); ?>


<section class="testimonials-wrapp">
    <div class="margin">

        <div class="testimonials-col1">
            <div class="testimonials-row1">

                <?php if (!empty(get_field('home_testimonials_content', $post->ID))) { ?>

                    <?php echo get_field('home_testimonials_content', $post->ID); ?>

                <?php } ?>
                <?php if (!empty(get_field('home_testimonials_button', $post->ID))) { ?>
                    <a href="<?php echo get_field('home_testimonials_button', $post->ID); ?>" target="_blank" class="testimonials-btn1">LEAVE US A REVIEW</a>
                <?php } ?>
            </div>
            <div class="testimonials-col2">

                <?php if (!empty(get_field('home_testimonials_image', $post->ID))) {

                    $invisalign = aq_resize(get_field('home_testimonials_image', $post->ID)['url'], 1035, 745, true, true, true);

                    $alt = get_field('home_testimonials_image', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "ashbourneroad Image";
                    }

                    $title = get_field('home_testimonials_image', $post->ID)['title'];

                    if (empty($title)) {

                        $title = "ashbourneroad Image";
                    }

                ?>
                    <div class="testimonials-row2 square-effect1">
                        <?php if (!empty(get_field('home_testimonials_image_link', $post->ID))) { ?>
                            <a href="<?php echo get_field('home_testimonials_image_link', $post->ID); ?>" target="_blank"><img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
                        <?php } else { ?>
                            <img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>

    </div>

    <!--testimonials-texture-grey-square-shape-->
    <div class="testimonials-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/testimonials-texture-grey-square-shape1.svg" alt="testimonials texture grey square shape1">
    </div>
</section>



<section class="reviews-wrapp">
    <?php include_once('include/reviews-wrapp.php'); ?>
</section>

<section class="perks-wrapp">
    <div class="margin">

        <div class="perks-col1">
            <div class="perks-row1">

                <?php if (!empty(get_field('peak_content', $post->ID))) { ?>

                    <?php echo get_field('peak_content', $post->ID); ?>

                <?php } ?>

            </div>
        </div>

    </div>
</section>



<section class="services-wrapp">

    <div class="margin">

        <div class="services-col1">
            <?php if (!empty(get_field('peak_image_section', $post->ID))) { ?>
                <?php $r = 1;
                foreach (get_field('peak_image_section', $post->ID) as $row) { ?>

                    <div class="services-col2">

                        <div class="services-row1 circle-effects1">
                            <?php if (!empty($row['peak_icon_1'])) { ?>

                                <img loading="lazy" src="<?php echo $row['peak_icon_1']['url']; ?>" alt="icon1 discount on work within the plan white plain">
                            <?php } ?>

                            <span class="circle-row1">
                                <?php if (!empty($row['peak_icon_2'])) { ?>

                                    <img loading="lazy" src="<?php echo $row['peak_icon_2']['url']; ?>" alt="icon11 discount on work within the plan sea blithe plain">
                                <?php } ?>
                            </span>
                        </div>
                        <?php if (!empty($row['peak_sec_content'])) { ?>
                            <div class="services-row2">
                                <h2><?php echo $row['peak_sec_content']; ?></h2>
                            </div>
                        <?php } ?>

                    </div>

                <?php $r++;
                } ?>
            <?php } ?>



        </div>

    </div>

    <!--services-texture-grey-square-shape-->
    <div class="services-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/services-texture-grey-square-shape1.svg" alt="services texture grey square shape1">
    </div>
    <div class="services-texture-grey-square-shape2">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/services-texture-grey-square-shape2.svg" alt="services texture grey square shape2">
    </div>
</section>


<section class="finance-wrapp">
    <div class="margin">

        <div class="finance-col1">
            <div class="finance-col2">

                <?php if (!empty(get_field('finance_image', $post->ID))) {

                    $invisalign = aq_resize(get_field('finance_image', $post->ID)['url'], 706, 823, true, true, true);

                    $alt = get_field('finance_image', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "ashbourneroad Image";
                    }

                    $title = get_field('finance_image', $post->ID)['title'];

                    if (empty($title)) {

                        $title = "ashbourneroad Image";
                    }

                ?>

                    <div class="finance-row2 square-effect1">

                        <?php if (!empty(get_field('finance_learnmore', $post->ID))) { ?>
                            <a href="<?php echo get_field('finance_learnmore', $post->ID); ?>"><img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>
                        <?php } else { ?>
                            <img loading="lazy" src="<?php echo $invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                        <?php } ?>

                    </div>
                <?php } ?>
            </div>

            <div class="finance-row1">

                <?php if (!empty(get_field('finance_content', $post->ID))) { ?>

                    <?php echo get_field('finance_content', $post->ID); ?>

                <?php } ?>
                <?php if (!empty(get_field('finance_learnmore', $post->ID))) { ?>
                    <a href="<?php echo get_field('finance_learnmore', $post->ID); ?>" target="_blank" class="finance-btn1">LEARN MORE</a>
                <?php } ?>
            </div>
        </div>

    </div>
</section>


<?php $args = get_posts(array('post_type' => 'team', 'orderby' => 'menu_order', 'post_status' => 'publish', 'posts_per_page' => -1));

if (!empty($args)) {

    $count = 0;

    foreach ($args as $team) {

        if (!empty(get_field('show_on_home_page', $team->ID))) {

            $count = $count + 1;
        }
    }

    if ($count != 0) {
?>

        <section class="team-wrapp">

            <div class="margin">

                <div class="team-col1">

                    <div class="team-col2">

                        <?php if ($count > 3) {
                            $sliderdeskteam = "slider slider-nav";
                        } else {
                            $sliderdeskteam = "non-slider";
                        } ?>
                        <div class="<?php echo $sliderdeskteam; ?>">

                            <?php

                            foreach ($args as $item) {

                                if (!empty(get_field('show_on_home_page', $item->ID))) {

                                    $img = wp_get_attachment_url(get_post_thumbnail_id($item->ID));

                                    $imgalt = get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true);

                                    if (empty($imgalt)) {

                                        $imgalt = 'Team Image';
                                    }

                                    $image_id = get_post_thumbnail_id($item->ID);

                                    if (!empty(get_the_title($image_id))) {

                                        $image_title = get_the_title($image_id);
                                    } else {

                                        $image_title = " Team Image ";
                                    }

                                    $team_img = aq_resize($img, 706, 823, true, true, true);

                            ?>

                                    <?php if ($count > 3) { ?>

                                        <div>

                                        <?php } ?>

                                        <div class="team-row2 square-effect1">

                                            <a href="<?php echo get_permalink($item->ID); ?>">

                                                <?php if (!empty($img)) {  ?>

                                                    <img loading="lazy" src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

                                                <?php   } else { ?>
                                                    <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/team-no-img.jpg" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                                                <?php } ?>

                                            </a>

                                        </div>

                                        <?php if ($count > 3) { ?>

                                        </div>

                            <?php }
                                    }
                                } ?>

                        </div>

                    </div>


                    <div class="team-row1">

                        <h2>MEET THE TEAM</h2>
                        <?php if ($count > 3) {
                            $sliderdeskteam = "slider slider-for";
                        } else {
                            $sliderdeskteam = "non-slider";
                        } ?>

                        <div class="<?php echo $sliderdeskteam; ?>">

                            <?php foreach ($args as $item) {

                                if (!empty(get_field('show_on_home_page', $item->ID))) { ?>

                                    <div>

                                        <h3><?php echo $item->post_title; ?></span></h3>

                                        <?php

                                        $designation = get_field('designation', $item->ID);

                                        if (!empty($designation)) { ?>

                                            <h4><?php echo $designation; ?></h4>

                                        <?php   }   ?>

                                        <?php

                                        $discription = get_field('team_discription', $item->ID);

                                        if (!empty($discription)) { ?>

                                            <p><?php echo $discription; ?></p>
                                        <?php   }   ?>



                                        <a href="<?php echo get_permalink($item->ID); ?>" class="team-btn1">READ MORE</a>

                                        <a href="<?php echo get_permalink(30); ?>" class="team-btn1">VIEW ALL TEAM MEMBERS</a>
                                    </div>

                            <?php }
                            } ?>

                        </div>

                    </div>

                </div>


            </div>
        </section>
<?php }
}     ?>

<section class="contact-wrapp">
    <div class="margin">

        <h2>CONTACT</h2>
        <h3>GET IN TOUCH</h3>
        <div class="contact-col1">
            <?php echo do_shortcode('[ninja_form id=5]'); ?>
        </div>

    </div>
</section>

<?php

get_footer();
