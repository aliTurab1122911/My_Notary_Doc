<?php
session_start();
$ans0= $_POST['ans0'];
$ans1= $_POST['ans1'];
$ans2= $_POST['ans2'];
$ans3= $_POST['ans3'];
$ans4= $_POST['ans4'];

$count=0;
if(
 $_SESSION['check0']==$ans0)
 {
     $count=$count+1;
 };
if($_SESSION['check01']==$ans1){
    $count=$count+1;
};
if($_SESSION['check02']==$ans2){
    $count=$count+1;
};
if($_SESSION['check03']==$ans3){
    $count=$count+1;
};
if($_SESSION['check04']==$ans4){
    $count=$count+1;
};

if($count>=4){
    header("Location: https://mynotarydoc.com/zoom_api/evs/redi2.php");
}
else{
    
echo'
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myNotaryDoc</title>
   <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>

</head>
    <style>
        div
        {
          color:#212121;
          font-family:"Ubuntu", sans-serif;  
          text-align:center;
          padding-bottom:20px;
        }
        p,h1
        {
        color:#d4af37;
        line-height:28px;
        }
        .main_body
        {
        width:100vw;
        height:100%;
        background-color:white;
        }
        .thanks_body
        {
            width: 90vw;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%,-24%);
        border-radius: 5px;
        background-color: #111111;
        padding: 20px;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        max-height: 75vh;
        padding-top: 15vh;
        padding-bottom: 15vh;
        }
        button
        {
            background-color:#d4af37;
            color:white;
            border-radius: 10px;
            border:transparent;
                   padding-top:8px;
            padding-bottom:8px;
            padding-left:5px;
            padding-right:5px;
        }
        a{
            color:white;
            text-decoration:none;
        }
        .question
        {
                   color:#d4af37;
        }
    </style>
<body>
    <div class="main_body">
        <div class="thanks_body">
            <h1>THERE IS A PROBLEM!</h1>
            <p>We were not able to verify your identity; please check your answers.</p>
            <div class="question">Do you have a question? <a href="https://www.mynotarydoc.com/index.php#contact">Contact Us</a></div>
            <button><a href="https://mynotarydoc.com/zoom_api/evs/form2.php">GO BACK</a></button>
        </div>
    </div>
</body>
</html>

';    
    
}
session_unset();
session_destroy();
?>