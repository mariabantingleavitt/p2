
<?php
/*
Create an array with the four passwords
The keys of the array should be 1st, 2nd, 3rd, and 4th
Default them all to anyword.
*/

$pages = array("01-02", "03-04", "05-06", "07-08", "09-10", "11-12", "13-14",
"15-16", "17-18", "19-20", "21-22", "23-24", "25-26", "27-28", "29-30");

foreach ($pages as $page) {
	$url = "http://www.paulnoll.com/Books/Clear-English/words-$page-hundred.html";
	$output = file_get_contents($url);
	if(preg_match_all('#([\w]+)\b#i', $output, $matches)) {
    foreach($matches[1] as $key => $word) {
//        echo $word."\n";
    }
}
	//echo $output;
//	echo $url;
}

$pw = Array(
	'1st'   => $url,
	'2nd'   => $url,
	'3rd'   => $url,
	'4th'   => $url
);
$randomword1 = array_rand($pw);
$pw[$randomword1] = "http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html";
$randomword2 = array_rand($pw);
$pw[$randomword2] = "http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html";
$randomword3 = array_rand($pw);
$pw[$randomword3] = "http://www.paulnoll.com/Books/Clear-English/words-05-06-hundred.html";
$randomword4 = array_rand($pw);
$pw[$randomword4] = "http://www.paulnoll.com/Books/Clear-English/words-07-08-hundred.html";
$randomword5 = array_rand($pw);
$pw[$randomword5] = "http://www.paulnoll.com/Books/Clear-English/words-09-10-hundred.html";

?>
