var WelcomeSwiper = new Swiper(".welcome-swiper", {
    loop: true,
    speed: 1000,

    lazy: true,
    pagination: {
        el: ".welcome-swiper .swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
});
var ArtikelSwiper = new Swiper(".artikel-swiper", {
    loop: true,
    speed: 1000,

    lazy: true,
    pagination: {
        el: ".artikel-swiper .swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
});

var home = new Swiper(".swiper-homepage", {
    loop: true,
    speed: 2000,
    spaceBetween: 40,

    lazy: true,
    direction: "vertical",
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
  });

  var swiper = new Swiper(".homepage2", {
    spaceBetween: 40,
    speed: 2000,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    breakpoints: {

      640: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 30
      },
      920: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 30
      }
    }
  
  });
  var swiper = new Swiper(".swiper-hello", {
    spaceBetween: 40,
    speed: 2000,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    breakpoints: {

      640: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 30
      },
      920: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30
      },
      1200: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 30
      }
    }
  
  });


$('.humber').click(function() {
    $('.sidebar').addClass('active')
    setTimeout(function(){
        $('.sidebar__section-2').addClass('active')
    },500);
  });

  
  $(".humber-salon").click(function(){
      $(".salon__sidebar").toggle('slow');
      console.log("pencet")
  });


$('.close').click(function() {
    $('.sidebar').removeClass('active')
    setTimeout(function(){
        $('.sidebar__section-2').removeClass('active')
    },100);
  });
$('.btn-komentar').click(function() {
    $('#comment').addClass('active')

  });

// ini faq
$(document).ready(function(){
	const link = document.getElementsByClassName('text-faq')
	const test = document.getElementsByClassName('test')
	$(link).on('click', function(){
	  $(this).toggleClass('active')
		$(this).siblings().removeClass('active')
	})
})
