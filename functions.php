<?php

function displayItems(array $idols) : string {
    if($idols === []) {
        return 'Input error. Array doesn\'t exist';
    } else {
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
}

?>