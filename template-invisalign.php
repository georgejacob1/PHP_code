<?php

/**
 * * Template Name: Invisalign Page
 * */
get_header();

?>

<section class="braces-wrapp">

    <?php

    $why_invisalign_title = get_field('why_invisalign_title', $post->ID);

    $smile_gallery_heading = get_field('smile_gallery_heading', $post->ID);

    $comparison_heading = get_field('comparison_heading', $post->ID);

    $invisalign_providers_title = get_field('invisalign_providers_title', $post->ID);

    $why_us_title = get_field('why_us_title', $post->ID);

    $invisalign_fix_heading = get_field('invisalign_fix_heading', $post->ID);

    $cost_of_invisalign_title = get_field('cost_of_invisalign_title', $post->ID);

    $virtual_3d_scan_title = get_field('virtual_3d_scan_title', $post->ID);

    $faq_title = get_field('faq_title', $post->ID);

    ?>

    <div class="link-box">

        <div class="link-row1">

            <ul class="link-col1 single-page-nav">

                <?php if (!empty($why_invisalign_title)) { ?>

                    <li><a href="#myAnchor"><?php echo $why_invisalign_title; ?></a></li>

                <?php }
                if (!empty($smile_gallery_heading)) { ?>

                    <li><a href="#section1"><?php echo $smile_gallery_heading; ?></a></li>

                <?php }
                if (!empty($comparison_heading)) { ?>

                    <li><a href="#section2"><?php echo $comparison_heading; ?></a></li>

                <?php }
                if (!empty($invisalign_providers_title)) { ?>

                    <li><a href="#section3"><?php echo $invisalign_providers_title; ?></a></li>

                <?php }
                if (!empty($why_us_title)) { ?>

                    <li><a href="#section4"><?php echo $why_us_title; ?></a></li>

                <?php }
                if (!empty($invisalign_fix_heading)) { ?>

                    <li><a href="#section5"><?php echo $invisalign_fix_heading; ?></a></li>

                <?php }
                if (!empty($cost_of_invisalign_title)) { ?>

                    <li><a href="#section6"><?php echo $cost_of_invisalign_title; ?></a></li>

                <?php }
                if (!empty($virtual_3d_scan_title)) { ?>

                    <li><a href="#section7"><?php echo $virtual_3d_scan_title; ?></a></li>

                <?php }
                if (!empty($faq_title)) { ?>

                    <li><a href="#section8"><?php echo $faq_title; ?></a></li>

                <?php } ?>

            </ul>

        </div>

    </div>

    <div id="myAnchor" class="margin">

        <div class="braces-row1">

            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>

        </div>

        <?php

        $invisalign_image = get_field('invisalign_image', $post->ID)['url'];

        $invisalign_title = get_field('invisalign_title', $post->ID);

        $invisalign_content = get_field('invisalign_content', $post->ID);

        $traditional_braces_image = get_field('traditional_braces_image', $post->ID)['url'];

        $traditional_braces_title = get_field('traditional_braces_title', $post->ID);

        $traditional_braces_content = get_field('traditional_braces_content', $post->ID);

        ?>

        <div class="braces-row2">

            <div class="braces-row3">

                <div class="braces-col1">

                    <?php if (!empty($invisalign_image)) {

                        $alt = get_field('invisalign_image', $post->ID)['alt'];

                        if (empty($alt)) {

                            $alt = "invisalign thumb";
                        }


                        $title = get_field('invisalign_image', $post->ID)['title'];


                        if (empty($title)) {

                            $title = "invisalign thumb";
                        }

                        $invisalign_img = aq_resize($invisalign_image, 1035, 847, true, true, true);

                    ?>

                        <div class="braces-thumb">

                            <img loading="lazy" src="<?php echo $invisalign_img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                        </div>

                    <?php } ?>

                    <div class="braces-conten">

                        <?php if (!empty($invisalign_title)) { ?>

                            <h3><?php echo $invisalign_title; ?></h3>

                        <?php } ?>

                        <?php if (!empty($invisalign_content)) { ?>

                            <ul class="braces-bar1">

                                <?php echo $invisalign_content; ?>

                            </ul>

                        <?php } ?>

                    </div>

                </div>

                <div class="braces-col1">

                    <?php if (!empty($traditional_braces_image)) {

                        $alt = get_field('traditional_braces_image', $post->ID)['alt'];

                        if (empty($alt)) {

                            $alt = "invisalign thumb";
                        }


                        $title = get_field('traditional_braces_image', $post->ID)['title'];


                        if (empty($title)) {

                            $title = "invisalign thumb";
                        }

                        $braces_img = aq_resize($traditional_braces_image, 1035, 847, true, true, true);

                    ?>

                        <div class="braces-thumb">

                            <img loading="lazy" src="<?php echo $braces_img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                        </div>

                    <?php } ?>

                    <div class="braces-conten">

                        <?php if (!empty($traditional_braces_title)) { ?>

                            <h3><?php echo $traditional_braces_title; ?></h3>

                        <?php   } ?>

                        <?php if (!empty($traditional_braces_content)) { ?>

                            <ul class="braces-bar1">

                                <?php echo $traditional_braces_content; ?>

                            </ul>

                        <?php } ?>

                    </div>

                </div>

            </div>

            <div class="vs-box">

                <span>VS</span>

            </div>

        </div>

        <div class="braces-row4">

            <?php if (!empty(get_field('consultation_content', $post->ID))) { ?>

                <?php echo get_field('consultation_content', $post->ID); ?>

            <?php } ?>

            <?php if (!empty(get_field('inperson_consultation_label', $post->ID)) && !empty(get_field('inperson_consultation_link', $post->ID))) {

                if (get_field('inperson_consultation_link_type', $post->ID) == "External") {  ?>

                    <a href="<?php echo get_field('inperson_consultation_link', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('inperson_consultation_label', $post->ID); ?></a>

                <?php } else { ?>

                    <a href="<?php echo site_url('/') . get_field('inperson_consultation_link', $post->ID); ?>" class="braces-btn1">

                        <?php echo get_field('inperson_consultation_label', $post->ID); ?>

                    </a>

            <?php }
            } ?>

            <?php if (!empty(get_field('free_video_consultation_label', $post->ID)) && !empty(get_field('free_video_consultation_link', $post->ID))) {

                if (get_field('free_video_consultation_link_type', $post->ID) == "External") {  ?>


                    <a href="<?php echo get_field('free_video_consultation_link', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('free_video_consultation_label', $post->ID); ?></a>

                <?php } else { ?>

                    <a href="<?php echo site_url('/') . get_field('free_video_consultation_link', $post->ID); ?>" class="braces-btn1"><?php echo get_field('free_video_consultation_label', $post->ID); ?></a>

            <?php }
            } ?>

        </div>

    </div>

