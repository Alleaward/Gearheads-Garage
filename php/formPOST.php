<?php

if ($_POST['submit']) {

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone'];
  $carInfo = $_POST['carInfo'];
  $carYear = $_POST['carYear'];
  $description = $_POST['description'];

  $from = $email;
  $to = 'Gearheadsgarageau@gmail.com';
  $subject = 'Website Inquiry from '.$name.".";
  $body = "From: $name\n Email: $email\n Phone: $phone\n Make/Model: $carInfo\n Year: $carYear\n Inquiry: $description";

  if(strlen($name) > 12){
    exit();
  }
  if($phone == null){
    exit();
  }
  if($carInfo == null){
    exit();
  }
  if($carYear == null){
    exit();
  }
  if($description == null){
    exit();
  }
  mail($to,$subject,$body,$email);
}
?>
