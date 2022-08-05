<!-- Header -->
<?php require_once('components/header.php'); ?>

<main class="container-fluid">

    <!-- Header Image Start -->
    <?php require_once('components/header-small-image.php'); ?>
    <!-- Header Image End -->

    <section class="container my-5 contact-page">
        <h2>Контакты</h2>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <p><i class="fas fa-home mr-3"></i> <span class="font-weight-bold">Adres: </span> Öğretmenevleri Mah. Anadolu Cad. 66/B Konyaaltı / ANTALYA</p>
                <p><i class="fas fa-phone mr-3"></i><span class="font-weight-bold">Ofis:</span> <a href="tel:0242 228 44 31">(0242) 228 44 31</a></p>
                <p><i class="fas fa-phone mr-3"></i><span class="font-weight-bold">Cep:</span> <a href="tel:0531 354 23 96">(0531) 354 23 96</a></p>
                <p><i class="fas fa-envelope mr-3"></i> <a href="mailto:clkgrouptransfer@gmail.com">clkgrouptransfer@gmail.com</a></p>
                <form action="app/contact.php" method="post">
                    <div class="form-group">
                        <input placeholder="İsim Soyisim" name="name" type="text" class="form-control" id="name" aria-describedby="Name and Surname" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Telefon" name="phone" type="number" class="form-control" id="tel" aria-describedby="Telephone" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="E-posta adresiniz" name="mail" type="email" class="form-control" id="Email" aria-describedby="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Mesajınız" name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="policy" checked>
                        <label class="form-check-label" for="policy">Kullanım koşullarını  ve  gizlilik politikasını okudum, anladım ve kabul ediyorum.</label>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 float-right">Gönder</button>
                </form>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29431.10934794229!2d30.67721086537329!3d36.89173909355164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb3ad038accc7889!2sCLK%20GROUP%20CAR%20RENTALS%20VIP%20TRANSFER%20ANTALYA!5e0!3m2!1sen!2str!4v1582028282604!5m2!1sen!2str" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>


</main>

<!-- Footer -->
<?php require_once('components/footer.php'); ?>
