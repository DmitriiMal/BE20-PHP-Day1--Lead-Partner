<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
  # Exercise 1
  echo '<h1>Dmitrii</h1>';

  # Exercise 2
  $firstName = "Dmitrii";
  $lastName = "Malyshkin";
  $birthYear = 1989;
  $age = date("Y") - $birthYear;

  echo "Hello, my name is $firstName $lastName and I am $age years old";

  echo "</br>";
  # Exercise 3
  $player_array = ["Mark", "John", "Georg", "Lisa"];
  echo "The third player in the team is $player_array[2]"
  ?>
</body>
</html>