</section>

<?php if (!empty(get_field('smile_gallery', $post->ID))) {

    $counter = count(get_field('smile_gallery', $post->ID)); ?>

    <section id="section1" class="smile-wrapp">

        <div class="smile-row1 desk">

            <?php if (!empty(get_field('smile_gallery_title', $post->ID))) { ?>

                <h2><?php echo get_field('smile_gallery_title', $post->ID); ?></h2>

            <?php } ?>

            <?php if ($counter >= 5) {
                $sliderdeskteam = "slider single-item";
            } else {
                $sliderdeskteam = "non-slider";
            } ?>

            <div class="<?php echo $sliderdeskteam;  ?>">

                <?php foreach (get_field('smile_gallery', $post->ID) as $row) {

                    if (!empty($row['gallery_image']['url'])) {

                        $alt = $row['gallery_image']['alt'];

                        if (empty($alt)) {

                            $alt = "Smile Gallery";
                        }

                        $title = $row['gallery_image']['title'];

                        if (empty($title)) {

                            $title = "Smile Gallery";
                        }

                        $gal_img = aq_resize($row['gallery_image']['url'], 718, 664, true, true, true);

                ?>

                        <?php if ($counter >= 5) {  ?>

                            <div>

                            <?php } ?>

                            <div class="smile-col1 hovereffect">

                                <img loading="lazy" class="img-responsive" src="<?php echo $gal_img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                                <div class="overlay1">

                                    <div class="lt">
                                        <h3>Before</h3>
                                    </div>

                                    <div class="rt">
                                        <h3>After</h3>
                                    </div>

                                </div>

                                <?php if (!empty($row['gallery_title'])) { ?>

                                    <h4><?php echo $row['gallery_title']; ?></h4>

                                <?php } ?>

                            </div>

                            <?php if ($counter >= 5) {  ?>

                            </div>

                <?php }
                        }
                    } ?>

            </div>

        </div>

        <div class="smile-row1 mob">

            <?php if (!empty(get_field('smile_gallery_title', $post->ID))) { ?>

                <h2><?php echo get_field('smile_gallery_title', $post->ID); ?></h2>

            <?php } ?>

            <?php if ($counter >= 2) {
                $sliderdeskteam = "slider single-item";
            } else {
                $sliderdeskteam = "non-slider";
            } ?>

            <div class="<?php echo $sliderdeskteam;  ?>">

                <?php foreach (get_field('smile_gallery', $post->ID) as $row) {

                    if (!empty($row['gallery_image']['url'])) {

                        $alt = $row['gallery_image']['alt'];

                        if (empty($alt)) {

                            $alt = "Smile Gallery";
                        }

                        $title = $row['gallery_image']['title'];

                        if (empty($title)) {

                            $title = "Smile Gallery";
                        }

                        $gal_img = aq_resize($row['gallery_image']['url'], 718, 664, true, true, true);

                ?>

                        <?php if ($counter >= 2) {  ?>

                            <div>

                            <?php } ?>

                            <div class="smile-col1 hovereffect">

                                <img loading="lazy" class="img-responsive" src="<?php echo $gal_img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                                <div class="overlay1">

                                    <div class="lt">
                                        <h3>Before</h3>
                                    </div>

                                    <div class="rt">
                                        <h3>After</h3>
                                    </div>

                                </div>

                                <?php if (!empty($row['gallery_title'])) { ?>

                                    <h4><?php echo $row['gallery_title']; ?></h4>

                                <?php } ?>

                            </div>

                            <?php if ($counter >= 2) {  ?>

                            </div>

                <?php }
                        }
                    } ?>

            </div>

        </div>

    </section>

<?php } ?>

