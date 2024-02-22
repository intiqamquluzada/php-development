<?php
if($_POST) {
    echo strlen($_POST['phone']);
        if(strlen($_POST['phone']) < 5){
            echo "Your phone number is wrong";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="manifest.json">
    <title>PHP lessons</title>
</head>
<body>

<form action="" method="post" >
<fieldset>
    <label for="username">
        <input type="text" id="username" placeholder="Enter your name" name="username" />
    </label>
    <label for="age">
        <input type="number" id="age" name="age" placeholder="Your age">
    </label>
    <label for="school">
        <input type="text" id="school" name="school" placeholder="School">
    </label>
    <label for="phone" >
        <input type="tel" id="phone" name="phone" placeholder="Your phone">
    </label>
</fieldset>
    <button type="submit" name="form1">Send ur name</button>


</form>
</body>
</html>

