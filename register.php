<?php
session_start();

$database = new mysqli('localhost','root','','besucher') or die();

echo "Connection successful.";

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['password1']==$_POST['password2'])
  {
    echo "passwords are the same!";

    $username = $_POST['username'];
    $password = $_POST['password1'];
    $id = rand();


    $query = "INSERT INTO user (id,username,password) VALUES ('$id','$username','$password')";

    echo $database->query($query);


  }
  else {
    echo "Passwords are not equal!";
  }
}



?>
