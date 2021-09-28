<?php
if(isset($_POST['name'])) {
    header('Location: index.php');
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
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="Name of Idol" required />
        <input type="number" name="age" placeholder="Age of Idol" min="10" max="99" required />
        <input type="text" name="band" placeholder="Idol's Most Notable Band" required />
        <input type="text" name="instrument" placeholder="Idol's Instrument(s)" required />
        <input type="number" name="technical-prowess"
               placeholder="Technical Prowess out of 10" min="1" max="10" required />
        <input type="text" name="image" placeholder="Image File Name" />
        <input class="submit" type="submit" value="Submit" />
    </form>
</body>

<footer>
    <a href="http://localhost:1234/weekFive/milo-collection/index.php">Return to Main Page</a>
</footer>

</html>