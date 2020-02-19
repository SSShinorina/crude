<?php
include_once "index.html";
include_once "css/style.css";
include_once ("db.php");
$obj->setData($_POST)->store();
?>

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
        <label>Phone:
            <input type="text" maxlength="11" name="phone" placeholder="Enter Your Contact Number"></label><br>
        <label>Website:
            <input type="text" name="web" placeholder="http://"></label><br>
        <label>Date Of Birth:
            <input type="date" name="dob" placeholder="Must Enter Your Birth Date"></label><br>
        <label>Address:
            <input type="text" name="street" placeholder="Street Address"><br>
            <input type="text" name="address" placeholder="Address Line 2"><br>
            <input type="text" name="city" placeholder="City"><br>
            <input type="text" name="sate" placeholder="State/Provience/Region"><br>
            <input type="text" name="postal" placeholder="Postal/ZipCode"><br>
            <select name="country">
                <option>...Country...</option>
                <option>Bangladesh</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>Bhutan</option>
                <option>Sweden</option>
                <option>Canada</option>
            </select></label><br>
        <label>Gender:
            <input type="checkbox" name="female">
            Female
            <input type="checkbox" name="male">
            Male
        </label><br>
        <label>Bio:
            <textarea name="bio" cols="25" rows="2"></textarea>
        </label><br>
        <label>Division Of Interest:<br>
            <input type="checkbox" name="HR">HR Division<br>
            <input type="checkbox" name="IT">IT Division<br>
            <input type="checkbox" name="Marketing">Marketing Division<br>
            <input type="checkbox" name="Others">Others
        </label><br>
        <label>Expected Salary:
            $<input type="number" name="dollar" placeholder="Dollars"> .
            <input type="number" name="cent" placeholder="Cents">
        </label><br>
        <label>Latest Degree:
            <select name="degree">
                <option>---Select---</option>
                <option>M.Sc</option>
                <option>B.Sc</option>
            </select>
        </label><br>
        <label>Years Of Expeience:
            <input type="number" name="exprience" required="Please Mention">
        </label><br>
        <label>Name Of Current Designation:
            <input type="text" name="designation" placeholder="Lecturer" required="Should Fill This Option">
        </label><br>
        <label>Upload CV:</label>
        <input type="file" name="file">
        <br>
        <input type="submit" name="submit">

    </fieldset>
</form>
</body>


</html>
