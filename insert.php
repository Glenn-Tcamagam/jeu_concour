<?php
include "connexionBD.php";

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["telephone"]))
{
$nom= $_GET["nom"];
$prenom= $_GET["prenom"];
$telephone= $_GET["telephone"];

$req=mysqli_query($link, "insert into user(nom, prenom, telephone) values('$nom', '$prenom', '$telephone')");


if($req){
    echo'Vous avez été enrégistré, <a href="jeu.html">cliquez ici pour continuer</a>';
}else
{
echo"erreur dinsertion";

}




}

?>