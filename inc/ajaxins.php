<?php
require 'inc.php';


    $answer = $_POST['answer'];
    $building = $_POST['building'];
    $floor = $_POST['floor'];



    $results = new Form();
    $results->insert_data($answer, $building, $floor);
?>