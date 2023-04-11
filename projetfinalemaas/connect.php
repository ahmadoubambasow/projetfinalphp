<?php 

try {   
    $mysqlclient = new PDO('mysql:host=localhost;dbname=projetphpfinalemaas;db=intervory;charset=utf8','root','root');
} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

?>