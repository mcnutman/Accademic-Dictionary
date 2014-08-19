<div id="wholepage">
<div id="header">
<div id="logo"><a href="http://www.otherwords.info/index.php"><img src="images/inotherwords.png" /><img src="images/logo2.png" /></a></div><?php include('searchform.php'); ?></div>
<div id="left">
<?php


$subjectmenu = array(
    'Art' => 'browse.php?alphabet='.$alphabet.'&subject=Art&listtype='.$listtype.'',
	'Biology' => 'browse.php?alphabet='.$alphabet.'&subject=Biology&listtype='.$listtype.'',
    'Chemistry' => 'browse.php?alphabet='.$alphabet.'&subject=Chemistry&listtype='.$listtype.'',
    'Economics' => 'browse.php?alphabet='.$alphabet.'&subject=Economics&listtype='.$listtype.'',
    'Electronics' => 'browse.php?alphabet='.$alphabet.'&subject=Electronics&listtype='.$listtype.'',
    'English' => 'browse.php?alphabet='.$alphabet.'&subject=English&listtype='.$listtype.'',
	'Food' => 'browse.php?alphabet='.$alphabet.'&subject=Food&listtype='.$listtype.'',
    'Geography' => 'browse.php?alphabet='.$alphabet.'&subject=Geography&listtype='.$listtype.'',
    'History' => 'browse.php?alphabet='.$alphabet.'&subject=History&listtype='.$listtype.'',
    'Law' => 'browse.php?alphabet='.$alphabet.'&subject=Law&listtype='.$listtype.'',
    'Music' => 'browse.php?alphabet='.$alphabet.'&subject=Music&listtype='.$listtype.'',
    'Philosophy' => 'browse.php?alphabet='.$alphabet.'&subject=Philosophy&listtype='.$listtype.'',
    'Politics' => 'browse.php?alphabet='.$alphabet.'&subject=Politics&listtype='.$listtype.'',
    'Psychology' => 'browse.php?alphabet='.$alphabet.'&subject=Psychology&listtype='.$listtype.'',
    'Religion' => 'browse.php?alphabet='.$alphabet.'&subject=Religion&listtype='.$listtype.'',
    'Sociology' => 'browse.php?alphabet='.$alphabet.'&subject=Sociology&listtype='.$listtype.'',
    'Technology' => 'browse.php?alphabet='.$alphabet.'&subject=Technology&listtype='.$listtype.'',

    
);

if($subject == 'All'){

echo '<div id="spacer2"><br></div>';
echo '<div class="idName4" id="menu4">';
echo '<a href="browse.php?alphabet='.$alphabet.'&subject=All&listtype='.$listtype.'">All</a>';
echo '</div>';
echo '<div id="spacer2"><br></div>';

}

else {

echo '<div id="spacer2"><br></div>';
echo '<div class="idName3" id="menu3">';
echo '<a href="browse.php?alphabet='.$alphabet.'&subject=All&listtype='.$listtype.'">All</a>';
echo '</div>';
echo '<div id="spacer2"><br></div>';

}

foreach ($subjectmenu as $title => $url) {
    if ($title == $subject) {
		echo '<div class="idName4" id="menu4">';
        echo '<a href="'.$url.'">'.$title.'</a>';
		echo '</div>';
    } else {
		echo '<div class="idName3" id="menu3">';
        echo '<a href="'.$url.'">'.$title.'</a>';
		echo '</div>';

    }
}


?>
</div>
<div id="right">
<?php
$listtypemenu = array(
    'Browse' => 'browse.php?alphabet='.$alphabet.'&subject='.$subject.'&listtype=Browse',
    'Most Popular' => 'browse.php?alphabet='.$alphabet.'&subject='.$subject.'&listtype=Most Popular',
	'Most Recent' => 'browse.php?alphabet='.$alphabet.'&subject='.$subject.'&listtype=Most Recent',
      
);
echo '<div id="spacer3"><br></div>';


foreach ($listtypemenu as $title2 => $url2) {
    if ($title2 == $listtype) {
		echo '<div class="idName6" id="menu6">';
        echo '<a href="'.$url2.'">'.$title2.'</a>';
		echo '</div>';
    } else {
		echo '<div class="idName5" id="menu5">';
        echo '<a href="'.$url2.'">'.$title2.'</a>';
		echo '</div>';

    }
}

