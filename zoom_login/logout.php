<?php


session_start();

session_unset();
session_destroy();
header("location: https://mynotarydoc.com/zoom_login/register.php?error=loggedout");
exit();
?>