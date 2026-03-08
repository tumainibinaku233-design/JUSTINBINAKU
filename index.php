<?php
include "config.php";

if(isset($_GET['search'])){

$search = $_GET['search'];

$result = mysqli_query($conn,"SELECT * FROM etudiants 
WHERE nom LIKE '%$search%' 
OR prenom LIKE '%$search%' 
OR email LIKE '%$search%'");

}else{

$result = mysqli_query($conn,"SELECT * FROM etudiants");

}
?>

<!DOCTYPE html>
<html>

    <head>

        <title>TP.php</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        </head>

        <body class="container mt-5">

            <h2>Inscription étudiant</h2>

            <a href="create.php" class="btn btn-primary mb-3">Ajouter étudiant</a>
            <form method="GET" class="mb-3">

                <input type="text" name="search" class="form-control" placeholder="Rechercher un étudiant...">

                <button type="submit" class="btn btn-success mt-2">Rechercher</button>

            </form>

            <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>

            <?php

            while($row = mysqli_fetch_assoc($result)){

            ?>

            <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['email']; ?></td>

            <td>

                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">update</a>

               <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet étudiant ?')">delete</a>

            </td>
            
            <?php
            }
            ?>

            </table>

        </body>

</html>