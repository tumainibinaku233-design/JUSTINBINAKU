<?php
include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM etudiants WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

mysqli_query($conn,"UPDATE etudiants SET nom='$nom', prenom='$prenom', email='$email' WHERE id=$id");

header("Location: index.php");

}
?>

<!DOCTYPE html>
<html>
    <head>

    <title>Modifier étudiant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body class="container mt-5">

        <h2>Modifier étudiant</h2>

        <form method="POST">

            <input type="text" name="nom" class="form-control mb-2" value="<?php echo $row['nom']; ?>" required>

            <input type="text" name="prenom" class="form-control mb-2" value="<?php echo $row['prenom']; ?>" required>

            <input type="email" name="email" class="form-control mb-2" value="<?php echo $row['email']; ?>" required>

            <button type="submit" name="update" class="btn btn-success">Modifier</button>

            </form>

    </body>
</html>