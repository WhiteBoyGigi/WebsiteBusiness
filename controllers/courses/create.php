<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::run(Database::class);

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!Validator::validateString($_POST["name"])) {
        $errors["name"] = "Name is not valid";
    }
    if(empty($errors)) {
        $db->query('INSERT INTO Courses(Name) VALUES(:Name)', ['Name' => $_POST["name"]]);
    }

}


load_view('courses/create.view.php', [
'heading' => 'Add a Course',
    'errors' => $errors
]);
