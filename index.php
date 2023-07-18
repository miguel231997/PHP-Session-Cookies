<?php

//start a new session or resume the existing one
session_start();

//check if the user has submitted the form
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    //set a session variable to store the username
    $_SESSION['username'] = $username;

    //set a cookie to remember the username for 1 hour
    setcookie('username', $username, time() + 3600);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions & Cookies Example</title>
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <p><a href="logout.php">Logout</a></p>
    <?php else: ?>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</body>
</html>