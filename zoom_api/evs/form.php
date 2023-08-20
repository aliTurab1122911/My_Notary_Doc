        <?php
        include('../headerr.php');
        ?>
<!DOCTYPE html>
<html>
    <head>
               <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myNotaryDoc</title>
   <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>
 
    </head>
<style>
html{
    width: 100vw;
    height: 100%;
}

form{
    width: 65%;
    margin-left: auto;
    margin-right: auto;
    margin-top:30px;
    position: center;
    padding-left:10px;
    padding-right:10px;
    background-color:white;
    font-family:'Ubuntu', sans-serif;
    font-style:bold;
    border-radius:10px;
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
    overflow: scroll;
}
label{
    color:#d4af37;
    font-style:bold;
    font-size: 20px;
    
}
.form_main{
    width: 80vw;
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translate(-50%,-24%);
    font-style:bold;
    font-size: 20px;
    background-color:#212121;
    padding-top:15px;
    margin-top:150px;
    border-radius:10px;
}
h1{
    font-size: 26px;
    font-style:bold;
    color: #d4af37;
    font-style: normal; 
     font-family:'Ubuntu', sans-serif;
}
</style>
<body>


<div class="form_main">
    <form name="contact_form" method="POST" action="/zoom_api/evs/evs_api.php" >
      <div class="div">
           <h1>Verification form for Notarization</h1><br>
      </div>
      <div class="div">
  <label>First Name *:</label>
     <input type="text" name="fname" id="fname" class="form-control" required>
      </div>
            <div class="div">
     <label>Middle Name:</label>
     <input type="text" name="mname" id="mname" class="form-control" placeholder="optional...">
      </div>
            <div class="div">
     <label>Last Name *:</label>
     <input type="text" name="lname" id="lname" class="form-control" required>
      </div>      
      <div class="div">
     <label>Generation:</label>
     <input type="text" name="gene" id="gene" class="form-control" placeholder="optional...">
      </div>
    <div class="div">

    <label>Social Security Number *:</label>
    <input type="int" name="ssn" id="ssn" class="form-control" required><br>
    <label>Street *:</label>
    <input type="text" name="street" id="street" class="form-control" required><br>
    <label>City *:</label>
    <input type="text" name="city" id="city" class="form-control" required title="Please do not use any speacial characters"><br>
    <label>State *:</label><br>
       <!--<input type="text" id="state" name="state" class="form-control" required placeholder="XY"><br>-->
    <select id="state" name="state" class="form-control" required placeholder="XY">
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
        <label>Zip Code *:</label>
    <input type="int" name="code" id="code" class="form-control" required placeholder="00000" title="please input a 5 or 9 digit zip code"><br>
    </div>
  <div class="div">  
    <label>Date Of Birth *:</label>
    <input type="date" id="dob" name="dob" class="form-control" required ><br>    
        <label>Driver's License Number:</label>
    <input type="text" id="dln" name="dln" class="form-control" placeholder="Enter if applicable..."><br>
        <label>Driver's License State:</label>
    <input type="text" id="dls" name="dls" class="form-control" placeholder="Enter if applicable..."><br>
    </div>
   <div class="div">
    <label>Phone Number:</label>
    <input type="int" id="phone" name="phone" class="form-control" placeholder="optional..."><br>
   
    </div>
     <input type="submit" class="btn btn-primary">
  </form>
</div>

</body>
<script>
    // alert('If field input ')
</script>
</html>





