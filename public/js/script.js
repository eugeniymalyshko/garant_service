$(function() {
  $(document).click(function () {
    $('.navbar-collapse').collapse('hide');
  });
});

$(function() {
  $('#feedback').submit(function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
      url: '/testimonials/add',
      type: 'POST',
      data: data,
      beforeSend: function(){
        $('#submit').next().text('Надсилаю...');
      },
      success: function(res) {
        $("form").trigger("reset");
        alert('Ваш відгук відправлено на модерацію, скоро він з\'явиться на сайті!');
      },
      error: function(){
        alert('Помилка!');
      }
    });
  })
});
// Form event-request
$(function() {
  $('#request').submit(function(e) {
    e.preventDefault();
    var data = $(this).serialize();
      $.ajax({
        url: 'sender/mail.php',
        type: 'POST',
        data: data,
        beforeSend: function(){
          $('#submit').next().text('Надсилаю...');
          },
        success: function(res) {
          $("form").trigger("reset");
          alert('Ваше повідмлення надіслане!');
          },
        error: function(){
          alert('Помилка!');
        }
    });
  })
});
//ScrollUp Hide/Show
$(function() {
  //при нажатии на кнопку scrollup
  $('.scrollup').click(function() {
    // переместиться в верхнюю часть страницы
    $("html, body").animate({
      scrollTop: 0
    },1000);
  })
});

// при прокрутке окна (window)
$(window).scroll(function() {
  if ($(this).scrollTop()>300) {
    // то сделать кнопку scrollup видимой
    $('.scrollup').fadeIn();
  }
  // иначе скрыть кнопку scrollup
  else {
    $('.scrollup').fadeOut();
  }
});

// Feedbacks
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    items: 1,
    margin:150,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true,
    stagePadding: 130,
    dots: true,
    nav: false,
    // navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
    // '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    // navContainer: '#customNav',
    responsive: {
      // > 0
      0 : {
        dots: false,
        margin:30,
        stagePadding: 30,
      },
      // > 768
      768 : {
        margin:130,
        stagePadding: 130,
        dots: true,
      }
    }
  });
});