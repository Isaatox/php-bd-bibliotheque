<?php
include('connect.php');
$resultat = mysqli_query( $bdd, 'SELECT * FROM tbl_typeL;');

echo 'Il y a '. mysqli_num_rows($resultat) . ' entrée(s) dans la base de donnés <br>';

while($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['Id'] . ' ' .$donnees['libelle'].'</br>';
}

echo "<a href='ajouter.php'>Ajouter</a>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des types de livres</title>
</head>
<body>
    
</body>
</html>