<? include('head.php'); ?>
<? include('menu.php'); ?>
<div id="content">
<p>
<form enctype="multipart/form-data" action='add2.php?op=phrase added' method='post'>
<h2>Add Phrase</h2>
<p>
Subject:
<select name="subject">
<option>Art</option>
<option>Biology</option>
<option>English</option>
<option>Physics</option>
<option>Chemistry</option>
<option>Mathematics</option>
<option>History</option>
<option>Religion</option>
<option>Geography</option>
<option>Music</option>
<option>Philosophy</option>
<option>Psychology</option>
<option>Economics</option>
<option>Sociology</option>
<option>Technology</option>
<option>Electronics</option>
<option>Food</option>
<option>Law</option>
<option>Politics</option>
</select>
<p>

Phrase:  
<?php

/* 	if the phrase already exists include it in the text box */

$phrase = stripslashes($_GET['value']);
if($phrase == "null") { 

echo '<p><textarea name="original" cols="50" rows="4" width="200" /></textarea></p>';  }
else {
echo '<p><textarea  name="original" cols="50" rows="4" width="200" />'.stripslashes($phrase).'</textarea></p>';   }
?>
 
In Other Words: (Leave blank if you want someone else to simplify the phrase)<br>
<textarea name="inotherwords" cols="50" rows="4" width="200"></textarea>
<p>
  Author: (Only applies to the author of simplified phrase)<br>
  <input type="text" name="author"/>
  </p>
 <p>
 Tags: (The website's search engine uses these to find results so be accurate. Separate with commas)<br>
 <input type="text" name="tags">
  </p>
  <?
            require_once('recaptchalib.php');
          $publickey = "6Leat8ESAAAAAC6vgH6Z6S2GNDCvYv62zY7Yvr3x"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
?>

  <input type="submit" name="submit" value="Submit" />
</p>
</form>
</p>

<? include('footer.php'); ?> 