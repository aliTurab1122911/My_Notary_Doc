<?php
          session_start();
if (isset($_POST['login'])){
    
     $username= $_POST['uid'];
     $pwddd= $_POST['pass'];
     
     include ("dbh.inc.php");
     require 'functions.inc.php';
     
     if (emptyInputLogin($username,$pwddd)!==false){
         session_unset();
     header('location: ../register.php?error=emptyinputs');   
     exit();
        }
    else{

loginUser($conn,$username,$pwddd);
        
}}
else{
    session_unset();
    header('location: ../register.php?error=emptyinputs');   
     exit();
}