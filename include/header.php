<header class="header-wrapp">
    <div class="margin">

        <div class="header-col1">

            <?php if (!empty(get_field('address_link_', 'options'))) {

                if (!empty(get_field('address', 'options'))) { ?>


                    <ul class="header-row1 addresslink">

                        <?php echo get_field('address', 'options'); ?>

                    </ul>



                <?php }
            } else { ?>
                <?php if (!empty(get_field('address', 'options'))) { ?>
                    <ul class="header-row1"><?php echo get_field('address', 'options'); ?></ul>
            <?php }
            } ?>

        </div>
        <div class="header-ret1">
            <div class="header-col2">

                <div class="header-row2">
                    <p>Follow us on</p>
                    <?php if (!empty(get_field('instagram', 'options'))) { ?>
                        <a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank" class="circle-effects1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-sea-kelp-circle-icon.svg" alt="instagram">
                            <span class="circle-row1">
                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-sea-kelp-transparent-circle-icon.svg" alt="instagram">
                            </span>
                        </a>
                    <?php } ?>
                    <?php if (!empty(get_field('facebook', 'options'))) { ?>
                        <a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank" class="circle-effects1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-sea-kelp-circle-icon.svg" alt="facebook">
                            <span class="circle-row1">
                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-sea-kelp-transparent-circle-icon.svg" alt="facebook" />
                            </span>
                        </a>
                    <?php } ?>
                    <?php if (!empty(get_field('whatsapp', 'options'))) {

                        $wh = get_field('whatsapp', 'options');

                        $wh = preg_replace('/\s/', '', $wh); ?>
                        <a href="https://wa.me/<?php echo $wh; ?>" target="_blank" class="circle-effects1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-sea-kelp-circle-icon.svg" alt="whatsapp">
                            <span class="circle-row1">
                                <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-sea-kelp-transparent-circle-icon.svg" alt="whatsapp">
                            </span>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="header-col3">
                <div class="header-row3">

                    <?php if (get_field('book_online_link', 'options')) { ?>

                        <?php if (get_field('book_online_link_type', 'options') == "External") { ?>

                            <a href="<?php echo get_field('book_online_link', 'options'); ?>" target="_blank" class="header-btn1">BOOK ONLINE</a>

                        <?php } else { ?>

                            <a href="<?php echo site_url("/") . get_field('book_online_link', 'options'); ?>" class="header-btn1">BOOK ONLINE</a>

                    <?php }
                    }
                    ?>
                </div>

            </div>
        </div>

    </div>
</header>