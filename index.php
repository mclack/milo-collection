<?php

require_once 'functions.php';

// Create PDO connection (inc set fetch mode)
$db = getDb();

//and write SQL query to retrieve all collection items
$idols = getIdols($db);

$items = displayItems($idols);

// Cleansing user input from form and storing cleansed data in $cleansedArr
if(isset($_POST['name'])) {
    $cleansedArr = (cleanseData($_POST));
// Creating semantic variables to match corresponding index in $cleansedArr - makes accessing data easier
    $name = 0;
    $age = 1;
    $instrument = 2;
    $band = 3;
    $prowess = 4;
    $image = 5;
}

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
<?= $items ?>
</body>

<footer>
    <a href="form.php">Add to Database</a>
</footer>

</html>