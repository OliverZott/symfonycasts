<?php

function get_pets()
{
    $petsJson = file_get_contents('./data/pets.json');

    return json_decode($petsJson, true);
}
