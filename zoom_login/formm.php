<?php
    include('headerr.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myNotaryDoc</title>

    <link rel="shortcut icon" type="image/png" href="images/fav.png" />
</head>
<style>
    html {
        background-image: linear-gradient(to bottom right, #FFEEEE, #f8fcf2);
        background-repeat: no-repeat;
        background-size: 500%;
        width: 100vw;
        height: auto;
        transform: translateY(5px);
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    .header {
        overflow: hidden;
        background-color: #212121;
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: white;
        text-align: center;
        padding: 8px;
        text-decoration: none;
        font-size: 14px;
        line-height: 20px;
        border-radius: 4px;
        margin-left: 5px;
        margin-right: 5px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: goldenrod;
        color: black;
    }

    .header a.active {
        background-color: goldenrod;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }



    html {
        background-image: linear-gradient(to bottom right, #FFEEEE, #DDEFBB);
        width: 100vw;
        height: 150vh;
    }

    input#fname,
    input#email,
    input#date,
    input#appt,
    input#status {
        background: color #212121;
        font-style: bold;

    }

    form {
        width: 65%;
        margin-left: auto;
        margin-right: auto;
        position: center;
        padding-left: 10px;
        padding-right: 10px;
        background-color: white;
        font-family: 'Ubuntu', sans-serif;
        font-style: bold;
        border-radius: 5px;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: 1;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: white;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: white;
    }



    input,
    select {
        width: 260px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button#sas1,button#sas2 {
        width: 160px;
        background-color: #d4af37;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    button#sas1:hover, button#sas2:hover  {
        background-color: #FFFF;
        color: #d4af37;
    }

    .div {
        font-family: 'Ubuntu', sans-serif;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: white;
        padding: 20px;
        margin-top: 5vh;
        display: flex;
        flex-direction: column;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url(...);
    }

    select::-ms-expand {
        display: none;
    }

    @media screen and (min-width:0\0) {
        select {
            background-image: none\9;
            padding: 5px\9;
        }
    }

    label {
        color: #d4af37;
        font-style: bold;
        font-size: 20px;

    }

    .form_main {
        width: 80vw;
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -24%);
        font-style: bold;
        font-size: 20px;
        background-color: #212121;
    }

    h1 {
        font-size: 26px;
        font-style: bold;
        color: #d4af37;
        font-style: normal;
        font-family: 'Ubuntu', sans-serif;
    }

    input#date::before,
    input#date::after {
        --scale: 0;
        --arrow-size: 10px;
        --tooltip-color: #333;

        position: absolute;
        /*top:0;*/
        left: 42.1%;
        overflow: visible;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
    }

    input#date::before {
        --translate-y: calc(-100% - var(--arrow-size));

        content: attr(data-tooltip);
        color: white;
        padding: .5rem;
        border-radius: .3rem;
        text-align: center;
        width: max-content;
        max-width: 100%;
        background: var(--tooltip-color);
    }

    input#date:hover::before,
    input#date:hover::after {
        --scale: 1;

    }

    input#date::after {
        --translate-y: calc(-1 * var(--arrow-size));

    }

    .form-control {
        transform: translateX(-100px);
    }
</style>

<body>
    <div class="form_main">
        <form action="dashboard/form_process.php" method="POST">
            <div class="div">
                <h1>Update Journal Entries</h1>
            </div>

            <div class="div">
                <label>Schedule Meeting:</label>
            </div>

            <div class="div">
                <label>Date *:</label>
                <input type="date" name="date" id="date" required
                    data-tooltip="Please click the icon to fill this field">
            </div>
            <div class="div">
                <label>Time *:</label>
                <input type="time" name="time" id="date" required
                    data-tooltip="Please click the icon to fill this field">
            </div>

            <div class="div">
                <label>Journal Entries:</label>
            </div>
                <div class="div">
                <label>Status:</label>
                <select class="selectpicker" name="radio">
                    <option value="COMPLETE">COMPLETE</option>
                    <option value="PENDING">PENDING</option>
                    <option value="CANCELED">CANCELED</option>
                </select>
            </div>
            <div class="div">
                <label>Document Name:</label>
                <input type="text" name="job_name" placeholder="optional">
            </div>

    
    <div class="div">
        <label>Signer 1 Name *:</label>
        <input type="text" name="signer_1_main" multiple size="10" required>
    </div>
    <div class="div">
        <label>Signer 1 Email Address </label>
        <input type="email" name="s1_email" multiple size="10" >
    </div>
    <div class="div">
        <label>Additional Signer Names <br>(note: separate names with a comma) <br> </label>
        <input type="text" name="signer" multiple size="10">
    </div>
    <div class="div">
        <label>Additional Signer Emails <br>(note: separate emails with a comma)<br></label>
        <input type="email" name="signer_email" multiple size="10">
    </div>
        <div class="div">
        <label>Witnesses Names <br>(note: separate names with a comma) <br> </label>
        <input type="text" name="Witnesses" multiple size="10">
    </div>
    <div class="div">
        <label>Witnesses Emails <br>(note: separate emails with a comma)<br></label>
        <input type="email" name="Witnesses_email" multiple size="10">
    </div>
    <br>
                    <div class="div">
                <label>Authentication:</label>
                
                 <input type="checkbox" id="vehicle1" name="PK" value="Personal Knowledge"><label for="vehicle1"> Personal Knowledge</label><br>
                 <input type="checkbox" id="vehicle2" name="KB" value="Knowledge Base Questions (KB)"><label for="vehicle2"> Knowledge Base Questions (KB)</label><br>
                 <input type="checkbox" id="vehicle3" name="ID" value="ID Verification (ID)"><label for="vehicle3"> ID Verification (ID)</label><br>
                <input type="checkbox" id="vehicle4" name="2FA" value="Two Factor Authentication (2FA)"><label for="vehicle4"> Two Factor Authentication (2FA)</label><br><br>
    <div class="div">
        <label>FEE CHARGED</label>
        <input type="number" step="0.01" name="FEE_CHARGED">
    </div>
    <br>
    <div class="div">
        <label>COMMENTS</label>
        <input type="text" name="COMMENTS" >
    </div>
    <br>

    <button id="sas2" type="submit" name="Submit">Submit</button>
    

    </div>
    </div>
    </form>
    </div>
    <script>
        const el = document.getElementById('date');
        let db = document.getElementById('sas1');
        let form = document.getElementById('sas2');
        db.addEventListener("click", function()
        {
            form.click();
        }


        el.on('click', function () { el.datepicker("show"); });
    </script>
</body>

</html>
