<!-- Header --> <?php

session_start();

if (empty($_SESSION)) {

    header('location: /form-error.php');

    return false;

}



 $auto = array(
    'Kundu'                  => '120',
    'Antalya Merkezi'        => '110',
    'Belek'                  => '140',
    'Titreyengöl'            => '200',
    'Dalaman'                => '1250',
    'Boğazkent'              =>	'160',
    'Çolaklı'                => '180',
    'Side'                   =>	'200',
    'Manavgat'               => '210',
    'Sorgun'                 => '220',
    'Kızılot'                => '250',
    'Kızılağaç'              => '250',
    'Okurcalar'              => '260',
    'Avsallar'               => '260',
    'Türkler'	             => '280',
    'Alanya'	             => '450',
    'Mahmutlar'              => '480',
    'Gazipaşa Havalimanı'    => '500',
    'Beldibi'	             => '140',
    'Göynük'	             => '150',
    'Kemer'	                 => '160',
    'Kiriş'                  => '180',
    'Çamyuva'                => '180',
    'Tekirova'               => '200',
   'Çıralı'	                 => '280',
    'Olimpos'	             => '340',
    'Kumluca'	             => '390',
   'Finike'               	 => '460',
    'Kaş'                    => '700',
   'Kalkan'	                 => '800',
   'Fethiye'                 => '1100',
   'Gündoğdu'                => '180',
   'Demre'                   => '650',
   'Payallar'                => '290',
   'Konaklı'                 => '290',
   'Kestel'                  => '460',
   'Kargıcak'                => '500',
   'Adrasan'                 => '380',
   'Kumköy'                  => '180',
   'Evrenseki'               => '180',
   'İncekum'                 => '270',
   'Konyaaltı'               => '130',
   'Lara'                    => '110'
 );

 $auto_dolar = array(
    'Kundu'                  => '25',
    'Antalya Merkezi'        => '23',
    'Belek'                  => '27',
    'Titreyengöl'            => '35',
    'Dalaman'                => '210',
    'Boğazkent'              =>	'30',
    'Çolaklı'                => '35',
    'Side'                   =>	'35',
    'Manavgat'               => '38',
    'Sorgun'                 => '45',
    'Kızılot'                => '45',
    'Kızılağaç'              => '45',
    'Okurcalar'              => '46',
    'Avsallar'               => '46',
    'Türkler'	             => '50',
    'Alanya'	             => '78',
    'Mahmutlar'              => '82',
    'Gazipaşa Havalimanı'    => '85',
    'Beldibi'	             => '28',
    'Göynük'	             => '28',
    'Kemer'	                 => '30',
    'Kiriş'                  => '33',
    'Çamyuva'                => '33',
    'Tekirova'               => '45',
    'Çıralı'	                 => '40',
     'Olimpos'	             => '60',
     'Kumluca'	             => '68',
    'Finike'               	 => '80',
     'Kaş'                    => '120',
    'Kalkan'	                 => '135',
    'Fethiye'                 => '185',
    'Gündoğdu'                => '35',
    'Demre'                   => '110',
    'Payallar'                => '50',
    'Konaklı'                 => '50',
    'Kestel'                  => '80',
    'Kargıcak'                => '85',
    'Adrasan'                 => '65',
    'Kumköy'                  => '35',
    'Evrenseki'               => '35',
    'İncekum'                 => '50',
    'Konyaaltı'               => '24',
    'Lara'                    => '20'
 );


 $auto_euro = array(
    'Kundu'                  => '25',
    'Antalya Merkezi'        => '23',
    'Belek'                  => '27',
    'Titreyengöl'            => '35',
    'Dalaman'                => '210',
    'Boğazkent'              =>	'30',
    'Çolaklı'                => '35',
    'Side'                   =>	'35',
    'Manavgat'               => '38',
    'Sorgun'                 => '45',
    'Kızılot'                => '45',
    'Kızılağaç'              => '45',
    'Okurcalar'              => '46',
    'Avsallar'               => '46',
    'Türkler'	             => '50',
    'Alanya'	             => '78',
    'Mahmutlar'              => '82',
    'Gazipaşa Havalimanı'    => '85',
    'Beldibi'	             => '28',
    'Göynük'	             => '28',
    'Kemer'	                 => '30',
    'Kiriş'                  => '33',
    'Çamyuva'                => '33',
    'Tekirova'               => '45',
    'Çıralı'	                 => '40',
     'Olimpos'	             => '60',
     'Kumluca'	             => '68',
    'Finike'               	 => '80',
     'Kaş'                    => '120',
    'Kalkan'	                 => '135',
    'Fethiye'                 => '185',
    'Gündoğdu'                => '35',
    'Demre'                   => '110',
    'Payallar'                => '50',
    'Konaklı'                 => '50',
    'Kestel'                  => '80',
    'Kargıcak'                => '85',
    'Adrasan'                 => '65',
    'Kumköy'                  => '35',
    'Evrenseki'               => '35',
    'İncekum'                 => '50',
    'Konyaaltı'               => '24',
    'Lara'                    => '20'
 );

