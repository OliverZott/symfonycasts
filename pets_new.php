<?php require 'layout/header.html' ?>

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
                    <input type="text" name="bio" id="pet_bio" class="form-control">
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