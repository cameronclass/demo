<?php session_start();



if(empty($_SESSION)){

    header('location: /form-error.php');

    return false;

}

?>
<!-- Header -->
<?php require_once('components/header.php'); ?> <main class="container-fluid">
  <!-- Header Image Start -->
  <?php require_once('components/header-small-image.php'); ?>
  <!-- Header Image End -->
  <!-- Steps Start -->
  <section class="container-fluid steps-form">
    <div class="container">
      <ol>
        <li class="active">Выбор Машины</li>
        <li class="active">Данные пассажиров</li>
        <li>Закончить Резервацию</li>
      </ol>
    </div>
  </section>
  <section class="container-fluid reservation">
    <div class="container px-4">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-4 form-information">
          <form action="app/mail.php" method="POST">
            <h3 class="text-center">Данные пассажира</h3>
            <div class="form-group">
              <label for="name">Имя Фамилия :</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="name">Номер Телефона :</label>
              <input type="tel" class="form-control" name="phone" id="name">
            </div>
            <div class="form-group">
              <label for="name">Почтовый Адрес (Емаил) :</label>
              <input type="email" class="form-control" name="email" id="name">
            </div>
            <h3 class="text-center">Данные взлета</h3>
            <div class="form-group d-flex flex-wrap justify-content-between">
              <div class="w-40">
                <label class="w-100" for="name">Время :</label>
                <input type="text" class="timepicker form-control w-100" value="<?php echo $_SESSION['time_to']?>" id="name" name="time" required>
              </div>
              <div class="w-40">
                <label class="w-100" for="name">Авиакомпания :</label>
                <input type="text" name="air_company" class="form-control w-100" id="name">
              </div>
              <div class="w-40">
                <label class="w-100" for="name">Номер Рейса* :</label>
                <input type="text" name="flight_number" class="form-control w-100" id="name">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Адрес направления (Отель, Торговый центр, Район, Улица...) :</label>
              <textarea class="form-control " name="destination" id="textarea" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">ВАШЕ СООЩЕНИЕ :</label>
              <textarea class="form-control" name="special_note" id="special_note" rows="3"></textarea>
            </div>
            <h3 class="text-center">Специальный запрос</h3>
            <div class="d-flex justify-content-between">
              <label for="bebek">Детское сидение (одно детское сидение предоставляется бесплатно, <br> за каждое последующее детское сидение 3$)</label>
              <input class="apple-switch" id="bebek" name="child_seat" type="checkbox">
            </div>
            <button type="submit" class="btn btn-primary float-right mt-4 px-4" id="form-end">Закончить резервацию</button>
          </form>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-0 pl-lg-3 pl-md-0 pr-lg-2 pr-md-0">
          <div class="table-div bg-white rounded">
            <h2 class="card-header">Заполненные данные</h2>
             <?php if (isset($_POST['white_auto'])) {

                $_SESSION['name_auto'] = 'Mercedes Vito Tourer White';

               ?>

             <img src="<?php echo $_SESSION['white_auto']?>" alt="">

              <?php } elseif (isset($_POST['black_auto'])) {

              $_SESSION['name_auto'] = 'Mercedes Vito Tourer Black';

              ?>


               <img src="<?php echo $_SESSION['black_auto']?>" alt="">

               <?php  }?>
                <table class="table bg-white">
              <tbody>
                <tr>
                  <th scope="row">Откуда</th> <?php if(isset($_SESSION['from'])){ ?> <td><?= $_SESSION['from']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Куда</th> <?php if (isset($_SESSION['to'])) {?> <td><?=$_SESSION['to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Дата</th> <?php if (isset($_SESSION['date_to'])) {?> <td><?=$_SESSION['date_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Время</th> <?php if (isset($_SESSION['time_to'])) {?> <td><?=$_SESSION['time_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Количество людей</th> <?php if (isset($_SESSION['people'])) {?> <td><?=$_SESSION['people']?></td> <?php }?>
                </tr> <?php if(isset($_SESSION['back_on'])){?> <tr>
                  <th scope="row">Обратный Трансфер Дата</th> <?php if (isset($_SESSION['back_date'])) {?> <td><?=$_SESSION['back_date']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Обратный Трансфер Время</th> <?php if (isset($_SESSION['back_time'])) {?> <td><?=$_SESSION['back_time']?></td> <?php }?>
                </tr> <?php }?>
              </tbody>
            </table>
          </div>
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
<!-- Footer -->
<?php require_once('components/footer.php'); ?>
