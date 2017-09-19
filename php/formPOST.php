<?php

if ($_POST['submit']) {

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone'];
  $carInfo = $_POST['carInfo'];
  $carYear = $_POST['carYear'];
  $description = $_POST['description'];

  $from = $email;
  $to = 'Allea_ward@hotmail.com'; // PUT IN ROBS EMAIL AND CHANGE THE EMAIL IN THE INI
  $subject = 'Website Inquiry from '.$name.".";
  $body = "From: $name\n Email: $email\n Phone: $phone\n Make/Model: $carInfo\n Year: $carYear\n Inquiry: $description";

  mail($to,$subject,$body,$email);

  //
  // if(mail($to, $subject, $body, $email)){
  //     echo '<p>Your message has been sent!</p>';
  // } else {
  //     echo '<p>Something went wrong, go back and try again!</p>';
  // }
}
?>