require_once('components/header.php'); ?> <main class="container-fluid">
  <!-- Header Image Start --> <?php require_once('components/header-small-image.php'); ?>
  <!-- Header Image End -->
  <!-- Steps Start -->
  <section class="container-fluid steps-form">
    <div class="container">
      <ol>
        <li class="active">Choosing a Car</li>
        <li>Passengers Insformation</li>
        <li>Finish reservation</li>
      </ol>
    </div>
  </section>
  <!-- Steps End -->
  <section class="container-fluid reservation">
    <div class="container">
      <h1>These prices are not for each person but for the Car.</h1>
      <div class="row ml-lg-0 ml-md-0">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-lg-0 pl-md-0 mb-4">
          <div class="table-div bg-white rounded">
            <h2 class="card-header">Transfer Info</h2>
            <table class="table bg-white">
              <tbody>
                <tr>
                  <th scope="row">Pickup Location</th> <?php if(isset($_SESSION['from'])){ ?> <td><?= $_SESSION['from']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Dropoff Location</th> <?php if (isset($_SESSION['to'])) {?> <td><?=$_SESSION['to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Date</th> <?php if (isset($_SESSION['date_to'])) {?> <td><?=$_SESSION['date_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Depart Flight Time</th> <?php if (isset($_SESSION['time_to'])) {?> <td><?=$_SESSION['time_to']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">People</th> <?php if (isset($_SESSION['people'])) {?> <td><?=$_SESSION['people']?></td> <?php }?>
                </tr> <?php if(isset($_SESSION['back_on'])){

                                    ?> <tr>
                  <th scope="row">Return Transfer Date</th> <?php if (isset($_SESSION['back_date'])) {?> <td><?=$_SESSION['back_date']?></td> <?php }?>
                </tr>
                <tr>
                  <th scope="row">Return Transfer Time</th> <?php if (isset($_SESSION['back_time'])) {?> <td><?=$_SESSION['back_time']?></td> <?php }?>
                </tr> <?php }?>
              </tbody>
            </table>
          </div>
          <!-- Hemen Destek -->
          <div class="card mt-4 transfer-hemen">
            <h3 class="card-header">Write to us or call Us</h3>
            <div class="card-body d-flex align-items-center justify-content-between flex-column">
              <a href="tel:+90 531 354 23 96" class="card-title h2 text-center text-dark">+90 531 354 23 96</a>
              <p class="card-text">You can contact us any time</p>
              <ul class="social-icons">
                <li><a href="#"><img src="img/whatsapp.png" alt="WhatsApp"></a></li>
                <li><a href="#"><img src="img/instagram-sketched.png" alt="İnstagram"></a></li>
                <li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
              </ul>
            </div>
          </div>
        </div> <?php
                 $container = [];
                if ($_SESSION['valuta'] == 'TL') {

                    $container = $auto;
                }
                else if($_SESSION['valuta'] == '$'){

                    $container = $auto_dolar;
                }
                else if($_SESSION['valuta'] == '€'){

                    $container = $auto_euro;
                }
                 foreach ($container as $key => $value) {

                    if ($_SESSION['from'] == $key || $_SESSION['to'] == $key) {



                        $priceDiscount = $value . $_SESSION['valuta'];
                        $priceWithoutDiscount =  ceil($value *0.15) + $value .  $_SESSION['valuta'];

                        $doublePriceDiscount = $value*2 . $_SESSION['valuta'];
                        $doublePriceWithoutDiscount =  ceil($value *0.15) + $value*2 .  $_SESSION['valuta'];



                        $_SESSION['price'] = $priceDiscount;

                        $_SESSION['price_2x'] = $doublePriceDiscount;
                        $_SESSION['white_auto'] = '/img/car-white.jpeg';
                        $_SESSION['black_auto'] = '/img/car-black.jpg';
                        $_SESSION['name_auto'] = 'Mercedes Vito Tourer';

                        ?> <div class="col-lg-8 col-md-12 col-sm-12 col-12 pl-lg-3">
          <form action="form.php" method="post">
            <div class="card card-cars">
              <h5 class="card-header font-weight-bold h4"><?php echo $_SESSION['name_auto']?></h5>
              <div class="card-body row p-1">
                <div class="col-lg-5 col-md-5 col-12">
                  <img src="<?php echo $_SESSION['white_auto']?>" alt="">
                  <input class="d-none" name="white_auto">
                </div>
                <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-around flex-column">
                  <h5 class="card-content-text">Suitable for transfers for 6 people.</h5>
                  <div class="d-flex d-flex justify-content-around">
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: For 6 People.">
                      <ion-icon name="snow-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: Free WİFİ">
                      <ion-icon name="wifi-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: 7 Baggages">
                      <ion-icon name="briefcase-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: Free snacks">
                      <img src="img/bootle.png" style="max-width: 100px; height: 24px;" alt="">
                    </button>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 d-flex justify-content-center flex-column text-center">
                  <div class="discount"> 15 %<br>
                    <span>Discount</span>
                  </div>
                  <h3 class="text-uppercase">Price</h3> <?php if(isset($_SESSION['back_on'])){?> <h4 class="text-uppercase m-1 old-price"><?= $doublePriceWithoutDiscount?></h4>
                  <h4 class="text-uppercase m-1 new-price"><?= $doublePriceDiscount ?></h4> <?php } else{?> <h4 class="text-uppercase m-1 old-price"><?= $priceWithoutDiscount?></h4>
                  <h4 class="text-uppercase m-1 new-price" name="sale"><?= $priceDiscount?></h4> <?php }?> <button type="submit" class="btn btn-success mx-2">Choose Car</button>
                </div>
              </div>
            </div>
          </form>
          <form action="form.php" method="post">
            <div class="card card-cars">
              <h5 class="card-header font-weight-bold h4"><?php echo $_SESSION['name_auto']?></h5>
              <div class="card-body row p-1">
                <div class="col-lg-5 col-md-5 col-12">
                  <img src="<?php echo $_SESSION['black_auto']?>" alt="">
                  <input class="d-none" name="black_auto">
                </div>
                <div class="col-lg-4 col-md-4 col-12 d-flex justify-content-around flex-column">
                  <h5 class="card-content-text">Suitable for transfers for 6 people.</h5>
                  <div class="d-flex d-flex justify-content-around">
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: For 6 People.">
                      <ion-icon name="snow-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: Free WİFİ">
                      <ion-icon name="wifi-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: 7 Baggages">
                      <ion-icon name="briefcase-outline" style="font-size: 25px;"></ion-icon>
                    </button>
                    <button class="btn btn-primary d-flex align-items-center mr-2" uk-tooltip="title: Free snacks">
                      <img src="img/bootle.png" style="max-width: 100px; height: 24px;" alt="">
                    </button>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 d-flex justify-content-center flex-column text-center">
                  <div class="discount"> 15 %<br>
                    <span>Discount</span>
                  </div>
                  <h3 class="text-uppercase">Price</h3> <?php if(isset($_SESSION['back_on'])){?> <h4 class="text-uppercase m-1 old-price"><?= $doublePriceWithoutDiscount?></h4>
                  <h4 class="text-uppercase m-1 new-price"><?= $doublePriceDiscount ?></h4> <?php } else{?> <h4 class="text-uppercase m-1 old-price"><?= $priceWithoutDiscount?></h4>
                  <h4 class="text-uppercase m-1 new-price" name="sale"><?= $priceDiscount?></h4> <?php }?> <button type="submit" class="btn btn-success mx-2">Choose Car</button>
                </div>
              </div>
            </div>
          </form>
        </div> <?php } }?>
      </div>
    </div>
  </section>
</main>
<!-- Footer --> <?php require_once('components/footer.php'); ?>
