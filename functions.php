<?php
function customtheme_setup()
{

  load_theme_textdomain('customtheme');

  add_theme_support('automatic-feed-links');

  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');

  add_image_size('customtheme-featured-image', 2000, 1200, true);

  add_image_size('customtheme-thumbnail-avatar', 100, 100, true);

  $GLOBALS['content_width'] = 525;

  register_nav_menus(array(
    'top'    => __('Top Menu', 'customtheme'),
    'social' => __('Social Links Menu', 'customtheme'),
  ));

  /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ));

  // Add theme support for Custom Logo.
  add_theme_support('custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
  ));

  // Add theme support for selective refresh for widgets.
  add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'customtheme_setup');

function customtheme_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Sidebar', 'customtheme'),
    'id'            => 'sidebar-1',
    'description'   => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'customtheme'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'customtheme_widgets_init');

function customtheme_excerpt_more($link)
{
  if (is_admin()) {
    return $link;
  }
  return $link;
}
add_filter('excerpt_more', 'customtheme_excerpt_more');


// Hook in very late, let the theme fix it first.
add_filter('wp_title', 't5_fill_static_front_page_title', 100);

/**
 * Fill empty front page title if a static page is set.
 *
 * @wp-hook wp_title
 * @param   string $title Existing title
 * @return  string
 */
function t5_fill_static_front_page_title($title)
{
  // another filter may have fixed this already.
  if ('' !== $title or !is_page() or !is_front_page()) {
    return $title;
  }

  $page_id = get_option('page_on_front');
  $page    = get_page($page_id);

  if (!$page or '' === $page->post_title) {
    $title = get_option('blogname');
  } else {
    $title = $page->post_title;
  }

  // We don’t know if there is any output after the title, so we cannot just
  // add the separator. We use an empty space instead.
  return "$title ";
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}


function website_assets_js_css()
{
  $cssVersion = 1000000003;
  $jsVersion  = 1000000003;
  wp_enqueue_style('dashicons');
  wp_enqueue_style('stylesheet-style', get_template_directory_uri() . '/css/stylesheet.css', array(), $cssVersion);
  wp_enqueue_style('menuzord-style', get_template_directory_uri() . '/css/menuzord.css', array(), $cssVersion);
  wp_enqueue_style('cssmenu-style', get_template_directory_uri() . '/css/cssmenu.css', array(), $cssVersion);
  wp_enqueue_style('overlay-style', get_template_directory_uri() . '/css/overlay.css', array(), $cssVersion);
  wp_enqueue_style('dropdown-style', get_template_directory_uri() . '/css/dropdown.css', array(), $cssVersion);
  wp_enqueue_style('sticky-style', get_template_directory_uri() . '/css/sticky.css', array(), $cssVersion);
  wp_enqueue_style('flashy-min-style', get_template_directory_uri() . '/css/flashy-min.css', array(), $cssVersion);
  wp_enqueue_style('video-min-style', get_template_directory_uri() . '/css/video-min.css', array(), $cssVersion);
  wp_enqueue_style('slicks-style', get_template_directory_uri() . '/css/slicks.css', array(), $cssVersion);
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/css/slick-theme.css', array(), $cssVersion);
  wp_enqueue_style('slider-style', get_template_directory_uri() . '/css/slider.css', array(), $cssVersion);
  wp_enqueue_style('carousel-style', get_template_directory_uri() . '/css/carousel.css', array(), $cssVersion);
  wp_enqueue_style('scrollbox.min-style', get_template_directory_uri() . '/css/scrollbox.min.css', array(), $cssVersion);
  wp_enqueue_style('jarallax-video-style', get_template_directory_uri() . '/css/jarallax-video.css', array(), $cssVersion);
  wp_enqueue_style('invisalign-page-style', get_template_directory_uri() . '/css/invisalign-page.css', array(), $cssVersion);
  wp_enqueue_style('flexslider-style', get_template_directory_uri() . '/css/flexslider.css', array(), $cssVersion);
  wp_enqueue_style('accordion-style', get_template_directory_uri() . '/css/accordion.css', array(), $cssVersion);
  wp_enqueue_style('lightbox-min-style', get_template_directory_uri() . '/css/lightbox-min.css', array(), $cssVersion);
  wp_enqueue_style('invisalign-tab-style', get_template_directory_uri() . '/css/invisalign-tab.css', array(), $cssVersion);
  wp_enqueue_style('hovers-style', get_template_directory_uri() . '/css/hovers.css', array(), $cssVersion);
  wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.css', array(), $cssVersion);

  wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.js', array(), $jsVersion, false);
  wp_enqueue_script('menuzord-js', get_template_directory_uri() . '/js/menuzord.js', array(), $jsVersion, true);
  wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/js/dropdown.js', array(), $jsVersion, true);
  wp_enqueue_script('sticky-js', get_template_directory_uri() . '/js/sticky.js', array(), $jsVersion, true);
  wp_enqueue_script('slider-js', get_template_directory_uri() . '/js/slider.js', array(), $jsVersion, true);
  wp_enqueue_script('jquery.mousewheel.min-js', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), $jsVersion, true);
  wp_enqueue_script('scrollbox.min-js', get_template_directory_uri() . '/js/scrollbox.min.js', array(), $jsVersion, true);
  wp_enqueue_script('jarallax-video-js', get_template_directory_uri() . '/js/jarallax-video.js', array(), $jsVersion, true);
  wp_enqueue_script('flashy-min-js', get_template_directory_uri() . '/js/flashy-min.js', array(), $jsVersion, true);
  wp_enqueue_script('video-min-js', get_template_directory_uri() . '/js/video-min.js', array(), $jsVersion, true);
  wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/flexslider.js', array(), $jsVersion, true);
  wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/js/lightbox.js', array(), $jsVersion, true);
  wp_enqueue_script('lightbox-min-js', get_template_directory_uri() . '/js/lightbox-min.js', array(), $jsVersion, true);
  wp_enqueue_script('active-js', get_template_directory_uri() . '/js/active.js', array(), $jsVersion, true);
  wp_enqueue_script('footer-scripts-js', get_template_directory_uri() . '/js/footer-scripts.js', array(), $jsVersion, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'website_assets_js_css');


