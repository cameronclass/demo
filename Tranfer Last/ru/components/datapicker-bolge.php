<?php session_unset();
 unset($_SESSION['back_on']);
?>
<section class="container datapicker">
  <h2>Antalya Transfer</h2>
  <form action="../app/section.php" method="POST">
    <ol>
      <li class="where">
        <div>Откуда</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="from">
          <option selected="" value="Antalya Havalimani">Аэропорт Анталии</option>
          <option value="Antalya Merkezi">Центр Анталии</option>
          <option value="Tekirova">Текирова</option>
          <option value="Sorgun">Соргун</option>
          <option value="Kalkan">Калкан</option>
          <option value="Demre">Демпе</option>
          <option value="Titreyengöl">Титрейенгол</option>
          <option value="Okurcalar">Окурджалар</option>
          <option value="Kiriş">Кириш</option>
          <option value="Fethiye">Фетхие</option>
          <option value="Kızılağaç">Кызылагач</option>
          <option value="Kızılot">Кызылот</option>
          <option value="Payallar">Паяллар</option>
          <option value="Konaklı">Конаклы</option>
          <option value="Kestel">Кестел</option>
          <option value="Kargıcak">Каргыджак</option>
          <option value="Kaş">Каш</option>
          <option value="Dalaman">Даламан</option>
          <option value="Adrasan">Адрасан</option>
          <option value="Olympos">Олимпос</option>
          <option value="Göynük">Гейнюк</option>
          <option value="Manavgat">Манавгат</option>
          <option value="Kumluca">Кумлуджа</option>
          <option value="Çolaklı">Чолаклы </option>
          <option value="Kumköy">Кумкой</option>
          <option value="Avsallar">Авсаллап</option>
          <option value="Türkler">Тюрклер</option>
          <option value="Evrenseki">Евренсеки</option>
          <option value="Boğazkent">Богазкент</option>
          <option value="Gündoğdu">Гюндогду</option>
          <option value="Mahmutlar">Махмутлар</option>
          <option value="İncekum">Инджекум</option>
          <option value="Konyaaltı">Коньяалты</option>
          <option value="Çamyuva">Чамьюва</option>
          <option value="Çıralı">Чирали</option>
          <option value="Alanya">Аланья</option>
          <option value="Side">Сиде</option>
          <option value="Beldibi">Бельдиби</option>
          <option value="Belek">Белек</option>
          <option value="Kemer">Кемер</option>
          <option value="Kundu">Кунду</option>
          <option value="Lara">Лара</option>
        </select>
      </li>
      <li class="where-to">
        <div>Куда</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="to">
          <option value="Antalya Havalimani">Аэропорт Анталии</option>
          <option value="Antalya Merkezi">Центр Анталии</option>
          <option value="Tekirova">Текирова</option>
          <option value="Sorgun">Соргун</option>
          <option value="Kalkan">Калкан</option>
          <option value="Demre">Демпе</option>
          <option value="Titreyengöl">Титрейенгол</option>
          <option value="Okurcalar">Окурджалар</option>
          <option value="Kiriş">Кириш</option>
          <option value="Fethiye">Фетхие</option>
          <option value="Kızılağaç">Кызылагач</option>
          <option value="Kızılot">Кызылот</option>
          <option value="Payallar">Паяллар</option>
          <option value="Konaklı">Конаклы</option>
          <option value="Kestel">Кестел</option>
          <option value="Kargıcak">Каргыджак</option>
          <option value="Kaş">Каш</option>
          <option value="Dalaman">Даламан</option>
          <option value="Adrasan">Адрасан</option>
          <option value="Olympos">Олимпос</option>
          <option value="Göynük">Гейнюк</option>
          <option value="Manavgat">Манавгат</option>
          <option value="Kumluca">Кумлуджа</option>
          <option value="Çolaklı">Чолаклы </option>
          <option value="Kumköy">Кумкой</option>
          <option value="Avsallar">Авсаллап</option>
          <option value="Türkler">Тюрклер</option>
          <option value="Evrenseki">Евренсеки</option>
          <option value="Boğazkent">Богазкент</option>
          <option value="Gündoğdu">Гюндогду</option>
          <option value="Mahmutlar">Махмутлар</option>
          <option value="İncekum">Инджекум</option>
          <option value="Konyaaltı">Коньяалты</option>
          <option value="Çamyuva">Чамьюва</option>
          <option value="Çıralı">Чирали</option>
          <option value="Alanya">Аланья</option>
          <option value="Side">Сиде</option>
          <option value="Beldibi">Бельдиби</option>
          <option value="Belek">Белек</option>
          <option value="Kemer">Кемер</option>
          <option value="Kundu">Кунду</option>
          <option value="Lara">Лара</option>
        </select>
      </li>
      <li class="people">
        <div>Человек</div>
        <input id="people" type="text" value="1" name="demo0" data-bts-min="0" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class=""
          data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-button-down-class="btn btn-success" data-bts-button-up-class="btn btn-success">
      </li>
      <li class="date">
        <div>Дата</div>
        <input id="startDate" width="276" required name="date_to" readonly="readonly" />
      </li>
      <li class="time">
        <div>Время</div>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <input type="text" class="timepicker form-control" required name="time_to" />
      </li>
    </ol>
    <ol class="return-transfer">
      <li class="geri-transfer-switch">
        <div>Обратный Трансфер</div>
        <input class="apple-switch" name="back_input" type="checkbox">
      </li>
      <li class="date">
        <div>Дата</div>
        <input id="endDate" name="back_date" disabled>
      </li>
      <li class="time">
        <div>Время</div>
        <span><i class="fas fa-map-marker-alt"></i></span>
        <input type="text" class="timepicker form-control" id="timepicker" name="back_time" disabled>
      </li>
      <li class="where-to datapicker-valuta ml-3">
        <div>Валюта</div>
        <span class="select-icon-my"><i class="fas fa-map-marker-alt"></i></span>
        <select class="js-example-basic-single" name="valuta">
          <option value="TL">TL</option>
          <option value="$">Dolar</option>
          <option value="€">Euro</option>
        </select>
      </li>
      <button class="start">Искать</button>
    </ol>
  </form>
</section>
