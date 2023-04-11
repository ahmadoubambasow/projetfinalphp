<?php 
session_start();
require_once 'connect.php';

if(isset($_POST['connect'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = "SELECT email, password FROM users WHERE email = ? ";
        $prepare = $mysqlclient->prepare($check);
        $prepare->execute(array($email));
        $data = $prepare->fetch();
        $row = $prepare->rowCount();

        if($row == 1){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                $password = hash('sha256', $password);

                if($data['password']===$password){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location:pageadmin.php');
                }else header('location:login.php');
            };            
         }else header('location:login.php');
    }else header('location:login.php');
}else header('location:login.php');
        

?>