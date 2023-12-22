jQuery(document).ready(function () {

  jQuery('#cssmenu li.active').addClass('open').children('ul').show();
  jQuery('#cssmenu li.has-sub>a').on('click', function () {
    jQuery(this).removeAttr('href');
    var element = jQuery(this).parent('li');
    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp(200);
    } else {
      element.addClass('open');
      element.children('ul').slideDown(200);
      element.siblings('li').children('ul').slideUp(200);
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp(200);
    }
  });

  jQuery("#menuzord").menuzord({
    align: "right",
    scrollable: true
  });

  jQuery(".js-video-button").modalVideo({
    youtube: {
      controls: 0,
      nocookie: true
    }
  });

  jQuery('.videobox').flashy({
    showClass: 'fx-fadeIn',
    hideClass: 'fx-fadeOut'
  });

  jQuery('.videobox1').flashy({
    showClass: 'fx-fadeIn',
    hideClass: 'fx-fadeOut'
  });

  jQuery('.flexslider').flexslider();

  jQuery('.gallery').featherlightGallery({ gallery: { fadeIn: 300, fadeOut: 300 }, openSpeed: 300, closeSpeed: 300 });
  jQuery('.gallery2').featherlightGallery({ gallery: { next: 'next »', previous: '« previous' }, variant: 'featherlight-gallery2' });


  tabControl();
  var resizeTimer;
  jQuery(window).on('resize', function (e) {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      tabControl();
    }, 250);
  });

  if (jQuery(window).width() > 480) {
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,

    });
    wow.init();
  }

  jQuery('.accordion .content').hide();
  jQuery('.accordion h3:first').addClass('active').next().slideDown('slow');
  jQuery('.accordion h3').on('click', function () {
    if (jQuery(this).next().is(':hidden')) {
      jQuery('.accordion h3').removeClass('active').next().slideUp('slow');
      jQuery(this).toggleClass('active').next().slideDown('slow');
    }
  });


  jQuery('a[href*="#"]:not([href="#"])').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 2000);
        return false;
      }
    }
  });

  var Menu = (function () {
    var burger = document.querySelector('.burger');
    var menu = document.querySelector('.menu');
    var menuList = document.querySelector('.menu__list');
    var brand = document.querySelector('.menu__brand');
    var menuItems = document.querySelectorAll('.menu__item');
    var active = false;
    var toggleMenu = function () {
      if (!active) {
        menu.classList.add('menu--active');
        menuList.classList.add('menu__list--active');
        brand.classList.add('menu__brand--active');
        burger.classList.add('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('menu__item--active');
        }
        active = true;
      } else {
        menu.classList.remove('menu--active');
        menuList.classList.remove('menu__list--active');
        brand.classList.remove('menu__brand--active');
        burger.classList.remove('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('menu__item--active');
        }
        active = false;
      }
    };
    var bindActions = function () {
      burger.addEventListener('click', toggleMenu, false);
    };
    var init = function () {
      bindActions();
    };
    return {
      init: init
    };
  }());
  Menu.init();


});



function tabControl() {
  var tabs = jQuery('.tabbed-content').find('.tabs');
  if (tabs.is(':visible')) {
    tabs.find('a').on('click', function (event) {
      event.preventDefault();
      var target = jQuery(this).attr('href'),
        tabs = jQuery(this).parents('.tabs'),
        buttons = tabs.find('a'),
        item = tabs.parents('.tabbed-content').find('.item');
      buttons.removeClass('active');
      item.removeClass('active');
      jQuery(this).addClass('active');
      jQuery(target).addClass('active');
    });
  } else {
    jQuery('.item').on('click', function () {
      var container = jQuery(this).parents('.tabbed-content'),
        currId = jQuery(this).attr('id'),
        items = container.find('.item');
      container.find('.tabs a').removeClass('active');
      items.removeClass('active');
      jQuery(this).addClass('active');
      container.find('.tabs a[hrefjQuery="#' + currId + '"]').addClass('active');
    });
  }
}

var loadmoreclicked = 0;
jQuery(".readmorehidden").on('click', function () {
  var id = jQuery(this).attr("data-id");

  // jQuery('#hidden_'+id).toggle();
  //jQuery('#dots_'+id).toggle();

  if (jQuery(this).hasClass("open")) {
    jQuery('#hidden_' + id).fadeOut().css('display', 'none');
    jQuery('#dots_' + id).fadeIn().css('display', 'inline');
    jQuery(this).text("Read More");
  } else {
    jQuery('#hidden_' + id).fadeIn().css('display', 'inline');
    jQuery('#dots_' + id).fadeOut().css('display', 'none');
    jQuery(this).text("Read Less");
  }

  jQuery(this).toggleClass("open");
});

clicktimest = 6;
fluggert = 6;
fluggert = parseInt(fluggert);
function LoadMoretestimonials(total) {
  var initial = clicktimest;
  var final = clicktimest + fluggert;

  while (initial < final) {
    jQuery(".showme_test_" + initial).fadeIn(3000);
    initial++;
  }

  click = clicktimest + fluggert;
  if (click >= total) {
    jQuery(".loadmoretestimonialmaonpage").fadeOut(3000);
  }

  clicktimest = clicktimest + fluggert;
}

var totalitemcount_box = jQuery('#total_item_count_box_testi').val();
if (totalitemcount_box <= clicktimest) {
  jQuery(".loadmoretestimonialmaonpage").hide();
}

jQuery(".ggogledesktop").on('click', function () {
  jQuery(".wp-google-form-left").show();
});

jQuery(".wp-google-badge").on('click', function () {
  jQuery(".wp-google-form-left").show();
});


var header1 = jQuery(".bgflex").outerHeight();
var header2 = jQuery(".header-wrapp").outerHeight();
var header3 = jQuery(".linker-wrapp").outerHeight();
var headerresultant = parseInt(header1) + parseInt(header2) + parseInt(header3);

var showdown = jQuery('html,body').animate({ scrollTop: headerresultant }, 'slow').promise();

