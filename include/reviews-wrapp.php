<?php

if (!empty(get_field('testimonials', 38))) {
   
    $testimonial = get_field('testimonials', 38);

    $count_slide = count($testimonial) ;
   
   
    ?>

    <div class="margin">

        <div class="reviews-col1 desk">
            <?php if ($count_slide > 2) {
                $sliderdeskteam = "slider fade";
            } else {
                $sliderdeskteam = "non-slider";
            } ?>

            <div class="<?php echo $sliderdeskteam;  ?>">

                <?php $i = 0;

                foreach ($testimonial  as $testi) {

                    if (!empty($testi['description'])) {

                        if ($i < 5) { ?>

                            <?php if ($count_slide > 2) { ?>
                                <div>
                                <?php } ?>
                              
                                <div class="reviews-col2">

                                    <div class="reviews-row1">

                                        <span><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/star-sea-kelp-plain-icon.svg" alt="star" /></span>
                                    </div>

                                    <div class="reviews-row2">

                                        <p>“<?php echo strip_shortcodes(wp_trim_words($testi['description'], 20, '...')); ?>”</p>
                                        <?php

                                        if (!empty($testi['author'])) { ?>
                                            <h2><?php echo $testi['author']; ?></h2>

                                        <?php   } ?>

                                        <a href="<?php echo get_permalink(38); ?>" class="reviews-btn1">READ MORE</a>

                                    </div>

                                </div>
                                
                                <?php if ($count_slide > 2) { ?>
                                </div>
                            <?php } ?>
                <?php }
                    }

                    $i++; 
                } ?>

            </div>
        </div>


        <div class="reviews-col1 mob">
            <?php if ($count_slide > 1) {
                $sliderdeskteam = "slider fade";
            } else {
                $sliderdeskteam = "non-slider";
            } ?>

            <div class="<?php echo $sliderdeskteam;  ?>">

                <?php $i = 0;

                foreach ($testimonial  as $testi) {

                    if (!empty($testi['description'])) {

                        if ($i < 5) { ?>

                            <?php if ($count_slide > 1) { ?>
                                <div>
                                <?php } ?>
                               
                                <div class="reviews-col2">

                                    <div class="reviews-row1">

                                        <span><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/star-sea-kelp-plain-icon.svg" alt="star" /></span>
                                    </div>

                                    <div class="reviews-row2">

                                        <p>“<?php echo strip_shortcodes(wp_trim_words($testi['description'], 20, '...')); ?>”</p>
                                        <?php

                                        if (!empty($testi['author'])) { ?>
                                            <h2><?php echo $testi['author']; ?></h2>

                                        <?php   } ?>

                                        <a href="<?php echo get_permalink(38); ?>" class="reviews-btn1">READ MORE</a>

                                    </div>

                                </div>
                                
                                <?php if ($count_slide > 1) { ?>
                                </div>
                            <?php } ?>
                <?php }
                    }

                    $i++;
                } ?>

            </div>
        </div>



    </div>
<?php } ?>