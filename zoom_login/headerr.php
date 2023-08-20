<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
    z-index:55;
  overflow: hidden;
  background-color: #212121;
  padding: 20px 10px;
  position: absolute;
  top: 0px;
  display: flex;
  flex-direction: row;
  width: 100vw;
  justify-content: space-between;
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
  margin-left:5px;
  margin-right:5px;
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


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
}
</style>
</head>
<body>

<div class="header">
  <a href="https://mynotarydoc.com/index.php#contact" class="logo">MyNotaryDoc</a>
  <div class="header-right">
    <a class="active" href="https://mynotarydoc.com/index.php#contact">Home</a>
    <a href="https://mynotarydoc.com/index.php#contact">Contact</a>
    <a href="https://mynotarydoc.com/index.php#faq">FAQs</a>
  </div>
</div>
</body>
</html>