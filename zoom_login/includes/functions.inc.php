<?php

function emptyInputSignup($usrid,$email,$state,$f_pwd,$conpwd){
    $res;
    if(empty($usrid) || empty($email) || empty($state) || empty($f_pwd) || empty($conpwd)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
    
}

function invalidUid($usrid){
    $res;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $usrid)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}



function invalidEmail($email){
    $res;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}

function pwdMatch($f_pwd,$conpwd){
    $res;
    if ($f_pwd!==$conpwd){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}




function uidExists($conn,$usrid,$email){
$sql = "SELECT * FROM users WHERE users_id = ? OR users_email = ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
         header('location: ../register.php?error=stmtfailed');   
     exit();
}
mysqli_stmt_bind_param($stmt,"ss",$usrid,$email);
mysqli_stmt_execute($stmt);
 $resultData = mysqli_stmt_get_result($stmt);
if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
}
else if($row = mysqli_fetch_assoc($resultData)== false){
    $result=false;
    return $result;
}
mysqli_stmt_close($stmt);


}


function  createUser($conn,$usrid,$pwde,$email,$state){
$sql = "INSERT INTO users(users_id,users_pwd,users_email,users_state) VALUES(?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
         header('location: ../register.php?error=stmtfailed');   
     exit();
}


$hashpwd = password_hash($pwde, PASSWORD_BCRYPT, array('cost' => 12));


mysqli_stmt_bind_param($stmt,"ssss",$usrid,$hashpwd,$email,$state);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
         header('location: ../register.php?error=none');   
     exit();
}


function emptyInputLogin($username,$f_pwd){
    $res;
    if(empty($username) || empty($f_pwd)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
    
}

function loginUser($conn,$username,$pwdc){
       $uidExists = uidExists($conn,$username,$username);

       if ($uidExists == false){
            header('location: ../register.php?error=wrongloginuid');   
            exit();
      }
       
      $pwdHashed = $uidExists["users_pwd"];

      $checkPwd = password_verify($pwdc,$pwdHashed);
     
    //  if($pwdHashed==$hashpwd){
    //      echo 'yess';
    //  }
    //  else if($pwdHashed!=$hashpwd){
    //      echo $pwdHashed;
    //      echo $hashpwd;
    
      if($checkPwd === false){
          header('location: ../register.php?error=wrongloginpassword');   
            exit();
      }
      else if ($checkPwd === true){
          session_start();
         
         $_SESSION['Uid'] = $uidExists["users_id"];
            header('location: ../dashboard/dash.php');   
            exit();
      }
}

function createTable($conn,$usrid){
    $sql = 'CREATE TABLE people_profile .'.$usrid.' ( 
                                  id INT(11) NOT NULL AUTO_INCREMENT,
                                  status VARCHAR(128) NOT NULL ,
                                  date DATE NOT NULL ,
                                  time TIME NOT NULL ,
                                  documentname VARCHAR(128) NOT NULL , 
                                  main_initiator VARCHAR(50) NOT NULL ,
                                  mains_email VARCHAR(50) NOT NULL ,
                                  signers VARCHAR(128) NOT NULL ,
                                  signers_emails VARCHAR(128) NOT NULL ,
                                  witnesses VARCHAR(128) NOT NULL ,
                                  witnesses_email VARCHAR(128) NOT NULL ,
                                  AUTHENTICATION VARCHAR(128) NOT NULL ,
                                  FEE_CHARGED VARCHAR(128) NOT NULL ,
                                  COMMENTS VARCHAR(512) NOT NULL ,PRIMARY KEY (id)) ENGINE = InnoDB;';
if ($result = $conn->query($sql)) {
}else {
  echo "Error creating table: " . $conn->error;
}
}

