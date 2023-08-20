<?php
session_start();
include("../includes/dbh.inc.php");

$date=$_POST['date'];
$time=$_POST['time'];
$radio=$_POST['radio'];
$job=$_POST['job_name'];
$s1_main=$_POST['signer_1_main'];
$s1_email=$_POST['s1_email'];
$signer=$_POST['signer'];
$signer_email=$_POST['signer_email'];
$Witnesses=$_POST['Witnesses'];
$Witnesses_email=$_POST['Witnesses_email'];

$PK = $_POST['PK'];
$KB = $_POST['KB'];
$ID = $_POST['ID'];
$FA = $_POST['2FA'];

$AUTHENTICATION ="$PK,$KB,$ID,$FA" ;
$FEE_CHARGED = $_POST['FEE_CHARGED'];
$COMMENTS = $_POST['COMMENTS'];
        

$sql = "INSERT INTO ".$_SESSION['Uid']." (status,date, time, documentname,main_initiator, mains_email, signers, signers_emails, witnesses, witnesses_email,AUTHENTICATION,FEE_CHARGED,COMMENTS) 
        VALUES ('".$radio."','".$date."', '".$time."', '".$job."','".$s1_main."', '".$s1_email."', '".$signer."', '".$signer_email."', '".$Witnesses."', '".$Witnesses_email."','".$AUTHENTICATION."','".$FEE_CHARGED."','".$COMMENTS."');";

if ($result = $conn2->query($sql)) {
 header("Location: https://mynotarydoc.com/zoom_login/dashboard/dash.php");
} else {
  echo "Error creating table: " . $conn->error;
}







?>