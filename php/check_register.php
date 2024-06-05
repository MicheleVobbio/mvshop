<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['c_password'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        $query = "SELECT username,email,password FROM utenti WHERE username='$username' OR email='$email'";

        $risultato = mysqli_query($conn, $query);

        $righe = mysqli_num_rows($risultato);


        if ($righe > 0) {
            while ($riga = mysqli_fetch_assoc($risultato)) {
                if ($username === $riga['username']) {
                    $response = array("success" => false, "message" => "Username gia esistente");
                } else if ($email === $riga['email']) {
                    $response = array("success" => false, "message" => "Email gia esistente");
                }
            }
        } else {
            if ($password == $c_password) {
                $sql = "INSERT INTO utenti(username,email,password) VALUES ('$username','$email','$password')";
                mysqli_query($conn, $sql);
                session_start();
                $_SESSION['username'] = $username;
                $response = array("success" => true);
            }
            else{
                $response = array("success" => false, "message" => "Le password non coincidono");
            }
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        $response = array("success" => false, "message" => "Dati non forniti");
        header("Content-Type: application/json");
        echo json_encode($response);
    }
} else {
    // Se la richiesta non è una richiesta POST, restituisci un errore
    $response = array("success" => false, "message" => "Metodo non consentito.");
    header('Content-Type: application/json');
    echo json_encode($response);
}