if($head == 'add') {
echo '<div id="spacer3"><br></div>';
echo '<div class="idName6" id="menu6">';
echo '<a href="add.php?op=add&value=null">Add Phrase</a>';
echo '</div>';
}
else {
	echo '<div id="spacer3"><br></div>';
echo '<div class="idName5" id="menu5">';
echo '<a href="add.php?op=add&value=null">Add Phrase</a>';
echo '</div>';
}




?>

</div>
<div id="middle">
<?php
$alphabetmenu = array(
    'A' => 'browse.php?alphabet=A&subject='.$subject.'&listtype='.$listtype.'',
    'B' => 'browse.php?alphabet=B&subject='.$subject.'&listtype='.$listtype.'',
    'C' => 'browse.php?alphabet=C&subject='.$subject.'&listtype='.$listtype.'',
    'D' => 'browse.php?alphabet=D&subject='.$subject.'&listtype='.$listtype.'',
    'E' => 'browse.php?alphabet=E&subject='.$subject.'&listtype='.$listtype.'',
    'F' => 'browse.php?alphabet=F&subject='.$subject.'&listtype='.$listtype.'',
    'G' => 'browse.php?alphabet=G&subject='.$subject.'&listtype='.$listtype.'',
    'H' => 'browse.php?alphabet=H&subject='.$subject.'&listtype='.$listtype.'',
    'I' => 'browse.php?alphabet=I&subject='.$subject.'&listtype='.$listtype.'',
    'J' => 'browse.php?alphabet=J&subject='.$subject.'&listtype='.$listtype.'',
    'K' => 'browse.php?alphabet=K&subject='.$subject.'&listtype='.$listtype.'',
    'L' => 'browse.php?alphabet=L&subject='.$subject.'&listtype='.$listtype.'',
    'M' => 'browse.php?alphabet=M&subject='.$subject.'&listtype='.$listtype.'',
    'N' => 'browse.php?alphabet=N&subject='.$subject.'&listtype='.$listtype.'',
    'O' => 'browse.php?alphabet=O&subject='.$subject.'&listtype='.$listtype.'',
    'P' => 'browse.php?alphabet=P&subject='.$subject.'&listtype='.$listtype.'',
    'Q' => 'browse.php?alphabet=Q&subject='.$subject.'&listtype='.$listtype.'',
    'R' => 'browse.php?alphabet=R&subject='.$subject.'&listtype='.$listtype.'',
    'S' => 'browse.php?alphabet=S&subject='.$subject.'&listtype='.$listtype.'',
    'T' => 'browse.php?alphabet=T&subject='.$subject.'&listtype='.$listtype.'',
    'U' => 'browse.php?alphabet=U&subject='.$subject.'&listtype='.$listtype.'',
    'V' => 'browse.php?alphabet=V&subject='.$subject.'&listtype='.$listtype.'',
    'W' => 'browse.php?alphabet=W&subject='.$subject.'&listtype='.$listtype.'',
    'X' => 'browse.php?alphabet=X&subject='.$subject.'&listtype='.$listtype.'',
    'Y' => 'browse.php?alphabet=Y&subject='.$subject.'&listtype='.$listtype.'',
    'Z' => 'browse.php?alphabet=Z&subject='.$subject.'&listtype='.$listtype.'',
	);

if($alphabet == 'All'){

echo '<div class="idName2" id="menu2">';
echo '<a href="browse.php?alphabet=All&subject='.$subject.'&listtype='.$listtype.'">All</a>';
echo '</div>';
echo '<div id="spacer"><br></div>';

}

else {

echo '<div class="idName" id="menu">';
echo '<a href="browse.php?alphabet=All&subject='.$subject.'&listtype='.$listtype.'">All</a>';
echo '</div>';
echo '<div id="spacer"><br></div>';

}

foreach ($alphabetmenu as $title3 => $url3) {
    if ($title3 == $alphabet) {
		echo '<div class="idName2" id="menu2">';
        echo '<a href="'.$url3.'">'.$title3.'</a>';
		echo '</div>';
    } else {
		echo '<div class="idName" id="menu">';
        echo '<a href="'.$url3.'">'.$title3.'</a>';
		echo '</div>';

    }
}

?>

