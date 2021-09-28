<?php

require_once 'functions.php';

// Create PDO connection (inc set fetch mode)
$db = new PDO ('mysql:host=db; dbname=milo-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Write SQL query to retrieve all collection items
$query = $db->prepare("SELECT `name`, `age`, `instrument`, `band`, `technical-prowess`, `image` FROM `idols`;");
$query->execute();
$idols = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Milo's Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<?= displayItems($idols) ?>
</body>

<footer>
    <a href="http://localhost:1234/weekFive/milo-collection/form.php">Add to Database</a>
</footer>

</html>