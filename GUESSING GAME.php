<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guessing Game for TIYO NGOUENET SINDY KARMELLY</title>
</head>
<body>
  <h1>Guess the number<h1>
    <p>Guess a number between 1 and 100:</p>
  <form method="post">
    <input type="number" name="guess">
    <input type="submit" value="Guess">
</form>
<?php

if (!isset($_GET['guess']) || empty($_GET['guess'])) {
  echo "Missing guess parameter";
} else {
  $guess = $_GET['guess'];
  if (!is_numeric($guess)) {
    echo "Your guess is not a number";
  } elseif (strlen($guess) < 2) {
    echo "Your guess is too short";
  } elseif ($guess < 70) {
    echo "Your guess is too low";
  } elseif ($guess > 70) {
    echo "Your guess is too high";
  } else {
    echo "Congratulations - You are right";
  }
}
?>
</body>
</html>