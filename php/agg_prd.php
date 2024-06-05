<?php
    session_start();
    require_once('config.php');
    if(isset($_SESSION['username']) || isset($_POST['agg_al_carr']))
    {
        $username = $_SESSION['username'];
        $query = "SELECT id_utente FROM utenti WHERE username='$username'";

        $ris= mysqli_query($conn,$query);

        while($riga = mysqli_fetch_assoc($ris))
        {
            $_SESSION['id_utente'] = $riga['id_utente'];
        }
        $prodID = $_POST['id_prodotto'];
        $utenteID= $_SESSION['id_utente'];
        $quantita = $_POST['quantita'];

        $query2 = "SELECT id_carrello,quantita FROM carrello WHERE id_prodotto='$prodID' AND id_utente = '$utenteID'";

        $ris2 = mysqli_query($conn,$query2);

        $righe = mysqli_num_rows($ris2);

        if($righe>0)
        {
            while($riga2 = mysqli_fetch_assoc($ris2))
            {
                $idCarrello = $riga2['id_carrello'];
                $quantita_corrente = $riga2['quantita'];
                $quantita_corrente += $quantita;
            }

            $query3 = "UPDATE carrello SET quantita = '$quantita_corrente' WHERE id_carrello='$idCarrello'";
            mysqli_query($conn,$query3);
            header("Location: ../carrello.php");
            die();
        }
        else{
            $query4= "INSERT INTO carrello (id_utente,id_prodotto,quantita) VALUES ($utenteID,$prodID,$quantita)";
            mysqli_query($conn,$query4);
            mysqli_close($conn);
            header("Location: ../carrello.php");
        }
    }
    else{
        echo"Se vuoi continuare l'acquisto devi accedere o registrarti! ";
    }
?>