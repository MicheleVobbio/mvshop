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

    <link rel="stylesheet" href="css/prodotti.css">
    <script src="js/prodotti.js"></script>

    <title> M&V SRL</title>

</head>

<body>

    <?php
    session_start();
    require_once('php/config.php');
    $query = "SELECT * FROM prodotti";

    $ris = mysqli_query($conn, $query);

    $righe = mysqli_num_rows($ris);

    $array = array();

    if ($righe > 0) {
        while ($riga = mysqli_fetch_assoc($ris)) {
            $array[] = $riga;
        }
    }







    ?>
    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.png" alt="">
            </div>
        </div>



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

        <h2>
            I nostri <span>Prodotti</span>
        </h2>



        <div class="boxCard">
            <div class="card">

                <div class="imgBox">
                    <img src="<?php echo $array[0]['immagine']; ?>" alt="<?php echo $array[0]['nome']; ?>" class="mouse">
                </div>

                <div class="contentBox">
                    <h3><?php echo $array[0]['nome']; ?></h3>
                    <h2 class="price"><?php echo $array[0]['prezzo']; ?> €</h2>
                    <form action="php/agg_prd.php" method="POST">
                        <input name="id_prodotto" hidden value="<?php echo $array[0]['id_prodotto']; ?>">
                        <select name="quantita">
                            <option value="">Quantita</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <button type="submit" name="agg_al_carr" class="buy">Aggiungi al carrello</a>
                    </form>
                </div>

            </div>


            <div class="card2">

                <div class="imgBox2">
                    <img src="<?php echo $array[1]['immagine']; ?>" alt="<?php echo $array[1]['nome']; ?>" class="mouse2">
                </div>

                <div class="contentBox2">
                    <h3><?php echo $array[1]['nome']; ?></h3>
                    <h2 class="price2"><?php echo $array[1]['prezzo']; ?> €</h2>
                    <form action="php/agg_prd.php" method="POST">
                        <select name="quantita">
                            <option value="">Quantita</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <input name="id_prodotto" hidden value="<?php echo $array[1]['id_prodotto']; ?>">
                        <button type="submit" name="agg_al_carr" class="buy2">Aggiungi al carrello</a>
                    </form>
                </div>

            </div>



            <div class="card3">

                <div class="imgBox3">
                    <img src="<?php echo $array[2]['immagine']; ?>" alt="<?php echo $array[1]['nome']; ?>" class="mouse3">
                </div>

                <div class="contentBox3">
                    <h3><?php echo $array[2]['nome']; ?></h3>
                    <h2 class="price3"><?php echo $array[2]['prezzo']; ?> €</h2>
                    <form action="php/agg_prd.php" method="POST">
                        <input name="id_prodotto" hidden value="<?php echo $array[2]['id_prodotto']; ?>">
                        <select name="quantita">
                            <option value="">Quantita</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <button type="submit" name="agg_al_carr" class="buy3">Aggiungi al carrello</a>
                    </form>
                </div>

            </div>


            <div class="card4">

                <div class="imgBox4">
                    <img src="<?php echo $array[3]['immagine']; ?>" alt="<?php echo $array[3]['nome']; ?>" class="mouse4">
                </div>

                <div class="contentBox4">
                    <h3><?php echo $array[3]['nome']; ?></h3>
                    <h2 class="price4"><?php echo $array[3]['prezzo']; ?> €</h2>
                    <form action="php/agg_prd.php" method="POST">
                        <input name="id_prodotto" hidden value="<?php echo $array[3]['id_prodotto']; ?>">
                        <select name="quantita">
                            <option value="">Quantita</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <button type="submit" name="agg_al_carr" class="buy4">Aggiungi al carrello</a>
                    </form>
                </div>

            </div>

        </div>




</body>

</html>