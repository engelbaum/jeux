<?php
$user='root';
$passe='';
try {
    $bd=new PDO('mysql:host=localhost;dbname=jeux',$user,$passe);
    //echo'ok';
} catch (Exception $e) {
    print'ERROR!:'.$e->getMessage();
    die();
}