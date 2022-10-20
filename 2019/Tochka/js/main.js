
$('[data-sub]').click(function () {
    var cartName = $(this).parent().find("img").attr('alt')
    $('.modal-content').find("h4").text(cartName)
})
$('[data-internet]').click(function () {
    var cartName = $(this).parent().find("img").attr('alt')
    $('.modal-content').find("h4").text(cartName)
})
$('[data-kits]').click(function () {
    var cartName = $(this).parent().find("img").attr('alt')
    $('.modal-content').find("h4").text(cartName)
})
$('[data-tv]').click(function () {
    var cartName = $(this).parent().find("h3").text()
    $('.modal-content').find("h4").text(cartName)
    
})
$('[data-tv-ntv]').click(function () {
    var cartName = $(this).parent().find("h4").text()
    $('.modal-content').find("h4").text(cartName)

})
$('[data-tv-mts]').click(function () {
    var cartName = $('[data-title-mts]').text()
    $('.modal-content').find("h4").text(cartName)

})
$('[data-video]').click(function () {
    var cartName = $('[data-video-title]').text()
    $('.modal-content').find("h4").text(cartName)

})

$('[data-index-home]').click(function () {
    var cartName = 'Заказать Высокоскоростной интернет'
    $('.modal-content').find("h4").text(cartName)

})

$('[data-video-btn]').click(function () {
    var cartName = $(this).parent().find("h3").text()
    $('.modal-content').find("h4").text(cartName)

})

$('[data-opt]').click(function () {
    var cartName = 'Спутниковое оборудование оптом';
    $('.modal-content').find("h4").text(cartName)

})
$('[data-send]').on('click', function () {

    var head = $('.modal-content h4').text()
    var email = $('.emailModal').val().trim();
    var phone = $('.phoneModal').val().trim();
    var textMessage = $('.textMessage').val().trim();

    if (email == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('.emailModal').after(h2)
        $('.modal-content h5').fadeOut(2000)

        return false
    }
    if (phone == '') {
        var h2 = '<h5 class="text-warning" >Заполните поле</h5>'
        $('.phoneModal').after(h2)
        $('.modal-content h5').fadeOut(2000)

        return false
    }
    if (textMessage == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('.textMessage').after(h2)
        $('.modal-content h5').fadeOut(2000)

        return false
    }


        $.ajax({
            url: 'mail.php',
            type: 'POST',
            data: { 'head': head, 'email': email, 'text': textMessage, 'phone': phone},
            dataType: 'html',
            cache: false
        }).done(function (data) {

            $('#response').show().html(data);
            $('#response').fadeOut(8000)
            $('.modal').hide()
      
            $('body').removeClass('modal-open')
            $('body').css('padding-right', '0')
            $('.modal-backdrop').hide();

            $('.modal-content h4').text('');
            $('.emailModal').val('');
            $('.phoneModal').val('');
            $('.textMessage').val('');

            

        }).fail(function (data) {

            
            console.log("Error from mail!!!" + data);

        });
        return false;

});

$('[data-index-send]').on('click', function () {

    var head = 'Оставил вопрос'
    var name = $('#index-title').val().trim();
    var phone = $('#index-phone').val().trim();
    var textMessage = $('#index-message').val().trim();


    if (name == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('#index-title').after(h2)
        $('.home-contact-form h5').fadeOut(2000)

        return false
    }
    if (phone == '') {
        var h2 = '<h5 class="text-warning" >Заполните поле</h5>'
        $('#index-phone').after(h2)
        $('.home-contact-form h5').fadeOut(2000)

        return false
    }
    if (textMessage == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('#index-message').after(h2)
        $('.home-contact-form h5').fadeOut(2000)

        return false
    }


    $.ajax({
        url: 'mail.php',
        type: 'POST',
        data: { 'head': head, 'email': name, 'text': textMessage, 'phone': phone },
        dataType: 'html',
        cache: false
    }).done(function (data) {

        $('#response').show().html(data);
        $('#response').fadeOut(8000)
        $('.modal').hide()

        $('body').removeClass('modal-open')
        $('body').css('padding-right', '0')
        $('.modal-backdrop').hide();
        $('#index-title').val('');
        $('#index-phone').val('');
        $('#index-message').val('');


    }).fail(function (data) {


        console.log("Error from mail!!!" + data);

    });
    return false;

});
$('[data-check-send]').on('click', function () {

    var head = 'Оставил запрос на проверку адреса'
    var street = $('#check-street').val().trim();
    var phone = $('#check-phone').val().trim();
    var home = $('#check-home').val().trim();

    if (street == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('.check-home #check-street').after(h2)
        $('.check-home h5').fadeOut(2000)

        return false
    }
    if (home == '') {
        var h2 = '<h5 class="text-warning">Заполните поле</h5>'
        $('.check-home #check-home').after(h2)
        $('.check-home h5').fadeOut(2000)

        return false
    }
    if (phone == '') {
        var h2 = '<h5 class="text-warning" >Заполните поле</h5>'
        $('.check-home #check-phone').after(h2)
        $('.check-home h5').fadeOut(2000)

        return false
    }


    $.ajax({
        url: 'mailStreet.php',
        type: 'POST',
        data: { 'head': head, 'street': street, 'home': home, 'phone': phone },
        dataType: 'html',
        cache: false
    }).done(function (data) {

        $('#response').show().html(data);
        $('#response').fadeOut(8000)

        $('#check-street').val('');
        $('#check-phone').val('');
        $('#check-home').val('');


    }).fail(function (data) {


        console.log("Error from mail!!!" + data);

    });
    return false;

});