<section id="section2" class="comparison-wrapp <?php if (!empty(get_field('achievement_title', $post->ID)) && !empty(get_field('achievement_logo', $post->ID))) {
                                                    echo "provider-present";
                                                } else {
                                                    echo "provider-absent";
                                                }  ?>">

    <div class="margin">

        <?php if (!empty(get_field('comparison_title', $post->ID))) { ?>

            <h2><?php echo get_field('comparison_title', $post->ID); ?></h2>

        <?php } ?>

        <div class="comparison-row1">

            <div class="comparison-row2">

                <div class="comparison-col1"></div>

                <?php if (!empty(get_field('invisalign_logo', $post->ID)['url'])) {

                    $logo_invisalign = get_field('invisalign_logo', $post->ID)['url'];

                    $alt = get_field('invisalign_logo', $post->ID)['alt'];

                    if (empty($alt)) {

                        $alt = "Invisalign Logo";
                    }


                    $title = get_field('invisalign_logo', $post->ID)['title'];


                    if (empty($title)) {

                        $title = "Invisalign Logo";
                    }

                ?>

                    <div class="comparison-col2">

                        <div class="invisalign-logo">

                            <div class="logo-col1">

                                <img loading="lazy" src="<?php echo $logo_invisalign; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

                            </div>

                        </div>

                    </div>

                <?php } ?>

                <?php if (!empty(get_field('aligners_title', $post->ID))) { ?>

                    <div class="comparison-col2">

                        <div class="conten">
                            <h3><?php echo get_field('aligners_title', $post->ID); ?></h3>
                        </div>

                    </div>

                <?php }

                if (!empty(get_field('braces_title', $post->ID))) { ?>

                    <div class="comparison-col2">

                        <div class="conten">
                            <h3><?php echo get_field('braces_title', $post->ID); ?></h3>
                        </div>

                    </div>

                <?php } ?>

            </div>

            <?php if (!empty(get_field('comparison_table', $post->ID))) {

                foreach (get_field('comparison_table', $post->ID) as $row) {  ?>

                    <div class="comparison-row2">

                        <?php if (!empty($row['comparison_title'])) { ?>

                            <div class="comparison-col1 color3">

                                <div class="conten">
                                    <h4><?php echo $row['comparison_title']; ?></h4>
                                </div>

                            </div>

                        <?php } ?>

                        <div class="comparison-col2 color1">


                            <?php if (!empty($row['invisalign_check'])) { ?>

                                <div class="check-icon">

                                    <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check"></div>

                                </div>

                            <?php } ?>

                        </div>

                        <div class="comparison-col2 color4">

                            <?php if (!empty($row['aligners_check'])) { ?>

                                <div class="check-icon">

                                    <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check"></div>

                                </div>

                            <?php   } else { ?>

                                <div class="conten"></div>

                            <?php } ?>

                        </div>

                        <div class="comparison-col2 color2">

                            <?php if (!empty($row['bracers_check'])) { ?>

                                <div class="check-icon">

                                    <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check"></div>

                                </div>

                            <?php   } else { ?>

                                <div class="conten"></div>

                            <?php } ?>

                        </div>

                    </div>

            <?php }
            } ?>

        </div>

        <article class="tabbed-content">

            <nav class="tabs">

                <ul>

                    <li><a href="#tab1" class="active"><?php echo $invisalign_title; ?></a></li>

                    <li><a href="#tab2"><?php echo get_field('aligners_title', $post->ID); ?></a></li>

                    <li><a href="#tab3"><?php echo get_field('braces_title', $post->ID); ?></a></li>

                </ul>

            </nav>

            <?php if (!empty(get_field('comparison_table', $post->ID))) { ?>

                <section id="tab1" class="item active">

                    <div class="item-content">

                        <?php foreach (get_field('comparison_table', $post->ID) as $row) {

                            if (!empty($row['invisalign_check'])) { ?>

                                <!--Blue Bar-->

                                <div class="comparison-col1 color3">

                                    <div class="conten">
                                        <h4><?php echo $row['comparison_title']; ?></h4>
                                    </div>

                                </div>

                                <!--black bar-->

                                <div class="comparison-col2 color4">

                                    <div class="check-icon">

                                        <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check" title="check"></div>

                                    </div>

                                </div>

                        <?php       }
                        } ?>

                    </div>

                </section>

            <?php   } ?>

            <?php if (!empty(get_field('comparison_table', $post->ID))) { ?>

                <section id="tab2" class="item">

                    <div class="item-content">

                        <?php foreach (get_field('comparison_table', $post->ID) as $row) {

                            if (!empty($row['aligners_check'])) { ?>

                                <!--Blue Bar-->

                                <div class="comparison-col1 color3">

                                    <div class="conten">
                                        <h4><?php echo $row['comparison_title']; ?></h4>
                                    </div>

                                </div>

                                <!--black bar-->

                                <div class="comparison-col2 color4">

                                    <div class="check-icon">

                                        <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check" title="check"></div>

                                    </div>

                                </div>

                        <?php       }
                        } ?>

                    </div>

                </section>

            <?php   } ?>

            <?php if (!empty(get_field('comparison_table', $post->ID))) { ?>

                <section id="tab3" class="item">

                    <div class="item-content">

                        <?php foreach (get_field('comparison_table', $post->ID) as $row) {

                            if (!empty($row['bracers_check'])) { ?>

                                <!--Blue Bar-->
                                <div class="comparison-col1 color3">

                                    <div class="conten">
                                        <h4><?php echo $row['comparison_title']; ?></h4>
                                    </div>

                                </div>
                                <!--black bar-->
                                <div class="comparison-col2 color4">

                                    <div class="check-icon">

                                        <div class="check-col1"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/invisalign/check.svg" alt="check" title="check"></div>

                                    </div>

                                </div>

                        <?php       }
                        } ?>

                    </div>

                </section>

            <?php   } ?>

        </article>

        <?php if (!empty(get_field('in_person_consultation_label_copy', $post->ID)) && !empty(get_field('in_person_consultation_link_copy', $post->ID))) {

            if (get_field('in_person_consultation_link_type_copy', $post->ID) == "External") {  ?>

                <a href="<?php echo get_field('in_person_consultation_link_copy', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy', $post->ID); ?></a>

            <?php   } else { ?>

                <a href="<?php echo site_url('/') . get_field('in_person_consultation_link_copy', $post->ID); ?>" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy', $post->ID); ?></a>

        <?php   }
        } ?>

        <?php if (!empty(get_field('free_video_consultation_label_copy', $post->ID)) && !empty(get_field('free_video_consultation_link_copy', $post->ID))) {

            if (get_field('free_video_consultation_link_type_copy', $post->ID) == "External") {  ?>

                <a href="<?php echo get_field('free_video_consultation_link_copy', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy', $post->ID); ?></a>

            <?php   } else { ?>

                <a href="<?php echo site_url('/') . get_field('free_video_consultation_link_copy', $post->ID); ?>" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy', $post->ID); ?></a>

        <?php   }
        } ?>

        <?php if (!empty(get_field('invisalign_video', $post->ID))) {

            if (get_field('invisalign_video_type', $post->ID) == "youtube") {  ?>

                <div class="comparison-row3">
                    <iframe loading="lazy" src="https://www.youtube-nocookie.com/embed/<?php echo get_field('invisalign_video', $post->ID); ?>?rel=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            <?php } else { ?>

                <div class="comparison-row3">
                    <iframe loading="lazy" src="https://player.vimeo.com/video/<?php echo get_field('invisalign_video', $post->ID); ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

        <?php }
        } ?>

    </div>

