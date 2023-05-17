<!DOCTYPE html>
<html>
<head>
	<title>Guessing Game for TIYO SINDY</title>
</head>
<body>
	<h1>Guess the Number</h1>
	<p>Guess a number between 1 and 100:</p>
	<form method="post">
		<input type="number" name="guess">
		<input type="submit" value="Guess">
	</form>
	<?php
		$number = 70; // The number to be guessed
		if (isset($_POST['guess'])) {
			$guess = intval($_POST['guess']);
			if ($guess == $number) {
				echo "<p>You guessed it! The number was $number.</p>";
			} elseif ($guess < $number) {
				echo "<p>Sorry, your guess was too low. Try again.</p>";
			} else {
				echo "<p>Sorry, your guess was too high. Try again.</p>";
			}
		}
	?>
</body>
</html>
