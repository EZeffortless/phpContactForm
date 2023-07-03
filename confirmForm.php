<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['userquery'];
    $text = $_POST['usertext'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Confirm Form</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    </head>

    <body>
        <h1>Contact Form</h1>
        <h2>Confirm this is what you want to send?</h2>
        <form action="submitForm.php" method="POST">
            <p>Name:</p> <?=$name?>
            <br>
            <p>Email: </p> <?=$email?>
            <br>
            <p>Issue: </p> <?=$type?>
            <br>
            <p>Your message: <?=$text?>
            <br>

            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="type" value="<?=$type?>">
            <input type="hidden" name="text" value="<?=$text?>">
            <button type="submit">Submit</button>

        </form>
    </body>
</html>