function insert_jquery_in_header()
{
  wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts', 'insert_jquery_in_header', 1);

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//image management


/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.2
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string  $url      - (required) must be uploaded using wp media uploader
 * @param int     $width    - (required)
 * @param int     $height   - (optional)
 * @param bool    $crop     - (optional) default to soft crop
 * @param bool    $single   - (optional) returns an array if false
 * @param bool    $upscale  - (optional) resizes smaller images
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 * @return str|array
 */
if (!class_exists('Aq_Resize')) {
  class Aq_Exception extends Exception
  {
  }

  class Aq_Resize
  {
    /**
     * The singleton instance
     */
    static private $instance = null;

    /**
     * Should an Aq_Exception be thrown on error?
     * If false (default), then the error will just be logged.
     */
    public $throwOnError = false;

    /**
     * No initialization allowed
     */
    private function __construct()
    {
    }

    /**
     * No cloning allowed
     */
    private function __clone()
    {
    }

    /**
     * For your custom default usage you may want to initialize an Aq_Resize object by yourself and then have own defaults
     */
    static public function getInstance()
    {
      if (self::$instance == null) {
        self::$instance = new self;
      }

      return self::$instance;
    }

    /**
     * Run, forest.
     */
    public function process($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
    {
      try {
        // Validate inputs.
        if (!$url)
          throw new Aq_Exception('$url parameter is required');
        if (!$width)
          throw new Aq_Exception('$width parameter is required');

        // Caipt'n, ready to hook.
        if (true === $upscale) add_filter('image_resize_dimensions', array($this, 'aq_upscale'), 10, 6);

        // Define upload path & dir.
        $upload_info = wp_upload_dir();
        $upload_dir = $upload_info['basedir'];
        $upload_url = $upload_info['baseurl'];

        $http_prefix = "http://";
        $https_prefix = "https://";
        $relative_prefix = "//"; // The protocol-relative URL

        /* if the $url scheme differs from $upload_url scheme, make them match 
                       if the schemes differe, images don't show up. */
        if (!strncmp($url, $https_prefix, strlen($https_prefix))) { //if url begins with https:// make $upload_url begin with https:// as well
          $upload_url = str_replace($http_prefix, $https_prefix, $upload_url);
        } elseif (!strncmp($url, $http_prefix, strlen($http_prefix))) { //if url begins with http:// make $upload_url begin with http:// as well
          $upload_url = str_replace($https_prefix, $http_prefix, $upload_url);
        } elseif (!strncmp($url, $relative_prefix, strlen($relative_prefix))) { //if url begins with // make $upload_url begin with // as well
          $upload_url = str_replace(array(0 => "$http_prefix", 1 => "$https_prefix"), $relative_prefix, $upload_url);
        }


        // Check if $img_url is local.
        if (false === strpos($url, $upload_url))
          throw new Aq_Exception('Image must be local: ' . $url);

        // Define path of image.
        $rel_path = str_replace($upload_url, '', $url);
        $img_path = $upload_dir . $rel_path;

        // Check if img path exists, and is an image indeed.
        if (!file_exists($img_path) or !getimagesize($img_path))
          throw new Aq_Exception('Image file does not exist (or is not an image): ' . $img_path);

        // Get image info.
        $info = pathinfo($img_path);
        $ext = $info['extension'];
        list($orig_w, $orig_h) = getimagesize($img_path);

        // Get image size after cropping.
        $dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
        $dst_w = $dims[4];
        $dst_h = $dims[5];

        // Return the original image only if it exactly fits the needed measures.
        if (!$dims || (((null === $height && $orig_w == $width) xor (null === $width && $orig_h == $height)) xor ($height == $orig_h && $width == $orig_w))) {
          $img_url = $url;
          $dst_w = $orig_w;
          $dst_h = $orig_h;
        } else {
          // Use this to check if cropped image already exists, so we can return that instead.
          $suffix = "{$dst_w}x{$dst_h}";
          $dst_rel_path = str_replace('.' . $ext, '', $rel_path);
          $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

          if (!$dims || (true == $crop && false == $upscale && ($dst_w < $width || $dst_h < $height))) {
            // Can't resize, so return false saying that the action to do could not be processed as planned.
            throw new Aq_Exception('Unable to resize image because image_resize_dimensions() failed');
          }
          // Else check if cache exists.
          elseif (file_exists($destfilename) && getimagesize($destfilename)) {
            $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
          }
          // Else, we resize the image and return the new resized image url.
          else {

            $editor = wp_get_image_editor($img_path);

            if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, $crop))) {
              throw new Aq_Exception('Unable to get WP_Image_Editor: ' .
                $editor->get_error_message() . ' (is GD or ImageMagick installed?)');
            }

            $resized_file = $editor->save();

            if (!is_wp_error($resized_file)) {
              $resized_rel_path = str_replace($upload_dir, '', $resized_file['path']);
              $img_url = $upload_url . $resized_rel_path;
            } else {
              throw new Aq_Exception('Unable to save resized image file: ' . $editor->get_error_message());
            }
          }
        }

        // Okay, leave the ship.
        if (true === $upscale) remove_filter('image_resize_dimensions', array($this, 'aq_upscale'));

        // Return the output.
        if ($single) {
          // str return.
          $image = $img_url;
        } else {
          // array return.
          $image = array(
            0 => $img_url,
            1 => $dst_w,
            2 => $dst_h
          );
        }

        return $image;
      } catch (Aq_Exception $ex) {
        error_log('Aq_Resize.process() error: ' . $ex->getMessage());

        if ($this->throwOnError) {
          // Bubble up exception.
          throw $ex;
        } else {
          // Return false, so that this patch is backwards-compatible.
          return false;
        }
      }
    }

    /**
     * Callback to overwrite WP computing of thumbnail measures
     */
    function aq_upscale($default, $orig_w, $orig_h, $dest_w, $dest_h, $crop)
    {
      if (!$crop) return null; // Let the wordpress default function handle this.

      // Here is the point we allow to use larger image size than the original one.
      $aspect_ratio = $orig_w / $orig_h;
      $new_w = $dest_w;
      $new_h = $dest_h;

      if (!$new_w) {
        $new_w = intval($new_h * $aspect_ratio);
      }

      if (!$new_h) {
        $new_h = intval($new_w / $aspect_ratio);
      }

      $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

      $crop_w = round($new_w / $size_ratio);
      $crop_h = round($new_h / $size_ratio);

      $s_x = floor(($orig_w - $crop_w) / 2);
      $s_y = floor(($orig_h - $crop_h) / 2);

      return array(0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h);
    }
  }
}
if (!function_exists('aq_resize')) {

  /**
   * This is just a tiny wrapper function for the class above so that there is no
   * need to change any code in your own WP themes. Usage is still the same :)
   */
  function aq_resize($url, $width = null, $height = null, $crop = null, $single = true, $upscale = false)
  {
    /* WPML Fix */
    if (defined('ICL_SITEPRESS_VERSION')) {
      global $sitepress;
      $url = $sitepress->convert_url($url, $sitepress->get_default_language());
    }
    /* WPML Fix */

    $aq_resize = Aq_Resize::getInstance();
    return $aq_resize->process($url, $width, $height, $crop, $single, $upscale);
  }
}

