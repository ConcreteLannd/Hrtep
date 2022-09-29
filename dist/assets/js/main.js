(function ($) {
    $('.voice-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow:"<button type='button' class='slick-prev pull-left'><img src='./assets/images/arrow-left.svg' alt='left'></button>",
      nextArrow:"<button type='button' class='slick-next pull-right'><img src='./assets/images/arrow-right.svg' alt='right'></button>",
    });

  })(jQuery)
  

  function rimg() {
    var w = window.innerWidth;
    var bp = 768;
    var flg_sp = false;
    if (w < bp) {
        $('img').each(function() {
            if ($(this).hasClass('rimg')) {
                $(this).attr('src', $(this).attr('src').replace('_pc', '_sp'));
            }
  
        });
    } else if (w >= bp) {
        $('img').each(function() {
            if ($(this).hasClass('rimg')) {
                $(this).attr('src', $(this).attr('src').replace('_sp', '_pc'));
            }
        });
    }
  }
  
  rimg();
  coachingFaq();
  $(window).resize(function() {
    rimg();
  });
  
function coachingFaq() {
  $('.p-itemqa_question').click(function () {
    $(this).next().slideToggle(500)
    $(this).toggleClass('open')
  })
}


function matchHeight($o, m) {
  $o.css('height', 'auto')
  var foo_length = $o.length;

  for (var i = 0; i < Math.ceil(foo_length / m); i++) {
    var maxHeight = 0;
    for (var j = 0; j < m; j++) {
      if ($o.eq(i * m + j).height() > maxHeight) {
        maxHeight = $o.eq(i * m + j).height();
      }
    }
    for (var k = 0; k < m; k++) {
      $o.eq(i * m + k).height(maxHeight);
    }
  }
}
$(function(){
  // var $match = $('.p-table_tbody_tr').find('.td_height');
  var $match = $('.ctn-voice').find('.ctn-voice_item');
  $(window).on('ready load resize', function() {
    matchHeight($match, 10);
  })
});

$('#nav_toggle').click(function(){
  $("#nav_toggle").toggleClass('open');
  $("nav").slideToggle(500);
  $('.overlay').toggleClass('open');
  $('body').toggleClass('fixed');
});

// Anchor link smooth
$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault();
  var offsetSize = $("header").innerHeight();
  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
  }, 900);
});