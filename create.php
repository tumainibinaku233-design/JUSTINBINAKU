<?php
include "config.php";

if(isset($_POST['submit'])){

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

mysqli_query($conn,"INSERT INTO etudiants(nom,prenom,email)
VALUES('$nom','$prenom','$email')");

header("Location:index.php");

}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <h3>Ajouter un étudiant</h3>

    <form method="POST">

        <input type="text" name="nom" placeholder="Nom" class="form-control mb-2">

        <input type="text" name="prenom" placeholder="Prénom" class="form-control mb-2">

        <input type="email" name="email" placeholder="Email" class="form-control mb-2">

        <button type="submit" name="submit" class="btn btn-success">Ajouter</button>

    </form>

</div>