<?php
require 'vendor/autoload.php';
 $collection = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->dbname->coll;

?>