</section>

<?php if (!empty(get_field('achievement_title', $post->ID)) && !empty(get_field('achievement_logo', $post->ID))) { ?>

    <section id="section3" class="providers-wrapp">

        <div class="margin">

            <?php if (!empty(get_field('achievement_title', $post->ID))) { ?>

                <h2><?php echo get_field('achievement_title', $post->ID); ?></h2>

            <?php   } ?>

            <?php if (!empty(get_field('achievement_logo', $post->ID))) {

                $var = get_field('achievement_logo', $post->ID);

                if (!empty($var['alt'])) {

                    $alt = $var['alt'];
                } else {

                    $alt = "Providers Logo";
                }

                if (!empty($var['title'])) {

                    $title = $var['title'];
                } else {

                    $title = "Providers Logo";
                }

            ?>

                <div class="providers-col1">

                    <!-- <img loading="lazy" src="<?php // echo aq_resize($var['url'], 200, 136, true, true, true); 
                                    ?>" alt="<?php // echo $alt;
                                                                                                                ?>" title="<?php // echo $title; 
                                                                                                                                            ?>" /> -->

                    <img loading="lazy" src="<?php echo $var['url']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                </div>

            <?php } ?>

        </div>

    </section>

<?php } ?>

<?php if (!empty(get_field('why_choose', $post->ID))) { ?>

    <section id="section4" class="reasons-wrapp">


        <div class="margin">

            <?php if (!empty(get_field('why_choose_us_title', $post->ID))) { ?>

                <h2><?php echo get_field('why_choose_us_title', $post->ID); ?></h2>

            <?php }

            $testi = get_field('why_choose', $post->ID);

            ?>

            <div class="reasons-row1">

                <?php foreach ($testi as $vid) { ?>

                    <div class="reasons-col1">

                        <?php if (!empty($vid['why_choose_icon']['url'])) {

                            $alt = $vid['why_choose_icon']['alt'];

                            if (empty($alt)) {

                                $alt = "reasons icon";
                            }


                            $title = $vid['why_choose_icon']['title'];


                            if (empty($title)) {

                                $title = "reasons icon";
                            }
                        ?>

                            <div class="reasons-icon">

                                <img loading="lazy" src="<?php echo $vid['why_choose_icon']['url']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                            </div>

                        <?php   }
                        if (!empty($vid['why_choose_title'])) { ?>

                            <p><?php echo $vid['why_choose_title']; ?></p>

                        <?php } ?>

                    </div>

                <?php } ?>

            </div>

            <?php if (!empty(get_field('in_person_consultation_label_copy2', $post->ID)) && !empty(get_field('in_person_consultation_link_copy2', $post->ID))) {

                if (get_field('in_person_consultation_link_type_copy2', $post->ID) == "External") {  ?>

                    <a href="<?php echo get_field('in_person_consultation_link_copy2', $post->ID); ?>" target="_blank" class="braces-btn2"><?php echo get_field('in_person_consultation_label_copy2', $post->ID); ?></a>

                <?php   } else { ?>

                    <a href="<?php echo site_url('/') . get_field('in_person_consultation_link_copy2', $post->ID); ?>" class="braces-btn2"><?php echo get_field('in_person_consultation_label_copy2', $post->ID); ?></a>

            <?php   }
            } ?>

            <?php if (!empty(get_field('free_video_consultation_label_copy2', $post->ID)) && !empty(get_field('free_video_consultation_link_copy2', $post->ID))) {

                if (get_field('free_video_consultation_link_type_copy2', $post->ID) == "External") {  ?>

                    <a href="<?php echo get_field('free_video_consultation_link_copy2', $post->ID); ?>" target="_blank" class="braces-btn2"><?php echo get_field('free_video_consultation_label_copy2', $post->ID); ?></a>

                <?php   } else { ?>

                    <a href="<?php echo site_url('/') . get_field('free_video_consultation_link_copy2', $post->ID); ?>" class="braces-btn2"><?php echo get_field('free_video_consultation_label_copy2', $post->ID); ?></a>

            <?php   }
            } ?>

        </div>

    </section>

<?php } ?>

