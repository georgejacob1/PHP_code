<?php
/*
 * Template Name: Contact Page
 */
get_header();
?>

<section class="conten-wrapp contac-wrapp">
    <div class="margin">
        <div class="contac-col1">
            <?php if (!empty(get_field('contact_image', $post->ID))) {

                $contact_image = aq_resize(get_field('contact_image', $post->ID)['url'], 1035, 805, true, true, true);

                $alt = get_field('contact_image', $post->ID)['alt'];

                if (empty($alt)) {

                    $alt = "Contact Image";
                }

                $title = get_field('contact_image', $post->ID)['title'];

                if (empty($title)) {

                    $title = "Contact Image";
                }

            ?>
                <div class="contac-row1">

                    <img loading="lazy" src="<?php echo $contact_image; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />

                </div>
            <?php } ?>
            <div class="contac-row2">

                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>


                <?php if (!empty(get_field('phone', 'options'))) {

                    $ph1 = get_field('phone', 'options'); ?>

                    <h4><strong>T.</strong> <a href="tel:<?php echo preg_replace('/\s/', '', $ph1); ?>"><?php echo $ph1; ?></a></h4>

                <?php } ?>

                <?php if (!empty(get_field('email', 'options'))) { ?>

                    <h4><strong>E.</strong> <a href="mailto:<?php echo get_field('email', 'options'); ?>"><?php echo get_field('email', 'options'); ?></a></h4>

                <?php } ?>

                <?php if (!empty(get_field('address', $post->ID))) {

                    if (!empty(get_field('address_link_', 'options'))) {
                ?>


                        <h4>
                            <a href="<?php echo get_field('address_link_', 'options'); ?>" target="_blank">

                                <strong>A.</strong><?php echo get_field('address', $post->ID); ?>
                            </a>

                        </h4>



                <?php }
                } ?>



            </div>
        </div>

        <div class="opening-col1">
            <?php if (!empty(get_field('contact_title', $post->ID))) { ?>

                <?php echo get_field('contact_title', $post->ID); ?>

            <?php } ?>

            <ul class="opening-row1">
                <?php if (!empty(get_field('opening_hours', $post->ID))) { ?>

                    <?php echo get_field('opening_hours', $post->ID); ?>

                <?php } ?>
            </ul>
        </div>

    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>

<section class="map-wrapp">
    <iframe loading="lazy" src="<?php echo get_field('map', $post->ID); ?>" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-wrapp contact-wrapp2">
    <div class="margin">

        <h2>CONTACT</h2>
        <h3>GET IN TOUCH</h3>
        <div class="contact-col1">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>


        </div>

    </div>
</section>
<script>
    document.body.classList.add('contact-us');
</script>

<?php
get_footer();
