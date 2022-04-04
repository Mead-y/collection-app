<?php
$db = new PDO('mysql:host=db; dbname=animalcollection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db -> prepare("SELECT * FROM `animal_stats`;");
$query -> execute();
$allAnimals = $query->fetchAll();

echo '<pre>';
var_dump($allAnimals);
echo '</pre>';
