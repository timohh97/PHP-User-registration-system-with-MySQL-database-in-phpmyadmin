<?php

$passwordFromInput = $_POST["password"];

//master is the server password
if($passwordFromInput=="master")
{
    echo "Login successful!";
}
else {

  echo "Login not successful!";
}





?>
