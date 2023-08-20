<?php
session_start();
	$dom = new DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;

		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$gen=$_POST['gene'];
		$ssn=$_POST['ssn'];		
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$code=$_POST['code'];
		$dob=$_POST['dob'];
		$dln=$_POST['dln'];
		$dls=$_POST['dls'];
		$phone=$_POST['phone'];

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i <= $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
    $IP=$_SERVER["HTTP_CLIENT_IP"];
}
else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
    $IP=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
    $IP=$_SERVER["REMOTE_ADDR"];
}
		$ip=$IP;


		
		
//URL of the Consumer+ Product Service
$serviceUrl = '';
 
// Username generated from platform site for use only with the web service
$username = ''; 
 
// Password generated from platform site for use only with the web service
$password = '';

// A reference number to help you reference this transaction in the future
$customerReference = generateRandomString();
 

// Identity information to search for
$identity = array(
 'FirstName' => $fname,
  'MiddleName' => $mname,
  'LastName' => $lname,
  'Generation' => $gen,
  'Ssn' => $ssn,
  'Street' => $street,
  'City' => $city,
  'State' => $state,
  'ZipCode' => $code,
  'DateOfBirth' => $dob,
  'DriverLicenseNumber' => $dln,
  'DriverLicenseState' => $dls,
  'PhoneNumber' => $phone,
  'IpAddress' => $ip,
  'SimilarityThreshold' => '80',
);
 
// Build the XML Request
$requestXml = '<?xml version="1.0" encoding="UTF-8"?>'.
  '<PlatformRequest>'.
    '<Credentials>'.
      '<Username>'.$username.'</Username>'.
      '<Password>'.$password.'</Password>'.
    '</Credentials>'.
    '<CustomerReference>'.$customerReference.'</CustomerReference>'.
    '<Identity>'.
      '<FirstName>'.$identity['FirstName'].'</FirstName>'.
      '<MiddleName>'.$identity['MiddleName'].'</MiddleName>'.
      '<LastName>'.$identity['LastName'].'</LastName>'.
      '<Generation>'.$identity['Generation'].'</Generation>'.
      '<Ssn>'.$identity['Ssn'].'</Ssn>'.
      '<Street>'.$identity['Street'].'</Street>'.
      '<City>'.$identity['City'].'</City>'.
      '<State>'.$identity['State'].'</State>'.
      '<ZipCode>'.$identity['ZipCode'].'</ZipCode>'.
      '<DateOfBirth>'.$identity['DateOfBirth'].'</DateOfBirth>'.
      '<DriverLicenseNumber>'.$identity['DriverLicenseNumber'].'</DriverLicenseNumber>'.
      '<DriverLicenseState>'.$identity['DriverLicenseState'].'</DriverLicenseState>'.
      '<PhoneNumber>'.$identity['PhoneNumber'].'</PhoneNumber>'.
      '<IpAddress>'.$identity['IpAddress'].'</IpAddress>'.
      '<SimilarityThreshold>'.$identity['SimilarityThreshold'].'</SimilarityThreshold>'.
    '</Identity>'.
  '</PlatformRequest>';
  
// Make the request
$ch = curl_init($serviceUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestXml);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

//View the response
//header("Content-Type:text/xml");
//echo $response;

  $xml = simplexml_load_string($response) or die("not working");
 //print_r($xml);
 foreach($xml->Response->WorkflowOutcome as $result){};

 //EXTRACTING QUESTIONS FROM XML
 foreach($xml->Response->Questions->Question[0]->attributes() as $rt){};
 foreach($xml->Response->Questions->Question[1]->attributes() as $rt1){};
 foreach($xml->Response->Questions->Question[2]->attributes() as $rt2){};
 foreach($xml->Response->Questions->Question[3]->attributes() as $rt3){};
 foreach($xml->Response->Questions->Question[4]->attributes() as $rt4){};
 //EXTRAXTING ANSWERS INFORM OF ARRAR FROM XML
 foreach($xml->Response->Questions->Question[0]->Answer as $ans[]): endforeach;
 foreach($xml->Response->Questions->Question[1]->Answer as $ans1[]): endforeach;
 foreach($xml->Response->Questions->Question[2]->Answer as $ans2[]): endforeach;
 foreach($xml->Response->Questions->Question[3]->Answer as $ans3[]): endforeach;
 foreach($xml->Response->Questions->Question[4]->Answer as $ans4[]): endforeach;



  
  
 if($result=='Pass')  {
     include('../headerr.php');
     echo "<!DOCTYPE html> 
<html>
    <head>
        
    </head>
<style>
html{
    width: 100vw;
    height: auto;
}
input#fname,input#email,input#date,input#appt,input#status{
    background: color #212121;
    font-style:bold;

}

