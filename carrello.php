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

    <link rel="stylesheet" href="css/carrello.css">

    <title> M&V SRL</title>

</head>

<body>

    <?php session_start();
    require_once('php/config.php');
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
                                                        echo 'href="profilo.php"';
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


        <?php
        if (!isset($_SESSION['id_utente'])) {
            echo "Effettuare il login";
            mysqli_close($conn);
            header("Location: login.html");
        } else {
            $username = $_SESSION['username'];
            echo "<h2>Il carrello di $username</h2>";
            $utenteID = $_SESSION['id_utente'];
            $query = "SELECT c.id_utente,c.id_prodotto,c.quantita,c.id_carrello,p.nome,p.prezzo,p.immagine
                        FROM carrello c INNER JOIN prodotti p ON c.id_prodotto=p.id_prodotto 
                        WHERE c.id_utente = $utenteID ";
            $ris = mysqli_query($conn, $query);

            $righe = mysqli_num_rows($ris);

            if ($righe > 0) {
                while ($riga = mysqli_fetch_assoc($ris)) { ?>

                    <div class="boxCarr">

                        <div class="prd">
                            <div class="img">
                                <img src="<?php echo $riga['immagine'] ?>" style="width:130px;height:150px;" alt="">
                            </div>
                            <span class="nome">
                                <?php echo $riga['nome'] ?>
                            </span>

                            <div class="quantita">
                                <span>Quantita</span>
                                <span style="text-align: center;"><?php echo $riga['quantita']?></span>
                            </div>

                            <div class="prezzo">
                                <span>Prezzo</span>
                                <span><?php echo $riga['prezzo'] ?> €</span>
                            </div>

                            <div class="rimuovi">
                                <form action="php/rimuovi_prd.php" method="POST">
                                    <input name="id_carrello" hidden value="<?php echo $riga['id_carrello'] ?>">
                                    <button type="submit" id="elimina" class="btn btn-primary" name="rimuovi_carr">Elimina</button>
                                </form>
                            </div>
                        </div>




                    </div>
        <?php
                }
            } else {
                echo "<h3>Al momento non ci sono prodotti nel carrello<h3>";
            }
        }
        ?>


</body>

</html>