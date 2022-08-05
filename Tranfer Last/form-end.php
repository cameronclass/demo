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

                    <li class="active">Araç Seçimi</li>

                    <li class="active">Yolcu Bilgileri</li>

                    <li class="active">Rezervasyonu Tamamla</li>

                </ol>

            </div>

        </section>

        <section class="container-fluid reservation bg-white">

            <div class="container">

                <h1>Rezervasyonunuz Tamamlandı, Teşekkürler!</h1>

                <h2>Rezervasyon bilgileriniz sistemimiz tarafından onaylandı. Rezervasyon bilgileriniz <span class="font-weight-bold">e-mail</span> adresinize gönderilmiştir.</h2>
                <p class="text-center"> Gelen e-mail kutusunda bulunmuyorsa lütfen Junk e-mail kutusunu kontrol ediniz. info@clktransfer.com adresini güvenilir olarak işaretlemeniz, size daha sonra göndereceğimiz transfer bilgilendirmelerimizde problem yaşamamanız için önemlidir</p>

            </div>

            <div class="container px-4">

                <div class="row">

                    <div class="col-lg-8 col-md-12 col-sm-12 col-12 offset-lg-2 px-0 pl-lg-3 pl-md-0 pr-lg-2 pr-md-0">

                        <div class="table-div bg-white rounded">

                            <h2 class="card-header">Rezervasyon Özeti</h2>

                            <table class="table bg-white">

                                <tbody>

                                    <tr>

                                        <th scope="row">İsim</th>

                                        <td><?php echo $_SESSION['name']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">E-mail</th>

                                        <td><?php echo $_SESSION['email']?></td>


                                    </tr>

                                    <tr>

                                        <th scope="row">GSM / Telefon</th>

                                        <td><?php echo $_SESSION['phone']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Kişi Bilgileri</th>

                                        <td><?php echo $_SESSION['peoples']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Araç Seçimi</th>

                                        <td><?php echo $_SESSION['name_auto'] ?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Transfer Alış Yeriniz</th>

                                        <td><?php echo $_SESSION['from']?></td>


                                    </tr>

                                    <tr>

                                        <th scope="row">Transfer Bölgesi</th>

                                        <td><?php echo $_SESSION['to']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Transfer Alış Tarihi</th>

                                        <td><?php echo $_SESSION['date_to']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Alış Saati</th>

                                        <td><?php echo $_SESSION['time']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Uçuş Kodu</th>

                                         <td><?php echo $_SESSION['flight_number']?></td>

                                    </tr>

                                    <tr>

                                        <th scope="row">Gidilecek Yer</th>

                                        <td><?php echo $_SESSION['destination']?></td>

                                    </tr>
                                    <tr>

                                        <th scope="row">Özel Notunuz</th>

                                        <td><?php echo $_SESSION['special_note']?></td>

                                    </tr>
                                    <?php if(isset($_SESSION['child_seat'])){?>
                                    <tr>

                                        <th scope="row">Bebek Koltuğu</th>

                                        <td>Evet</td>

                                    </tr>
                                    <?php }?>
                                    <?php if(isset($_SESSION['back_on'])){?>
                                     <tr>

                                        <th scope="row">Geri Transfer Tarihi</th>

                                        <td><?php echo $_SESSION['back_date']?></td>

                                    </tr>
                                    <tr>

                                        <th scope="row">Geri Transfer Saati</th>

                                        <td><?php echo $_SESSION['back_time']?></td>

                                    </tr>
                                    <tr>

                                        <th scope="row">Havayolu Şirketi</th>

                                        <td><?php echo $_SESSION['air_company']?></td>

                                    </tr>
                                    <tr class="price">

                                        <th scope="row">Toplam Tutar</th>

                                        <td><?php echo $_SESSION['price_2x']?></td>

                                    </tr>
                                    <?php } else{?>
                                       <tr class="price">

                                        <th scope="row">Toplam Tutar</th>

                                        <td><?php echo $_SESSION['price']?></td>

                                    </tr>
                                    <?php }?>


                                </tbody>

                            </table>
                        </div>
                        <a href="#" class="d-flex justify-content-end mt-2 text-decoration-none text-dark" onclick="window.print()" style="font-size: 20px; line-height: 1.3; color: #4e4e4e;
">Yazdır	<ion-icon name="print-outline" class="h3"></ion-icon></a>

                        <!-- Hemen Destek -->

                        <div class="card mt-4 transfer-hemen">

                            <h3 class="card-header">Hemen Destek</h3>

                            <div class="card-body d-flex align-items-center justify-content-between flex-column">

                                <a href="tel+90 531 354 23 96" class="card-title h2 text-center text-dark">+90 531 354 23 96</a>

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

<?php //session_destroy();?>
