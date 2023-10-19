<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css codes/page-styles.css">
    <title>Movie App - Login</title>
</head>
<body>
    <header>
        <form id="form">
            <input type="text" id="search" class="search" placeholder="Search">
        </form>
    </header>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login_process.php">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="login-links">
        <a href="registration_page.php">Register</a>
    </div>
</body>
</html>
