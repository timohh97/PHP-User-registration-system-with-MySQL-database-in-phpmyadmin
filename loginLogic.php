<?php

$database = new mysqli("localhost","root","","besucher");

    $flag = false;

    $usernameFromInput = $_POST["username"];
    $passwordFromInput = $_POST["password"];


    $queryForUsernameCheck = "SELECT username FROM user";

    $usernameColumn = mysqli_query($database,$queryForUsernameCheck);

    $usernameArray = Array();

    while($result = $usernameColumn->fetch_assoc())
    {
       $usernameArray[] = $result['username'];
    }

    foreach ($usernameArray as $element) {

       if($element==$usernameFromInput)
       {
         $flag= true;
       }
    }


    if($flag){
    $queryForRow = "SELECT * FROM user WHERE username='$usernameFromInput'";
    $row = mysqli_query($database,$queryForRow);
    $rowArray = mysqli_fetch_array($row);

    if($rowArray[2]==$passwordFromInput)
    {
      echo "Login successful!";
    }
    else {
        echo "Wrong password!";
    }
}
else {
  echo "The username does not exist!";
}


?>
<br>
<a  href="login.php">Go back</a>