<section id="section5" class="fix-wrapp">

    <div class="margin">

        <?php if (!empty(get_field('invisalign_fix_title', $post->ID))) { ?>

            <h2><?php echo get_field('invisalign_fix_title', $post->ID); ?></h2>

        <?php } ?>

        <?php if (!empty(get_field('invisalign_fix', $post->ID))) {

            $testi = get_field('invisalign_fix', $post->ID);

        ?>

            <div class="fix-row1">

                <?php foreach ($testi as $vid) { ?>

                    <div class="fix-col1">

                        <?php if (!empty($vid['invisalign_fix_image']['url'])) {

                            $alt = $vid['invisalign_fix_image']['alt'];

                            if (empty($alt)) {

                                $alt = "invisalign before after";
                            }


                            $title = $vid['invisalign_fix_image']['title'];


                            if (empty($title)) {

                                $title = "invisalign before after";
                            }
                        ?>

                            <div class="fix-thumb">

                                <img loading="lazy" src="<?php echo $vid['invisalign_fix_image']['url']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                            </div>

                        <?php } ?>

                        <?php if (!empty($vid['invisalign_fix_title']) || !empty($vid['invisalign_fix_content'])) { ?>

                            <div class="fix-conten">

                                <?php if (!empty($vid['invisalign_fix_title'])) { ?>

                                    <h3><?php echo $vid['invisalign_fix_title']; ?></h3>

                                <?php   }
                                if (!empty($vid['invisalign_fix_content'])) { ?>

                                    <p><?php echo $vid['invisalign_fix_content']; ?></p>

                                <?php   } ?>

                            </div>

                        <?php } ?>

                    </div>

                <?php } ?>

            </div>

        <?php } ?>

        <?php if (!empty(get_field('in_person_consultation_label_copy3', $post->ID)) && !empty(get_field('in_person_consultation_link_copy3', $post->ID))) {

            if (get_field('in_person_consultation_link_type_copy3', $post->ID) == "External") {  ?>

                <a href="<?php echo get_field('in_person_consultation_link_copy3', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy3', $post->ID); ?></a>

            <?php   } else { ?>

                <a href="<?php echo site_url('/') . get_field('in_person_consultation_link_copy3', $post->ID); ?>" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy3', $post->ID); ?></a>

        <?php   }
        } ?>

        <?php if (!empty(get_field('free_video_consultation_label_copy3', $post->ID)) && !empty(get_field('free_video_consultation_link_copy3', $post->ID))) {

            if (get_field('free_video_consultation_link_type_copy3', $post->ID) == "External") {  ?>

                <a href="<?php echo get_field('free_video_consultation_link_copy3', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy3', $post->ID); ?></a>

            <?php   } else { ?>

                <a href="<?php echo site_url('/') . get_field('free_video_consultation_link_copy3', $post->ID); ?>" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy3', $post->ID); ?></a>

        <?php   }
        } ?>

    </div>

