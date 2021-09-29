<?php


function getDb() {
    $db = new PDO ('mysql:host=db; dbname=milo-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getIdols($db) {
    $query = $db->prepare("SELECT `name`, `age`, `instrument`, `band`, `technical-prowess`, `image` FROM `idols`;");
    $query->execute();
    $idols = $query->fetchAll();
    return $idols;
}

// Takes the array of $idols (created by getIdols()) as an argument and loops over the items,
// adding appropriate HTML tags to allow for convenient display on index.php
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
        // returns each idol in a separate <div> with each stat being separated by <p>s
        // apart from the idol image which is stored in an <img> tag
        return $result;
}

?>