<?php

function get_pets() {
    /**
     * Returns pets.json as an associative array
     */
    $petsJson = file_get_contents('./data/pets.json');

    return json_decode($petsJson, true);
}
