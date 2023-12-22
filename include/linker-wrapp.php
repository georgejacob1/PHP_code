<section class="linker-wrapp">
    <div class="scroll float-panel" data-scroll="0" data-top="0">
        <div class="margin">

            <div class="linker-col1">
                <?php if (!empty(get_field('logo', 'options'))) {

                    $logo = get_field('logo', 'options')['url'];

                    $alt = get_field('logo', 'options')['alt'];

                    if (empty($alt)) {

                        $alt = "Ashbourneroad Dental Logo";
                    }

                    $title4 = get_field('logo', 'options')['title'];

                    if (empty($title4)) {

                        $title4 = "Ashbourneroad Dental Logo";
                    }

                ?>
                    <a href="<?php echo site_url('/'); ?>" class="linker-row1">
                        <img loading="lazy" src="<?php echo $logo; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title4 ?>" />
                    </a>
                <?php } ?>
            </div>
            <div class="linker-mob1">
                <?php if (!empty(get_field('instagram', 'options'))) { ?>
                    <a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank" class="circle-effects1">
                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-circle-icon.svg" alt="instagram" />
                        <span class="circle-row1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/instagram-white-transparent-circle-icon.svg" alt="instagram" />
                        </span>
                    </a>
                <?php } ?>
                <?php if (!empty(get_field('facebook', 'options'))) { ?>
                    <a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank" class="circle-effects1">
                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-circle-icon.svg" alt="facebook" />
                        <span class="circle-row1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/facebook-white-transparent-circle-icon.svg" alt="facebook" />
                        </span>
                    </a>
                <?php } ?>
                <?php if (!empty(get_field('whatsapp', 'options'))) {

                    $wh = get_field('whatsapp', 'options');

                    $wh = preg_replace('/\s/', '', $wh); ?>
                    <a href="https://wa.me/<?php echo $wh; ?>" target="_blank" class="circle-effects1">
                        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-circle-icon.svg" alt="whatsapp" />
                        <span class="circle-row1">
                            <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/socials-icon/whatsapp-white-transparent-circle-icon.svg" alt="whatsapp" />
                        </span>
                    </a>
                <?php } ?>
            </div>
            <?php if (!empty(get_field('address_link_', 'options'))) {
                if (!empty(get_field('address', 'options'))) { ?>

                    <ul class="linker-mob2 addresslink">
                        <?php echo get_field('address', 'options'); ?>
                    </ul>

                <?php }
            } else { ?>
                <?php if (!empty(get_field('address', 'options'))) { ?>
                    <ul class="linker-mob2"><?php echo get_field('address', 'options'); ?></ul>
            <?php }
            } ?>

            <div class="linker-col3 mob">
                <div class="linker-row3">
                    <?php if (!empty(get_field('phone', 'options'))) {
                        $ph1 = get_field('phone', 'options'); ?>
                        <a href="tel:<?php echo preg_replace('/\s/', '', $ph1); ?>" class="linker-btn1 mob-show1"><?php echo get_field('phone', 'options'); ?></a>
                    <?php } ?>
                    <?php if (!empty(get_field('book_online_link', 'options'))) { ?>


                        <?php if(!empty(get_field('book_online_link_type', 'options') =="External")){ ?>


                            <a href="<?php echo  get_field('book_online_link', 'options'); ?>" target="_blank" class="linker-btn2 mob-show1">BOOK ONLINE</a>


                        <?php }else{ ?>

                            <a href="<?php echo site_url("/") . get_field('book_online_link', 'options'); ?>" class="linker-btn2 mob-show1">BOOK ONLINE</a>

                    <?php } ?>

                    <?php }
                    ?>
                    <?php if (!empty(get_field('contact_us', 'options'))) { ?>
                        <a href="<?php echo site_url("/") . get_field('contact_us', 'options'); ?>" class="linker-btn2 mob-show1">CONTACT US</a>
                    <?php } ?>

                </div>
            </div>

            <div class="linker-col2">
                <div class="linker-row2 custom-select1">
                    <select name="redirectURL1" class="banner-fild1">
                        <option value="dental-treatments" selected="">Dental Treatments</option>
                        <?php $links = get_field('treatments', 'options');
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
                <div class="mob-show1 custom-select1">
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
            <div class="linker-col3 desk">
                <div class="linker-row3">
                    <?php if (!empty(get_field('phone', 'options'))) {
                        $ph1 = get_field('phone', 'options'); ?>
                        <a href="tel:<?php echo preg_replace('/\s/', '', $ph1); ?>" class="linker-btn1"><?php echo get_field('phone', 'options'); ?></a>
                    <?php } ?>
                    <?php if (!empty(get_field('book_online_link_type', 'options')) == "External") { ?>

                        <a href="<?php echo get_field('book_online_link', 'options'); ?>" target="_blank" class="linker-btn2 mob-show1">BOOK ONLINE</a>

                    <?php } else { ?>

                        <a href="<?php echo site_url("/") . get_field('book_online_link', 'options'); ?>" class="linker-btn2 mob-show1">BOOK ONLINE</a>

                    <?php }
                    ?>
                    <?php if (!empty(get_field('contact_us', 'options'))) { ?>
                        <a href="<?php echo site_url("/") . get_field('contact_us', 'options'); ?>" class="linker-btn2">CONTACT US</a>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section>