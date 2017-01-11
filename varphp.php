<?php

include("connection.php");



$query ="SELECT email FROM users WHERE id= '".$_SESSION["id"]."' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$email=$row['email'];


$query ="SELECT name FROM users WHERE id= '".$_SESSION["id"]."' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$name=$row['name'];


$query ="SELECT lastname FROM users WHERE id= '".$_SESSION["id"]."' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$lastname=$row['lastname'];

$query ="SELECT address FROM users WHERE id= '".$_SESSION["id"]."' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$address=$row['address'];

?>

