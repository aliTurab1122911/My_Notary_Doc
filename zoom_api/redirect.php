          <?php
        include('headerr.php');
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myNotaryDoc</title>
   <link rel="shortcut icon" type="image/png" href="images/fav.png"/>

    </head>
    <style>
        div
        {
          color:white;
          font-family:'Ubuntu', sans-serif;  
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

    </style>
<body>
    <div class="main_body">
        <div class="thanks_body">
            <h1>THANK YOU!</h1>
            <p>Please keep checking your email for our reply. <br>If we have an opening at your requested date and time, we will provide you with the appointment and link to the notary session through email. <br>Otherwise, we will respond back with available times to choose closest to your requested appointment time.  <br>NOTE:  WE RECOMMEND THAT YOU HAVE ZOOM INSTALLED AND SIGNED INTO BEFORE THE NOTARY SESSION.
            </p>
            <div class="question">Do you have a question?  Contact us by email at info@mynotarydoc.com or phone at 407-670-1414.</div>
            <button><a href="https://mynotarydoc.com">GO HOME</a></button>
        </div>
    </div>
</body>
</html>

