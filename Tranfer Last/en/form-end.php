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
        <li class="active">Choosing a Car</li>
        <li class="active">Passengers Insformation</li>
        <li class="active">Finish reservation</li>
      </ol>
    </div>
  </section>
  <section class="container-fluid reservation bg-white">
    <div class="container">
      <h1>Thank you for choosing us. Your request is accepted!</h1>
      <h2>The booking information is accepted by us. <br> Reservation information sent to your <span class="font-weight-bold">e-mail</span> address </h2>
    </div>
    <div class="container px-4">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 offset-lg-2 px-0 pl-lg-3 pl-md-0 pr-lg-2 pr-md-0">
          <div class="table-div bg-white rounded">
            <h2 class="card-header">Reservation Info</h2>
            <table class="table bg-white">
              <tbody>
                <tr>
                  <th scope="row">Name Surname</th>
                  <td><?php echo $_SESSION['name']?></td>
                </tr>
                <tr>
                  <th scope="row">E-mail</th>
                  <td><?php echo $_SESSION['email']?></td>
                </tr>
                <tr>
                  <th scope="row">Telephone Number</th>
                  <td><?php echo $_SESSION['phone']?></td>
                </tr>
                <tr>
                  <th scope="row">People</th>
                  <td><?php echo $_SESSION['peoples']?></td>
                </tr>
                <tr>
                  <th scope="row">Car</th>
                  <td><?php echo $_SESSION['name_auto'] ?></td>
                </tr>
                <tr>
                  <th scope="row">Pickup address</th>
                  <td><?php echo $_SESSION['from']?></td>
                </tr>
                <tr>
                  <th scope="row">Transder to</th>
                  <td><?php echo $_SESSION['to']?></td>
                </tr>
                <tr>
                  <th scope="row">Date</th>
                  <td><?php echo $_SESSION['date_to']?></td>
                </tr>
                <tr>
                  <th scope="row">Time</th>
                  <td><?php echo $_SESSION['time']?></td>
                </tr>

                <tr>
                  <th scope="row">Addres Info</th>
                  <td><?php echo $_SESSION['destination']?></td>
                </tr>
                <tr>
                  <th scope="row">Your Message</th>
                  <td><?php echo $_SESSION['special_note']?></td>
                </tr> <?php if(isset($_SESSION['child_seat'])){?> <tr>
                  <th scope="row">Child Seat</th>
                  <td>Yes</td>
                </tr> <?php }?> <?php if(isset($_SESSION['back_on'])){?> <tr>
                  <th scope="row">Return Transfer Date</th>
                  <td><?php echo $_SESSION['back_date']?></td>
                </tr>
                <tr>
                  <th scope="row">Return Transfer Time</th>
                  <td><?php echo $_SESSION['back_time']?></td>
                </tr>
                <tr>
                  <th scope="row">Air Company</th>
                  <td><?php echo $_SESSION['air_company']?></td>
                </tr>
                <tr>
                  <th scope="row">Flight Number</th>
                  <td><?php echo $_SESSION['flight_number']?></td>
                </tr>
                <tr class="price">
                  <th scope="row">Price</th>
                  <td><?php echo $_SESSION['price_2x']?></td>
                </tr> <?php } else{?> <tr class="price">
                  <th scope="row">Price</th>
                  <td><?php echo $_SESSION['price']?></td>
                </tr> <?php }?>
              </tbody>
            </table>
          </div>
          <a href="#" class="d-flex justify-content-end mt-2 text-decoration-none text-dark" onclick="window.print()" style="font-size: 20px; line-height: 1.3; color: #4e4e4e;
">Print	<ion-icon name="print-outline" class="h3"></ion-icon></a>
<p class="text-center"><span class="text-success">AFTER LANDING YOUR PLANE, WE WILL WAIT FOR YOU WITH A SIGN THAT WILL INDICATE YOUR NAME AT THE EXIT OF THE TERMINAL BUILDING</span> <br><br>
Thank you for choosing CLKTRANSFER.COM . Your booking information has been approved by our system . A copy of the booking information was sent to your email address. Please check your junk spam folder if it is not an incoming email. Marking info@clktransfer.com it is important for you to avoid any problems with our transfer notifications.</p>
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

        </div>
      </div>
    </div>
  </section>
</main>
<!-- Footer --> <?php require_once('components/footer.php'); ?> <?php //session_destroy();?>
