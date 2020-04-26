<?php
session_start();

$database = new mysqli('localhost','root','','besucher') or die();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['password1']==$_POST['password2'])
  {

    $newusername = $_POST['username'];

    $queryForIdCheck = "SELECT username FROM user";

    $column= $database->query($queryForIdCheck);

    $array = Array();

    while($result = $column->fetch_assoc())
    {
       $array[] = $result['username'];
    }

    foreach($array as $element)
    {
      if($element==$newusername)
      {
        echo "This username already exists!";
         die();
      }
    }


    $password = $_POST['password1'];
    $id = rand();

    $queryForInsert = "INSERT INTO user (id,username,password) VALUES ('$id','$newusername','$password')";

    $database->query($queryForInsert);

    echo "Created account successfully!";


  }
  else {
    echo "Passwords are not equal!";
  }
}

?>
<a  href="index.php">Go back</a>
