<?php
session_start();

include('../includes/dbh.inc.php');

if(isset($_POST["submit"])){

            $Name=$_POST['Name'];
            $NP=$_POST['NP'];
            $comm_state=$_POST['comm_state'];
            $comm_num=$_POST['comm_num'];
            $comm_expire=$_POST['comm_expire'];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    
    $sqqql = "UPDATE `profile` SET NAME='".$_SESSION['Uid']."',Notary_Name='".$Name."',Notary_Public='".$NP."',Comm_State='".$comm_state."',
                Comm_No=".$comm_num.",Comm_Expire=".$comm_expire.",Stamp='$pname' WHERE userr='".$_SESSION['Uid']."'";
 
    if(mysqli_query($conn,$sqqql)){
 
    header("Location: https://mynotarydoc.com/zoom_login/dashboard/dash.php"); 
    }
    else{
        echo "Error";
    }
}else{
echo "name=empty";
}
?>