<?php

// always use require instead of include!
// require_once used for classes!
require 'lib/functions.php';
?>

<h3>Find a new Pet out of
    <?php
    echo count(get_pets());
    ?>
    pets.
</h3>
