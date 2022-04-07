<?php
//require_once('connect.php');
//$id=$_GET['ID'] ?? NULL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data.php" method="POST">
<label for="">Nom:</label><br>
<input type="text" name="nom" value="" placeholder="" id=""><br>
<label for="">Possessur:</label><br>
<input type="text" name="possesseur" value="" placeholder="" id=""><br>
<label for="">Console:</label><br>
<input type="text" name="console" value="" placeholder="" id=""><br>
<label for="">Prix:</label><br>
<input type="text" name="prix" value="" placeholder="" id=""><br>
<label for="">Nombre de jeux:</label><br>
<input type="text" name="nbre_joueurs_max" value="" placeholder="" id=""><br>
<label for="">Commentaire:</label><br>
<input type="text" name="commentaires" value="" placeholder="" id=""><br>
<label for="">Date de vente:</label><br>
<input type="text" name="date_vente" value="" placeholder="" id=""><br>
<button type="submit" value="Ajouter">Ajouter</button>





    </form>
</body>
</html>