</section>

<section id="section6" class="cost-wrapp">

    <?php if (!empty(get_field('invisalign_treatment_title', $post->ID))) { ?>

        <h2><?php echo get_field('invisalign_treatment_title', $post->ID); ?></h2>

    <?php   } ?>

    <div class="cost-row1">

        <div class="cost-col1">

            <?php if (!empty(get_field('treatment_cost_content', $post->ID))) { ?>

                <?php echo get_field('treatment_cost_content', $post->ID); ?>

            <?php } ?>

            <?php if (!empty(get_field('invisalign_cost_learn_more', $post->ID))) { ?>

                <a href="<?php echo site_url('/') . get_field('invisalign_cost_learn_more', $post->ID); ?>" class="cost-btn1">Learn More</a>

            <?php } ?>

        </div>

        <?php if (!empty(get_field('invisalign', $post->ID))) {

            $testi = get_field('invisalign', $post->ID);

            foreach ($testi as $vid) { ?>

                <div class="cost-col2">

                    <?php if (!empty($vid['invisalign_plan_title'])) { ?>

                        <h4><?php echo $vid['invisalign_plan_title']; ?></h4>

                    <?php   }
                    if (!empty($vid['invisalign_plan_price'])) { ?>

                        <h5><?php echo $vid['invisalign_plan_price']; ?></h5>

                    <?php   }
                    if (!empty($vid['invisalign_plan_contents'])) { ?>

                        <div class="cost-row2">

                            <ul class="cost-bar1">

                                <?php echo $vid['invisalign_plan_contents']; ?>

                            </ul>

                        </div>

                        <?php   }
                    if (!empty($vid['book_now_link'])) {

                        if ($vid['book_now_link_type'] == "External") {  ?>

                            <a href="<?php echo $vid['book_now_link']; ?>" target="_blank" class="cost-btn2">Book Now</a>

                        <?php } else { ?>

                            <a href="<?php echo site_url('/') . $vid['book_now_link']; ?>" class="cost-btn2">Book Now</a>

                    <?php }
                    } ?>

                </div>

            <?php }
        }

        if (!empty(get_field('invisalign_cost_image', $post->ID))) {

            $imger = get_field('invisalign_cost_image', $post->ID)['url'];

            ?>

            <div class="cost-col3" style="background:url(<?php echo $imger; ?>)no-repeat center / cover;">
            </div>

        <?php } ?>

    </div>

