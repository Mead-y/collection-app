<?php
require './functions.php';
$db = connectToDatabase();



if (isset($_POST['name'])) {
    $name = cleanedInput($_POST['name']);
    if (strlen($name) > 30) {
        header('Location: animals.php?error=Invalid name');
        exit();
    }
    $status = cleanedInput($_POST['status']);
    if (strlen($status) > 30) {
        header('Location: animals.php?error=Invalid status');
        exit();
    }
    $weight = cleanedInput($_POST['weight']);
    if ($weight < 0 || $weight > 10000) {
        header('Location: animals.php?error=Invalid weight');
        exit();
    }

    $threat = cleanedInput($_POST['threat']);
    if (strlen($threat) > 40) {
        header('Location: animals.php?error=Invalid threat');
        exit();
    }

    $diet = cleanedInput($_POST['diet']);
    if (strlen($diet) > 30) {
        header('Location: animals.php?error=Invalid diet');
        exit();
        }

    $distribution = cleanedInput($_POST['distribution']);
    if (strlen($distribution) > 50) {
        header('Location: animals.php?error=Invalid origin');
        exit();
    }
    $image = cleanedInput($_POST['image']);
    if (strlen($image) > 500) {
        header('Location: animals.php?error=Invalid image');
        exit();
                }


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




