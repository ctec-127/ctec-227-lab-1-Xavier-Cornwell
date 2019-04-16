<?php 
session_start();

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
<?php 
echo  '<p>' . 'View Count:' . $_SESSION["views"] . '</p>';

echo '<p>' . 'Browser info: ' . $_SESSION["browser"]. '</p>' ;

echo '<p>' . 'Your role is: ' . $_SESSION["role"] . '</p>';
    
?>

<a href="create_session.php"> Create</a>
<a href="destroy_session.php"> Destroy</a>
<a href="destroy_all_session.php">Destroy All</a>

</body>
</html>