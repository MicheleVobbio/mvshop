<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <title> M&V SRL</title>

</head>

<body>

  <?php session_start() ?>
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chisiamo.php"> Chi siamo</a>
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
                <?php if (isset($_SESSION['username'])) {?>
                <li class="nav-item">
                <a class="nav-link" href="php/logout.php">ESCI</a>
              </li>
              <?php }?>
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

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Stai cercando il meglio? <br>
                      Scegli iPhone!
                    </h1>
                    <p>
                      <strong style="font-size: 18px;">Design elegante, prestazioni eccellenti e un ecosistema
                        unico.</strong> <br>
                      Con iPhone, avrai sempre a portata di mano tutto ciò che ti serve: scatta foto straordinarie,
                      rimani connesso con chi ami, lavora in modo produttivo e divertiti con le tue app preferite. <br>
                      <strong style="font-size: 15px;">Scegli il modello di iPhone perfetto per le tue esigenze e scopri
                        un mondo di possibilità.</strong>
                    </p>
                    <div class="btn-box">
                      <a href="prodotti.php" class="btn1">
                        Scopri di più
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/iphone.png" style="width: 800px;" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      HP: il tuo compagno ideale per ogni sfida.
                    </h1>
                    <p>
                      <strong style="font-size: 18px;">Potenza, affidabilità e design impeccabile.</strong> <br>
                      Con i computer HP, avrai a disposizione strumenti all'avanguardia per affrontare qualsiasi
                      compito, dalla produttività al gaming. <br>
                      <strong style="font-size: 15px;">Scegli il modello HP perfetto per le tue esigenze e scopri un
                        mondo
                        di possibilità.</strong>
                    </p>
                    <div class="btn-box">
                      <a href="prodotti.php" class="btn1">
                        Scopri di più
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/hp.jpg" style="width: 480px;" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>

                      Apple iPad: creatività e produttività a portata di mano.
                    </h1>
                    <p>
                      Con iPad, potrai dare libero sfogo alla tua creatività disegnando, scrivendo e realizzando
                      contenuti multimediali. <br>
                      Inoltre, potrai lavorare in modo efficiente, navigare in internet e divertirti con le tue app
                      preferite. <br>
                      <strong style="font-size: 15px;">Scegli il modello di iPad perfetto per le tue esigenze e scopri
                        un mondo di possibilità.</strong>
                    </p>
                    <div class="btn-box">
                      <a href="prodotti.php" class="btn1">
                        Scopri di più
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/ipad.png" style="width: 800px;" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>

  </div>




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
          <a href="servizi.php">
            Altro ancora
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


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
            <a href="chisiamo.php">
              Scopri di più
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Tutte le <span>Informazioni</span>
        </h2>
        <p>
          <strong>
            Un team esperto e appassionato guida il nostro sito web di e-commerce, garantendo un'esperienza di acquisto eccellente per i nostri clienti.
          </strong>
        </p>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/leadership.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Leadership esperta
            </h5>
            <p>
              Il nostro team vanta una comprovata esperienza nel settore dell'e-commerce e dei prodotti elettronici, avendo lavorato in ruoli chiave presso aziende leader del settore. Questa esperienza ci permette di prendere decisioni strategiche ponderate, basate su una profonda conoscenza del mercato e delle ultime tendenze.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/cliente.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Focus sul cliente
            </h5>
            <p>
              La nostra priorità assoluta è la soddisfazione del cliente. Ci impegniamo a fornire un servizio clienti impeccabile, offrendo risposte rapide e cortesi a qualsiasi domanda o richiesta. Inoltre, prestiamo particolare attenzione alla navigazione del sito web, assicurando che sia facile da usare e intuitiva, per consentire ai clienti di trovare rapidamente ciò che cercano.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/innovazione.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Approccio innovativo
            </h5>
            <p>
              Restiamo costantemente aggiornati sulle ultime tecnologie e sui trend del settore e-commerce, implementandole prontamente sul nostro sito web per offrire ai clienti un'esperienza di acquisto sempre più coinvolgente e sicura. Ad esempio, utilizziamo le ultime tecniche di pagamento per garantire transazioni sicure e veloci, e offriamo una varietà di opzioni di consegna per soddisfare le esigenze di ogni cliente.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/qualita.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Impegno per la qualità
            </h5>
            <p>
              Controlliamo rigorosamente ogni prodotto prima di metterlo in vendita e monitoriamo attentamente ogni fase del processo di acquisto per garantire ai nostri clienti un'esperienza impeccabile. Inoltre, offriamo una politica di reso flessibile e un servizio di assistenza clienti dedicato per risolvere qualsiasi problema che possa sorgere.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="informazioni.php">
          Scopri di più
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->



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
        &copy; <span id="displayYear"></span> Tutti i diritti sono riservati ai rispettivi proprietari.
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