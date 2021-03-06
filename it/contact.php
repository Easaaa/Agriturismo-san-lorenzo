<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $roomView = $_POST['roomView'];
  $message = $_POST['text'];

  $mailTo = "info@sanlorenzodipersegno.it";
  $headers = "E-mail da: " . $emailFrom;
  $txt = "Hai ricevuto un e-mail da " . $name . ".\n\n" .
    "Numero di telefono: " . $phoneNumber . ".\n\n" .
    "Camera richiesta: " . $roomView . ".\n\n" .
    $message;

  mail($mailTo, $headers, $txt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
  <title>Agriturismo - Contatti</title>
</head>

<body>
  <div class="header">
    <img src="../images/logo.png" alt="" class="logo">

    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-align-right"></i>
    </label>

    <ul class="menu">
      <a href="home.html">Home</a>
      <a href="apartment.html">Appartamenti</a>
      <a href="new-prices.html">Prezzi</a>
      <a href="contact.php">Contatti</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>



  <div id='prices'>
    <img src="../images/flower.png" alt="">
    <h2>Contatti</h2>
    <p>Compilate il modulo, indicando esattamente le date di arrivo e partenza da voi gradite, specificando la tipologia di alloggio preferita (vedi pagina appartamenti). Grazie.</p>
  </div>
  <div id="contact-form">
    <form class='contact-form' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
      <input type="text" name="name" placeholder='Nome e cognome' class='contact-form-text'>
      <input type="email" name="email" placeholder='Email' class='contact-form-text'>
      <input type="text" name="phoneNumber" placeholder='Numero di telefono' class='contact-form-text'>
      <input type="text" name="roomView" placeholder='Tipo di appartamento gradito' class='contact-form-text'>
      <textarea name="text" placeholder='Scrivi qui la tua richiesta' class='contact-form-text'></textarea>
      <input type="submit" name="submit" class='contact-form-btn' value="Invia">
    </form>
  </div>

  <section id='info-contacts'>
    <h2>INFORMAZIONI</h2>
    <div class="address">
      <div class='info-contact'>
        <i class="fas fa-phone-square"></i>
        <h5>Direttore Tononi Luca</h5>
        <p>+39 329 3103384</p>
      </div>
      <div class='info-contact'>
        <i class="fas fa-envelope"></i>
        <h5>Email</h5>
        <p>info@sanlorenzodipersegno.it</p>
      </div>
      <div class="info-contact">
        <i class="fas fa-map-marker-alt"></i></br>
        Toscolano Maderno (BS)</br>
        Via Camerate 39</br>
        Parco Alto Garda Bresciano</br>
      </div>
      <div class="info-contact">
        <div class="item__social__contact">
          <a class='social-btn' target="_blank" href="https://www.facebook.com/AgriturismoSanLorenzoDiPersegno/"><i class="fab fa-facebook-f"></i>
          </a>
          <a class='social-btn' target="_blank" href="https://www.google.com/maps/place/San+lorenzo+di+persegno/@45.6807574,10.6085484,17z/data=!3m1!4b1!4m8!3m7!1s0x0:0xf56fbd94153af021!5m2!1s2018-05-07!2i2!8m2!3d45.6723671!4d10.6139674?hl=it"><i class="fab fa-google"></i>
          </a>
          <a class='social-btn' target="_blank" href="https://www.tripadvisor.it/Hotel_Review-g950408-d3251604-Reviews-San_Lorenzo_di_Persegno-Toscolano_Maderno_Province_of_Brescia_Lombardy.html"><i class="fab fa-tripadvisor"></i>
          </a>
          <a class='social-btn' href="mailto:info@sanlorenzodipersegno.it">
            <i class="far fa-envelope"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id='map'>
    <h2>Dove siamo</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.5089498395396!2d10.60854841556473!3d45.68075737910405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf56fbd94153af021!2sSan+lorenzo+di+persegno!5e0!3m2!1sit!2ses!4v1549053317942" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <section id='hotel'>
    <div class='text__title__hotel'>
      <h2>Hotel Vittoria</h2>
      <em>La nostra alternativa per gli amanti del lago</em>
      <p class='text__desc__hotel'><span>Clicca</span> sull’immagine per scoprire la nostra struttura nel borgo di Toscolano Maderno. L’albergo si trova nel centro storico, nel parco troverete una piscina e il parcheggio privato.</p>
    </div>
    <div class="img__hotel">
      <a target='_blank' href="https://vittoriahotel.eu"><img src="../images/logoHD.jpeg" alt="First slide">
      </a>
    </div>
  </section>











  <footer>
    <div class="left-footer">
      <div class="item__social__footer">
        <a target="_blank" class='social-btn' href="https://www.facebook.com/AgriturismoSanLorenzoDiPersegno/"><i class="fab fa-facebook-f"></i>
        </a>
        <a target="_blank" class='social-btn' href="https://www.google.com/maps/place/San+lorenzo+di+persegno/@45.6807574,10.6085484,17z/data=!3m1!4b1!4m8!3m7!1s0x0:0xf56fbd94153af021!5m2!1s2018-05-07!2i2!8m2!3d45.6723671!4d10.6139674?hl=it"><i class="fab fa-google"></i>
        </a>
        <a target="_blank" class='social-btn' href="https://www.tripadvisor.it/Hotel_Review-g950408-d3251604-Reviews-San_Lorenzo_di_Persegno-Toscolano_Maderno_Province_of_Brescia_Lombardy.html"><i class="fab fa-tripadvisor"></i>
        </a>
      </div>
      <p class="powered-by">Copyright © 2019 | Powered by <a target='_blank' href="https://leonardotononi.com">Leonardo Tononi</a></p>
    </div>

    <div class="central-footer">
      <img src="../images/logo.png" alt="photo agriturismo">
    </div>

    <div class="right__footer">
      <ul class="item__info__footer">
        <li>info@sanlorenzodipersegno.it</li>
        <li>tel. +39 3293103384</li>
        <li>P.iva 01558810980</li>
      </ul>
    </div>
  </footer>

</body>

</html>