//image management ends 
function shortcode_YouTube($params = array())
{
  // default parameters
  extract(shortcode_atts(array(
    'video' => '',
  ), $params));
  if (empty($video)) {
    return '';
  }
  $html = '';
  $html .= '<div class="videoWrapper"><iframe loading="lazy" width="640" height="360" src="https://www.youtube-nocookie.com/embed/' . $video . '?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
  return $html;
}
add_shortcode('youtube', 'shortcode_YouTube');

function shortcode_Vimeo($params = array())
{
  // default parameters
  extract(shortcode_atts(array(
    'video' => '',
  ), $params));
  if (empty($video)) {
    return '';
  }
  $html = '';
  $html .= '<div class="videoWrapper"><iframe loading="lazy" width="640" height="360" src="https://player.vimeo.com/video/' . $video . '?rel=0&amp;showinfo=0&amp;dnt=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';
  return $html;
}
add_shortcode('vimeo', 'shortcode_Vimeo');


function pippin_add_taxonomy_filters_treatment()
{
  global $typenow;
  // an array of all the taxonomyies you want to display. Use the taxonomy name or slug

  // must set this to the post type you want the filter(s) displayed on
  if ($typenow == 'treatment') {
    $taxonomies = array('treatmentcategory');
    foreach ($taxonomies as $tax_slug) {
      $tax_obj = get_taxonomy($tax_slug);
      $tax_name = $tax_obj->labels->name;
      $terms = get_terms($tax_slug);
      if (count($terms) > 0) {
        echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
        echo "<option value=''>Show All $tax_name</option>";
        foreach ($terms as $term) {
          echo '<option value=' . $term->slug, isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
        }
        echo "</select>";
      }
    }
  }
}
add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters_treatment');

