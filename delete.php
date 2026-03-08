<?php
include "config.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM etudiants WHERE id=$id");

header("Location: index.php");
?>