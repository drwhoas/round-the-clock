<?php
session_start();
echo "Welcome ".$_SESSION["Name"];
error_reporting (E_ALL ^ E_NOTICE); 
session_destroy();
?>