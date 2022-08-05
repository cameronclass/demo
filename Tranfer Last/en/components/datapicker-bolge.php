<?php session_unset();
 unset($_SESSION['back_on']);
?>
<section class="container datapicker">
  <h2>Antalya Transfer</h2>
  <form action="../app/section.php" method="POST">
    <ol>
      <li class="where">
        <div>Pickup Location</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="from">
          <option selected="" value="Antalya Havalimani">Antalya Airport</option>
          <option value="Antalya Merkezi">Antalya City Center</option>
          <option value="Tekirova">Tekirova</option>
          <option value="Sorgun">Sorgun</option>
          <option value="Kalkan">Kalkan</option>
          <option value="Demre">Demre</option>
          <option value="Dalaman">Dalaman</option>
          <option value="Titreyengöl">Titreyengöl</option>
          <option value="Okurcalar">Okurcalar</option>
          <option value="Kiriş">Kiriş</option>
          <option value="Fethiye">Fethiye</option>
          <option value="Kızılağaç">Kızılağaç</option>
          <option value="Kızılot">Kızılot</option>
          <option value="Payallar">Payallar</option>
          <option value="Konaklı">Konaklı</option>
          <option value="Kestel">Kestel</option>
          <option value="Kargıcak">Kargıcak</option>
          <option value="Kaş">Kaş</option>
          <option value="Adrasan">Adrasan</option>
          <option value="Olympos">Olympos</option>
          <option value="Göynük">Göynük</option>
          <option value="Manavgat">Manavgat</option>
          <option value="Kumluca">Kumluca</option>
          <option value="Çolaklı">Çolaklı </option>
          <option value="Kumköy">Kumköy</option>
          <option value="Avsallar">Avsallar</option>
          <option value="Türkler">Türkler</option>
          <option value="Evrenseki">Evrenseki</option>
          <option value="Boğazkent">Boğazkent</option>
          <option value="Gündoğdu">Gündoğdu</option>
          <option value="Mahmutlar">Mahmutlar</option>
          <option value="İncekum">İncekum</option>
          <option value="Konyaaltı">Konyaaltı</option>
          <option value="Çamyuva">Çamyuva</option>
          <option value="Çıralı">Çıralı</option>
          <option value="Alanya">Alanya</option>
          <option value="Side">Side</option>
          <option value="Beldibi">Beldibi</option>
          <option value="Belek">Belek</option>
          <option value="Kemer">Kemer</option>
          <option value="Kundu">Kundu</option>
          <option value="Lara">Lara</option>
        </select>
      </li>
      <li class="where-to">
        <div>Dropoff Location</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="to">
          <option value="Antalya Havalimani">Antalya Airport</option>
          <option value="Antalya Merkezi">Antalya City Center</option>
          <option value="Tekirova">Tekirova</option>
          <option value="Sorgun">Sorgun</option>
          <option value="Kalkan">Kalkan</option>
          <option value="Demre">Demre</option>
          <option value="Titreyengöl">Titreyengöl</option>
          <option value="Okurcalar">Okurcalar</option>
          <option value="Kiriş">Kiriş</option>
          <option value="Fethiye">Fethiye</option>
          <option value="Dalaman">Dalaman</option>
          <option value="Kızılağaç">Kızılağaç</option>
          <option value="Kızılot">Kızılot</option>
          <option value="Payallar">Payallar</option>
          <option value="Konaklı">Konaklı</option>
          <option value="Kestel">Kestel</option>
          <option value="Kargıcak">Kargıcak</option>
          <option value="Kaş">Kaş</option>
          <option value="Adrasan">Adrasan</option>
          <option value="Olympos">Olympos</option>
          <option value="Göynük">Göynük</option>
          <option value="Manavgat">Manavgat</option>
          <option value="Kumluca">Kumluca</option>
          <option value="Çolaklı">Çolaklı </option>
          <option value="Kumköy">Kumköy</option>
          <option value="Avsallar">Avsallar</option>
          <option value="Türkler">Türkler</option>
          <option value="Evrenseki">Evrenseki</option>
          <option value="Boğazkent">Boğazkent</option>
          <option value="Gündoğdu">Gündoğdu</option>
          <option value="Mahmutlar">Mahmutlar</option>
          <option value="İncekum">İncekum</option>
          <option value="Konyaaltı">Konyaaltı</option>
          <option value="Çıralı">Çamyuva</option>
          <option value="Çıralı">Çıralı</option>
          <option value="Alanya">Alanya</option>
          <option value="Side">Side</option>
          <option value="Beldibi">Beldibi</option>
          <option value="Belek">Belek</option>
          <option value="Kemer">Kemer</option>
          <option value="Kundu">Kundu</option>
          <option value="Lara">Lara</option>
        </select>
      </li>
      <li class="people">
        <div>People</div>
        <input id="people" type="text" value="1" name="demo0" data-bts-min="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class=""
          data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-button-down-class="btn btn-success" data-bts-button-up-class="btn btn-success">
      </li>
      <li class="date">
        <div>Date</div>
        <input id="startDate" width="276" required name="date_to" readonly="readonly" />
      </li>
      <li class="time">
        <div>Depart Flight Time</div>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <input type="text" class="timepicker form-control" required name="time_to" />
      </li>
    </ol>
    <ol class="return-transfer">
      <li class="geri-transfer-switch">
        <div>Want Return Transfer</div>
        <input class="apple-switch" name="back_input" type="checkbox">
      </li>
      <li class="date">
        <div>Date</div>
        <input id="endDate" name="back_date" disabled>
      </li>
      <li class="time">
        <div>Time</div>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <input type="text" class="timepicker form-control" id="timepicker" name="back_time" disabled>
      </li>
      <li class="where-to datapicker-valuta ml-3">
        <div>Currency</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="valuta">
          <option value="TL">TL</option>
          <option value="$">Dolar</option>
          <option value="€">Euro</option>
        </select>
      </li>
      <button class="start">Search</button>
    </ol>
  </form>
</section>
