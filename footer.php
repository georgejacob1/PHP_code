<?php if (!is_singular('treatment')) { ?>
  <?php include_once('include/dentistry-wrapp.php'); ?>
<?php } ?>
<?php if (!is_front_page() && !is_page('43') && !is_singular('treatment')) { ?>
  <?php include_once('include/contact-wrapp.php'); ?>
<?php } ?>
<?php if (!is_front_page() && !is_page('38') && !is_page('28') && !is_singular('treatment')) { ?>
  <section class="reviews-wrapp reviews-wrapp2">
    <?php include_once('include/reviews-wrapp.php'); ?>
  </section>
<?php } ?>

<?php include_once('include/instagram-wrapp.php'); ?>

<?php include_once('include/partners-wrapp.php'); ?>

<?php include_once('include/flinker.php'); ?>

<?php include_once('include/footer.php'); ?>

<div class="mob-widget">
  <?php
  echo do_shortcode('[google-reviews-pro place_photo=https://maps.gstatic.com/mapfiles/place_api/icons/v1/png_71/generic_business-71.png place_name="Ashbourne Road Dental" place_id=ChIJ6Zi4ETfxeUgRpdyAbu7jos4 auto_load=true rating_snippet=true sort=1 min_filter=4 hide_photo=true write_review=true view_mode=badge_left open_link=true nofollow_link=true]');
  ?>
</div>

<div class="google-rating ggogledesktop">
  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/G-icon.svg">

  <div id="googlerating"></div>
</div>

<script>
  jQuery.ajax({
    url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
    data: 'action=googlereviewprocess&gval=' + googleratingvalue,
    async: true,
    success: function(data) {
      jQuery('#googlerating').html(data);
    }
  });

  const parentElements = document.querySelectorAll('.addresslink'); // Select all parent <ul> elements with the class

  // Iterate through each parent <ul> element
  parentElements.forEach(parentElement => {
    const liElements = parentElement.getElementsByTagName('li');

    // Iterate through each <li> element and add the external link
    for (let i = 0; i < liElements.length; i++) {
      const li = liElements[i];
      const link = document.createElement('a'); // Create an <a> element

      // Replace 'https://example.com' with the desired external link
      link.href = "<?php echo get_field('address_link_', 'options'); ?>";

      // Set the target attribute to '_blank' to open the link in a new tab
      link.target = "_blank";

      link.textContent = li.textContent; // Set the link text to the content of the <li> element
      li.textContent = ''; // Clear the content of the <li> element
      li.appendChild(link); // Append the <a> link as a child to the <li> element
    }
  });
</script>

<?php wp_footer(); ?>

</body>

</html>