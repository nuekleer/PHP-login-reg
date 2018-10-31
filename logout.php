<?php

session_start();
 
//dump all the data
$_SESSION = array();
 
// kill with fire
session_destroy();
 
// Redirect somewhere
header("location: add_location_rul");
exit;
?>
