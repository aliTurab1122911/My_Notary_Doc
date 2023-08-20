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
  html {
    background-image: linear-gradient(to bottom right, #FFEEEE, #f8fcf2);
    background-repeat:no-repeat;
    background-size: 500%;
    width: 100vw;
    height: 100vh;
    transform: translateY(250px);
  }
.main_frame{
    margin-top: 350px;
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

  button,
  input[type=submit] {
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

  button:hover,
  input[type=submit]:hover {
    background-color: #FFFF;
    color: #d4af37;
  }

  div#box,
  .lft,
  .right,
  div#rcf {
    font-family: 'Ubuntu', sans-serif;
    margin-bottom: 20px;
    border-radius: 5px;
    background-color: white;
    padding: 20px;
    margin-top: 5vh;
    justify-content: center;
    vertical-align: middle;
    overflow: hidden;
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  }

  div#rcf {
    display: flex;
    width: 35vw;
    height: auto;
    float: right;
  }

  .lft {
    display: flex;
    flex-direction: column;
  }

  label {
    color: #d4af37;
    font-style: bold;
    font-size: 20px;

  }

  .form_main {
    width: 80vw;
    position: absolute;
    top: 65%;
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

  /* content: '';
  border: var(--arrow-size) solid transparent;
  border-top-color: var(--tooltip-color);
  transform-origin: top center; */
  .top,
  div#box {
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: nowrap;
    align-content: center;
    align-items: center;

  }


  .lft {
    max-width: 20vw;
    margin-right: 3vw;
    text-align: center;
  }

  .right {
    width: 65vw;
  }

  .topnav a {
    float: left;
    color: goldenrod;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
  }

  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: rgb(221, 221, 221);
    color: black;
  }

  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: red;
    color: goldenrod;
  }

  a {
    text-decoration: none;
    color: #212121;
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 20px;
    margin-bottom: 20px;
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    size: 16px;
    border-radius: 5px;
  }

  a:hover {
    background-color: #d4af37;
  }

  a:active {
    background-color: #d4af37;
    border-radius: 5px;
    -webkit-box-shadow: inset 1px 1px 10px rgb(87, 87, 87);
    -moz-box-shadow: inset 1px 1px 10px rgb(87, 87, 87);
    box-shadow: inset 1px 1px 10px rgb(87, 87, 87);
  }

  div#layer {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  div#lcf {
    display: flex;
    flex-direction: column;
    max-width: max-content;
    padding-top: 20px;
    margin-right: 30px;
  }

  .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: center;
    flex-wrap: nowrap;
    align-items: center;
  }
</style>

<body>
<div class="main_frame">

    <div id="layer">
        <div class="top">
    
            <div class="lft" id="navbar_left">
                <a class="active" href="#">STATE<br>
                    <select id="state" name="state" class="form-control" required placeholder="XY" style="width:130px;">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </a>
                <a href="#" id="l1">Rules</a>
                <a href="#" id="l2">Profile</a>
                <a href="https://mynotarydoc.com/zoom_api/form.php" id="l3">Create Notary Session</a>
                <a href="#" id="l4">Export/Back up Journal</a>
    
            </div>
            <div class="right" id="dash">
                <div class="txt_bx" id="1">
                    <h1 id="dash-header" style="text-align:center;">MyNotaryDoc Public Document</h1>
                    <div class="border" id="box">
                        <h3>Journal Enteries</h3>
                        <div class="table">
    
                        </div>
                    </div>
                </div>
                <div id="2" class="txt_bx">
                    <h1 id="dasheader" style="text-align:center;">MyNotaryDoc Profile</h1>
                    <div class="container">
                        <div class="lc" id="lcf">
                            <label>Notary Name: </label>
                            <input type="text" name="Name" id="name">
                            <label>Notary Public: </label>
                            <input type="text" name="NP" id="NP">
                            <label>Commision State: </label>
                            <input type="text" name="comm_state" id="comm_state">
                            <label>Commision Number: </label>
                            <input type="int" name="comm_num" id="comm_num">
                            <label>Commision Expire: </label>
                            <input type="date" name="comm_expire" id="comm_expire"
                                data-tooltip="Please click the icon to fill this field">
                        </div>
                        <div class="rc" id="rcf">
                            <div class="pic">
                                <img src="#" alt="#">
                            </div>
                            <button style="width: max-content;">update</button>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
<script>
  let a = document.getElementById("1");
  let b = document.getElementById("2");
  let c = document.getElementById("l2");
  a.style.display = "";
  b.style.display = "none";
  debugger;
  c.addEventListener("click", function () 
  {
    b.style.display = "";
    a.style.display = "none";
  });


 </script>
</html>