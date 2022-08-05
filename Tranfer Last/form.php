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
  <section class="container-fluid steps-form">
    <div class="container">
      <ol>
        <li class="active">Araç Seçimi</li>
        <li class="active">Yolcu Bilgileri</li>
        <li>Rezervasyonu Tamamla</li>
      </ol>
    </div>
  </section>
  <section class="container-fluid reservation">
    <div class="container px-4">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-4 form-information">
          <form action="app/mail.php" method="POST">
            <h3 class="text-center">Kişisel Bilgileriniz</h3>
            <div class="form-group">
              <label for="name">Ad Soyad :</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="name">Gsm :</label>
              <input type="tel" class="form-control" name="phone" id="name">
            </div>
            <div class="form-group">
              <label for="name">E-Posta :</label>
              <input type="email" class="form-control" name="email" id="name">
            </div>
            <h3 class="text-center">Seyahat ve Uçuş Bilgileriniz</h3>
            <div class="form-group d-flex flex-wrap justify-content-between">
              <div class="w-40">
                <label class="w-100" for="name">Transfer Saati :</label>
                <input type="text" class="timepicker form-control w-100" value="<?php echo $_SESSION['time_to']?>" id="name" name="time" required>
              </div>
              <div class="w-40">
                <label class="w-100" for="name">Havayolu Şirketi :</label>
                <input type="text" name="air_company" class="form-control w-100" id="name">
              </div>
              <div class="w-40">
                <label class="w-100" for="name">Uçuş Kodu* :</label>
                <input type="text" name="flight_number" class="form-control w-100" id="name">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Gidilecek Yer (Otel, Tesis Adı) :</label>
              <textarea class="form-control " name="destination" id="textarea" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Özel Notunuz :</label>
              <textarea class="form-control" name="special_note" id="special_note" rows="3"></textarea>
            </div>
            <h3 class="text-center">Özel Talepleriniz</h3>
            <div class="d-flex justify-content-between">
              <label for="bebek">Bebek Koltuğu İstiyor Musunuz? (Ücretsiz)</label>
              <input class="apple-switch" id="bebek" name="child_seat" type="checkbox">
            </div>
            <div class="js-people-div d-none">
              <br>
              <hr>
              <h3>Yolcu isimleri</h3>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name1" class="form-control" id="name1">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport1" class="form-control" id="pasaport1">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name2" class="form-control" id="name2">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport2" class="form-control" id="pasaport2">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name3" class="form-control" id="name3">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport3" class="form-control" id="pasaport3">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name4" class="form-control" id="name4">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport4" class="form-control" id="pasaport4">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name5" class="form-control" id="name5">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport5" class="form-control" id="pasaport5">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Ad Soyad :</label>
                <input type="text" name="name6" class="form-control" id="name6">
              </div>
              <div class="form-group">
                <label for="name">Kimlik veya Pasaport No :</label>
                <input type="text" name="pasaport6" class="form-control" id="pasaport6">
              </div>
              <br>
            </div>
            <button type="submit" class="btn btn-primary float-right mt-4 px-4" id="form-end">REZERVASYONU TAMAMLA</button>
          </form>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-0 pl-lg-3 pl-md-0 pr-lg-2 pr-md-0">
          <div class="table-div bg-white rounded">
            <h2 class="card-header">Rezervasyon Özeti</h2>
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
                  <th scope="row">Transfer Alış Yeriniz</th> <?php if(isset($_SESSION['from'])){ ?> <td><?= $_SESSION['from']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Transfer Bölgesi</th> <?php if (isset($_SESSION['to'])) {?> <td><?=$_SESSION['to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Transfer Tarihi</th> <?php if (isset($_SESSION['date_to'])) {?> <td><?=$_SESSION['date_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Saati</th> <?php if (isset($_SESSION['time_to'])) {?> <td><?=$_SESSION['time_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Kişi Sayısı</th> <?php if (isset($_SESSION['people'])) {?> <td class="js-people"><?=$_SESSION['people']?></td> <?php }?>
                </tr> <?php if(isset($_SESSION['back_on'])){?> <tr>
                  <th scope="row">Geri Transfer Tarihi</th> <?php if (isset($_SESSION['back_date'])) {?> <td><?=$_SESSION['back_date']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Geri Transfer Saati</th> <?php if (isset($_SESSION['back_time'])) {?> <td><?=$_SESSION['back_time']?></td> <?php }?>
                </tr> <?php }?>
              </tbody>
            </table>
          </div>
          <!-- Hemen Destek -->
          <div class="card mt-4 transfer-hemen">
            <h3 class="card-header">Hemen Destek</h3>
            <div class="card-body d-flex align-items-center justify-content-between flex-column">
              <a href="tel:+90 242 228 44 31" class="card-title h4 text-center">+90 242 228 44 31</a>
              <a href="tel:+90 521 354 23 96" class="card-title h4 text-center">+90 521 354 23 96</a>
              <a href="tel:+90 532 781 63 59" class="card-title h4 text-center">+90 532 781 63 59</a>
              <p class="card-text">Her saatte bize ulaşabilirsiniz</p>
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
