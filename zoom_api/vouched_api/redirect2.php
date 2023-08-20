<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myNotaryDoc</title>
    <link rel="shortcut icon" type="image/png" href="../images/fav.png" />

</head>
<style>
    div {
        color: white;
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
        padding-bottom: 20px;
    }

    form {
        margin-top: 80px;
    }

    p,
    h1 {
        color: #d4af37;
        line-height: 28px;
    }

    .main_body {
        width: 100vw;
        height: 100%;
        background-color: white;
    }

    .thanks_body {
        width: 90vw;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -24%);
        border-radius: 5px;
        background-color: #111111;
        padding: 20px;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        padding-top: 15vh;
        padding-bottom: 15vh;
        max-height: max-content;
    }

    button {
        background-color: #d4af37;
        color: white;
        border-radius: 10px;
        border: transparent;
        padding-top: 8px;
        padding-bottom: 8px;
        padding-left: 5px;
        padding-right: 5px;
    }

    input[type="submit"] {
        background-color: #d4af37;
        border: #d4af37;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 5px;
        margin-left: 42vw;
        margin-right: 43VW;
        MARGIN-BOTTOM: 25PX;
        MARGIN-TOP: 5PX;
        font-family: "Ubuntu";
    }

    label {
        font-size: 22px;
        font-family: 'Ubuntu', sans-serif;
        /* text-align: left; */
    }

    a {
        color: white;
        text-decoration: none;
    }
    .col_lt,.col_rt{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .col_lt{
        padding-right: 15px;
    }        
    .col_rt{
        padding-left: 15px;
    }   
    .label {
        text-align: left;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
</style>

<body>
    <div class="main_body">
        <div class="thanks_body">
            <h1>THANK YOU!</h1>
            <p>You have been verified .Please fill the bottom form for us to send you the link to the zoom meeting.<br>
                We will redirect you to our homepage; Please keep checking your email for our reply.<br>NOTE: WE
                RECOMMEND THAT YOU HAVE ZOOM INSTALLED AND SIGNED IN BEFORE THE NOTARY SESSION.</p>

            <div>
                <form action="https://formsubmit.co/mynotarydoc@gmail.com" method="POST">
                    <div class="label">
                        <div class="col_lt">
                            <label>Name *: </label>
                            <input type="text" name="signer_name" multiple size="10" required><br>
                        </div>
                        <div class="col_rt">
                            <label>email address *: </label>
                            <input type="email" name="signer_email" multiple size="10" required><br>
                        </div>
                    </div>
                    <input type="hidden" name="next step"
                        value="user has been verified please send them the meeting link">
                    <input type="hidden" name="_next" value="https://mynotarydoc.com">
                    <input type="hidden" name="_subject" value="request for notarization">
                    <input type=submit type=button>


                    <div class="question">Do you have a question? <a
                            href="https://www.mynotarydoc.com/index.php#contact">Contact Us</a></div>
                    <button><a href="https://mynotarydoc.com">GO BACK</a></button>
            </div>
        </div>
</body>

</html>