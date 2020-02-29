<?php

function get_pets() {
    /**
     * Returns pets.json as an associative array
     */
    $petsJson = file_get_contents('./data/pets.json');
    return json_decode($petsJson, true);
}

function save_pets($petsToSave) {
    /**
     * Function to save pet-array to a json file!
     *
     * @parameter: array (containing pet)
     */
    $pets_json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    $filename = './data/pets.json';
    file_put_contents($filename, $pets_json);  //var_dump($name, $breed, $weight, $bio);
}
