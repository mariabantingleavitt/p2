<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<?php require 'logic.php'; ?>
</head>
<body>


	<!-- Print the rappers array -->

	<div class='container'>
	<h1>xkcd Password Generator</h1>
	This is a simple password generator for Project 2.<br>
	The words are easy to remember especially if you're an NWA fan.<br>

	<p class='password'>
		<font face="verdana" color="red"><?php foreach($rapper as $key => $value) { ?>
			<?php echo $key; ?> - <?php echo $value; ?>
		<?php } ?></font>
	</p>

	<form>
		<p class='options'>

			<label for='number_of_words'># of Words</label>
			<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 8)
			<br>

			<input type='checkbox' name='add_number' id='add_number' >
			<label for='add_number'>Add a number</label>
			<br>
			<input type='checkbox' name='add_symbol' id='add_symbol' >
			<label for='add_symbol'>Add a symbol</label>
		</p>

		<p>Dissatisfied with the password?
		<input type='submit' class='btn btn-default' value='Rap It Again'> to get a new one.</p>

	</form>

	<p class='details'>
		<a href='http://xkcd.com/936/'>xkcd password strength</a><br>

		<a href='http://xkcd.com/936/'>
			<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
		</a>
		<br>
	</p>

</div>

<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

</body>
</html>
