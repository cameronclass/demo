<?php
session_start();

if (empty($_SESSION)) {

    header('location: /form-error.php');

    return false;

}

?>
<!-- Header -->
<?php require_once('components/header.php'); ?>
<main class="container-fluid">
  <!-- Slider Section -->
  <section style="border-bottom: 3px solid #f7bd12;">
    <img src="img/2.jpg" class="img-fluid" alt="Responsive image">
  </section>
  <section class="container-fluid steps-form bg-white">
    <div class="container">
      <ol>
        <li class="active">Выбор Машины</li>
        <li class="active">Данные пассажиров</li>
        <li class="active">Закончить Резервацию</li>
      </ol>
    </div>
  </section>
  <section class="container-fluid reservation bg-white">
    <div class="container">
      <h1>Спасибо что выбрали нас. Ваша заявка принята!</h1>
      <h2>Информация бронирование принята нами. <br> Данные резервации отправлено на указанную вам <span class="font-weight-bold">e-mail</span> почту </h2>
    </div>
    <div class="container px-4">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 offset-lg-2 px-0 pl-lg-3 pl-md-0 pr-lg-2 pr-md-0">
          <div class="table-div bg-white rounded">
            <h2 class="card-header">Rezervasyon Özeti</h2>
            <table class="table bg-white">
              <tbody>
                <tr>
                  <th scope="row">Имя Фамилия</th>
                  <td><?php echo $_SESSION['name']?></td>
                </tr>
                <tr>
                  <th scope="row">E-mail</th>
                  <td><?php echo $_SESSION['email']?></td>
                </tr>
                <tr>
                  <th scope="row">Номер Телефона</th>
                  <td><?php echo $_SESSION['phone']?></td>
                </tr>
                <tr>
                  <th scope="row">Количество человека</th>
                  <td><?php echo $_SESSION['peoples']?></td>
                </tr>
                <tr>
                  <th scope="row">Выбранная машина</th>
                  <td><?php echo $_SESSION['name_auto'] ?></td>
                </tr>
                <tr>
                  <th scope="row">Место встречи</th>
                  <td><?php echo $_SESSION['from']?></td>
                </tr>
                <tr>
                  <th scope="row">Место назначения</th>
                  <td><?php echo $_SESSION['to']?></td>
                </tr>
                <tr>
                  <th scope="row">Дата</th>
                  <td><?php echo $_SESSION['date_to']?></td>
                </tr>
                <tr>
                  <th scope="row">Время</th>
                  <td><?php echo $_SESSION['time']?></td>
                </tr>

                <tr>
                  <th scope="row">Место направление</th>
                  <td><?php echo $_SESSION['destination']?></td>
                </tr>
                <tr>
                  <th scope="row">Ваше сообщение</th>
                  <td><?php echo $_SESSION['special_note']?></td>
                </tr> <?php if(isset($_SESSION['child_seat'])){?> <tr>
                  <th scope="row">Десткое сидение</th>
                  <td>ДА</td>
                </tr> <?php }?> <?php if(isset($_SESSION['back_on'])){?> <tr>
                  <th scope="row">Дата обратного трансфера</th>
                  <td><?php echo $_SESSION['back_date']?></td>
                </tr>
                <tr>
                  <th scope="row">Время обратного трансфера</th>
                  <td><?php echo $_SESSION['back_time']?></td>
                </tr>
                <tr>
                  <th scope="row">Авиакомпания</th>
                  <td><?php echo $_SESSION['air_company']?></td>
                </tr>
                <tr>
                  <th scope="row">Номер Рейса</th>
                  <td><?php echo $_SESSION['flight_number']?></td>
                </tr>
                <tr class="price">
                  <th scope="row">Общая Цена</th>
                  <td><?php echo $_SESSION['price_2x']?></td>
                </tr> <?php } else{?> <tr class="price">
                  <th scope="row">Общая Цена</th>
                  <td><?php echo $_SESSION['price']?></td>
                </tr> <?php }?>
              </tbody>
            </table>
          </div>
          <a href="#" class="d-flex justify-content-end mt-2 text-decoration-none text-dark" onclick="window.print()" style="font-size: 20px; line-height: 1.3; color: #4e4e4e;
">Печатать	<ion-icon name="print-outline" class="h3"></ion-icon></a>
<p class="text-center"><span class="text-success">ПОСЛЕ ПОСАДКИ ВАШЕГО САМОЛЕТА МЫ БУДЕМ ОЖИДАТЬ ВАС С ТАБЛИЧКОЙ, НА КОТОРОЙ БУДЕТ УКАЗАНО ВАШЕ ИМЯ, У ВЫХОДА ИЗ ЗДАНИЯ ТЕРМИНАЛА</span> <br><br>
Благодарим Вас за выбор CLKTRANSFER.COM . Ваша информация о бронировании была одобрена нашей системой. Копия информации о бронировании была отправлена на ваш адрес электронной почты. Пожалуйста проверьте папку нежелательной почты, если он не входящей электронной почты. Маркировка info@clktransfer.com надежно важно для вас, чтобы избежать каких-либо проблем с нашими уведомлениями о передаче.</p>
          <!-- Hemen Destek -->
          <div class="card mt-4 transfer-hemen">
            <h3 class="card-header">Напишите нам или Позваните</h3>
            <div class="card-body d-flex align-items-center justify-content-between flex-column">
              <a href="tel:+90 531 354 23 96" class="card-title h2 text-center text-dark">+90 531 354 23 96</a>
              <p class="card-text text-center h6">Можете связаться с нами в любое время</p>
              <ul class="social-icons">
                <li><a href="#"><img src="img/whatsapp.png" alt="WhatsApp"></a></li>
                <li><a href="#"><img src="img/instagram-sketched.png" alt="İnstagram"></a></li>
                <li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<!-- Footer --> <?php require_once('components/footer.php'); ?> <?php //session_destroy();?>
