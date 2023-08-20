<?php
include('../headerr.php');
require '../includes/dbh.inc.php';

if(isset($_SESSION['Uid']))
{
     $sqlgg = "SELECT * FROM link ORDER BY id DESC ";
    if ($resultgg = $conn->query($sqlgg)) {

echo '
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
    background-image: white;
    background-repeat: no-repeat;
    background-size: 500%;
    width: 100vw;
    height: 100vh;
  }
  div#\32 reset{
          min-width: max-content;
  }

  .main_frame {
    transform: translateY(250px);
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
    width: 40%;
    transform: translateX(-100px);
    margin-left: auto;
    margin-right: auto;
    /* position: absolute; */
    padding-left: 10px;
    padding-right: 10px;
    background-color: white;
    font-family: "Ubuntu", sans-serif;
    font-style: bold;
    border-radius: 5px;}
    .container{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-between;
    align-items: center;
    }
    
    
    form#table{
    
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-around;
    align-items: center;
    
    
  }
  
  
  
  
.pic {
    display: flex;
    padding-bottom: 100px;
    flex-direction: column;
    align-items: center;
    align-content: space-around;
}
  
    .ll{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    flex-wrap: nowrap;
    max-width: fit-content;
    padding-right: 150px;

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
    font-family: "Ubuntu", sans-serif;
    margin-bottom: 20px;
    border-radius: 5px;
    background-color: white;
    padding: 20px;
    margin-top: 5vh;
    justify-content: center;
    vertical-align: middle;
    /*overflow: hidden;*/
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  }

  div#rcf {
    display: flex;
    min-width: fit-content;
    min-height: fit-content;
    float: right;
    transform: translateX(100px);
  }

  .lft {
    display: flex;
    flex-direction: column;
  }

  label {
    color: #d4af37;
    font-style: bold;
    font-size: 20px;
    padding:8px;

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
    font-family: "Ubuntu", sans-serif;
  }

  input#date::before,
  input#date::after {
    --scale: 0;
    --arrow-size: 10px;
    --tooltip-color: #333;

    position: absolute;
    /*top:0;*/
    left: 42.1%;
    /*overflow: visible;*/
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

  /* content: ;
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
    width: 70vw;
    max-width:1000px;
    max-height:600px;
    min-width:650px;
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
  .picture{
          min-width: 170px;
    min-height: 170px;
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
  table{
          transform: translateX(20px);
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
    flex-direction: row;
    max-width: max-content;
    padding-top: 20px;
    /* margin-right: 30px; */
    justify-content: space-around;
    align-items: center;
    flex-wrap: nowrap;
  }

  .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-content: center;
    flex-wrap: nowrap;
    align-items: center;
  }

  .top {
    transform: translateY(225px);
  }
div#lcfu{
    display: flex;
    flex-direction: column;
    max-width: max-content;
    padding-top: 20px;
    /* margin-right: 30px; */
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: nowrap;
}
  td {
    padding: 5px;
    border: 2px #212121;
  }
  .table{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    align-items: center;
    overflow: scroll;
    min-height:250px:
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
         <a href="https://mynotarydoc.com/zoom_login/dashboard/dash.php" id="l5">Home</a>
         <a href="https://mynotarydoc.com/zoom_login/dashboard/update.php">Update Profile</a>
         <a href="https://mynotarydoc.com/zoom_login/dashboard/profile.php">Profile</a>

        </div>        
          <div class="right" id="dash">
          <div class="txt_bx" id="1">
            <h1 id="dash-header" style="text-align:center;margin-bottom: 50px;">Zoom Link Library</h1>
              <div class="table"><br>
                <table>
                <tbody>
                <tr>
                <td>Sr </td>
                <td>Date</td>
                <td>Time</td>
                <td>Links</td>
                </tr>';

          

        while($roww=mysqli_fetch_assoc($resultgg))
        {

            $userrr = $roww["id"];
            $nameee = $roww["date"];
            $N_name = $roww["time"];
            $N_pub = $roww["link"];
        
    echo '
             <tr>
                <td>'.$userrr.'</td>
                <td>'.$nameee.'</td>
                <td>'.$N_name.'</td>
                <td>'.$N_pub.'</td>
            </tr>';
}

echo '
              </tbody>
              </table>
              </div>
            </div>
          </div>

</body>
<script>
alert("Please Note all the dates and time for the links are New York based !!!")
</script>
</html>';}
 else {
  echo "Error creating table: " . $conn->error;
}

}
else{
     header('location: ../register.php?error=please-Login');   
     exit();
}

?>