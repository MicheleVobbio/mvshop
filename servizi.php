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


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            I nostri <span>Servizi</span>
          </h2>
          <p>
            Prezzi convenienti e servizi di altissima qualità ti aspettano. <br>
            M&V il tuo alleato per una shopping experience senza paragoni!
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/garanzia.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Garanzia per i tuoi acquisti
                </h5>
                <p>
                  Acquista senza pensieri! Tutti i nostri prodotti elettronici sono coperti da garanzia di 2 anni dalla
                  data di acquisto.
                  In caso di difetti di conformità, potrai richiedere la riparazione o la sostituzione gratuita del
                  prodotto.
                </p>
                <a href="">
                  Scopri di più
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/spedizione.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Spedizioni rapide e sicure
                </h5>
                <p>
                  Ricevi i tuoi ordini comodamente a casa tua in pochi giorni lavorativi.
                  Potrai sempre monitorare lo stato della tua spedizione grazie al codice di tracking che ti forniremo.
                  Spedizione gratuita per ordini superiori a 400 €.
                </p>
                <a href="">
                  Scopri di più
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/pagamento.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pagamenti sicuri e veloci
                </h5>
                <p>
                  Offriamo tutti i tipi di metodi di pagamento sicuri e veloci e i tuoi dati sono al sicuro.
                  Tutte le transazioni sono protette da sistemi di sicurezza all'avanguardia per garantire la massima
                  tranquillità.
                  Scegli l'affidabilità, scegli M&V!
                </p>
                <a href="">
                  Scopri di più
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            Altro ancora
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

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