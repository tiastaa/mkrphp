<?php

include 'DBConnect.php';

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$subjectsRepository = new Repository($dbh);

if (!isset($_SESSION)) {
    session_start();
}



$actionToDo = $_POST['action'];



echo Display::displaySubjects($subjectsRepository->readSubjects())
?>




<style>


    table, th, td {
        border: 1px solid;
        text-align: center;
    }

    th {
        width: 100px;
    }

    td {
        height: 50px;
    }
</style>

