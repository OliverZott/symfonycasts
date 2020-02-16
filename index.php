<?php
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

foreach($dogWalkers as $walker) {
    echo '<h3>';
    echo $walker . '<br>';
    echo '<button>Schedule me</button>';
    echo '</h3>';
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


// Functions
function get_pets(){
    // JSON, Files and Boolean
    $petsJson = file_get_contents('./data/pets.json');
    // associate array instead of object
    // $petsArray = json_decode($petsJson, true);

    return json_decode($petsJson, true);
}

$petsArray = get_pets();

$messageVariable = ucwords('!message Variable');
$pupCount = count($petsArray);

$fileName = './data/output.txt';
file_put_contents($fileName, 'test test', FILE_APPEND );
file_put_contents($fileName, 'test2 test2', FILE_APPEND );

?>

<!DOCTYPE html>
<!--

source: https://symfonycasts.com/screencast/php-ep1/arrays2#play

bootstrap: https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp

-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupNMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupNMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>


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

        <footer>
            <p>&copy; AirPupNMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
