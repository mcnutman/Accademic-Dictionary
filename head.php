<?php

header('Access-Control: allow <http://otherwords.info>');

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
include("db_functions.php");
include("Pulse/Pulse.vote.class.php");
$pulse = new Pulse();
$pulse->setFormat("{up} like it, {down} don't");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo Pulse::css(); ?>
<?php echo Pulse::javascript(); ?>
<?php

$head = $_GET['op'];
$alphabet = $_GET['alphabet'];
$subject = $_GET['subject'];
$listtype = $_GET['listtype'];


if($head != 'add')  {

if($subject == "") {
	
	$subject = 'All';
}

if($alphabet == "") {
	
	$alphabet = 'All';
}

if($listtype == "") {
	
	$listtype = 'Most Popular';
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="" />
<meta name="keywords" content=""/>
<meta name="author" content="Dan Nuttall"/>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22989850-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<title>
In Other Words
</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
