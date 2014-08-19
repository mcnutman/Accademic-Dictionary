<? include('head.php'); ?>
<? include('menu.php'); ?>
<div id="content">

<?php
$q = $_POST['q'];
  

connect_to_db();

$query="SELECT DISTINCT original FROM phrases WHERE original LIKE \"%$q%\"";
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 
$thenumber = 1;
echo "<h2>Search Results</h2>";
while($row = mysql_fetch_array($result)){
echo $thenumber.'. <u><a href="define.php?op='.$row['original'].'">'.$row['original'].'</a></u><br>';
	$thenumber++;
	}

mysql_close();

 include('footer.php'); ?> 
