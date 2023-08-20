<?php

if(isset($_POST['submit'])){
    $usrid=$_POST['usrid'];              
    $pwd1=$_POST['pwd'];
    $conpwd=$_POST['conpwd'];
    $state="nil";
    $email=$_POST['email'];
    


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
   
    if (emptyInputSignup($usrid,$email,$state,$pwd1,$conpwd)!==false){
     header('location: ../register.php?error=emptyinputs');   
     exit();
    }
    
        if (invalidUid($usrid)!==false){
     header('location: ../register.php?error=invalidUid');   
     exit();
    }
        if (invalidEmail($email)!==false){
     header('location: ../register.php?error=invalidEmail');   
     exit();
    }
        if (pwdMatch($pwd1,$conpwd)!==false){
     header('location: ../register.php?error=passworddonotmatch');   
     exit();
    }
        if (uidExists($conn,$usrid,$email)!==false){
     header('location: ../register.php?error=usernametaken');   
     exit();
    }
    
// $sql ="INSERT INTO profile (id, user, NAME, Notary_Name, Notary_Public, Comm_State, Comm_No, Comm_Expire, Stamp) VALUES (NULL, ".$usrid.",".$usrid.", 'N/A', 'N/A', 'N/A', '000000', '000000', 'N/A');";
// if ($resulted = $conn->query($sql)) {
    
//     createTable($conn2,$usrid);
//     createUser($conn,$usrid,$pwd1,$email,$state);
    
// } else {
//   echo "Error creating table: " . $conn->error;
// }

    
$sql ="INSERT INTO profile (id, userr, NAME, Notary_Name, Notary_Public, Comm_State, Comm_No, Comm_Expire, Stamp) VALUES (NULL, '".$usrid."','".$usrid."', 'N/A', 'N/A', 'N/A', '000000', '000000', 'N/A');";
if ($resulted = mysqli_query($conn,$sql)) {
    
    createTable($conn2,$usrid);
    createUser($conn,$usrid,$pwd1,$email,$state);
    
} else {
  echo "Error creating table: " . $conn->error;
}
    

    
}
