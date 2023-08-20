<?php
$host="";
$user="";
$password="+";
$db="";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['uname'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
    
    $sql="select * from USER where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'dashadmin');
// define('DB_PASSWORD', 'VNE8LZ7eW+');
// define('DB_NAME', 'dashboarddb');

//         $uname=$_POST['uname'];
// 		$pass=$_POST['pass'];

// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// if($conn == false){
//     dir('Error: Cannot connect to database try agin');
// }
// else {
    	
// 		echo"$uname";
// }


?>
