<?php

$database = new mysqli('localhost','root','','besucher') or die();

  if($_POST['password1']==$_POST['password2'])
  {

    $flag = true;

    $newusername = $_POST['username'];

    $queryForIdCheck = "SELECT username FROM user";

    $column= $database->query($queryForIdCheck);

    $usernameArray = Array();

    while($result = $column->fetch_assoc())
    {
       $usernameArray[] = $result['username'];
    }

    foreach($usernameArray as $element)
    {
      if($element==$newusername)
      {
        echo "This username already exists!";
        $flag=false;
      }
    }

    if($flag)
    {
    $password = $_POST['password1'];
    $id = rand();

    $queryForInsert = "INSERT INTO user (id,username,password) VALUES ('$id','$newusername','$password')";

    $database->query($queryForInsert);

    echo "Created account successfully!";
    }


  }
  else {
    echo "Passwords are not equal!";
  }

?>
<br>
<a  href="index.php">Go back</a>
