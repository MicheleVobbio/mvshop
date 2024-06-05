<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> M&V SRL </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
  <?php session_start(); ?>
  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              M&V SRL
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="chisiamo.php"> Chi siamo <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servizi.php">Servizi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prodotti.php">Prodotti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="informazioni.php">Informazioni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" <?php if (isset($_SESSION['username'])) {
                                      echo 'href="#"';
                                    } else {
                                      echo 'href="login.html"';
                                    } ?>> <i class="fa fa-user" aria-hidden="true"></i> <?php if (isset($_SESSION['username'])) {
                                                                      echo $_SESSION['username'];
                                                                    } else {
                                                                      echo "ACCEDI";
                                                                    } ?>
                </a>
              </li>
              <?php if (isset($_SESSION['username'])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="php/logout.php">ESCI</a>
                </li>
              <?php } ?>
              <li class="nav-item">
                <a class="nav-link" href="carrello.php">
                  <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Chi <span>Siamo</span>
        </h2>
        <p>
          Benvenuto su M&V! Il tuo negozio online di prodotti elettronici e accessori con sede a Marcianise e filiali in
          tutta Italia.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/azienda.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <p>
              Siamo un'azienda con una grande passione per l'elettronica e la tecnologia. La nostra mission è quella di
              offrire ai nostri clienti prodotti di alta qualità a prezzi competitivi, unita a un servizio eccellente e
              alla massima attenzione alle loro esigenze.
              Nel nostro negozio online potrai trovare un'ampia gamma di prodotti delle migliori marche: smartphone,
              tablet, notebook, computer, TV, elettrodomestici, accessori e molto altro ancora.
              Inoltre, offriamo la possibilità di acquistare online e ritirare comodamente in negozio presso la nostra
              sede di Marcianise o in una delle nostre filiali presenti sul territorio nazionale.
            </p>
            <p>
              Seguici sui social network per rimanere sempre aggiornato sulle nostre ultime offerte e novità!
            </p>
            <a href="">
              Scopri di più
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Indirizzo
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Marcianise, Italy
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +39 3276543509
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  m&v@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Qui vi riportiamo i nostri punti di contatto,per ulteriori informazioni contattaci o inviaci un'email
              all'indirizzo indicato.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Menu
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="chisiamo.php">
                Chi siamo
              </a>
              <a class="" href="servizi.php">
                Servizi
              </a>
              <a class="" href="prodotti.php">
                Prodotti
              </a>
              <a class="" href="informazioni.php">
                Informazioni
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Non sei ancora registrato?
          </h4>
          <p>Registrati subito,non perderti ulteriori sconti.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Tutti i diritti sono riservati ai leggittimi proprietari.
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>