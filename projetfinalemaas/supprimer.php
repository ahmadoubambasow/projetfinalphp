<?php 

session_start();
require_once 'connect.php';
require_once 'session.php';
include 'header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = $mysqlclient->prepare("DELETE FROM enregistrementeleve WHERE id=?")->execute([$id]);


    if($delete){
        header('location:pageadmin.php');
    };
    
};

?>