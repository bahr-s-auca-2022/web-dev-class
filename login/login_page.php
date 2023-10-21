<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css codes/login_styles.css">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p style="color: red;">' . htmlspecialchars($_GET['msg']) . '</p>';
    }
    ?>
        <form action="login/login_process.php" method="post">
        <label for="username">Username (Email):</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
