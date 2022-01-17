<<?php
if (isset($_POST['submit'])) {
  $mailto = "adityapartapsingh92@gmail.com"; //my email address
  // getting user data
  $userName = $_POST['name'];
  $userEmail = $_POST['email'];
  $subject = $_POST['subject'];
  $subject2 = "confirmation: Message was submitted successfuly."
  // $message = $_POST['message'];
  // email i recieve
  $message = " User Name: ".$userName."\n"
  ."User Email: ".$userEmail."\n"
  ."User Message: "."\n".$_POST['message'];
  // message gor user confirmation
  $message2 = "Dear".$userName."\n"
  ."Thank you for contacting us. We will get back to you shortly."."\n\n"
  ."You submitted the following message:"."\n". $_POST['message']."\n\n"
  ."Regard,"."\n"."-Aditya Partap Singh";

  //email headers
  $headers = "From: ".$userEmail; //user email i will receive
  $headers2 ="From:".$mailto; //this will recieve user

  //php mailer function
  $result1 = mail($mailto,$subject,$message,$headers);// sent to my Address
  $result2 = mail($userEmail,$subject2,$message2,$headers2); // sent to user

  //checking if mail is sent succssfuly
  if($result1 && $result2){
    $success = " Your Message was sent successfully!";
  }
  else{
    $failed = "Sorry! Message was not sent . Try again later.";
  }
}
 ?>
