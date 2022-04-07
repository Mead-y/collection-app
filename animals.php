<?php
require './functions.php';
$db = connectToDatabase();
$allAnimals = getAllAnimals($db);
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>YWP Collection App</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
</head>
<body>

<header>
    <h1> Animal Collection</h1>
    <button><a href="Form.html">Click to add your own Animal</a></button>
</header>
<div class="paragraph">
    <h2> Browse your animal collection</h2>
</div>
<main>
    <?php

    echo displayAnimals($allAnimals);
    ?>


</main>
</body>
</html>