function pippin_add_taxonomy_filters_gallery()
{
  global $typenow;
  // an array of all the taxonomyies you want to display. Use the taxonomy name or slug

  // must set this to the post type you want the filter(s) displayed on
  if ($typenow == 'galleries') {
    $taxonomies = array('gallerycategory');
    foreach ($taxonomies as $tax_slug) {
      $tax_obj = get_taxonomy($tax_slug);
      $tax_name = $tax_obj->labels->name;
      $terms = get_terms($tax_slug);
      if (count($terms) > 0) {
        echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
        echo "<option value=''>Show All $tax_name</option>";
        foreach ($terms as $term) {
          echo '<option value=' . $term->slug, isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
        }
        echo "</select>";
      }
    }
  }
}
add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters_gallery');

function pippin_add_taxonomy_filters_team()
{
  global $typenow;
  // an array of all the taxonomyies you want to display. Use the taxonomy name or slug

  // must set this to the post type you want the filter(s) displayed on

  if ($typenow == 'team') {
    $taxonomies = array('teamcategory');
    foreach ($taxonomies as $tax_slug) {
      $tax_obj = get_taxonomy($tax_slug);
      $tax_name = $tax_obj->labels->name;
      $terms = get_terms($tax_slug);
      if (count($terms) > 0) {
        echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
        echo "<option value=''>Show All $tax_name</option>";
        foreach ($terms as $term) {
          echo '<option value=' . $term->slug, isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
        }
        echo "</select>";
      }
    }
  }
}
add_action('restrict_manage_posts', 'pippin_add_taxonomy_filters_team');



add_action('add_meta_boxes', 'change_meta_box_title_post');
function change_meta_box_title_post()
{
  remove_meta_box('postimagediv', 'post', 'side'); //replace post_type from your post type name
  add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 700 px  x 449 px '), 'post_thumbnail_meta_box', 'post', 'side', 'low');
}

add_action('add_meta_boxes', 'change_meta_box_title_team');
function change_meta_box_title_team()
{
  remove_meta_box('postimagediv', 'team', 'side'); //replace post_type from your post type name
  add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 650 px x 757 px '), 'post_thumbnail_meta_box', 'team', 'side', 'low');
}

add_action('add_meta_boxes', 'change_meta_box_title_treatment');
function change_meta_box_title_treatment()
{
  remove_meta_box('postimagediv', 'treatment', 'side'); //replace post_type from your post type name
  add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 697 px x 443 px '), 'post_thumbnail_meta_box', 'treatment', 'side', 'low');
}

/*add_action( 'add_meta_boxes', 'change_meta_box_title_professional' );

    function change_meta_box_title_professional() {
        remove_meta_box( 'postimagediv', 'professional', 'side' ); //replace post_type from your post type name
        add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 648 px  x 441 px '), 'post_thumbnail_meta_box', 'professional', 'side', 'low');
    }*/


