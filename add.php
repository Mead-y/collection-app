<?php
require './functions.php';
$db = connectToDatabase();



if (isset($_POST['name'])) {
    $name = cleanedInput($_POST['name']);
    $status = cleanedInput($_POST['status']);
    $weight = cleanedInput($_POST['weight']);
    $threat = cleanedInput($_POST['threat']);
    $diet = cleanedInput($_POST['diet']);
    $distribution = cleanedInput($_POST['distribution']);
    $image = cleanedInput($_POST['image']);


    $query = $db->prepare("INSERT INTO `animal_stats` (`name`, `status`, `weight_kg`, `threat`, `diet`, `distribution`, `image`) VALUES (:name, :status, :weight,:threat,:diet,:distribution,:image)");
    
//     Once you've got all the data out
//     Use PDO param binding with a MySQL INSERT
    $query -> bindParam(':name', $name);
    $query -> bindParam(':status', $status);
    $query -> bindParam(':weight', $weight);
    $query -> bindParam(':threat', $threat);
    $query -> bindParam(':diet', $diet);
    $query -> bindParam(':distribution', $distribution);
    $query -> bindParam(':image', $image);
    $query->execute();
    header('Location: animals.php');

    }


if (isset($_POST['name'])) {
    $trimmedName = trim($name);
    $cleanedName = htmlspecialchars($trimmedName);
}

