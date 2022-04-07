<?php

/**
 * Connects to the database
 *
 * @return PDO
 */
function connectToDatabase(): PDO
{
    $db = new PDO('mysql:host=db; dbname=animalcollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 *  Retrieves all data from animal database
 *
 * @param $db
 * @return mixed
 */
function getAllAnimals($db)
{
    $query = $db->prepare("SELECT * FROM `animal_stats`;");
    $query->execute();
    $allAnimals = $query->fetchAll();
    return $allAnimals;
}

/**
 * Displays all data from the database
 *
 * @return mixed
 */
function displayAnimals(array $allAnimals) {

    if (empty($allAnimals)) {
        return "You have not collected any animals yet!";
    }

    $result = '';
    foreach ($allAnimals as $animal) {
        $result .= "<div class='animals'>";
        $result .= "<img src='{$animal['image']}' alt = '{$animal['name']}'>";
        $result .= "<h2> Name: {$animal['name']}";
        $result .= "<h2> Status: {$animal['status']}";
        $result .= "<h2> Weight: {$animal['weight_kg']} KG";
        $result .= "<h2> Threat: {$animal['threat']}";
        $result .= "<h2> Diet: {$animal['diet']}";
        $result .= "<h2> {$animal['distribution']}";
        $result .= "</div>";
    }
    return $result;
}

/**
 * eradicates whitespace and converts special characters to &gt
 *
 * @param $data
 * @return string
 */
function cleanedInput($data):string {
    $trimmedData = trim($data);
    $cleanedData = htmlspecialchars($trimmedData);
    return $cleanedData;
}