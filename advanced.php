<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adv_style.css">
  <title>advanced ex</title>
</head>
<body>
  <?php 
$southpark = [
  "person1" => ["Stan", "Marsh", 8],
  "person2" => ["Kyle", "Broflovski", 8],
  "person3" => ["Eric", "Cartman", 8],
  "person4" => ["Kenny", "McCormick", 8]
];
  ?>

  <p>
    <?php
echo "{$southpark["person1"][0]}'s fullname is {$southpark["person1"][0]} {$southpark["person1"][1]} and he is {$southpark["person1"][2]} years old"
    ?>
  </p>

  <p>
    <?php
echo "{$southpark["person2"][0]}'s fullname is {$southpark["person2"][0]} {$southpark["person2"][1]} and he is {$southpark["person2"][2]} years old"
    ?>
  </p>

  <p>
    <?php
echo "{$southpark["person3"][0]}'s fullname is {$southpark["person3"][0]} {$southpark["person3"][1]} and he is {$southpark["person3"][2]} years old"
    ?>
  </p>

  <p>
    <?php
echo "{$southpark["person4"][0]}'s fullname is {$southpark["person4"][0]} {$southpark["person4"][1]} and he is {$southpark["person4"][2]} years old"
    ?>
  </p>
</body>
</html>