<?php
include_once "index.html";
include_once "css/style.css";
include_once ("db.php");
$data=show();

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

        <?php
        foreach($data as $item){?>
            <?php echo $item['id']?>"><?php echo $item['fname']?>
            <?php echo $item['lname']?><?php echo $item['email']?>
        <?php }  ?>
    </fieldset>
</form>
</body>


</html>