</section>

<section id="section7" class="scan-wrapp">

    <div class="margin">

        <div class="scan-row1">

            <div class="scan-row2">

                <?php if (!empty(get_field('scan_content', $post->ID))) { ?>

                    <?php echo get_field('scan_content', $post->ID); ?>

                <?php } ?>

                <div class="scan-col2">

                    <div class="video-img">

                        <video autoplay muted="muted" playsinline="" loop type="video/mp4" src="/wp-content/themes/ashbourneroad/images/itero_scan.mp4"></video>

                    </div>

                </div>

            </div>

            <?php if (!empty(get_field('scan_image', $post->ID)['url'])) {

                $scan = get_field('scan_image', $post->ID)['url'];

                $alt = get_field('scan_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "Scan Image";
                }


                $title = get_field('scan_image', $post->ID)['title'];


                if (empty($title)) {

                    $title = "Scan Image";
                }

                $scan_img = aq_resize($scan, 1035, 1139, true, true, true);

            ?>

                <div class="scan-col1">

                    <img loading="lazy" src="<?php echo $scan_img; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                    <?php if (!empty(get_field('itero_logo', $post->ID)['url'])) {

                        $itero_logo = get_field('itero_logo', $post->ID)['url'];

                        $alt = get_field('scan_image', $post->ID)['alt'];

                        if (empty($alt)) {

                            $alt = "Itro Image";
                        }


                        $title = get_field('itero_logo', $post->ID)['title'];


                        if (empty($title)) {

                            $title = "Itro Image";
                        }

                        $itero = aq_resize($itero_logo, 270, 267, true, true, true);

                    ?>

                        <div class="scan-col3">

                            <img loading="lazy" src="<?php echo $itero; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                        </div>

                    <?php } ?>

                </div>

            <?php } ?>

        </div>

    </div>

