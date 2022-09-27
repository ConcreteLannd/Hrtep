(function ($) {
    $('.voice-slider').slick({
      centerMode: true,
      centerPadding: '120px',
      slidesToShow: 3,
      arrows: true,
      dots: true,
      prevArrow:"<button type='button' class='slick-prev pull-left'><img src='./assets/images/arrow-left.png' alt='left'></button>",
      nextArrow:"<button type='button' class='slick-next pull-right'><img src='./assets/images/arrow-right.png' alt='right'></button>",
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: false,
            slidesToShow: 1
          }
        }
      ]
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
  var $match = $('.l-voiceSlider .slick-track').find('.voice-item');
  $(window).on('ready load resize', function() {
    matchHeight($match, 10);
  })
});