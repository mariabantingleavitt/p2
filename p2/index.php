<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>xkcd Password Generator</title>
	<?php require 'logic.php'; ?>
</head>
<body>

	<h1>xkcd Password Generator</h1>


	<!-- Print the url array -->
	<?php foreach($pw as $key => $value) { ?>
		<?php echo $key; ?> is a <?php echo $value; ?><br>
	<?php } ?>

	<p>
		<a href='http://localhost:8888/p2/'>Generate Another</a>
	</p>

	<p class='details'>
		<a href='http://xkcd.com/936/'>xkcd password strength</a><br>

		<a href='http://xkcd.com/936/'>
			<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
		</a>
		<br>
	</p>

</body>
</html>
