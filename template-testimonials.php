<?php

/**

 * * Template Name: Testimonials Page

 * */

get_header();

?>

<section class="conten-wrapp testi-wrapp">
    <?php if (!empty(get_field('videos', $post->ID))) {

        $count = count(get_field('videos', $post->ID)); ?>
        <div class="testi-row1">
            <div class="margin">


                <div class="testi-row11 desk">
                    <?php if ($count > 1) {
                        $sliderdeskteam = "mona-all-model-slide owl-carousel";
                    } else {
                        $sliderdeskteam = "non-slider";
                    } ?>

                    <div class="<?php echo $sliderdeskteam;  ?>">

                        <?php foreach (get_field('videos', $post->ID)  as $vid) {

                            if (!empty($vid['review_video'])) {

                                if ($vid['review_video_type'] == "vimeo") {

                                    if (!empty($vid['review_preview_image']['url'])) {

                                        $v_thumb = $vid['review_preview_image']['url'];
                                    } else {

                                        $v_thumb = TEMPLATE_URL . 'images\testimonial-video-no-img';
                                    }
                                } else {

                                    $t_v_link = 'https://www.youtube.com/watch?v=' . $vid['review_video'];

                                    $v_thumbyou = 'https://i.ytimg.com/vi_webp/' . $vid['review_video'] . '/maxresdefault.webp';

                                    if (!empty($vid['review_preview_image']['url'])) {

                                        $v_thumb = $vid['review_preview_image']['url'];

                                        $v_thumb_alt = $vid['review_preview_image']['alt'];

                                        $v_thumb_title = $vid['review_preview_image']['title'];
                                    } else {

                                        $v_thumb = $v_thumbyou;

                                        $v_thumb_alt = 'testimonials video1';

                                        $v_thumb_title = 'testimonials video1';
                                    }
                                } ?>
                                <?php if ($count > 1) { ?>
                                    <div>
                                    <?php } ?>

                                    <div class="testi-col1">
                                        <?php if ($vid['review_video_type'] == 'youtube') {  ?>
                                            <img loading="lazy" src="<?php echo $v_thumb; ?>" alt="<?php echo $v_thumb_alt; ?>" title="<?php echo $v_thumb_title; ?>" />
                                            <a class="videobox" data-flashy-type="video" href="https://youtu.be/<?php echo $vid['review_video']; ?>" data-channel="youtube">
                                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/video-play-button.svg" alt="video play button">
                                            </a>
                                        <?php } else { ?>
                                            <a class="videobox" data-flashy-type="video" href="https://player.vimeo.com/video/<?php echo $vid['review_video']; ?>" data-channel="vimeo">

                                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/video-play-button.svg" alt="video play button">

                                            </a>
                                        <?php } ?>

                                    </div>
                                    <?php if ($count > 1) { ?>
                                    </div>
                        <?php }
                                }
                            } ?>
                        <!--  -->


                    </div>
                </div>


                <div class="testi-row11 mob">
                    <?php if ($count > 1) {
                        $sliderdeskteam = "mona-all-model-slide owl-carousel";
                    } else {
                        $sliderdeskteam = "non-slider";
                    } ?>

                    <div class="<?php echo $sliderdeskteam;  ?>">

                        <?php foreach (get_field('videos', $post->ID)  as $vid) {

                            if (!empty($vid['review_video'])) {

                                if ($vid['review_video_type'] == "vimeo") {

                                    if (!empty($vid['review_preview_image']['url'])) {

                                        $v_thumb = $vid['review_preview_image']['url'];
                                    } else {

                                        $v_thumb = TEMPLATE_URL . 'images\testimonial-video-no-img';
                                    }
                                } else {

                                    $t_v_link = 'https://www.youtube.com/watch?v=' . $vid['review_video'];

                                    $v_thumbyou = 'https://i.ytimg.com/vi_webp/' . $vid['review_video'] . '/maxresdefault.webp';

                                    if (!empty($vid['review_preview_image']['url'])) {

                                        $v_thumb = $vid['review_preview_image']['url'];

                                        $v_thumb_alt = $vid['review_preview_image']['alt'];

                                        $v_thumb_title = $vid['review_preview_image']['title'];
                                    } else {

                                        $v_thumb = $v_thumbyou;

                                        $v_thumb_alt = 'testimonials video1';

                                        $v_thumb_title = 'testimonials video1';
                                    }
                                } ?>
                                <?php if ($count > 1) { ?>
                                    <div>
                                    <?php } ?>

                                    <div class="testi-col1">
                                        <?php if ($vid['review_video_type'] == 'youtube') {  ?>
                                            <img loading="lazy" src="<?php echo $v_thumb; ?>" alt="<?php echo $v_thumb_alt; ?>" title="<?php echo $v_thumb_title; ?>" />
                                            <a class="videobox1" data-flashy-type="video" href="https://youtu.be/<?php echo $vid['review_video']; ?>" data-channel="youtube">
                                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/video-play-button.svg" alt="video play button">
                                            </a>
                                        <?php } else { ?>
                                            <a class="videobox1" data-flashy-type="video" href="https://player.vimeo.com/video/<?php echo $vid['review_video']; ?>" data-channel="vimeo">

                                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/video-play-button.svg" alt="video play button">

                                            </a>
                                        <?php } ?>

                                    </div>
                                    <?php if ($count > 1) { ?>
                                    </div>
                        <?php }
                                }
                            } ?>
                        <!--  -->


                    </div>
                </div>












            </div>

        </div>
    <?php } ?>

    <?php

    if (!empty(get_field('testimonials', $post->ID))) {

        $testimonial = get_field('testimonials', $post->ID);

    ?>
        <div class="testi-row2">
            <div class="margin">
                <div class="testi-row3">
                    <!--  -->

                    <?php $count_testi = 0;

                    foreach ($testimonial  as $testimonials) { ?>

                        <div class="testimonials-col3 showme_test_<?php echo $count_testi; ?>" <?php if ($count_testi >= 6) { ?> style="display:none;" <?php } ?>>

                            <div class="testi-star">
                                <span><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/star-sea-kelp-plain-icon.svg" alt="star" /></span>
                            </div>

                            <?php

                            $datafeed = 130;

                            $stat     =  strip_tags($testimonials['description']);

                            $strlen =  strlen($stat);

                            //$stat_array = explode(' ',$stat);

                            if ($strlen > $datafeed) {
                                echo '<p>“<span id="shown_' . $count_testi . '" >' . substr($stat, 0, $datafeed) . '<span class="dots-test" id="dots_' . $count_testi . '">...”</span></span>';
                            } else {
                                echo '<p>“<span id="shown_' . $count_testi . '" >' . $stat . '<span class="dots-test" id="dots_' . $count_testi . '"></span></span>”</p>';
                            }
                            if ($strlen > $datafeed) {  ?><span id="hidden_<?php echo $count_testi; ?>" style="display:none;"><?php echo substr($stat, $datafeed, $strlen); ?>”</span></p>
                            <?php   }

                            if ($strlen > $datafeed) { ?>
                                <div class="readmorehidden_<?php echo $count_testi; ?>">
                                    <a class="readmorehidden testi-btn1 test-read-btn  review-btn1 btn-gradient-mask1" data-id="<?php echo $count_testi; ?>">Read More</a>
                                </div>

                            <?php   } ?>

                            <?php if ($strlen > $datafeed) {  ?>

                                <div id="readlesshiddenfull_<?php echo $count_testi; ?>" style="display:none;"></div>

                            <?php } ?>

                            <?php if (!empty($testimonials['author'])) { ?>

                                <h3><?php echo $testimonials['author']; ?></h3>

                            <?php } ?>

                        </div>
                    <?php $count_testi++;
                    } ?>
                    <!--  -->
                </div>
                <?php if ($count_testi >= 6) { ?>
                    <div class="testi-row5">
                        <a class="testi-btn1 loadmoretestimonialmaonpage" onclick="LoadMoretestimonials('<?php echo $count_testi; ?>')">Load more</a>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php } ?>



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
