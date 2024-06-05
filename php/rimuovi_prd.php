<?php
session_start();
require_once('config.php');
if(isset($_SESSION['id_utente']) && isset($_POST['id_carrello']) && isset($_POST['rimuovi_carr']))
{
    $utenteID= $_SESSION['id_utente'];
    $carrID = $_POST['id_carrello'];

    $query = "DELETE FROM carrello WHERE id_carrello = $carrID";
    mysqli_query($conn,$query);
    mysqli_close($conn);

    header("Location: ../carrello.php");
}
?>