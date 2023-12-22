<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php define('TEMPLATE_URL', get_template_directory_uri() . '/'); ?>
    <?php wp_head(); ?>

</head>

<body>



    <?php include_once('include/menu.php'); ?>

    <?php include_once('include/header.php'); ?>

    <?php include_once('include/linker-wrapp.php'); ?>
    <?php if (!is_front_page()) { ?>

        <section class="banner-wrapp inner-wrapp">
            <?php include_once('include/flexslider.php'); ?>

            <div class="inner-col1">
                <div class="inner-col2">


                    <?php if (is_home()) { ?>

                        <h1>Blog</h1>

                    <?php   } elseif (is_tax('treatmentcategory')) {  ?>

                        <h1>

                            <?php

                            $tax = $wp_query->get_queried_object();

                            if (!empty(get_field('heading', $tax))) {

                                echo get_field('heading', $tax);
                            } else {

                                single_cat_title();
                            }

                            ?>

                        </h1>

                    <?php   } elseif (is_tax('gallarycategory')) {  ?>

                        <h1><?php single_cat_title(); ?></h1>

                    <?php   } elseif (is_search()) {  ?>

                        <h1>Search</h1>

                    <?php   } elseif (is_archive()) {  ?>

                        <h1><?php single_cat_title(); ?></h1>

                    <?php   } elseif (is_404()) { ?>

                        <h1>404</h1>

                        <?php   } else {

                        if (is_singular('treatment')) { ?>

                            <h1>

                                <?php

                                if (!empty($post->ID)) {

                                    if (!empty(get_field('heading', $post->ID))) {

                                        echo get_field('heading', $post->ID);
                                    } else {

                                        the_title();
                                    }
                                } else {

                                    the_title();
                                } ?>

                            </h1>

                        <?php       } else { ?>

                            <h1>

                                <?php

                                if (!empty($post->ID)) {

                                    if (!empty(get_field('heading', $post->ID))) {

                                        echo get_field('heading', $post->ID);
                                    } else {

                                        the_title();
                                    }
                                } else {

                                    the_title();
                                }

                                ?>

                            </h1>

                    <?php       }
                    } ?>
                    <ul class="inner-row1">
                        <?php global $post;

                        $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

                        if (is_home()) { ?>

                            <li> <a href="<?php echo site_url('/'); ?>"> Home </a></li>

                            <li>/</li>

                            <li> Blog </li>

                        <?php   } elseif (is_tax('treatmentcategory')) {  ?>

                            <li><a href="<?php echo site_url('/'); ?>"> Home </a></li>

                            <li>/</li>

                            <li> <a href="<?php echo get_permalink(32); ?>"> Treatments </a> </li>

                            <li>/</li>

                            <li><?php single_cat_title(); ?></li>

                        <?php   } elseif (is_tax('gallerycategory')) {  ?>

                            <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                            <li>/</li>

                            <li> <a href="<?php echo get_permalink(34); ?>"> Smile Gallery </a> </li>

                            <li>/</li>

                            <li><?php single_cat_title(); ?></li>

                        <?php   } elseif (is_tax('teamcategory')) {  ?>

                            <li><a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                            <li>/</li>

                            <li> <a href="<?php echo get_permalink(30); ?>"> Our Team </a> </li>

                            <li>/</li>

                            <li><?php single_cat_title(); ?></li>

                        <?php   } elseif (is_search()) {  ?>

                            <li> <a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                            <li>/</li>

                            <li> Search </li>

                        <?php   } elseif (is_archive()) {  ?>

                            <li> <a href="<?php echo site_url('/'); ?>"> Home </a></li>

                            <li>/</li>

                            <li> <a href="<?php echo get_permalink(41); ?>">Blog</a> </li>

                            <li>/</li>

                            <li><?php single_cat_title(); ?></li>

                        <?php   } elseif (is_404()) { ?>

                            <li> <a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                            <li>/</li>

                            <li> 404</li>

                        <?php   } elseif (is_singular('treatment')) { ?>

                            <li> <a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                            <li>/</li>

                            <li> <a href="<?php echo get_permalink(32); ?>"> Treatments </a> </li>

                            <li>/</li>

                            <li>

                                <?php $category = get_the_term_list($post->ID, 'treatmentcategory', '', ', ');

                                if (!empty($category)) {

                                    $explode = explode(",", $category);

                                    if (!empty($explode[0])) {

                                        echo $explode[0];
                                    }

                                    $terms = wp_get_post_terms($post->ID, array('treatmentcategory'));

                                    $tr = ucwords($terms[0]->name);

                                ?>

                            </li>

                            <?php if ($tr === ucwords($post->post_title)) {
                                    } else { ?>

                                <li>/</li>

                                <li><?php echo $post->post_title; ?> </li>

                            <?php       }
                                } else { ?>

                            <li><?php echo $post->post_title; ?> </li>

                        <?php   } ?>

                    <?php   } elseif (is_singular('galleries')) { ?>

                        <li> <a href="<?php echo site_url('/'); ?>"> Home </a> </li>

                        <li>/</li>

                        <li> <a href="<?php echo get_permalink(34); ?>"> Smile Gallery </a> </li>

                        <li>/</li>

                        <li>

                            <?php $category = get_the_term_list($post->ID, 'gallerycategory', '', ', ');

                            if (!empty($category)) {

                                $explode = explode(",", $category);

                                if (!empty($explode)) {

                                    echo $explode[0];
                                }
                            ?>

                        </li>

                        <li>/</li>

                        <li> <?php the_title(); ?> </li>

                    <?php   } else { ?>

                        <li> <?php the_title(); ?> </li>

                    <?php   } ?>

                <?php   } elseif (is_singular('team')) { ?>

                    <li> <a href="<?php echo site_url('/'); ?>">Home</a> </li>

                    <li>/</li>

                    <li> <a href="<?php echo get_permalink(30); ?>"> Meet the Team </a> </li>

                    <li>/</li>

                    <li>

                        <?php $category = get_the_term_list($post->ID, 'teamcategory', '', ', ');

                            if (!empty($category)) {

                                $explode = explode(",", $category);

                                if (!empty($explode)) {

                                    echo $explode[0];
                                }
                        ?>

                    </li>

                    <li>/</li>

                    <li> <?php the_title(); ?> </li>

                <?php   } else { ?>

                    <li> <?php the_title(); ?> </li>

                <?php   } ?>

            <?php   } elseif (is_single()) {  ?>

                <li><a href="<?php echo site_url('/'); ?>"> Home </a></li>

                <li>/</li>

                <li> <a href="<?php echo get_permalink(41); ?>">Blog</a></li>

                <li>/</li>

                <li>

                    <?php $category = get_the_term_list($post->ID, 'category', '', ', ');

                            $explode = explode(",", $category);

                            if (!empty($explode)) {

                                echo $explode[0];
                            }

                    ?>

                </li>

                <li>/</li>

                <li><?php the_title(); ?> </li>

            <?php   } else { ?>

                <li><a href="<?php echo site_url('/'); ?>"> Home </a></li>

                <li>/</li>

                <li><?php the_title(); ?> </li>

            <?php   } ?>

                    </ul>
                </div>
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
    <?php } ?>