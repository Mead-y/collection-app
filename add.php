<?php
require './functions.php';
$db = connectToDatabase();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $weight = $_POST['weight'];
    $threat = $_POST['threat'];
    $diet = $_POST['diet'];
    $distribution = $_POST['distribution'];
    $image = $_POST['image'];


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
    

