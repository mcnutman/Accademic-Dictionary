<?php

ini_set("sendmail_from", "dan@thenuttalls.co.uk");

$to = 'dan@thenuttalls.co.uk';

$report = $_POST['report'];

$subject = $report.' report';

$phrase = $_GET['op'];

$message = $phrase.' has been reported for being: -'.$report;

$headers = 'From: InOtherWords';

  $send_contact=mail($to,$subject,$message,$headers);

  
  if($send_contact){
echo "Thank you for your enquiry. We will be in contact with you as soon as possible";
}
else {
echo "ERROR";
}
