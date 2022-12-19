<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
   echo '<meta http-equiv="refresh" content="0;url=homepage.html">';
}
else
echo '<meta http-equiv="refresh" content="0;url=homepage.html">';
?>
