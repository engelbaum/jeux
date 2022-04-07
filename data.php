<?php
require_once('connexion.php');
//cho'<pre>';
//print_r($_POST);
/*[nom] => double dragon
    [possesseur] => max
    [console] => sony
    [prix] => 200
    [nbre_joueurs_max] => 5
    [commentaires] => top
    [date_vente] => 04/04/2022
)*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST)) {
        $nom = $_POST['nom'];
        $possesseur = $_POST['possesseur'];
        $console = $_POST['console'];
        $prix = $_POST['prix'];
        $nombr_joueurs = $_POST['nbre_joueurs_max'];
        $commentaire = $_POST['commentaires'];
        $date_vente = $_POST['date_vente'];
    } else {
        echo 'error';
    }
    //$request=$bd->query("insert into jeux_video (nom,possesseur,console,prix,nbre_joueurs_max,commentaires,date_vente)
    //values('$nom','$possesseur','$console','$prix','$nombr_joueurs','$commentaire','$date_vente')");
    /*$request=$bd->prepare('insert into jeux_video (nom,possesseur,console,prix,nbre_joueurs_max,commentaires,date_vente)values(:fatima,:jawad,:rokaya,:razan,:elias,:mobarek,:khadija)');

$request->execute([
'fatima'=>$nom,
'jawad'=>$possesseur,
'rokaya'=>$console,
'razan'=>$prix,
'elias'=>$nombr_joueurs,
'mobarek'=>$commentaire,
'khadija'=>$date_vente,

]
 );*/

    $request = $bd->prepare('insert into jeux_video (nom,possesseur,console,prix,nbre_joueurs_max,commentaires,date_vente)
     values(:fatima,:jawad,:rokaya,:razan,:elias,:mobarek,:khadija)');
    $request->bindParam(':fatima', $nom);
    $request->bindParam(':jawad', $possesseur);
    $request->bindParam(':rokaya', $console);
    $request->bindParam(':razan', $prix);
    $request->bindParam(':elias', $nombr_joueurs);
    $request->bindParam(':mobarek', $commentaire);
    $request->bindParam(':khadija', $date_vente);
    $request->execute();
}

$request = $bd->prepare('select *from jeux_video');
$request->execute();
$donnees = $request->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jeux.css">

    <title>Document</title>
</head>

<body>
    <table id="customers">
        <tr class="tr">
            <td id="customers">Id</td>
            <td>nom</td>
            <td>Possesseur</td>
            <td>Console</td>
            <td>Prix</td>
            <td>NbreJeux</td>
            <td>Commentaire</td>
            <td>DateVente</td>
            <td>Action:1</td>
            <td>Action:2</td>
        </tr>
        <?php foreach ($donnees as $id => $ctegory) : ?>
            <tr>
                <td><?= $ctegory['ID'] ?></td>
                <td><?= $ctegory['nom'] ?></td>
                <td><?= $ctegory['possesseur'] ?></td>
                <td><?= $ctegory['console'] ?></td>
                <td><?= $ctegory['prix'] ?></td>
                <td><?= $ctegory['nbre_joueurs_max'] ?></td>
                <td><?= $ctegory['commentaires'] ?></td>
                <td><?= $ctegory['date_vente'] ?></td>
                <td><a href="data.php?id=<?= $ctegory['ID'] ?>">Supprimer</a></td>
                <td><a href="annuaireJeux.php?id<?= $ctegory['ID'] ?>">modifier</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>
<?php
$id = $_GET['id'] ?? null;
if ($id == null) {
    header('location:annuaire_jeux.php');
}
//$_REQUEST=$bd->query('delete from jeux_video where ID='.$id);
//header('location:jeux.php');

/*$request = $bd->prepare('delete from jeux_video where ID=:ilham');

$request->bindParam(':ilham', $id);
$request->execute();*/


$request = $bd->prepare('delete from jeux_video where ID=:ilham');
$request->execute(
    [

        'ilham' => $id,
    ]
);
