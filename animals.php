<?php
//Connection to database
$db = new PDO('mysql:host=db; dbname=animalcollection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT * FROM `animal_stats`;");
$query->execute();
$allAnimals = $query->fetchAll();
//echo '<pre>';
//var_dump($allAnimals);
//echo '</pre>'


//    echo '<pre>';
//var_dump($animals['name']);
//echo '</pre>';

?>


    <!DOCTYPE html>
    <html lang="en-GB">
    <head>
        <title>YWP Collection App</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <header>
        <h1> Animal Collection</h1>
    </header>
    <div class="paragraph">
        <h2> Browse your animal collection</h2>
    </div>
    <main>
<?php
if (!$allAnimals) {
    echo "You have not collected any animals yet!";
}
foreach ($allAnimals as $label => $animal) {
    echo "<div class='animals'>";
    ?>
    <img src= <?php echo $animal['image']; ?>
                 alt = "Animal Image">
            <h2 > Name: <?php echo $animal['name']; ?> </h2>
            <h2 > Status: <?php echo $animal['status']; ?> </h2>
            <h2 > Weight: <?php echo $animal['weight_kg']; ?> KG </h2>
            <h2 > Threat: <?php echo $animal['threat']; ?> </h2>
            <h2 > Diet: <?php echo $animal['diet']; ?> </h2>
            <h2 >  <?php echo $animal['distribution']; ?> </h2>
        </div >
<?php } ?>



    </main>
</body>
</html>

