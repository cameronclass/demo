
// contact form animations
$('.navbar-toggler').click(function () {
    $('.popup').show();
})
$(document).mouseup(function (e) {
    var container = $(".popup");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
});
$(".form-check a").click(function () {
    $(".policy").show()
    $('#overlay').fadeIn()
})


$('.btn-cart').click(function () {

    var cartName = $(this).parent().find("h6").text()

    $('.modal-cart').find("h4").text(cartName)
    $('.modal-cart').fadeIn();
    $('#overlay').show();
})
$('.btn-call').click(function () {

    var textMessage = $('#textMeesage-help')
    $('.modal-contact').show();
    $('#overlay-second').show();
})
$('.btn-join').click(function () {
    $('.modal-join').fadeIn();
    $('#overlay').show();
})


  

$('.btn-about-us').click(function () {
    $('#overlay').show();


    $('.about-us').show();

})
$('.btn-close').click(function (e) {
    e.preventDefault()
    $('#overlay').fadeOut();
    $('#overlay-second').fadeOut();
    $('.modal').fadeOut();
    $('.policy').fadeOut();

    $('.about-us').hide();


})



$('#overlay').click(function (e) {
    e.preventDefault()
    $('#overlay').fadeOut();
    $('.modal').fadeOut();
    $('.about-us').hide();
    $(".policy").hide()

})
$('#overlay-second').click(function (e) {
    e.preventDefault()
    $('#overlay').fadeOut();
    $('#overlay-second').fadeOut();
    $(".policy").hide()
    $('.modal').fadeOut();
    $('.about-us').hide();

})

