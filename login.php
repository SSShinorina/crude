<?php
include_once"signin.php";
 
session_start();
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>This is about form</title>
</head>
<link type="text/css" rel="stylesheet" src="css/style.css">
<body style="background-color: cadetblue">
<form method="post" action="view.php">
    <fieldset>
        <legend>Job application for a Company<br>
            Wish to play a role in building the future?
        </legend>
        <label>First Name:
            <input type="text" name="fname" placeholder="Enter Your First Name Here" required></label><br>
        <label>Last Name:
            <input type="text" name="lname" placeholder="Enter Your Last Name Here" required></label><br>
        <label>Email:
            <input type="email" name="e-mail" placeholder="google@google.com" required="You should enter valid email"></label><br>

        <input type="submit" name="submit">

    </fieldset>
</form>
</body>


</html>
