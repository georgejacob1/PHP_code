<?php

/**
 * * Template Name: Practice Gallery Page
 *
 */

get_header();


$items = get_field('content_repeater',210);

if (empty(get_field('content_repeater',210))) {

?>
    <section class="conten-wrapp practice-wrapp">
        <div class="margin">

            <div class="practice-col1">

                <?php

               

                    foreach ($items as $item) {

                        $gal_img = $item['gallery_image']['url'];

                        $alt = $item['gallery_image']['alt'];

                        if (empty($alt)) {

                            $alt = "Practice Gallery Image";
                        }


                        $title = $item['gallery_image']['title'];


                        if (empty($title)) {

                            $title = "Practice Gallery Image";
                        }

                        if (!empty($gal_img)) {

                            if ($item['horizontal_vertical'] == "horizontal") {

                                $gal_img_thumb = aq_resize($gal_img, 800, 600, true, true, true);
                            } else {

                                $gal_img_thumb = aq_resize($gal_img, 600, 800, true, true, true);
                            }
                ?>

                            <div class="practice-row1 square-effect1">
                                <a class="practice-bar1 thumbnail gallery" href="<?php echo $gal_img; ?>">
                                    <img src="<?php echo $gal_img_thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                                </a>
                            </div>
                <?php }
                    }
                 ?>

            </div>
        </div>
    </section>
<?php } ?>

<?php include_once('include/dentistry-wrapp.php'); ?>

<?php include_once('include/contact-wrapp.php'); ?>

<section class="reviews-wrapp reviews-wrapp2">
    <?php include_once('include/reviews-wrapp.php'); ?>
</section>



<?php


get_footer();

?>