<?php

    require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['uname'])){
        // removes backslashes
	$username = $_REQUEST['uname'];
        //escapes special characters in a
	$password = $_REQUEST['pass'];
	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username'
AND password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==true){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	             echo " You Have Successfully Logged in";
	    //header("Location: index.php");
         }
         }else{
	echo "<div class='form'>
<h3>Username/pass is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	
    }

// $host="localhost";
// $user="dashadmin";
// $password="VNE8LZ7eW+";
// $db="dashboarddb";

// mysql_connect($host,$user,$password);
// mysql_select_db($db);

// if(isset($_POST['uname'])){
    
//     $uname=$_POST['uname'];
//     $password=$_POST['pass'];
    
//     $sql="select * from USER where Username='".$uname."'AND Password='".$password."' limit 1";
    
//     $result=mysql_query($sql);
    
//     if(mysql_num_rows($result)==1){
//         echo " You Have Successfully Logged in";
//         exit();
//     }
//     else{
//         echo " You Have Entered Incorrect Password";
//         exit();
//     }
        
// }

// /*
// This file contains database configuration assuming you are running mysql using user "root" and password ""
// */

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'dashadmin');
// define('DB_PASSWORD', 'VNE8LZ7eW+');
// define('DB_NAME', 'dashboarddb');

// // Try connecting to the Database
// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// //Check the connection
// if($conn == false){
//     dir('Error: Cannot connect');
// }

?>