function incrementValue()
{
//     var value = parseInt(document.getElementById('number').value, 10);
//     value = isNaN(value) ? 0 : value;
//     value++;
//     document.getElementById('number').value = value;
}

$(function(){
    $('.card-price').each(function(){
        $(this).attr('data-amount',$(this).text().trim().split(" ")[0].replace(",","."));
    });
});

$('.fa-increase').closest("button").on('click',function(){
    var $this = $(this);
    var amount = $this.find('.fa-increase').hasClass('fa-chevron-up') == true ? 1 : -1;

    console.log(amount,$this);

    var $cardPriceElem = $this.closest('.card-body').find('.card-price');
    var cardPrice = $cardPriceElem.data('amount');
    
    var $closestCountInput = $this.closest('.row').find('input[type=text]');
    var val = "";

    if(amount >= 1) {
        val = parseInt($closestCountInput.val());
        val += amount;
        $closestCountInput.val(val);
    }
    else {
        if($closestCountInput.val() >1) {
            val = parseInt($closestCountInput.val());
            val += amount;
            $closestCountInput.val(val);
        }
    }

    if (val != 0) {
        var newAmount = parseFloat(parseFloat(cardPrice) * val).toFixed(2);
        $cardPriceElem.text(newAmount + " p.");
    }
});

function decreaseValue()
{
    
}






'use strict';

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach((elm) => {
    elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
    });
});


 var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
      slidesPerView: 5,
      spaceBetween: 0,
      slideToClickedSlide:true,
      centeredSlides:true,
     pagination: {
        el: '.swiper-pagination',
        clickable: true,

      },

      loop:true,
      //   autoplay: {
      //     delay: 100000,
      //   },


        keyboard: {
        enabled: true,
        onlyInViewport: true,
      },


      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },


       breakpoints: {

            1024: {
                  freemode:true,
                  slidesPerView: 3,
                  spaceBetween: 0,
                },

            768: {
                  freemode:true,
                  slidesPerView: 3,
                  spaceBetween: 0,
                },
            
            640: {
              freemode:true,
              slidesPerView: 1,
              spaceBetween: 25,
            },

            450: {
              freemode:true,
              slidesPerView: 1,
              spaceBetween: 10,
            }
      }

    });