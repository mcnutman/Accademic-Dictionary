<? include('head.php'); ?>
<? include('menu.php'); ?>
<div id="content">
<?php

connect_to_db();

// follow statement orders results by number the balance of positive votes. 

$query="SELECT p.*, v.vote_value, SUM(v.vote_value) AS balance
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE p.original='".$head."'
		GROUP BY p.id
		ORDER BY balance DESC";
$result=mysql_query($query);
$thenumber = 1;

echo '<h2>Original Phrase</h2>';
echo '<p>'.stripslashes($head).'</p><br>';
echo '<a href="javascript:history.go(-1)">Back to Results</a>';
echo '<h2>In Other Words</h2>';
while($row = mysql_fetch_array($result)){


echo '<p>'.$thenumber.'. '.stripslashes(nl2br($row['inotherwords'])).' - ';
echo $pulse->voteHTML($row['id']);
echo '</p>';
echo '<p><b>Author</b> - '.stripslashes($row['author']).' - submitted on '.$row['date'].'</p><br>';
$thenumber++;  
}

$query2="select original, inotherwords from phrases where original='".$head."'";
$result2=mysql_query($query2);
$row2= mysql_fetch_array($result2);

// the following statement allows you to add more definitions

if(empty($row2['inotherwords'])){
	
echo '<p>No <i>In Other Words</i>? <a href="add.php?op=add&value='.$head.'">Click Here</a> to add some';
}

else {
	
	echo '<p>Do you think the <i>In Other Words</i> explanation is lacking conviction? <a href="add.php?op=add&value='.$head.'">Click Here</a> to add a better explanation'; }
mysql_close();

include('footer.php'); 
?> 