</section>


<?php if (!empty(get_field('faqs', $post->ID))) {

    $testi = get_field('faqs', $post->ID);

?>

    <section id="section8" class="faqs-wrapp">

        <div class="margin">

            <?php if (!empty(get_field('faq_heading', $post->ID))) { ?>

                <h2><?php echo get_field('faq_heading', $post->ID); ?></h2>

            <?php } ?>

            <div class="accordion">

                <?php $n = 1;

                foreach ($testi as $vid) { ?>

                    <div class="faqs-col1">
                        <h3><?php echo $n; ?>. <?php echo $vid['faq_question']; ?></h3>

                        <div class="content">

                            <div class="faqs-row1">

                                <?php echo $vid['faq_answer']; ?>

                            </div>

                        </div>

                    </div>

                <?php $n++;
                } ?>

            </div>

            <?php if (!empty(get_field('in_person_consultation_label_copy4', $post->ID)) && !empty(get_field('in_person_consultation_link_copy4', $post->ID))) {

                if (get_field('in_person_consultation_link_type_copy4', $post->ID) == "External") {  ?>

                    <a href="<?php echo get_field('in_person_consultation_link_copy4', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy4', $post->ID); ?></a>

                <?php } else { ?>

                    <a href="<?php echo site_url('/') . get_field('in_person_consultation_link_copy4', $post->ID); ?>" class="braces-btn1"><?php echo get_field('in_person_consultation_label_copy4', $post->ID); ?></a>

            <?php }
            } ?>

            <?php if (!empty(get_field('free_video_consultation_label_copy4', $post->ID)) && !empty(get_field('free_video_consultation_link_copy4', $post->ID))) {

                if (get_field('free_video_consultation_link_type_copy4', $post->ID) == "External") {  ?>

                    <a href="<?php echo get_field('free_video_consultation_link_copy4', $post->ID); ?>" target="_blank" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy4', $post->ID); ?></a>

                <?php } else { ?>

                    <a href="<?php echo site_url('/') . get_field('free_video_consultation_link_copy4', $post->ID); ?>" class="braces-btn1"><?php echo get_field('free_video_consultation_label_copy4', $post->ID); ?></a>

            <?php }
            } ?>

        </div>

    </section>

<?php } ?>

<script>
    var v = "<?php echo get_field('invisalign_video', $post->ID); ?>";
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '600',
            width: '100%',
            videoId: v,
            playerVars: {
                'playsinline': 1,
                rel: 0
            },
            events: {
                'onStateChange': function(event) {
                    switch (event.data) {
                        case -1:
                            console.log('unstarted');
                            break;
                        case 0:
                            player.playVideo();
                            break;
                        case 1:
                            console.log('playing');
                            break;
                        case 2:
                            console.log('paused');
                            break;
                        case 3:
                            console.log('buffering');
                            break;
                        case 5:
                            console.log('video cued');
                            break;
                    }
                }

            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }

    function stopVideo() {
        player.stopVideo();
    }
</script>

<?php

get_footer();

?>