<?php
if (get_magic_quotes_gpc()) {
$original=stripslashes($_POST['original']);
$inotherwords=stripslashes($_POST['inotherwords']);
$author=stripslashes($_POST['author']);
$tags=stripslashes($_POST['tags']);
$subject=stripslashes($_POST['subject']);
}


if($original=="" || $tags==""){
	die("You need to fill in an original phrase or add tags");
}

if($author == "") {
	$author = "Anonymous"; 
}
 
  require_once('recaptchalib.php');
  $privatekey = "6Leat8ESAAAAAIxv6q6KUuOUkIXqkAMrmL4u5vjl";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
   
   include('db_functions.php');
connect_to_db();
$query="insert into phrases (original, inotherwords, author, tags, subject) values ('".mysql_real_escape_string($original)."','".mysql_real_escape_string($inotherwords)."','".mysql_real_escape_string($author)."','".mysql_real_escape_string($tags)."','".mysql_real_escape_string($subject)."')";
$result=mysql_query($query);

if(mysql_affected_rows()==1){
Header("Location:define.php?op=".$original."");
}
else{
	die("there was a problem");
}
   
   
  }

mysql_close();
include('footer.php'); ?> 