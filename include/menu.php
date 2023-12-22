<nav class="menu">
    <div class="menu__brand">
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
        <div class="logo">
            
                <a href="<?php echo site_url('/'); ?>"><img loading="lazy" src="<?php echo $logo; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title4 ?>" /></a>
           
        </div>
        <?php } ?>
    </div>
    <div id="cssmenu" class="menu__list">

    <?php wp_nav_menu(array('menu' => 'Header Menu', 'container' => '', 'menu_class' => '', 'fallback_cb' => false, 'walker' => new CSS_Menu_Walker())); ?>
 

    </div>
</nav>

<!--Menu-div-->
<div class="burger__btn">
    <div class="scroll float-panel" data-scroll="0" data-top="0">

        <div class="burger">
            <div class="burger-toggle">
                <div class="burger__patty"></div>
                <div class="burger__patty"></div>
                <div class="burger__patty"></div>
            </div>
            <span class="burger__text">Menu</span>
        </div>

    </div>
</div>