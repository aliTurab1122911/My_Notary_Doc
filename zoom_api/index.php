<?php
session_start();
include('config.php');
include('api.php');

$arr['topic']='notarization';
$arr['start_date']='';
$arr['duration']='';
$arr['password']='';
$arr['type']='2';
$result=createMeeting($arr);
$link="$result->join_url";
$_SESSION['ZOOM']=$link;
//echo $result;
//print_r($result);
//foreach($result->join_url as $link){echo $link;};

 if(isset($result->id)){
  
 echo
 '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myNotaryDoc</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="images/fav.png" />
    <script defer src="/fontawesome/js/all.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!--load all styles -->
    <style>
        html {
            background-color: whitesmoke;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 80vw;
            height: 80vh;
            background-color: #212121;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24);
            padding-top: 5vh;
        }

        p,
        h4,
        h2,
        div.text,
        button {
            font-family: "Ubuntu", sans-serif;
        }

        p,
        h4 {
            color: white;
            line-height: 20px;
        }

        p {
            margin-left: 15%;
            margin-right: 15%;
        }

        .ptext {
            width: 85vw;
            height: 30vh;
            position: relative;
            padding-top: 4px;
            margin-top: 10px;
            margin-bottom: 5px;
            transform: translateX(6vw)
        }

        .ptext:hover {
            background-color: #d4af37;
        }

        h2 {
            text-align: center;
            color: #d4af37;
        }

        div.text {
            text-align: center;
            font-size: large;
            font-weight: bold;
            background-color: #d4af37
        }
        .divi{
            position: absolute;
            top: 80vh;
        }

        a {
        color: mintcream;
    background: #d4af37;
    padding-top: 2.5px;
    padding-bottom: 5px;
    padding-left: 3px;
    padding-right: 4.2px;
    position: absolute;
    border-radius: 5px;
    width: 20vw;
    margin-right: 40vw;
    text-align: center;
    margin-left: 40vw;
    bottom: 20vh;
        }
        input#btn2:hover {
    color: #d4af37;
    background: white;
}

        a:hover {
            color: #d4af37;
            background-color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        input[type="submit"] {
            background-color: goldenrod;
            border: #d4af37;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 5px;
            font-family: "Ubuntu";
        }

        .center {
            position: relative;
            transform: translateY(10vh);
        }
        a:link,
        a:visited {
            text-decoration: none
        }

        text {
            width: 100vw;
        }

        button {
            transition-duration: 0.4s;
            border-radius: 15px;
            color: #d4af37;
            margin-left: 44.5vw;
            padding: 10px 20px;
        }

        button a {
            color: black;
        }
        
        button:hover,#secondButton:hover {
            background-color: black;
            border: #d4af37;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24);
            background-color: #d4af37;
            color: black;
        }
    </style>
</head>

<body>
    <section class="about" id="about">



        <div class="box">
            <div class="text">THIS IS THE FINAL STEP</div>
            <p style="margin-left: 15%; margin-right: 15%; text-align: center">
      You have been fully verified, and we will now direct you to the Zoom meeting.<br>NOTE: WHILE CLICKING ON THE BUTTONS (BOTH OF THEM) HOLD CONTROL OR COMMAND (FOR MAC) KEY
      <br>NOTE: IF ON MOBILE DEVICE OPEN BUTTONS IN NEW TAB</p>
            <form action="https://formsubmit.co/mynotarydoc@gmail.com" method="POST">
                <input type="hidden" name="link" value="'.$link.'">
                <input type="hidden" name="_subject"
                    value="THIS IS THE LINK TO THE ZOOM MEETING;  PLEASE MAIL THE OTHER USER ABOUT THE ZOOM MEETING AND WHEN THEY ARE VERIFIED YOU WILL RECIEVE AN EMAIL ABOUT IT.">
                <input type="hidden" name="_subject" value="Notarization Initiated">
                <input type="hidden" name="_captcha" value="false">
                <div class="center">
                   <input type=submit style="padding: 10px;transform: translateY(50px);" value="Notify Service! About meeting  (HOLD CONTROL/COMMAND WHILE CLICKING) " id="btn2" target="_blank">
                </div>

        </div>
    </section>
    <script>
        focus();
        alert(" IMPORTANT: If you are  using your phone then switch to landscape view by tilting your phone. If buttons are overlapping then return back to portrait mode.  !! NOTE: WHILE CLICKING ON THE BUTTONS(BOTH OF THEM) HOLD CONTROL OR COMMAND (FOR MAC) KEY !!    !! NOTE: IF ON MOBILE DEVICE OPEN BUTTONS IN NEW TAB!!")
    </script>
</body>

</html>';
 
 echo"<div class='divi'>
 <a href='".$result->join_url."'  target = '_blank' input type= 'button' id='btn1' style='font-family: Ubuntu, sans-serif;width: max-content;position: absolute;padding: 10px;transform: translateX(-145px);'>Zoom Meeting (HOLD CONTROL/COMMAND WHILE CLICKING) </a><br/>
 </div>";
         
 }else{
 	echo '<pre>';
 	print_r($result);
 }

