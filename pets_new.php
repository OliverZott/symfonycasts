
<?php
require 'layout/header.html';
require 'lib/functions.php';

// POST is a super variable -> always available
// var_dump($_POST);
// var_dump($_SERVER);

$user_agent = $_SERVER['HTTP_USER_AGENT'];
// var_dump($user_agent);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "'POST' http request. <br>";
    if (isset($_POST['name'])) {
        $name = $_POST["name"];
    } else {
        $name = '';
        var_dump().die;   // code can never be reached as long as form exists!?!?!?!?!
    }
    if (isset($_POST['breed'])) {
        $breed = $_POST["breed"];
    } else {
        $breed = '';
    }
    if (isset($_POST['weight'])) {
        $weight = $_POST["weight"];
    } else {
        $weight = '';
    }
    if (isset($_POST['bio'])) {
        $bio = $_POST["bio"];
    } else {
        $bio = 'empty bio';
        var_dump($bio);
    }

    /**
     * Course 02 - Chapter 04:  Adding puppy to json file, when POST!
     *
     * 1) get existing jason file as array
     * 2) create new puppy (assoc array)
     * 3) add new pet to pets array
     * 4) encode array to json file format
     *
     */

    $pets = get_pets();
    //var_dump($pets);

    // $age and $filename not yet defined
    $newPet = array(
        'name' => $name,
        'breed' => $breed,
        'weight' => $weight,
        'bio' => $bio,
        'age' => '',
        'filename' => '',
    );

    $pets[] = $newPet;

    $pets_json = json_encode($pets, JSON_PRETTY_PRINT);
    $filename = './data/pets.json';
    file_put_contents($filename, $pets_json);  //var_dump($name, $breed, $weight, $bio);

    // Redirect
    header('Location: /symfonycasts/index.php');
    die;


} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo "'GET' http request! <br>";
}

?>


<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add your Pet! Squirrel</h1>

            <!-- Add a form in html linked to php file -->
            <form action="pets_new.php" method="POST">
                <div class="form-group">
                    <!-- Classes are from bootstrap to make it prettier -->
                    <label for="pet_name" class="control-label">Pet Name</label>
                    <input type="text" name="name" id="pet_name" class="form-control">
                </div>
                <div class="form-group">
                    <!-- Classes are from bootstrap to make it prettier -->
                    <label for="pet_breed" class="control-label">Pet Breed</label>
                    <input type="text" name="breed" id="pet_breed" class="form-control">
                </div>
                <div class="form-group">
                    <!-- Classes are from bootstrap to make it prettier -->
                    <label for="pet_weight" class="control-label">Pet Weight</label>
                    <input type="text" name="weight" id="pet_weight" class="form-control">
                </div>
                <div class="form-group">
                    <!-- Classes are from bootstrap to make it prettier -->
                    <label for="pet_bio" class="control-label">Pet Bio</label>
                    <textarea type="text" name="bio" id="pet_bio" class="form-control">
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart">
                        Add
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>

<?php require 'layout/footer.html' ?>