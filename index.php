<?php
require 'vendor/autoload.php';

Flight::route('/', function() {
    echo "Second commit";
});

Flight::start();
?>
