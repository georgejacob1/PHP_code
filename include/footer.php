<footer class="footer-wrapp">
    <div class="margin">

        <div class="footer-col1">
            <ul class="footer-row1">
                <li>Copyright © <?php echo date('Y'); ?> Ashbourne Road Dental</li>
                <li>|</li>
                <li>Site last updated:<?php
                    $today = current_time('mysql', 1);
                    $count = 1;
                    if ($recentposts = $wpdb->get_results("SELECT ID,post_modified FROM $wpdb->posts WHERE post_status = 'publish' AND post_modified_gmt < '$today' ORDER BY post_modified_gmt DESC LIMIT $count")) :
                        foreach ($recentposts as $post) {
                            echo mysql2date("j F Y", $post->post_modified);
                        }
                    endif; ?></li>
                <li>|</li>
                <li>Made by <a href="https://digimax.dental" target="_blank">Digimax Dental Marketing</a>.</li>
            </ul>
            <ul class="footer-row1">
                <li style="font-size: 11px">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank" style="font-size: 11px">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" style="font-size: 11px">Terms of Service</a> apply.</li>
            </ul>
        </div>
        <div class="footer-col2">
            <?php wp_nav_menu(array('menu' => 'Footer Menu', 'container' => '', 'menu_class' => 'footer-row2', 'fallback_cb' => false)); ?>

        </div>

    </div>
</footer>