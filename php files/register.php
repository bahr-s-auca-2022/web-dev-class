<?php
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$birth_day = filter_input(INPUT_POST, 'birth_day');

if (empty($fname) || empty($lname) || empty($email) || empty($birth_day)) {
    header("Location: register.html?msg=Please fill in all required fields");
} else {
    header("Location: lab 3/lab 2.html");
}
?>
