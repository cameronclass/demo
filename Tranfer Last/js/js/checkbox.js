$(document).ready(function () {


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
function IsTellphone(tel) {
    var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,5}$/;
    return regex.test(tel);
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
    if ($special_note == '') {
        $('#special_note').after('<span class="text-danger text-center d-block error-flash-destination">Lütfen Özel Notunuzu yazın</span>')
        $("html,body").animate({
            scrollTop: $('input[name="email"]').offset().top
        });

        $('.error-flash-destination').fadeOut(5000)
        setTimeout(function () {
            $('.error-flash-destination').remove();
        }, 5000);
        return false
    }


});


    

});

$.get('https://openexchangerates.org/api/latest.json', { app_id: '8fa4827a8f404603aa8154e9c6c687e0', base: 'TRY' }, function (data) {
    const USD = data.rates.USD

    let EUR = data.rates.EUR
    
    console.log(USD);
});