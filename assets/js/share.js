// UA settings
var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
      || u.indexOf("ipad") != -1
      || (u.indexOf('ipad') > -1 || u.indexOf('macintosh') > -1 && 'ontouchend' in document)
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

// device
if(_ua.Mobile){
  $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1,viewport-fit=cover');
  // change images with devices width
  $(document).ready(function(){
    $(function(){
      var $setElem = $('img'),
      pcName = '_pc',
      spName = '_sp',
      replaceWidth = 767;

      $setElem.each(function(){
        var $this = $(this);
        function imgSize(){
          if(window.innerWidth > replaceWidth) {
            $this.attr('src',$this.attr('src').replace(spName,pcName)).css({visibility:'visible'});
          } else {
            $this.attr('src',$this.attr('src').replace(pcName,spName)).css({visibility:'visible'});
          }
        }
        $(window).resize(function(){imgSize();});
        imgSize();
      });
    });
  });
}else if(_ua.Tablet){
  $("meta[name='viewport']").attr('content', 'width=device-width,viewport-fit=cover,');
  $("body").attr('class', 'tablet');
}else{
  $("meta[name='viewport']").attr('content', 'width=device-width');
}

/**
 * internal linkスムーズスクロール
 */
 $(function () {
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 120,
          },
          1000
        );
        return false;
      }
    }
  });
});

/**
 * external linkスムーズスクロール
 */
$(function () {
  setTimeout(function () {
    if (location.hash) {
      window.scrollTo(0, 0);
      target = location.hash.split("#");
      smoothScrollTo($("#" + target[1]));
    }
  }, 1);

  /**
   * taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
   */
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      smoothScrollTo($(this.hash));
      return false;
    }
  });

  function smoothScrollTo(target) {
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");

    if (target.length) {
      $("html,body").animate(
        {
          scrollTop: target.offset().top - 80,
        },
        1000
      );
    }
  }
});

// メニューを右から開く
$(function() {
  var scrollPos;
  $('.jsSlideMenu').on('click', function() {
    if (!$('html').hasClass('scroll-prevent')) {
      // 開く処理
      scrollPos = $(window).scrollTop();
      $('.slide-menu').toggleClass('active');
      $('.menu-trigger').toggleClass('active');
      $('.jsSlideMenuOpen').toggleClass('active');
      $('.jsHeadNav').toggleClass('hidden');
      $('html').toggleClass('scroll-prevent');
    } else {
      // 閉じたときに表示位置を戻す
      $('.slide-menu').toggleClass('active');
      $('.menu-trigger').toggleClass('active');
      $('.jsSlideMenuOpen').toggleClass('active');
      $('.jsHeadNav').toggleClass('hidden');
      $('html').toggleClass('scroll-prevent');
      $(window).scrollTop(scrollPos);
    }

  });
});

//loading text effect
$(function() {
  var textanime = $('.js-textanime');

  var txt_array = textanime.text().split('');

  $('.js-textanime').html('');

  $.each(txt_array, function(index, element) {
    var new_element = $("<span/>").text(element).css({ opacity: 0 });
    textanime.css({ opacity: 0 });
    textanime.append(new_element);
    new_element.delay(index * 250);
    new_element.animate({opacity: 1}, 3000);
    textanime.animate({opacity: 1}, 3000);
  });
});

/*===============================================
loader
===============================================*/

imagesProgress();
function imagesProgress () {

  var $container    = $('#js-loader'),
    progressTimer = setInterval(updateProgress, 4500);

  function updateProgress () {

      $container.animate({ right: '-100%' }, 2000, 'easeInOutQuint');

  }
}

// Init AOS
function aos_init() {
  AOS.init({
    duration: 1000,
    once: true,
  });
}
$(window).on("load", function () {
  aos_init();
});

const mqList = window.matchMedia("(max-width: 767px)")
// If media query matches on load
if (mqList.matches) {
  document.querySelector('.mv-txt').setAttribute('data-aos-delay', 5500);
  document.querySelector('.mv-sm-txt').setAttribute('data-aos-delay', 5500);
}

//mv movement
$(window).ready(function(){
  setInterval(function(){ 
    $('.js-mv-img').addClass("js-scale");
  }, 7000);
});

$(window).bind('resize', function() {
  location.reload();
});

// slider event
$(document).ready(function () {
  $('.js-slider').slick({
    responsive: [
      {
        breakpoint: 9999,
        settings: "unslick"
      },
      {
        breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            infinite: true,
            cssEase: 'linear',
            autoplaySpeed: 2000,
            variableWidth: false,
            centerMode: true,
            centerPadding: '15px',
            dots: true,
        }
      }
    ]
  });
});