<?php
/*
// If the user is logged in, delete the session vars to log them out
session_start();
if (isset($_SESSION['tk_hash'])){

    // Delete the session cookie by setting its expiration to an hour ago (3600)
    if (isset($_COOKIE['tk_hash'])) {
		setcookie('tk_hash', '', time() - 3600);
    }

    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();

	// destroy the session 
	session_destroy();

}

if (!isset($_SESSION['tk_hash']) && !isset($_COOKIE['tk_hash'])){

	// Redirect to the home page
	$home_url = "./";
	header('Location: ' . $home_url);

}
*/
header('Location: ./');
?>