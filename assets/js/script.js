$('input.phone').inputmask("+7(999)999-99-99", { "clearIncomplete": true });


$(document).ready(function () {
  $("body").on("click", ".scroll", function (event) {
    event.preventDefault(); //опустошим стандартную обработку
    var id = $(this).attr('href'), //заберем айдишник блока с параметром URL
      top = $(id).offset().top - 100; //определим высоту от начала страницы до якоря
    $('body,html').animate({ scrollTop: top }, 1000); //сделаем прокрутку за 1 с
  });
});

$('body').on("click", ".form_red", function (event) {
  $(this).removeClass('form_red');
});

$('.slider_vr').slick({
  infinite: false,
  variableWidth: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },

    {
      breakpoint: 730,
      settings: {
        slidesToShow: 1,
        variableWidth: false,
        slidesToScroll: 1,
      }
    },
  ]
});

$('.slider_head_akcii').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 5000
})

$('.slider_list_opinion').slick({
  infinite: false,
  variableWidth: true,
  slidesToShow: 1,
  slidesToScroll: 1
})

$('.slider_opinion_in').slick({ //Отзывы о клинике - old
  infinite: false,
  variableWidth: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

$('.link_close_form').click(function () {
  $.fancybox.close();
  return false;
})

$('.media__slider').slick({
  slidesToShow: 3,//кол-во отображаемых слайдов
  slidesToScroll: 1,//кол-во прокручиваемых слайдов
  dots: true,//навигационные точки
  centerMode: true,//главный слайд по центру экрана
  variableWidth: false,//слайды без пробелов по своей ширине
  responsive: [
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

$('.more__slider').slick({
  slidesToShow: 3,//кол-во отображаемых слайдов
  slidesToScroll: 1,//кол-во прокручиваемых слайдов
  dots: false,//навигационные точки
  centerMode: true,//главный слайд по центру экрана
  variableWidth: false,//слайды без пробелов по своей ширине
  responsive: [
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 730,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});

$('#results').slick({
  slidesToShow: 3,//кол-во отображаемых слайдов
  slidesToScroll: 1,//кол-во прокручиваемых слайдов
  dots: true,//навигационные точки
  centerMode: false,//главный слайд по центру экрана
  variableWidth: false,//слайды без пробелов по своей ширине
  draggabal: false,//свайп мышкой на пк
  swipe: false,//свайп мышкой на мобильных устройствах
  infinite: false,//бесконечная прокрутка
  responsive: [
    {
      breakpoint: 1180,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 970,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});

$('.recall__slider').slick({//Отзывы о клинике
  adaptiveHeight: true,
  prevArrow: '<button type="button" class="slick-prev recall__prev">Предыдущий отзыв</button>',//HTML для кнопки "Назад"
  nextArrow: '<button type="button" class="slick-next recall__next">Следующий отзыв</button>',//HTML для кнопки "Вперед"
});

$('.burger_mobile').click(function () {
  $('body').toggleClass('ksksks');
  $('.nav_msken').toggleClass('open');
  return false;
})



$(".sender_sk").submit(function () {
  var form = $(this);
  var error = false;

  form.find('.name').each(function () {
    if ($(this).val() == '') {
      $(this).addClass("form_red");
      error = true; // ошибка
    }
  });
  form.find('.phone').each(function () {
    if ($(this).val() == '') {
      $(this).addClass("form_red");
      error = true; // ошибка
    }
  });


  if (!error) {
    var data = form.serialize();
    $.ajax({
      type: 'POST',
      url: '/mailer.php',
      dataType: 'json',
      data: data,
      beforeSend: function (data) {
        form.find('input[type="submit"]').attr('disabled', 'disabled');
      },
      success: function (data) {
        if (data['error']) {
          alert(data['error']);
        } else {
          $.fancybox.close();
          $('.thanks_link').click();
          form[0].reset();
        }
      },
      complete: function (data) {
        form.find('input[type="submit"]').prop('disabled', false);
      }

    });
  }
  return false;
});

$(".sender_sk2").submit(function () {
  var form = $(this);
  var error = false;

  form.find('.name').each(function () {
    if ($(this).val() == '') {
      $(this).addClass("form_red");
      error = true; // ошибка
    }
  });
  form.find('.phone').each(function () {
    if ($(this).val() == '') {
      $(this).addClass("form_red");
      error = true; // ошибка
    }
  });


  if (!error) {
    var data = form.serialize();
    $.ajax({
      type: 'POST',
      url: '/mailer.php',
      dataType: 'json',
      data: data,
      beforeSend: function (data) {
        form.find('input[type="submit"]').attr('disabled', 'disabled');
      },
      success: function (data) {
        if (data['error']) {
          alert(data['error']);
        } else {
          $.fancybox.close();
          $('.thanks_link2').click();
          form[0].reset();
        }
      },
      complete: function (data) {
        form.find('input[type="submit"]').prop('disabled', false);
      }

    });
  }
  return false;
});

$('.nav_msken .close').click(function () {
  $('body').toggleClass('ksksks');
  $('.nav_msken').toggleClass('open');
  return false;
})

$('.link_burger').click(function () {
  $('body').toggleClass('ksksks');
  $('.bg_sks').toggle();
  $('.menu-uslugi-container').toggle();
  return false;
})
