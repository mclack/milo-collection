<?php

/**
 * Creates connection to collection database
 * @return PDO The Db connection
 */
function getDb() : PDO {
    $db = new PDO ('mysql:host=db; dbname=milo-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Takes the PDO and runs an SQL query against it
 *
 * @param PDO $db the database connection
 *
 * @return array The results from our db query
 */
function getIdols(PDO $db) : array {
    $query = $db->prepare("SELECT `name`, `age`, `instrument`, `band`, `technical-prowess`, `image` FROM `idols`;");
    $query->execute();
    $idols = $query->fetchAll();
    return $idols;
}


/**
 * Takes $idols array (created by getIdols()) and loops over the items,
    adding appropriate HTML tags to allow for convenient display on index.php
 * @param array $idols the associative array of idols
 * @return string returns each idol in a separate <div> with each stat being separated by <p>s
    apart from the idol image which is stored in an <img> tag
 */
function displayItems(array $idols) : string {
    if(!count($idols)) {
        return 'Input error. Array doesn\'t exist';
    }
        $result = '';
        foreach ($idols as $idol) {
            $result .= '<div>' . '<img src="images/' . $idol['image'] . '" />' .
                '<p>' . 'Name: ' . $idol['name'] . '</p>' .
                '<p>' . 'Age: ' . $idol['age'] . '</p>' .
                '<p>' . 'Instrument(s): ' . $idol['instrument'] . '</p>' .
                '<p>' . 'Most Notable Band: ' . $idol['band'] . '</p>' .
                '<p>' . 'Technical Prowess: ' . $idol['technical-prowess'] . '</p>' . '</div>';
        }
        return $result;
}

/**
 * Cleanses user input by converting special characters using filter_var()
 * @param array $postItems the $_POST superglobal that has been populated by user input
 * @return array the new array populated by cleansed user input
 */
function cleanseData(array $postItems) : array {
    $cleansedArr = [];
    foreach($postItems as $postItem) {
       $cleansedArr[] = filter_var($postItem, FILTER_SANITIZE_SPECIAL_CHARS);
    }
    return $cleansedArr;
}

function checkDuplicate(PDO $db, string $name) {
    $query = $db->prepare("SELECT `name` FROM `idols` WHERE `name` = :name;");
    $query->bindParam(':name', $name);
    $query->execute();
    return $query->fetch();
}

function dbInsertion(PDO $db, array $cleansedArr) {
    $query = $db->prepare("INSERT INTO `idols` (`name`, `age`, `instrument`, `band`, `technical-prowess`, `image`)
    VALUES (:name, :age, :instrument, :band, :prowess, :image);");
    $query->execute(['name' => $cleansedArr[0], 'age' => $cleansedArr[1], 'instrument' => $cleansedArr[2],
    'band' => $cleansedArr[3], 'prowess' => $cleansedArr[4], 'image' => $cleansedArr[5]]);
    }



?>