<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="create_session.php"> Create</a>
<a href="destroy_session.php"> Destroy</a>
<a href="read_session.php">Read</a>

</body>
</html>