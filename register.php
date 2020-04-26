<?php
session_start();

$database = new mysqli('localhost','root','','besucher') or die();

echo "Connection successful.";

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['pw']==$_POST['pw2'])
  {
    echo "passwords are the same!";

    $username = $mysqli->real_escape_string($_POST['username']);

    echo $username;
  }
}



?>
