<? include('head.php'); 


 include('menu.php'); ?>
<div id="content">

<?php 





connect_to_db();

// the following if statements determine what information to grab from database depending on menu selections the user has made. 

if($listtype == 'Most Popular') {

if(($subject == 'All') && ($alphabet == 'All')) { 

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		GROUP BY original
		ORDER BY total DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Popular</h2>';
		

}

elseif($alphabet == 'All') {

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE subject LIKE '".$subject."%' 
		GROUP BY original
		ORDER BY total DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Popular</h2>';
		
}

elseif($subject == 'All') {
	
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE'".$alphabet."%' 
		GROUP BY original
		ORDER BY total DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Popular</h2>';
		

}


else {
		
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE '".$alphabet."%' AND subject LIKE '".$subject."' 
		GROUP BY original
		ORDER BY total DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Popular</h2>';

}
}

if($listtype == 'Most Recent'){

if(($subject == 'All') && ($alphabet == 'All')) { 

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		GROUP BY original
		ORDER BY date DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Recent</h2>';


}

elseif($alphabet == 'All') {

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE subject LIKE '".$subject."%' 
		GROUP BY original
		ORDER BY date DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Recent</h2>';

}

elseif($subject == 'All') {
	
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE'".$alphabet."%' 
		GROUP BY original
		ORDER BY date DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Recent</h2>';


}


else {
		
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE '".$alphabet."%' AND subject LIKE '".$subject."' 
		GROUP BY original
		ORDER BY date DESC";
		echo '<h2>'.$subject.' - '.$alphabet.' - Most Recent</h2>';

}
}

if($listtype == 'Browse'){

if(($subject == 'All') && ($alphabet == 'All')) { 

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		GROUP BY original";
		echo '<h2>'.$subject.' - '.$alphabet.' - Browse</h2>';


}

elseif($alphabet == 'All') {

$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE subject LIKE '".$subject."%' 
		GROUP BY original";
		echo '<h2>'.$subject.' - '.$alphabet.' - Browse</h2>';

}

elseif($subject == 'All') {
	
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE'".$alphabet."%' 
		GROUP BY original";
		echo '<h2>'.$subject.' - '.$alphabet.' - Browse</h2>';
}


else {
		
$query="SELECT p.*, v.vote_value, COUNT(v.vote_value) AS total
		FROM phrases p
		LEFT JOIN pulse_votes v ON p.id = v.item_id
		WHERE original LIKE '".$alphabet."%' AND subject LIKE '".$subject."' 
		GROUP BY original";
		echo '<h2>'.$subject.' - '.$alphabet.' - Browse</h2>';

}
}




$thenumber = 1;

$result=mysql_query($query);
while($row = mysql_fetch_array($result)){
	
echo '<u><a href="define.php?op='.stripslashes($row['original']).'">'.$thenumber.'. '.stripslashes($row['original']).'</a></u>';
echo '<br><br>';
$thenumber++;  

}
mysql_close();
include('footer.php'); ?> 
