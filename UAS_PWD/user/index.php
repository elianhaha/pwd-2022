<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:../login.php");
    exit;
}
require "../function.php";
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | <?php echo ucfirst($username) ?></title>
</head>

<body>
    <?php include('navbar.php') ?>

    <h1>WELCOME <?php echo ucfirst($username) ?></h1>
</body>

</html>
