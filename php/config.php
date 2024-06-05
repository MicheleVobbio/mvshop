<?php
$db_host = "127.0.0.1";
$db_user ="root";
$db_pass = "";
$db_name="mv";

$conn = mysqli_connect($db_host,$db_user,$db_pass);

if(!$conn)
{
    die("Si e verificato un errore durante la connessione al database!");
    exit;
}

mysqli_select_db($conn,$db_name);
?>