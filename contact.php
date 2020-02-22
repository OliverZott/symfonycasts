<?php

// always use require instead of include!
// require_once used for classes!

require 'lib/functions.php';
require 'layout/header.html'

?>

<h3>Find a new Pet out of
    <?php
    echo count(get_pets());
    ?>
    pets.
</h3>

<?php require 'layout/footer.html' ?>