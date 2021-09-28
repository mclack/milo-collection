<?php
?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Add to Milo's Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="Name of Idol" required />
        <input type="text" name="age" placeholder="Age of Idol" required />
        <input type="text" name="band" placeholder="Idol's Most Notable Band" required />
        <input type="text" name="instrument" placeholder="Idol's Instrument(s)" required />
        <input type="text" name="technical-prowess" placeholder="Technical Prowess out of 10" required />
        <input type="text" name="image" placeholder="Image File Name" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>
