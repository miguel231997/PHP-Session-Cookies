<?php

//start the session to access session data
session_start();

//clear the session data
session_unset();

//destroy the session
session_destroy();

//expire the cookie by setting its expiration time to the past
setcookie('username', '', time() - 3600);

//redirect back to the homepage
header('location: index.php');
exit;

?>

In this example, the index.php file displays a simple login form. When the user submits the form, their username is stored in a session variable and a cookie. The user is then redirected to the homepage, where their username is displayed in a welcome message. If the user clicks the "Logout" link, the session data and cookie are cleared, and they are redirected back to the login form.