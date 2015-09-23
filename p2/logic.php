<?php
/*
Limited array of 4 rappers
The keys of the array should be ice, dre, ren, yella
*/
$rapper = Array(
	'ice' => 'compton',
	'dre' => 'nwa',
	'ren'   => 'crenshaw',
	'yella'   => 'dooto'
);
$rap1 = array_rand($rapper);
$rapper[$rap1] = 'eazy';
$rap2 = array_rand($rapper);
$rapper[$rap2] = 'snoop';
$rap3 = array_rand($rapper);
$rapper[$rap3] = 'biggie';
$rap4 = array_rand($rapper);
$rapper[$rap4] = 'doc';
?>
