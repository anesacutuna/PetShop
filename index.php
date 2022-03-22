<?php
require 'vendor/autoload.php';

Flight::route('/', function() {
    echo "First commit";
});

Flight::start();
?>
