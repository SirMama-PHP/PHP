<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



if($_SERVER['REQUEST_METHOD']=='POST'){

  if (empty($_POST['name'])) {
    $name= 'Name is required';}

  else {
    echo "Your name is : $name";
  }

}


 ?>
