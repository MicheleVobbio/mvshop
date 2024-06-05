<?php
require_once('config.php');

// Verifica se la richiesta è una richiesta POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se i dati di accesso sono stati inviati
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        session_start();
        // Recupera i valori inviati dal modulo
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT username,password FROM utenti WHERE username='$username' AND password='$password'";

        $risultato = mysqli_query($conn, $query);

        $righe = mysqli_num_rows($risultato);
        if ($righe > 0) {
            $_SESSION['username']= $username;
            $response = array("success" => true);                 
    }else{
        $response = array("success" => false, "message" => "Username o password non validi");
    }

        // Restituisci la risposta come JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Se i dati di accesso non sono stati inviati, restituisci un errore
        $response = array("success" => false, "message" => "Dati di accesso non forniti.");
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // Se la richiesta non è una richiesta POST, restituisci un errore
    $response = array("success" => false, "message" => "Metodo non consentito.");
    header('Content-Type: application/json');
    echo json_encode($response);
}
