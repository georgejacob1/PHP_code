<?php

/**
 * * Template Name:Dental Referral Page
 *
 */

get_header();

?>
<section class="referrals-wrapp">
    <div class="margin">

        <div class="referrals-col1">

            <div class="referrals-row1">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>

        </div>
        <div class="referrals-col2">
            <?php if (!empty(get_field('referral_image', $post->ID))) {

                $referral = aq_resize(get_field('referral_image', $post->ID)['url'], 1180, 479, true, true, true);

                $alt = get_field('referral_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "ashbourneroad Image";
                }

                $title = get_field('referral_image', $post->ID)['title'];

                if (empty($title)) {

                    $title = "ashbourneroad Image";
                }

            ?>


                <div class="referrals-row2">
                    <img loading="lazy" src="<?php echo $referral; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                </div>
            <?php } ?>

        </div>
      
        <div class="referrals-col3">

        <?php echo do_shortcode('[ninja_form id=7]');?>

        </div>
    </div>
</section>
            <?php if(!empty(get_field('background_image',$post->ID))) { ?>
        
           <?php $imger=get_field('background_image',$post->ID)['url']; ?>
<section class="benefits-wrapp" style="background:url(<?php echo $imger; ?>)no-repeat center / cover;">
<?php if (!empty(get_field('benefits', $post->ID))) {?>
    <div class="margin">
  
    <?php echo get_field('benefits', $post->ID); ?>

    </div>
    <?php } ?>
</section>
<?php } ?>

<!--Datepicker-js-script-->
<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: "dd-mm-yy",
            duration: "fast"
        });
    });
</script>

<?php

get_footer(); ?>