function placeHoldeReplace(id) {
    superplaceholder({
        el: id,
        sentences: ['Опишите вашу ситуацию...'],
        options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
}
placeHoldeReplace(textDesc)
placeHoldeReplace(textMob)
placeHoldeReplace(textMessageCard)
placeHoldeReplace(textMessageJoin)
placeHoldeReplace(textMessage)








function IsEmail(emailText) {
    var regex = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    return regex.test(emailText);

}
function IsTellphone(tel) {
    var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,5}$/;
    return regex.test(tel);
}



$('#sendMails').on('click', function (e) {




    var email = $('.form-body #email-contact').val().trim();
    var head = $('.form-body .head-message-contact').text()
    var textMessage = $('.form-body input[name="text-contact"]').val()

    var phone = IsTellphone(email)
    var isMail = IsEmail(email)




    if(phone === isMail){
            var h2 = '<h2 class="text-warning-email">Введите номер телефона или адрес электронной почты </h2>'
            $('.form-body #email-contact').before(h2)
            $('.form-body h2').fadeOut(5000)

        return false
    }


 if ($('.form-body input[type="checkbox"]').is(":checked")) {

     $.ajax({
         url: 'mail.php',
         type: 'POST',
         data: { 'head': head, 'email': email, 'texts': textMessage },
         dataType: 'html',
         cache: false
     }).done(function (data) {

         $('#response').show().html(data);
         $('#response').fadeOut(10000)
         $('#overlay-second').fadeOut();
         $('#overlay').fadeOut();

         $('.modal').fadeOut()
         $('.form-body #email-contact').val('');
         $('.form-body input[name="text-contact"]').val('')
         $('.form-body input[type="checkbox"]').prop('checked', false);

     }).fail(function (data) {
         //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
         alert('error ' + data)
         console.log("Error from mail!!!" + data);

     });
     return false;

    }

    else {

     var h6 = '<h6 class="text-warning-email mt-2">Пожалуйста согласитесь с политикой о конфедициальности</h6>'
     $('.form-check').before(h6)
     $('.form-body h6').fadeOut(5000)
     return false



    }


});



$('#sendJoin').on('click', function (e) {




    var email = $('.form-body #email-join').val();
    var head = $('.form-body .head-message-join').text()
    var textMessage = $('.form-body input[name="text-join"]').val()
    var phone = IsTellphone(email)
    var isMail = IsEmail(email)




    if(phone === isMail){
        var h2 = '<h2 class="text-warning-email">Введите номер телефона или адрес электронной почты </h2>'
        $('.form-body #email-join').before(h2)
        $('.form-body h2').fadeOut(5000)

        return false
    }

    if ($('.form-body input[type="checkbox"]').is(":checked")) {

        $.ajax({
            url: 'mailjoin.php',
            type: 'POST',
            data: { 'head': head, 'email': email, 'texts': textMessage },
            dataType: 'html',
            cache: false
        }).done(function (data) {

            $('#response').show().html(data);
            $('#response').fadeOut(10000)
            $('#overlay').fadeOut();
            $('#overlay-second').fadeOut();

            $('.modal').fadeOut()
            $('.form-body #email-join').val('');
            $('.form-body input[name="text-contact"]').val('')
            $('.form-body input[type="checkbox"]').prop('checked', false);

        }).fail(function (data) {
            //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
            alert('error ' + data)
            console.log("Error from mail!!!" + data);

        });
        return false;

    }

else {

        var h6 = '<h6 class="text-warning-email mt-2">Пожалуйста согласитесь с политикой о конфедициальности</h6>'
        $('.form-check').before(h6)
        $('.form-body h6').fadeOut(5000)
        return false



    }

});


$('#sendCard').on('click', function (e) {




    var email = $('.form-body #email').val();
    var head = $('.form-body .head-message-card').text()
    var textMessage = $('.form-body input[name="text-card"]').val()
    var phone = IsTellphone(email)
    var isMail = IsEmail(email)




    if(phone === isMail){
        var h2 = '<h2 class="text-warning-email">Введите номер телефона или адрес электронной почты </h2>'
        $('.form-body #email').before(h2)
        $('.form-body h2').fadeOut(5000)

        return false
    }
    if ($('.form-body input[type="checkbox"]').is(":checked")) {

        $.ajax({
            url: 'mail.php',
            type: 'POST',
            data: { 'head': head, 'email': email, 'texts': textMessage },
            dataType: 'html',
            cache: false
        }).done(function (data) {

            $('#response').show().html(data);
            $('#response').fadeOut(10000)
            $('#overlay').fadeOut();
            $('#overlay-second').fadeOut();
            $('.modal').fadeOut()
            $('.form-body #email').val('');
            $('.form-body input[name="text-contact"]').val('')
            $('.form-body input[type="checkbox"]').prop('checked', false);

        }).fail(function (data) {
            //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
            alert('error ' + data)
            console.log("Error from mail!!!" + data);

        });
        return false;

    }

    else {

        var h6 = '<h6 class="text-warning-email mt-2">Пожалуйста согласитесь с политикой о конфедициальности</h6>'
        $('.form-check').before(h6)
        $('.form-body h6').fadeOut(5000)
        return false



    }

});

$('#sendCard-desctop').on('click', function (e) {




    var email = $('.form-body #email-desctop').val().trim();
    var head = $('.form-body .head-message-desctop').text()
    var textMessage = $('.form-body input[name="text-form-desctop"]').val()
    var phone = IsTellphone(email)
    var isMail = IsEmail(email)




    if(phone === isMail){
        var h2 = '<h2 class="text-warning-email">Введите номер телефона или адрес электронной почты </h2>'
        $('.form-body #email-desctop').before(h2)
        $('.form-body h2').fadeOut(5000)

        return false
    }

    if ($('.form-body input[type="checkbox"]').is(":checked")) {

        $.ajax({
            url: 'mail.php',
            type: 'POST',
            data: { 'head': head, 'email': email, 'texts': textMessage },
            dataType: 'html',
            cache: false
        }).done(function (data) {

            $('#response').show().html(data);
            $('#response').fadeOut(10000)
            $('#overlay').fadeOut();
            $('#overlay-second').fadeOut();
            $('.modal').fadeOut()
            $('.form-body #email-desctop').val('');
            $('.form-body input[name="text-contact"]').val('')
            $('.form-body input[type="checkbox"]').prop('checked', false);

        }).fail(function (data) {
            //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
            alert('error ' + data)
            console.log("Error from mail!!!" + data);

        });
        return false;

    }

    else {

        var h6 = '<h6 class="text-warning-email mt-2">Пожалуйста согласитесь с политикой о конфедициальности</h6>'
        $('.form-check').before(h6)
        $('.form-body h6').fadeOut(5000)
        return false



    }

});


$('#sendCard-mobile').on('click', function (e) {




    var email = $('.form-body #email-form-mobile').val().trim();
    var head = $('.form-body .head-message-mobile').text()
    var textMessage = $('.form-body input[name="text-form-mobile"]').val()
    var phone = IsTellphone(email)
    var isMail = IsEmail(email)




    if(phone === isMail){
        var h2 = '<h2 class="text-warning-email">Введите номер телефона или адрес электронной почты </h2>'
        $('.form-body #email-form-mobile').before(h2)
        $('.form-body h2').fadeOut(5000)

        return false
    }

    if ($('.form-body input[type="checkbox"]').is(":checked")) {

        $.ajax({
            url: 'mail.php',
            type: 'POST',
            data: { 'head': head, 'email': email, 'texts': textMessage },
            dataType: 'html',
            cache: false
        }).done(function (data) {

            $('#response').show().html(data);
            $('#response').fadeOut(10000)
            $('#overlay-second').fadeOut();
            $('#overlay').fadeOut();
            $('.modal').fadeOut()
            $('.form-body #email-form-mobile').val('');
            $('.form-body input[name="text-contact"]').val('')
            $('.form-body input[type="checkbox"]').prop('checked', false);

        }).fail(function (data) {
            //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
            alert('error ' + data)
            console.log("Error from mail!!!" + data);

        });
        return false;

    }

    else {

        var h6 = '<h6 class="text-warning-email mt-2">Пожалуйста согласитесь с политикой о конфедициальности</h6>'
        $('.form-check').before(h6)
        $('.form-body h6').fadeOut(5000)
        return false



    }

});