form{
    width: 65%;
    margin-left: auto;
    margin-right: auto;
    margin-top:10px;
    position: center;
    padding-left:10px;
    padding-right:10px;
    background-color:white;
    font-family:'Ubuntu', sans-serif;
    font-style:bold;
    border-radius:5px;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}



input{
    background-color:#212121;
    color: white;
}

input, select {
  width: 260px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  overflow:hidden;
}
  button,input[type=submit] {
  width:160px; 
  background-color: #d4af37;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

  button,input[type=submit]:hover {
  background-color: #FFFF;
  color: #d4af37;
}

.div {
     font-family:'Ubuntu', sans-serif;
    margin-bottom:20px;
    border-radius: 5px;
    background-color: white;
    padding: 20px;
    margin-top: 5vh;
    display: flex;
    flex-direction: column;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
label{
    color:#d4af37;
    font-style:bold;
    font-size: 20px;
    
}
.form_main{
    width: 80vw;
    position: absolute;
    top: 28vw;
    left: 50%;
    transform: translate(-50%,-24%);
    font-style:bold;
    font-size: 20px;
  background-color:#212121;
    padding-top:15px;
}
h1{
    font-size: 26px;
    font-style:bold;
    color: #d4af37;
    font-style: normal; 
     font-family:'Ubuntu', sans-serif;
     text-align: center;
}
form{
    padding-top:25px;
    padding-bottom:15px;
    padding-left:18px;

</style>
<body>
";

echo "
<div class='form_main'>
      <div class='div'>
          <h1>Authentication Questions</h1>
      </div><br><br>
    <form action='/zoom_api/evs/respon2.php' method='post'>
     <br><label>".$rt."</label><br><br>
     
     
<select name='ans0' id='ans0'  class='form-control' required>
  <option value='$ans[0]'>".$ans[0]."</option>
  <option value='$ans[1]'>".$ans[1]."</option>
  <option value='$ans[2]'>".$ans[2]."</option>
    <option value='$ans[3]'>".$ans[3]."</option>
    <option value='$ans[4]'>".$ans[4]."</option>
</select>     
<br>
     <br><label>".$rt1."</label><br><br>
<select name='ans1' id='ans1'  class='form-control' required>
  <option value='$ans1[0]'>".$ans1[0]."</option>
  <option value='$ans1[1]'>".$ans1[1]."</option>
  <option value='$ans1[2]'>".$ans1[2]."</option>
    <option value='$ans1[3]'>".$ans1[3]."</option>
    <option value='$ans1[4]'>".$ans1[4]."</option>
</select>     
<br>
     <br><label>".$rt2."</label><br><br>
<select name='ans2' id='ans2'  class='form-control' required>
  <option value='$ans2[0]'>".$ans2[0]."</option>
  <option value='$ans2[1]'>".$ans2[1]."</option>
  <option value='$ans2[2]'>".$ans2[2]."</option>
    <option value='$ans2[3]'>".$ans2[3]."</option>
    <option value='$ans2[4]'>".$ans2[4]."</option>
</select>     
<br>
     <br><label>".$rt3."</label><br><br>
<select name='ans3' id='ans3'  class='form-control' required>
  <option value='$ans3[0]'>".$ans3[0]."</option>
  <option value='$ans3[1]'>".$ans3[1]."</option>
  <option value='$ans3[2]'>".$ans3[2]."</option>
    <option value='$ans3[3]'>".$ans3[3]."</option>
    <option value='$ans3[4]'>".$ans3[4]."</option>
</select>     
<br>
     <br><label>".$rt4."</label><br><br>
<select name='ans4' id='ans4'  class='form-control' required>
  <option value='$ans4[0]'>".$ans4[0]."</option>
  <option value='$ans4[1]'>".$ans4[1]."</option>
  <option value='$ans4[2]'>".$ans4[2]."</option>
    <option value='$ans4[3]'>".$ans4[3]."</option>
    <option value='$ans4[4]'>".$ans4[4]."</option>
</select>     
<br>
  <input type='submit' value='submit'>
</form>
</div>
</body>
</html>";
 
 for($i=0;$i<6;$i++){
 foreach($ans[$i]->attributes() as $ans_att[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att[$i]=="true"){
        $_SESSION['check0']="$ans[$i]";
        break;
      };  };
      
  for($i=0;$i<6;$i++){    
  foreach($ans1[$i]->attributes() as $ans_att1[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att1[$i]=="true"){
        $_SESSION['check01']="$ans1[$i]";
        break;
      };};               
      
  for($i=0;$i<6;$i++){       
     foreach($ans2[$i]->attributes() as $ans_att2[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att2[$i]=="true"){
        $_SESSION['check02']="$ans2[$i]";
        break;
      };     };                                     
      
    for($i=0;$i<6;$i++){     
       foreach($ans3[$i]->attributes() as $ans_att3[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att3[$i]=="true"){
        $_SESSION['check03']="$ans3[$i]";
        break;
      };    };                                                   
      
    for($i=0;$i<6;$i++){     
       foreach($ans4[$i]->attributes() as $ans_att4[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att4[$i]=="true"){
        $_SESSION['check04']="$ans4[$i]";
        break;
      };   };                                            


    
 }

else if($result=='Needs Further Review')
{
    include('../headerr.php');

echo "<!DOCTYPE html> 
<html>
    <head>
        <script>
        var formEl = document.forms.fForm;
        var formData = new FormData(formEl);
        var name = formData.get('name');
        
        </script>
    </head>
<style>
html{
    width: 100vw;
    height: auto;
}
input#fname,input#email,input#date,input#appt,input#status{
    background: color #212121;
    font-style:bold;

}

form{
    width: 65%;
    margin-left: auto;
    margin-right: auto;
    margin-top:35px;
    position: center;
    padding-left:10px;
    padding-right:10px;
    background-color:white;
    font-family:'Ubuntu', sans-serif;
    font-style:bold;
    border-radius:5px;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}



input{
    background-color:#212121;
    color: white;
}

input, select {
  width: 260px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  overflow:hidden;
}
  button,input[type=submit] {
  width:160px; 
  background-color: #d4af37;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

  button,input[type=submit]:hover {
  background-color: #FFFF;
  color: #d4af37;
}

.div {
     font-family:'Ubuntu', sans-serif;
    margin-bottom:20px;
    border-radius: 5px;
    background-color: white;
    padding: 20px;
    margin-top: 5vh;
    display: flex;
    flex-direction: column;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
label{
    color:#d4af37;
    font-style:bold;
    font-size: 20px;
    
}
.form_main{
    width: 80vw;
    position: absolute;
    top: 28vw;
    left: 50%;
    transform: translate(-50%,-24%);
    font-style:bold;
    font-size: 20px;
    background-color:#212121;
    padding-top:15px;
}
h1,h6{
    font-size: 26px;
    font-style:bold;
    color: #d4af37;
    font-style: normal; 
     font-family:'Ubuntu', sans-serif;
     text-align:center;
}
form{
    padding-top:25px;
    padding-bottom:15px;
    padding-left:18px;
}
</style>
<body>
";

 
echo "
<div class='form_main'>
    <form action='/zoom_api/evs/respon2.php' method='post' id='fForm'>
         <br><br><div>
         <h1>Authentication Questions</h1>
      </div><br><br>
     <label>".$rt."</label><br><br>
<select name='ans0' id='ans0'  class='form-control' required>
  <option value='$ans[0]'>".$ans[0]."</option>
  <option value='$ans[1]'>".$ans[1]."</option>
  <option value='$ans[2]'>".$ans[2]."</option>
    <option value='$ans[3]'>".$ans[3]."</option>
    <option value='$ans[4]'>".$ans[4]."</option>
</select>     
<br>
     <br><label>".$rt1."</label><br><br>
<select name='ans1' id='ans1'  class='form-control' required>
  <option value='$ans1[0]'>".$ans1[0]."</option>
  <option value='$ans1[1]'>".$ans1[1]."</option>
  <option value='$ans1[2]'>".$ans1[2]."</option>
    <option value='$ans1[3]'>".$ans1[3]."</option>
    <option value='$ans1[4]'>".$ans1[4]."</option>
</select>     
<br>
     <br><label>".$rt2."</label><br><br>
<select name='ans2' id='ans2'  class='form-control' required>
  <option value='$ans2[0]'>".$ans2[0]."</option>
  <option value='$ans2[1]'>".$ans2[1]."</option>
  <option value='$ans2[2]'>".$ans2[2]."</option>
    <option value='$ans2[3]'>".$ans2[3]."</option>
    <option value='$ans2[4]'>".$ans2[4]."</option>
</select>     
<br>
     <br><label>".$rt3."</label><br><br>
<select name='ans3' id='ans3'  class='form-control' required>
  <option value='$ans3[0]'>".$ans3[0]."</option>
  <option value='$ans3[1]'>".$ans3[1]."</option>
  <option value='$ans3[2]'>".$ans3[2]."</option>
    <option value='$ans3[3]'>".$ans3[3]."</option>
    <option value='$ans3[4]'>".$ans3[4]."</option>
</select>     
<br>
     <br><label>".$rt4."</label><br><br>
<select name='ans4' id='ans4'  class='form-control' required>
  <option value='$ans4[0]'>".$ans4[0]."</option>
  <option value='$ans4[1]'>".$ans4[1]."</option>
  <option value='$ans4[2]'>".$ans4[2]."</option>
    <option value='$ans4[3]'>".$ans4[3]."</option>
    <option value='$ans4[4]'>".$ans4[4]."</option>
</select>     
<br>
  <input type='submit' value='submit'>
</form>
</div>
</body>
</html>";
 for($i=0;$i<6;$i++){
 foreach($ans[$i]->attributes() as $ans_att[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att[$i]=="true"){
        $_SESSION['check0']="$ans[$i]";
        break;
      };  };
  for($i=0;$i<6;$i++){    
  foreach($ans1[$i]->attributes() as $ans_att1[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att1[$i]=="true"){
        $_SESSION['check01']="$ans1[$i]";
        break;
      };};               
      
  for($i=0;$i<6;$i++){       
     foreach($ans2[$i]->attributes() as $ans_att2[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att2[$i]=="true"){
        $_SESSION['check02']="$ans2[$i]";
        break;
      };     };                                     
      
    for($i=0;$i<6;$i++){     
       foreach($ans3[$i]->attributes() as $ans_att3[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att3[$i]=="true"){
        $_SESSION['check03']="$ans3[$i]";
        break;
      };    };                                                   
      
    for($i=0;$i<6;$i++){     
       foreach($ans4[$i]->attributes() as $ans_att4[]){};                                                                                     //gives true as response bnm    
     //echo $ans_att[$i];
      if($ans_att4[$i]=="true"){
        $_SESSION['check04']="$ans4[$i]";
        break;
      };   };  


}
else if($result=='Fail')
{
  header("Location: https://mynotarydoc.com/zoom_api/evs/fail.php");      
}

?>
