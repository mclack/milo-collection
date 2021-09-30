<?php

require_once 'functions.php';

$userMessage = null;
// Check that user has submitted data. If 'name' has been set so must the others as they are required.
if(isset($_POST['name'])) {
// Cleansing user input from form and storing cleansed data in $cleansedArr
    $cleansedArr = cleanseData($_POST);
    $db = getDb();
    $isDuplicate = checkDuplicate($db, $cleansedArr[0]);
    if ($isDuplicate) {
        $userMessage = 'Insertion error. Idol already exists in database.';
    } else {
        dbInsertion($db, $cleansedArr);
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Add to Milo's Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body class="form">
    <form method="post" action="form.php" id="injection">
        <label form="injection" for="name">Name</label>
        <input type="text" id="name" name="name" maxlength="255" placeholder="Name of Idol" required />
        <br>
        <label form="injection" for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Age of Idol" min="10" max="99" required />
        <br>
        <label form="injection" for="instrument">Instrument</label>
        <input type="text" id="instrument" name="instrument" maxlength="255" placeholder="Idol's Instrument(s)" required />
        <br>
        <label form="injection" for="band">Band</label>
        <input type="text" id="band" name="band" maxlength="255" placeholder="Idol's Most Notable Band" required />
        <br>
        <label form="injection" for="technical-prowess">Technical Prowess</label>
        <input type="number" id="technical-prowess" name="technical-prowess"
               placeholder="Technical Prowess out of 10" min="1" max="10" required />
        <br>
        <label form="injection" for="image">Image</label>
        <input type="text" id="image" name="image" maxlength="255" placeholder="Image File Name" />
        <br>
        <input class="submit" type="submit" value="Submit" />
        <br>
    </form>
    <?php
        $result = $userMessage ?? '';
        echo $result;
    ?>
</body>

<footer>
    <a href="index.php">Return to Main Page</a>
</footer>

</html>
