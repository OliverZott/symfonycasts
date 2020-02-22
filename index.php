<?php

require 'lib/functions.php';


// Arrays
$pet1 = array(
    'name'=> 'Pet1',
    'breed' => 'Bichon',
    'age' => '1 year',
    'weight' => 1,
    'bio' => 'Eating & sleeping',
    'filename' => 'pet1.png'
);
$pet2 = [
    'name'=> 'Pet2',
    'breed' => 'Pug',
    //'age' => '2 year',
    'weight' => 2,
    'bio' => 'Eating & sleeping',
    'filename' => 'pet2.png'
];
$pet3 = [
    'name'=> 'Pet3',
    'breed' => 'Bengal',
    'age' => '3 year',
    'weight' => 3,
    'bio' => 'Eating & sleeping',
    'filename' => 'pet3.png'
];


// creating arrays
$pets = [$pet1, $pet2, $pet3];
$pets2 = [$pet1, $pet3];

// Arrays - exercise
$walker1 = 'Kitty';
$walker2 = 'Tiger';
$walker3 = 'Jay';
$dogWalkers = [$walker1, $walker2, $walker3];


// foreach example !
function for_each_example($var_array) {
    foreach($var_array as $walker) {
        echo '<h3>';
        echo $walker . '<br>';
        echo '<button>Schedule me</button>';
        echo '</h3>';
    }
}


// Associative Arrays
$pancake = [
    'name'=> 'Pancake',
    'age' => '1 year',
    'weight' => 9,
    'bio' => 'Eating & sleeping',
    'filename' => 'pancake.png'
];
$pancake['breed'] ='Bulldog';


// add item to array
$newPuppy = [
    'name'=> 'PnewPuppy',
    'breed' => 'Shark',
    'age' => '10 year',
    'weight' => 10,
    'bio' => 'Eating & sleeping',
    'filename' => 'pet3.png'
];

$pets[] = $pancake;
$pets = array_reverse($pets);

// Arrays of Arrays
// use .die() to suppress rest of code
/*
var_dump($pets[1]);
var_dump($pets[1]['breed']).die();
*/


$petsArray = get_pets();

$messageVariable = ucwords('!message Variable');
$pupCount = count($petsArray);

$fileName = './data/output.txt';
file_put_contents($fileName, 'test test', FILE_APPEND );
file_put_contents($fileName, 'test2 test2', FILE_APPEND );

?>

<?php require 'layout/header.html' ?>


    <div class="jumbotron">
        <div class="container">

            <h1><?php echo strtoupper(strtolower($messageVariable));
                echo strtolower(" !"); ?></h1>

            <p>There are <?php echo $pupCount?> puppies.</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- close php to write inside html instead php -->

            <?php foreach ($petsArray as $cutePet) { ?>
            <div class="col-lg-3 pet-list-item">
                <h2><?php echo $cutePet['name']; ?></h2>
                <img src="./images/<?php echo $cutePet['filename'] ?>" class="img-rounded" />

                <blockquote class="pet-details">
                    <span class="label label-info">
                        <?php
                        echo $cutePet['breed'];
                        ?>
                    </span>
                    <?php
                    if (!array_key_exists('age', $cutePet) || $cutePet['age'] == '') {
                        echo 'Unknown';
                    } elseif ('hidden' == $cutePet['age']) {   // Yoda Conditions (Symfony / WordPress)
                        echo '(Contact owner for age) ';
                    } else {
                        echo $cutePet['age'];
                    }
                    ?>

                    <?php echo $cutePet['weight']; ?> lbs
                </blockquote>

                <p>
                    <?php echo $cutePet['bio'] ?>
                </p>
            </div>
            <?php } ?>
        </div>

        <div class="row">

            <!-- using php without closing -> echo needed (inconvenient) -->

            <?php
            foreach($pets as $pet){
                echo '<div class="col-lg-2">';
                echo '<h2>';
                echo $pet['name'];
                echo '</h2>';
                echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>';
                echo '</div>';
            }
            ?>
        </div>

        <hr>

<?php require 'layout/footer.html' ?>