<?php


// Create PDO connection (inc set fetch mode)
$db = new PDO ('mysql:host=db; dbname=milo-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Write SQL query to retrieve all collection items
$query = $db->prepare("SELECT `name`, `age`, `instrument`, `band`, `technical-prowess`, `image` FROM `idols`;");
$query->execute();
$idols = $query->fetchAll();

// Loop over results to echo out stats for each item
function displayItems($idols) {
    foreach($idols as $idol) {
        echo $idol['name'] . ' ' . $idol['age'] . ' ' . $idol['instrument'] . ' ' . $idol['band']
        . ' ' . $idol['technical-prowess'] . ' ' . $idol['image'] . '<br>';
    }
}

displayItems($idols);
?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Milo's Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>

</html>