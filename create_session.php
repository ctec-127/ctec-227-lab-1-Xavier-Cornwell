<?php session_start() ;



if(!isset($_SESSION["views"])){
    $_SESSION["views"] = 0;
}
if(!isset($_SESSION["browser"])){
    $_SESSION["browser"] = $_SERVER['HTTP_USER_AGENT'];
}
if(!isset($_SESSION["role"])){
    $_SESSION["role"] = 'admin';
}
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
$_SESSION["views"]=  $_SESSION["views"] +1;

echo '<p>' . 'Browser info: ' . $_SESSION["browser"]. '</p>' ;

echo '<p>' . 'Your role is: ' . $_SESSION["role"] . '</p>';
    
?>

<a href="read_session.php"> Read</a>
<a href="destroy_session.php"> Destroy</a>
<a href="destroy_all_session.php">Destroy All</a>

</body>
</html>