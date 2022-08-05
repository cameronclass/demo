$(document).ready(function () {

 
  
    $.get('https://prime.exchangerate-api.com/v5/0ec591f8066b881983ce653c/latest/USD', function (data) {
        const DOllAR_LIRA = data.conversion_rates.TRY
        const EUR_TO_USD = data.conversion_rates.EUR

        let eur = DOllAR_LIRA * (1 / EUR_TO_USD)
        const EUR_LIRA = eur.toFixed(2);

        console.log(EUR_LIRA)


    });
    
  



$('input[name="back_input"]').prop("checked", false);
$('.apple-switch').click(function(){

    if ($(this).is(':checked')){

        $('#endDate').prop('disabled', false);
        $('#endDate').prop('required', true);
        $('#timepicker').prop('required', true);
        $('#timepicker').prop('disabled', false);

    } else {

        $('#endDate').val('').prop('disabled', true);

        $('#timepicker').val('').prop('disabled', true);

    }

});

var firstFromVal =  $('select[name=from]').val();

var firstToVal =  $('select[name=to]').val();

//

if (firstFromVal ==  firstToVal){

    $("select[name=to] > option[value='Antalya Havalimani']").remove();



}



$("select[name=from]").change(function(){



    if (firstFromVal ==  firstToVal){

        $("select[name=to] > option[value='Antalya Havalimani']").remove();



    }





    if($(this).val() != 'Antalya Havalimani'){

        console.log('Da');

        $('select[name=to]').find('option').remove().end().append('<option value="Antalya Havalimani">Antalya Havalimanı</option>')

    }

    if($(this).val() == 'Antalya Havalimani'){



        $('select[name=to]').find('option').remove().end()



        values = $.map($('select[name=from] option'), function(ele) {

            return ele.value;

        });



        values.forEach(function (item, i, values) {

            if ( $("select[name=to] > option[value='Antalya Havalimani']")){

                $("select[name=to] > option[value='Antalya Havalimani']").remove();

            }

            var opt = `<option value="${item}">${item}</option>`

            $('select[name=to]').append(opt)

        })







    }

});
function IsEmail(emailText) {
    var regex = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    return regex.test(emailText);

}
// function IsTellphone(tel) {
//     var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,5}$/;
//     return regex.test(tel);
// }
    function IsTellphone(phone) {
        return /^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/.test($phone);
    }

$('#form-end').on('click', function(e){
    $name = $('input[name="name"]').val().toString();
    $phone = $('input[name="phone"]').val().toString();
    $email = $('input[name="email"]').val().toString();
    $airCompany = $('input[name="air_company"]').val().toString();
    $ticket = $('input[name="flight_number"]').val().toString();
    $destination = $('#textarea').val().toString();
    $special_note = $('#special_note').val().toString();






    if ($name == ''){
        $('input[name="name"]').after('<span class="text-danger text-center d-block error-flash">Lütfen adınızı yazın</span>')
        $("html,body").animate({
            scrollTop: $(".reservation").offset().top
        });
     
        $('.error-flash').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash').remove();
        }, 5000);
        return false
    }
    if (IsTellphone($phone) == '') {
        $('input[name="phone"]').after('<span class="text-danger text-center d-block error-flash-phone">Lütfen telefon numaranızı yazın</span>')
        $("html,body").animate({
            scrollTop: $(".reservation").offset().top
        });

        $('.error-flash-phone').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-phone').remove();
        }, 5000);
        return false
    }
    if (IsEmail($email) == '') {
        $('input[name="email"]').after('<span class="text-danger text-center d-block error-flash-email">Lütfen e-posta adresi yazın</span>')
        $("html,body").animate({
            scrollTop: $(".reservation").offset().top
        });

        $('.error-flash-email').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-email').remove();
        }, 5000);
        return false
    }
    if ($airCompany == '') {
        $('input[name="air_company"]').after('<span class="text-danger text-center d-block error-flash-company">Lütfen Havayolu Şirketi yazın</span>')
        $("html,body").animate({
            scrollTop: $('input[name="email"]').offset().top
        });

        $('.error-flash-company').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-company').remove();
        }, 5000);
        return false
    }
    if ($ticket == '') {
        $('input[name="flight_number"]').after('<span class="text-danger text-center d-block error-flash-flight_number">Lütfen Uçuş Kodunuzu yazın</span>')
        $("html,body").animate({
            scrollTop: $('input[name="email"]').offset().top
        });

        $('.error-flash-flight_number').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-flight_number').remove();
        }, 5000);
        return false
    }
    if ($destination == '') {
        $('#textarea').after('<span class="text-danger text-center d-block error-flash-destination">Lütfen Gidilecek Yerinizi yazın</span>')
        $("html,body").animate({
            scrollTop: $('input[name="email"]').offset().top
        });

        $('.error-flash-destination').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-destination').remove();
        }, 5000);
        return false
    }
    // if ($special_note == '') {
    //     $('#special_note').after('<span class="text-danger text-center d-block error-flash-destination">Lütfen Özel Notunuzu yazın</span>')
    //     $("html,body").animate({
    //         scrollTop: $('input[name="email"]').offset().top
    //     });

    //     $('.error-flash-destination').fadeOut(5000)
    //     setTimeout(function () {
    //         $('.error-flash-destination').remove();
    //     }, 5000);
    //     return false
    // }


});



    

});

// $.get('https://prime.exchangerate-api.com/v5/0ec591f8066b881983ce653c/latest/USD', function (data) {
//     const DOllAR_LIRA = data.conversion_rates.TRY
//     const EUR_TO_USD = data.conversion_rates.EUR

//     var EUR_LIRA = DOllAR_LIRA * (1 / EUR_TO_USD)

//     alert(EUR_LIRA);
    
// });