/*add_action( 'add_meta_boxes', 'change_meta_box_title_galleries' );

    function change_meta_box_title_galleries() {
        remove_meta_box( 'postimagediv', 'galleries', 'side' ); //replace post_type from your post type name
        add_meta_box('postimagediv', __('Featured Image <br> Best Proportion: 864 px  x 864 px '), 'post_thumbnail_meta_box', 'galleries', 'side', 'low');
    }
*/


//Wp-admin Login

function my_login_logo_one()
{
?>
  <style type="text/css">
    body.login div#login h1 a {
      background-image: url(<?php echo get_field('logo', 'options')['url']; ?>);
      width: 220px !important;
      background-size: 210px !important;
      height: 200px !important;
    }

    body.login-action-login {
      background: #364b54 !important;
    }

    body.login-action-login #backtoblog a,
    body.login-action-login #nav a {
      color: #ffffff !important;
    }

    body.login-action-login.wp-core-ui .button-primary {
      background: #db3752 !important;
      box-shadow: none !important;
      border: 0px !important;
      text-shadow: none !important;
    }

    body.login-action-login form#loginform {
      border-radius: 8px;
    }

    .login h1 a {
      width: 180px !important;
      background-size: 170px !important;
      height: 95px !important;
    }

    form#loginform {
      background: #ffffff !important;
    }

    form#loginform p label {
      color: #000000 !important;
    }

    .user-pass-wrap {
      color: #000000 !important;
    }

    form#loginform input#wp-submit {
      background: #364b54 !important;
      color: #fff !important;
      font-weight: 600;
    }

    form#loginform #nav a,
    .login #backtoblog a {
      color: #000 !important;
    }

    .login h1 a {
      width: 180px !important;
      background-size: 180px !important;
      height: 120px !important;
      outline: none !important;
    }

    .login h1 a:focus {
      box-shadow: none !important;
    }

    .login #nav {
      color: #185abc;
    }

    .login #backtoblog {
      color: #185abc;
    }

    .login h1 a {
      width: 250px !important;
      background-size: 200px !important;
      height: 120px !important;
    }
  </style>

<?php
}
add_action('login_enqueue_scripts', 'my_login_logo_one');
function my_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');
function add_my_favicon()
{
  $favicon_path = get_template_directory_uri() . '/images/favicon1.ico';

  echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}
add_action('admin_head', 'add_my_favicon'); //admin end
add_action('wp_head', 'add_my_favicon'); //front end
add_action('login_head', 'add_my_favicon'); //front end



class CSS_Menu_Walker extends Walker
{
  var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');

  function start_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown\">\n";
  }

  function end_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {

    global $wp_query;
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $class_names = $value = '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    // if(in_array('current-menu-item', $classes)) {
    //   $classes[] = 'active';
    //   unset($classes['current-menu-item']);
    // }
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = '';
      // $link='<span class=\"caret\"></span>';
    }
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_name1 = esc_attr($class_names);
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';

    //$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $item_output = $args->before;
    if (!empty($children)) {
      $output .= $indent . '<li class="has-sub ' . $class_name1 . '">';
      $item_output .= '<a>';
      $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;
      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    } else {
      $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;
      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
  }
  function end_el(&$output, $item, $depth = 0, $args = array())
  {
    $output .= "</li>\n";
  }
}

add_action('wp_ajax_googlereviewprocess', 'googlereviewprocess');
add_action('wp_ajax_nopriv_googlereviewprocess', 'googlereviewprocess');
function googlereviewprocess()
{

  $slug = $_REQUEST['gval'];

?>
  <div class="fulltotal">

    <div class="g-level1">
      <h2>
        Google Rated
      </h2>
    </div>
    <div class="g-level2">
      <div class="gsub-level1">
        <?php echo $slug; ?>
      </div>

      <?php
      $exploded = explode(".", $slug);
      $starcount = $exploded[0];
      $n = 1;
      ?>
      <div class="gsub-level2">
        <?php while ($n <= $starcount) { ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star1.svg">
        <?php $n++;
        } ?>

        <?php
        $n;
        $starcount1 = $exploded[1];

        if ($starcount1 == 0 && $n == 6) {
        } else if ($starcount1 == 0 && $n == 5) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 == 0 && $n == 4) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 == 0 && $n == 3) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 == 0 && $n == 2) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 == 0 && $n == 1) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 > 0 && $n == 5) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-half.svg">
        <?php
        } else if ($starcount1 > 0 && $n == 4) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-half.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 > 0 && $n == 3) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-half.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 > 0 && $n == 2) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-half.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        } else if ($starcount1 > 0 && $n == 1) {
        ?>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-half.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/google-widget/star-none.svg">
        <?php
        }
        ?>
      </div>
    </div>
  </div>
<?php
  wp_die();
}
