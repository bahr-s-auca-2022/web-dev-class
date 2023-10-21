<?php
session_start();

require_once 'config.php';

function filterInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = filterInput($_POST['username']);
$password = filterInput($_POST['password']);

if (strlen($username) == 0 || strlen($password) == 0) {
    header("Location: login_page.php?msg=Please enter username and password");
} else {
    $result = $conn->query("SELECT user_id, role FROM users WHERE username='$username' AND password='$password'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];

        header("Location: main_page.php");
    } else {
        header("Location: login_page.php?msg=Incorrect username or password");
    }
}
?>
